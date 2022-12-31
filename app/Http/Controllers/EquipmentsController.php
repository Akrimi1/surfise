<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipments;
use App\Models\Vendors;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\Images;
use App\Models\Videos;
use App\Models\ProductType;
use Auth;

class EquipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user_id = Auth::user()->id;
      
        $equip = Equipments::orderBy('product_name')->get();
        $cats = Categories::where('type', 'Equipments')->orderBy('category')->get();
       

        return view('equipments.index', [
            'equipments' => $equip,
            'categories' => $cats
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
       
        $equip = Equipments::orderBy('product_name')->get();
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
        $user_id = Auth::user()->id;

        $vendors = Vendors::orderBy('business_name')->get();
        $categories = Categories::orderBy('category')->get();//change where type = equipments
        $scat = null;
        $subCat = "";
        $product_types = ProductType::orderBy('product_type')->get();
       
        if ($request->get("scat") != null){
           // dd("test");
            $categorie = Categories::find(intval($request->get("id")));//change where type = equipments
            $subCat = $categorie->subcategories;
            $subList = [];
            foreach($subCat as $s)
                $subList[] = $s;

            //dd($subList);
        }
        return view('equipments/admin.create')
            ->with('vendors', $vendors)
            ->with('categories', $categories)
            ->with('subCat',$subCat)->with('scat', $scat)
            ->with('product_types',$product_types);
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
        $filename="";
        if($request->hasfile('logo')){
            $file= $request->file('logo');
            $filename = date('YmdHi').$file->getClientOriginalName();
        }
        $equip=new Equipments;
        $equip->idCategory = $request->idCategory;
        $equip->idSubCategory = $request->idSubCategory;
       // $equip->idVendor = $request->idVendor;
        $equip->product_type = $request->product_type;
        $equip->product_name = $request->product_name;
        $equip->brand_name = $request->brand_name;
        $equip->website = $request->website;
        $equip->logo = $filename;
        $equip->description = $request->description;
        $equip->save();

        
        if($request->hasfile('equip_image')){
            $files = $request->file('equip_image');
            //dd($file);
            foreach($files as $file){
                $img= new Images;
                $filename = date('YmdHi').$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $file-> move(public_path('images/equipments'), $filename);               
                $img->path= $filename;

                $equip->images()->save($img);  
               
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
    public function show($id, Request $request)
    {
       // $user_id = Auth::user()->id;
        $categories = Categories::where('type', 'Equipments')->orderby('category')->get();
        $equipment = Equipments::findorfail($id);
        return view('equipments.show')->with('equip', $equipment)
        ->with('categories', $categories);
    }
    public function showadmin($id, Request $request)
    {
       // $user_id = Auth::user()->id;
        $categories = Categories::where('type', 'Equipments')->orderby('category')->get();
        $equipment = Equipments::findorfail($id);
        return view('equipments/admin.show')->with('equip', $equipment)
        ->with('categories', $categories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id , Request $request)
    {
        $user_id = Auth::user()->id;


        $equip = Equipments::find($id);
        $vendors = Vendors::orderBy('business_name')->get();
        $image = Images::find($id);
        $categories = Categories::orderBy('category')->get();//change where type = equipments
        $subSelected = SubCategories::find($equip->idSubCategory);

        $scat = null;
        $subCat = "";
        
        //if ($request->get("scat") != null){
           // dd("test");
            $categorie = Categories::find($id);//change where type = equipments
            $subCat = $categorie->subcategories;
            $subList = [];
            foreach($subCat as $s)
                $subList[] = $s;

            //dd($subList);
        //}
        return view('equipments/admin.edit')->with('vendors', $vendors)
        ->with('categories', $categories)
        ->with('subCat',$subCat)
        ->with('subSelected',$subSelected)
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
        $user_id = Auth::user()->id;

        $equip = Equipments::find($id);
       /*$request->validate([
            'idCategory' => 'required',
            'idVendor' => 'required',
            'ref' => 'required',
            'name' => 'required',
            'type' => 'required',
            'description' => 'required',
            'details' => 'required'
        ]);*/
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
        $user_id = Auth::user()->id;


        $equip=Equipments::find($id);
        $equip->delete();

        return redirect('equipments/admin')
            ->with('success', 'equipments deleted successfully');
    }
    public function ajaxTest(Request $request)
    {

        $id = intval($request->id);
        $categories = Categories::findOrFail($id);//change where type = equipments
        $subCat = $categories->subcategories;
        return $subCat;
    }
}
