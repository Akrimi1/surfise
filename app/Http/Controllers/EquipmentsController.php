<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipments;
use App\Models\Categories;
use App\Models\Images;
use App\Models\Videos;

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
        return view('equipments/admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        /*$request->validate([
            'idCategory' => 'required',
            'idVendor' => 'required',
            'ref' => 'required',
            'name'=> 'required',
            'type' => 'required',
            'description' => 'required',
            'details' => 'required',
            'equip_image' => 'required',
            //'equipVideos' => 'required'
        ]);*/

        $equip=new Equipments;
        $equip->idCategory = $request->idCategory;
        $equip->idVendor = $request->idVendor;
        $equip->ref = $request->ref;
        $equip->name = $request->name;
        $equip->type = $request->type;
        $equip->description = $request->description;
        $equip->details = $request->details;
        $equip->save();
        //dd($request->hasfile('equip_image'));
        if($request->hasfile('equip_image')){
            $files= $request->file('equip_image');
            //dd($files);
            foreach($files as $file){
                $img= new Images;
                $filename = date('YmdHi').$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $file-> move(public_path('images/equipments'), $filename);
                //$check=in_array($extension,$allowedfileExtension);
                //$filename= date('YmdHi').$file->getClientOriginalName();
                $img->path= $filename;

                $equip->images()->save($img);  
               
            }
        }
        if($request->hasfile('equip_video')){
            $files = $request->file('equip_video');
            //dd($file);
            foreach($files as $file){
                $vid= new Videos;
                $filename = date('YmdHi').$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $file-> move(public_path('videos/equipments'), $filename);
                //$check=in_array($extension,$allowedfileExtension);
                //$filename= date('YmdHi').$file->getClientOriginalName();
                $vid->path= $filename;

                $equip->videos()->save($vid);  
               
            }
        }
        //dd( $request  );
        
        //$equip->images = $request->equipImage;
        

        //return view();//redirect('admin/post/create')->with('success','Data has been added');
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
        $equip = Equipments::find($id);
        return view('equipments/admin.edit',[
            'equip'=>$equip
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  \App\Models\Equipments  $equip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $equip = Equipments::find($id);
       $request->validate([
            'idCategory' => 'required',
            'idVendor' => 'required',
            'ref' => 'required',
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
            'details' => 'required'
        ]);
        $equip->update($request->all());

        return redirect('equipments/admin')
            ->with('success', 'euqipments updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equip=Equipments::find($id);
        $equip->delete();

        return redirect('equipments/admin')
            ->with('success', 'equipments deleted successfully');
    }
}
