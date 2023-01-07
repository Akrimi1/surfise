<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Equipments;
use App\Models\ProductType;
use App\Models\Categories;
use App\Models\Vendors;
use Auth;
use Illuminate\Support\Facades\Hash;


class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::orderBy('name')->get();
        return view('team.index', [
            'team'=>$user
          
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
        
        return view('team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =  Hash::make($request->password);
        
        $user->save();
        return redirect('team')
        ->with('success', 'team has been updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $equipments = Equipments::orderby('brand_name')->get();
        return view('team.show')->with('user', $user)->with('equipments', $equipments);
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
        
        $product_type = ProductType::orderby('product_type')->get();
        $categories = Categories::orderby('category')->get();
        $vendor = Vendors::where('id', $id)->orderby('business_name')->get();
        return view('team.edit')->with('product_types', $product_type)
            ->with('categories', $categories)
            ->with('vendor', $vendor);
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
        $user_id = Auth::user()->id;

        $user=User::find($id);
        $user->delete();
        return redirect('team')
            ->with('success', 'member has been deleted successfully'); 
    }
}
