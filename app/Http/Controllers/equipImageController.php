<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;

class equipImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('equipImage.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipImage.create');
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
            'equip_image' => 'required'           
        ]);
      
        

        if($request->file('equip_image')){
            $files= $request->file('equip_image');
            foreach($files as $file){
                $data= new Images();
                $filename = date('YmdHi').$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $file-> move(public_path('images/equipments'), $filename);
                //$check=in_array($extension,$allowedfileExtension);
                //$filename= date('YmdHi').$file->getClientOriginalName();
                $data->path= $filename;
                $data->idEquipment = 1;
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
