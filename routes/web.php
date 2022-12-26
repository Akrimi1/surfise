<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentsController;
use App\Http\Controllers\equipImageController;
use App\Http\Controllers\equipVideosController;
use App\Http\Controllers\VendorsController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SubCategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RestaurantsController;


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








//Route::resource('equipments', EquipmentsController::class);





//Route::resource('vendors/admin', CountryController::class);



/*Route::get('products', function() {
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

*/
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
Route::get('user_login', function(){
    return view('login/login');
});
Route::get('register_welcome', function(){
    return view('login/register_welcome');
});

Route::get('user_register', function(){
    return view('login/register');
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');

    })->name('dashboard');
    Route::get('equipments/admin', [EquipmentsController::class, 'indexadmin']);
Route::resource('equipments/admin', EquipmentsController::class, )->except('index');
    Route::get('products/admin', [ProductsController::class, 'indexadmin','test']);
    Route::resource('products/admin', ProductsController::class)->except('index');
    Route::get('products/admin.edit', [ProductsController::class, 'edit']);
    Route::resource('products', ProductsController::class);
    Route::get('/ajaxTest', [ProductsController::class, 'ajaxTest'])->name('ajaxTest');
    
    Route::get('product_type', function(){
        return view('product_type/create');
    });
    
//Route::get('equipments/admin.edit', [EquipmentsController::class, 'edit']);


Route::get('categories/admin', [CategoriesController::class, 'indexadmin']);
Route::resource('categories/admin', CategoriesController::class)->except('index');
Route::get('categories/admin/{id}', [CategoriesController::class, 'edit']);

Route::get('restaurants/admin', [RestaurantsController::class, 'indexadmin']);
Route::resource('restaurants/admin', RestaurantsController::class)->except('index');
Route::get('restaurants/admin/{id}', [RestaurantsController::class, 'edit']);


Route::get('subcategories/admin', [SubCategoriesController::class, 'indexadmin']);
Route::resource('subcategories/admin', SubCategoriesController::class)->except('index');
Route::get('subcategories/admin.edit', [SubCategoriesController::class, 'edit']);


Route::get('vendors/admin', [VendorsController::class, 'indexadmin']);
Route::resource('vendors/admin', VendorsController::class)->except('index');
Route::get('vendors/admin.edit', [VendorsController::class, 'edit']);




});



Route::get('/ajaxTest', [EquipmentsController::class, 'ajaxTest'])->name('ajaxTest');
Route::get('/categorySelect', [SubCategoriesController::class, 'categorySelect'])->name('categorySelect');


Route::resource('vendors', VendorsController::class);
Route::resource('subcategories', SubCategoriesController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('equipments', EquipmentsController::class);
Route::resource('restaurants', RestaurantsController::class);