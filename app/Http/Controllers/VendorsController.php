<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendors;
use App\Models\Country;
use App\Models\Images;
use App\Models\Categories;
use App\Models\ProductType;
use App\Models\Subcategories;
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

        $vendor = Vendors::orderBy('business_name')->get();
        return view('vendors/admin.index', [
            'vendors'=>$vendor
            
        ]);
    }
    public function showadmin($id, Request $request)
    {
        $vendor = Vendors::find($id);
        $equipments = $vendor->equipments()->get();        
       
        return view('vendors/admin.show')
            ->with('vendor', $vendor)
            ->with('equipments', $equipments);
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
        $categories = Categories::orderBy('category')->get();
        $business_types=ProductType::orderby('product_type')->get();
        
        
        return view('vendors/admin.create',[
            'countries'=> $c,
            'business_types' => $business_types,
            'categories' => $categories
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
        $vendor->vendor_type = $request->vendor_type;
        $vendor->business_name = $request->business_name;
        $vendor->address = $request->address;
        $vendor->country = $request->country;
        $vendor->website = $request->website;
        $vendor->zipcode = $request->zipcode;
        $vendor->like = $request->like;
        $vendor->dislike = $request->dislike;
        $vendor->state = $request->state;
        $vendor->phone = $request->phone;
        $vendor->description = $request->description;
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
      
        return redirect('vendors/admin/create')->with('success','Profile has been added');
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
        $business_type =  ProductType::orderby('product_type')->get();
        $categories = Categories::orderby('category')->get();
        
        return view('vendors/admin.edit',[
            'vendor'=>$vendor,
            'countries' =>$countries,
            'business_types' => $business_type,
            'categories' => $categories
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
        
        $vendor->vendor_type = $request->vendor_type;
        $vendor->business_name = $request->business_name;
        $vendor->address = $request->address;
        $vendor->country = $request->country;
        $vendor->website = $request->website;
        $vendor->zipcode =  $request->zipcode;
        $vendor->state =  $request->state;
        $vendor->phone =  $request->phone;
        $vendor->description =  $description;
        $vendor->workingDays =  $workingDays;
        $vendor->workingHours =  $workingHours;
        $vendor->logo =  $logo;
        $vendor->update();
 
         return redirect('vendors/admin')
             ->with('success', 'Profile updated successfully');
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
            ->with('success', 'Profile has been deleted successfully');
    }
    public function categoryByBusinessType(Request $request)
    {
        $type = $request->type;
        $categories = Categories::where('type', $type)->orderBy('category')->get();
        
        return $categories;
    }
    public function SubCategoryByCategory(Request $request)
    {
        $id = $request->id;
        $category = Categories::findorfail($id);
        $subcategories = $category->subcategories;
        
        return $subcategories;
    }
}
