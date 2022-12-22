<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Vendors;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\ImagesProd;
use App\Models\VideosProd;
use Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user_id = Auth::user()->id;

      
        $product = Products::orderBy('name')->get();
        $cats = Categories::where('type', 'products')->orderBy('category')->get();
        return view('products.index', [
            'products' => $product,
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
       
        $product = Products::orderBy('name')->get();
        return view('products/admin.index', [
            'products'=>$product
          
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    { 
       // $user_id = Auth::user()->id;

        $vendors = Vendors::orderBy('vendor_name')->get();
        $categories = Categories::orderBy('category')->get();//change where type = products
        $scat = null;
        $subCat = "";
       
        if ($request->get("scat") != null){
           // dd("test");
            $categorie = Categories::find(intval($request->get("id")));//change where type = products
            $subCat = $categorie->subcategories;
            $subList = [];
            foreach($subCat as $s)
                $subList[] = $s;

            //dd($subList);
        }
        return view('products/admin.create')->with('vendors', $vendors)->with('categories', $categories)->with('subCat',$subCat)->with('scat', $scat);
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
            'reference' => 'required',
            'name' => 'required',
            'rating' => 'required',
            'description' => 'required',
           
        ]);*/

        $product=new Products;
        $product->idCategory = $request->idCategory;
        $product->idSubCategory = $request->idSubCategory;
        $product->idVendor = $request->idVendor;
        $product->reference = $request->reference;
        $product->name = $request->name;
        $product->rating = $request->rating;
        $product->description = $request->description;
        $product->save();

        if($request->hasfile('product_image')){
            $files= $request->file('product_image');
            foreach($files as $file){
                $img= new ImagesProd;
                $filename = date('YmdHi').$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $file-> move(public_path('images/products'), $filename);            
                $img->path= $filename;

                $product->imagespord()->save($img);  
               
            }
        }
        if($request->hasfile('product_video')){
            $files = $request->file('product_video');
            //dd($file);
            foreach($files as $file){
                $vid= new VideosProd;
                $filename = date('YmdHi').$file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $file-> move(public_path('videos/products'), $filename);               
                $vid->path= $filename;

                $product->videospord()->save($vid);  
               
            }
        }       
        return redirect('products/admin/create')->with('success','products has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
       //
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


        $product = Products::find($id);
        $vendors = Vendors::orderBy('vendor_name')->get();
        $image = ImagesProd::find($id);
        $categories = Categories::orderBy('category')->get();//change where type = products
        $subSelected = SubCategories::find($product->idSubCategory);

        $scat = null;
        $subCat = "";
        
        //if ($request->get("scat") != null){
           // dd("test");
            $categorie = Categories::find($id);//change where type = products
            $subCat = $categorie->subcategories;
            $subList = [];
            foreach($subCat as $s)
                $subList[] = $s;

            //dd($subList);
        //}
        return view('products/admin.edit')->with('vendors', $vendors)
        ->with('categories', $categories)
        ->with('subCat',$subCat)
        ->with('subSelected',$subSelected)
        ->with('product',$product)
        ->with('scat', $scat);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  \App\Models\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_id = Auth::user()->id;

        $product = Products::find($id);
        /*$request->validate([
            'idCategory' => 'required',
            'idVendor' => 'required',
            'reference' => 'required',
            'name' => 'required',
            'rating' => 'required',
            'description' => 'required',
            
        ]);*/
        $product->update($request->all());

        return redirect('products/admin')
            ->with('success', 'products updated successfully');
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


        $product=Products::find($id);
        $product->delete();

        return redirect('products/admin')
            ->with('success', 'products deleted successfully');
    }
    public function ajaxTest(Request $request)
    {
        $vendors = Vendors::all();
        $id = intval($request->id);
        $categories = Categories::findOrFail($id);//change where type = products
        $subCat = $categories->subcategories;
        return $subCat;
    }
}
