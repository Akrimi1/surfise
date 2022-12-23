<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurants;
use App\Models\ImagesResto;
use App\Models\VideosResto;
use Auth;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $user_id = Auth::user()->id;

        $restaurant = Restaurants::orderBy('name')->get();
        
        return view('restaurants.index', [
            'restaurants'=>$restaurant
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexadmin()
    { 
        $user_id = Auth::user()->id;

        $restaurant = Restaurants::orderBy('name')->get();
        return view('restaurants/admin.index', [
            'restaurants'=>$restaurant
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::user()->id;

        return view('restaurants/admin.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        /*$request->validate([
            'restaurant_name' => 'required',
            'description' => 'required',
            'country' => 'required',
            'state' => 'required',
            'streetAddress' => 'required',
        ]);*/

        $workingHours ="";
        if ($request->fromHour && $request->toHour)
            $workingHours = $request->fromHour." ".$request->fromAP." - ".$request->toHour." ".$request->toAP;
        
        $restaurant=new Restaurants;
        $restaurant->name = $request->name;
        $restaurant->website =  $request->website;
        $restaurant->workingHours =  $workingHours;
        
        if($request->hasfile('restaurant_logo')){
            $file= $request->file('restaurant_logo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $file-> move(public_path('images/restaurants'), $filename);
            
            $restaurant->photo = $filename;     
        }else
        //add default avatar
        $restaurant->photo = "resto.png";
        
        /*if($request->hasfile('restaurant_logo')){
            $file = $request->file('restaurant_logo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $file-> move(public_path('images/Logorestaurants'), $filename);
            $restaurant->logo = $filename;
        }*/
        $restaurant->save();

        if($request->hasfile('restaurant_image')){
            $files= $request->file('restaurant_image');
            foreach($files as $file){
                $img= new ImagesResto;
                $filename = date('YmdHi').$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $file-> move(public_path('images/restaurants'), $filename);            
                $img->path= $filename;

                $restaurant->images()->save($img);  
               
            }
        }
        if($request->hasfile('restaurant_video')){
            $files = $request->file('restaurant_video');
            //dd($file);
            foreach($files as $file){
                $vid= new VideosResto;
                $filename = date('YmdHi').$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $file-> move(public_path('videos/restaurants'), $filename);               
                $vid->path= $filename;

                $restaurant->videos()->save($vid);  
               
            }
        } 

        
        return redirect('restaurants/admin/create')->with('success','restaurants has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // $user_id = Auth::user()->id;
        $restaurant = Restaurants::find($id); 
         return view('restaurants.show')->with('restaurant', $restaurant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = Auth::user()->id;

        $restaurant = Restaurants::find($id);
        $img = ImagesResto::find($id);
        
       /* return view('restaurants/admin.edit',[
            'restaurant'=>$restaurant,
            ]
        );*/
        return view('restaurants/admin.edit')->with('restaurant', $restaurant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  \App\Models\Restaurants  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_id = Auth::user()->id;

        $restaurant = Restaurants::find($id);
        /*$request->validate([
            'restaurant_name' => 'required',
            'description' => 'required',
            'country' => 'required',
            'state' => 'required',
            'streetAddress' => 'required',
            
        ]);*/
        $workingHours ="";
        if ($request->fromHour && $request->toHour)
            $workingHours = $request->fromHour." ".$request->fromAP." - ".$request->toHour." ".$request->toAP;
        
            $restaurant->name = $request->name;
            $restaurant->website =  $request->website;
            $restaurant->workingHours =  $workingHours;
        $restaurant->update();
 
         return redirect('restaurants/admin')
             ->with('success', 'restaurants updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_id = Auth::user()->id;

        $restaurant=Restaurants::find($id);
        $restaurant->delete();

        return redirect('restaurants/admin')
            ->with('success', 'restaurants deleted successfully');
    }
}
