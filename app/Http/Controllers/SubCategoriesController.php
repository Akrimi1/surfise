<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategories;
use App\Models\Categories;

class SubCategoriesController extends Controller
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
        $subcat = SubCategories::orderBy('subcategory')->get();
        return view('subcategories/admin.index', [
            'subcategories'=>$subcat
            
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Categories::all();
        
        return view('subcategories/admin.create',[
            'categeries'=> $cat
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
            'subcategory' => 'required'
        ]);

        $subcat=new Subcategories;
        $subcat->idCategory = $request->idCategory;
        $subcat->subcategory = $request->subcategory;
       
        $subcat->save();
     
        return redirect('subcategories/admin/create')->with('success','subcategory has been added');
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
        $subcat = SubCategories::find($id);
        return view('subcategories/admin.edit',[
            'subcat'=>$subcat
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  \App\Models\SubCategories $subcat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $subcat = SubCategories::find($id);
        $request->validate([
             'subcategory' => 'required'  
         ]);
         $subcat->update($request->all());
 
         return redirect('subcategories/admin')
             ->with('success', 'subcategories updated successfully');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcat=SubCategories::find($id);
        $subcat->delete();

        return redirect('subcategories/admin')
            ->with('success', 'subcategories deleted successfully');
    }
}
