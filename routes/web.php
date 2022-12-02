<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('equipments', function(){
    return view('equipments.index');
});
Route::get('equipments/create', function(){
    return view('equipments.create');
});

Route::resource('equipments', EquipmentsController::class);

/*
Route::get('products', function() {
    return view('products.index');
});

Route::get('retaurants', function() {
    return view('restaurants.index');
});

Route::get('rmr', function() {
    return view('rmr.index');
});

Route::get('services', function() {
    return view('services.index');
});

Route::get('clubs', function() {
    return view('clubs.index');
});
*/