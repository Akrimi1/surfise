<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Subcategories;
use App\Models\ProductType;
use Auth;
use DB;

class CategoriesController extends Controller  
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexadmin()
    {
        $user_id = Auth::user()->id;
        $product_types = ProductType::orderBy("product_type")->get();
        $cat = Categories::orderBy('category')->get();
        $subcategories = Subcategories::orderby('subcategory')->get();

        if($subcategories->count() > 50)
            $subcategories = Subcategories::orderBy('subcategory')->simplePaginate(50);
        
        $existant_cat = Categories::latest()->first();
       
        
        return view('content_field.index', [
            'categories' => $cat ,
            'subcategories' => $subcategories,
            'product_types' => $product_types,
            'existant_cat' => $existant_cat
             
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
        $existance_cat = Categories::last();
       // dd($existance_cat);
        return view('categories/admin.create');
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

        $request->validate([
            'category' => 'required'
        ]);
        $category = $request->category;
        $category_type = $request->type;
        $subcategory = $request->subcategory;
        $existance_cat = Categories::where(DB::raw('upper(category)'), '=', strtoupper($category))
        ->where(DB::raw('upper(type)'), '=', strtoupper($category_type))
        ->first();
        if($existance_cat != null){
            $category = Categories::find($existance_cat->id);
            if($subcategory != ""){
                $subcat=new SubCategories;
                $subcat->subcategory = $subcategory;
                $existance_cat->subcategories()->save($subcat); 
            } 
        }else{
            $cat=new Categories;
            $cat->type = $category_type;
            $cat->category = $category;               
        $cat->save();
            if($subcategory != ""){
                $subcat=new SubCategories;
                $subcat->subcategory = $subcategory;
                $cat->subcategories()->save($subcat); 
            } 
        }        
        return back()->with('message', 'category added Successful !');
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
        $category = Categories::find($id);
        $subcategories = $category->subcategories;
        return view('content_field.show')->with('subcategories', $subcategories);
       
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

        $cat = Categories::find($id);
        return view('categories/admin.edit',[
            'cat'=>$cat
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  \App\Models\Categories $cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_id = Auth::user()->id;

        $cat = Categories::find($id);
        $request->validate([
             'category' => 'required'  
         ]);
         $cat->update($request->all());
 
         return redirect('categories/admin')
             ->with('success', 'categories updated successfully');  
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

        $cat=Categories::find($id);
        $cat->delete();

        return redirect('categories/admin')
            ->with('success', 'categories deleted successfully');
  
    }

   
}
