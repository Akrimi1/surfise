<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logovendor;

class VendorLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendorLogo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendorLogo.create');
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
            'vendor_logo' => 'required'           
        ]);
      
        

        if($request->file('vendor_logo')){
            $files= $request->file('vendor_logo');
            foreach($files as $file){
                $data= new Images();
                $filename = date('YmdHi').$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $file-> move(public_path('images/Logovendors'), $filename);
                //$check=in_array($extension,$allowedfileExtension);
                //$filename= date('YmdHi').$file->getClientOriginalName();
                $data->path= $filename;
                $data->idVendor = 1;
                $data->save();  
            }
           
        }
          

        return $filename;




/*

        if($request->hasFile('equipImage'))
        {
            $allowedfileExtension=['jpg','png','docx'];
            $files = $request->file('photos');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
            //dd($check);
                if($check)
                {
                    //$items= Item::create($request->all());
                    foreach ($request->equipImage as $photo) {
                        $filename = $photo->store('photos');
                        ItemDetail::create([
                        'item_id' => $items->id,
                        'filename' => $filename
                        ]);
                    }
                }
            }
            echo "Upload Successfully";
        }*/
        
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
