<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipments;

class EquipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('equipments/admin.create');
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
        $request->validate([
            'idCategory' => 'required',
            'idVendor' => 'required',
            'ref' => 'required',
            'name'=> 'required',
            'type' => 'required',
            'description' => 'required',
            'details' => 'required'
        ]);

        $equip=new Equipments;
        //$equip->user_id=0;
        $equip->idCategory = $request->idCategory;
        $equip->idVendor = $request->idVendor;
        $equip->ref = $request->ref;
        $equip->name = $request->name;
        $equip->type = $request->type;
        $equip->description = $request->description;
        $equip->details = $request->details;       
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
