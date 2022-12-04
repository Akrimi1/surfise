<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipments;
use App\Models\Categories;

class EquipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $equip = Equipments::all();
        
        return view('equipments.index', [
            'equipments'=>$equip
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexadmin()
    { 
        $equip = Equipments::all();
        
        return view('equipments/admin.index', [
            'equipments'=>$equip
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       /* $request->validate([
            'idCategory' => 'required',
            'idVendor' => 'required',
            'ref' => 'required',
            'name'=> 'required',
            'type' => 'required',
            'description' => 'required',
            'details' => 'required',
            'equipImage' => 'required',
            'equipVideos' => 'required'
        ]);*/

        $equip=new Equipments;
        $equip->idCategory = $request->idCategory;
        $equip->idVendor = $request->idVendor;
        $equip->ref = $request->ref;
        $equip->name = $request->name;
        $equip->type = $request->type;
        $equip->description = $request->description;
        $equip->details = $request->details;
        if($request->file('equip_image')){
            $files= $request->file('equip_image');
            foreach($files as $file){
                $image= new Images();
                $filename = date('YmdHi').$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $file-> move(public_path('images/equipments'), $filename);
                //$check=in_array($extension,$allowedfileExtension);
                //$filename= date('YmdHi').$file->getClientOriginalName();
               
                $image->path= $filename;
                //$data->idEquipment = 1;

                $equip->images()->save($image);  
               
            }
        }
        //dd( $request  );
        
        //$equip->images = $request->equipImage;
        $equip->save();

        return view();//redirect('admin/post/create')->with('success','Data has been added');
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
