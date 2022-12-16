<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendors;
use App\Models\Country;
use App\Models\Imagevendor;
use App\Models\Logovendor;

class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor = Vendors::all();
        
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
        $vendor = Vendors::all();
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
        $c = Country::all();
        
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
        $request->validate([
            'vendor_name' => 'required',
            'description' => 'required',
            'country' => 'required',
            'state' => 'required',
            'longitude' => 'required',
            'latitude' => 'required'
        ]);

        $vendor=new Vendors;
        $vendor->vendor_name = $request->vendor_name;
        $vendor->description = $request->description;
        $vendor->country = $request->country;
        $vendor->state = $request->state;
        $vendor->longitude = $request->longitude;
        $vendor->latitude = $request->latitude;
        
        if($request->hasfile('vendor_image')){
            $file= $request->file('vendor_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $file-> move(public_path('images/vendors'), $filename);
            
            $vendor->photo = $filename;
             
        }
        
        if($request->hasfile('vendor_logo')){
            $file = $request->file('vendor_logo');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $file-> move(public_path('images/Logovendors'), $filename);
            $vendor->logo = $filename;
        }

        $vendor->save();

        
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendor = Vendors::find($id);
        return view('vendors/admin.edit',[
            'vendor'=>$vendor
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
        $vendor = Vendors::find($id);
        $request->validate([
            'vendor_name' => 'required',
            'description' => 'required',
            'country' => 'required',
            'state' => 'required',
            'longitude' => 'required',
            'latitude' => 'required'
        ]);
         $vendor->update($request->all());
 
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
        $vendor=Vendors::find($id);
        $vendor->delete();

        return redirect('vendors/admin')
            ->with('success', 'vendors deleted successfully');
    }
}
