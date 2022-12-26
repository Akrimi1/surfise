<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Auth;

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
        
        $cat = Categories::orderBy('category')->get();
        return view('categories/admin.index', [
            'categories'=>$cat 
             
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

        $cat=new Categories;
        $cat->type = $request->type;
        $cat->category = $request->category;
       
        $cat->save();
        return back()->with('message', 'category added Successful !');
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
