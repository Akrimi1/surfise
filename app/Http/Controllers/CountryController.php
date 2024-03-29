<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Country;
  
class CountryController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $countries = Country::orderBy('name')->get();
        return view('country',compact('countries'));
    }

    public function create()
    {
        return view('vendors/admin.create');
    }
}