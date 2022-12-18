<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipments;
use App\Models\Vendors;
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
    public function create(Request $request)
    { 
        $vendors = Vendors::all();
        $categories = Categories::all();//change where type = equipments
        $scat = null;
        $subCat = "";
       
        if ($request->get("scat") != null){
           // dd("test");
            $categorie = Categories::find(intval($request->get("id")));//change where type = equipments
            $subCat = $categorie->subcategories;
            $subList = [];
            foreach($subCat as $s)
                $subList[] = $s;

            //dd($subList);
        }
        return view('equipments/admin.create')->with('vendors', $vendors)->with('categories', $categories)->with('subCat',$subCat)->with('scat', $scat);
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
        $equip->idSubCategory = $request->idSubCategory;
        $equip->idVendor = $request->idVendor;
        $equip->ref = $request->ref;
        $equip->name = $request->name;
        $equip->type = $request->type;
        $equip->description = $request->description;
        $equip->details = $request->details;
        $equip->save();

        if($request->hasfile('equip_image')){
            $files= $request->file('equip_image');
            foreach($files as $file){
                $img= new Images;
                $filename = date('YmdHi').$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $file-> move(public_path('images/equipments'), $filename);            
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
                $vid->path= $filename;

                $equip->videos()->save($vid);  
               
            }
        }       
        return redirect('equipments/admin/create')->with('success','equipments has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $vendors = Vendors::all();
        $categories = Categories::find($request->$id);//change where type = equipments
        $subCat = $categories->subcategories;
        //return $subCat;
        //dd($id);
        return view('equipments/admin.create')->with('vendors', $vendors)->with('categories', $categories)->with('subCat', $subCat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id , Request $request)
    {
        $equip = Equipments::find($id);
        $vendors = Vendors::all();
        $image = Images::find($id);
        $categories = Categories::all();//change where type = equipments
        $scat = null;
        $subCat = "";
       
        if ($request->get("scat") != null){
           // dd("test");
            $categorie = Categories::find(intval($request->get("id")));//change where type = equipments
            $subCat = $categorie->subcategories;
            $subList = [];
            foreach($subCat as $s)
                $subList[] = $s;

            //dd($subList);
        }
        return view('equipments/admin.edit')->with('vendors', $vendors)
        ->with('categories', $categories)
        ->with('subCat',$subCat)
        ->with('equip',$equip)
        ->with('scat', $scat);
       
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
    public function ajaxTest(Request $request)
    {
        $vendors = Vendors::all();
        $id = intval($request->id);
        $categories = Categories::findOrFail($id);//change where type = equipments
        $subCat = $categories->subcategories;
        return $subCat;
    }
}
