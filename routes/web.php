<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentsController;
use App\Http\Controllers\equipImageController;
use App\Http\Controllers\equipVideosController;
use App\Http\Controllers\VendorsController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SubCategoriesController;


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

Route::resource('vendors/admin', VendorsController::class);
Route::resource('vendors', VendorsController::class);


Route::get('equipments/admin', [EquipmentsController::class, 'indexadmin']);
Route::resource('equipments/admin', EquipmentsController::class)->except('index');
Route::get('equipments/admin.edit', [EquipmentsController::class, 'edit']);


Route::get('equipments/equipment_informations', function() {
    return view('equipments.equipment_informations');
});
Route::resource('equipments', EquipmentsController::class);


Route::get('subcategories/admin', [SubCategoriesController::class, 'indexadmin']);
Route::resource('subcategories/admin', SubCategoriesController::class)->except('index');
Route::get('subcategories/admin.edit', [SubCategoriesController::class, 'edit']);
Route::resource('subcategories', SubCategoriesController::class);


Route::get('categories/admin', [CategoriesController::class, 'indexadmin']);
Route::resource('categories/admin', CategoriesController::class)->except('index');
Route::get('categories/admin.edit', [CategoriesController::class, 'edit']);
Route::resource('categories', CategoriesController::class);





//Route::resource('vendors/admin', CountryController::class);

//Route::resource('equipments/admin', EquipmentsController::class);


Route::get('products', function() {
    return view('products.index');
});
Route::get('products/product_details', function() {
    return view('products.product_details');
});
Route::get('products/product_informations', function() {
    return view('products.product_informations');
});

Route::get('restaurants', function() {
    return view('restaurants.index');
});

Route::get('restaurants/restaurant_details', function() {
    return view('restaurants.restaurant_details');
});


Route::get('rmr', function() {
    return view('rmr.index');
});
Route::get('thr', function() {
    return view('thr.index');
});

Route::get('services', function() {
    return view('services.index');
});

Route::get('clubs', function() {
    return view('clubs.index');
});
Route::get('blog', function() {
    return view('blog.index');
});
Route::get('bmi', function() {
    return view('bmi.index');
});

Route::get('medias', function() {
    return view('medias.gallery');
});

Route::get('blog/post', function(){
    return view('blog/post');
});
