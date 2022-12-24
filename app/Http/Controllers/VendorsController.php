<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendors;
use App\Models\Country;
use App\Models\Images;
use Auth;


class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $user_id = Auth::user()->id;

        $vendor = Vendors::orderBy('vendor_name')->get();
        
        return view('vendors.index', [
            'vendors'=>$vendor
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

        $vendor = Vendors::orderBy('vendor_name')->get();
        return view('vendors/admin.index', [
            'vendors'=>$vendor
            
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

        $c = Country::orderBy('name')->get();
        
        return view('vendors/admin.create',[
            'countries'=> $c
        ]);
        
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
            'vendor_name' => 'required',
            'description' => 'required',
            'country' => 'required',
            'state' => 'required',
            'streetAddress' => 'required',
        ]);*/
        $workingHours ="";
        if ($request->workingFrom && $request->workingTo)
            $workingHours = $request->workingFrom.$request->workingTo;                

        $vendor=new Vendors;
        $vendor->vendor_name = $request->vendor_name;
        $vendor->business_type = $request->btype;
        $vendor->profession = $request->profession;
        $vendor->zipcode = $request->zipcode;
        $vendor->certification = $request->certification;
        $vendor->description = $request->description;
        $vendor->country = $request->country;
        $vendor->state = $request->state;
        $vendor->streetAddress = $request->streetAddress;
        $vendor->email = $request->email;
        $vendor->phone = $request->phone;
        $vendor->website = $request->website;
        $vendor->rating = $request->rating;
        $vendor->workingDays = $request->workingDays;
        $vendor->workingHours = $workingHours;
        
        if($request->hasfile('vendor_logo')){
            $file= $request->file('vendor_logo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $file-> move(public_path('images/vendors'), $filename);
            
            $vendor->logo = $filename;
            
             
        }else
        //add default avatar
        $vendor->logo = "avatar.png";

        $vendor->save();
        
       //other image upload
        if($request->hasfile('vendor_images')){
            $files= $request->file('vendor_images');
            foreach($files as $file){
                $img= new Images;
                $filename = date('YmdHi').$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $file-> move(public_path('images/vendors'), $filename);            
                $img->path= $filename;

                $vendor->images()->save($img);  
               
            }
        }
      
        return redirect('vendors/admin/create')->with('success','vendors has been added');
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
        $vendor = Vendors::find($id); 
         return view('vendors.show')->with('vendor', $vendor);
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

        $countries = Country::orderBy('name')->get();
        $vendor = Vendors::find($id);
        
        return view('vendors/admin.edit',[
            'vendor'=>$vendor,
            'countries' =>$countries,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  \App\Models\Vendors  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_id = Auth::user()->id;

        $vendor = Vendors::find($id);
        /*$request->validate([
            'vendor_name' => 'required',
            'description' => 'required',
            'country' => 'required',
            'state' => 'required',
            'streetAddress' => 'required',
            
        ]);*/
        $workingHours ="";
        if ($request->fromHour && $request->toHour)
            $workingHours = $request->fromHour." ".$request->fromAP." - ".$request->toHour." ".$request->toAP;
        
        $vendor->vendor_name = $request->vendor_name;
        $vendor->description = $request->description;
        $vendor->country = $request->country;
        $vendor->state = $request->state;
        $vendor->streetAddress = $request->streetAddress;
        $vendor->email =  $request->email;
        $vendor->phone =  $request->phone;
        $vendor->website =  $request->website;
        $vendor->workingHours =  $workingHours;
        $vendor->update();
 
         return redirect('vendors/admin')
             ->with('success', 'vendors updated successfully');
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

        $vendor=Vendors::find($id);
        $vendor->delete();

        return redirect('vendors/admin')
            ->with('success', 'vendors deleted successfully');
    }
}
