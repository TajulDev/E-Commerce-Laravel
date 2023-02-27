<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('index.index');})->name('home');

//STORE + CUSTOMER PANEL

Route::get('/store/index','App\Http\Controllers\ProducttableController@products')->name('store');
Route::get('/store/product/{id}', 'App\Http\Controllers\ProducttableController@productdetails')->name('product');
Route::get('/about', function () { return view('index.about'); })->name('about');
Route::get('/blog', function () { return view('blog.index'); })->name('blog');
Route::get('/contacts', function () { return view('contacts.index'); })->name('contacts');

//ADMIN PANEL

Route::get('/admin/dashboard', function () { return view('admin.dashboard'); })->name('admindashboard');

Route::get('/admin/addproduct', 'App\Http\Controllers\ProducttableController@create')->name('addproduct');
Route::post('/admin/addproduct', 'App\Http\Controllers\ProducttableController@store')->name('addproductpost');

Route::get('/admin/producttable', 'App\Http\Controllers\ProducttableController@show')->name('producttable');

Route::get('/admin/removeproduct/{id}', 'App\Http\Controllers\ProducttableController@deleteproduct')->name('removeproduct');
Route::get('/admin/updateproduct/{id}', 'App\Http\Controllers\ProducttableController@showupdateproduct')->name('updateproduct');
Route::post('/admin/updateproduct/{id}', 'App\Http\Controllers\ProducttableController@updateproduct');

Route::get('/admin/specificationtable', 'App\Http\Controllers\SpecificationController@show')->name('specification');

Route::post('/admin/addcategory', 'App\Http\Controllers\SpecificationController@addcategory');
Route::get('/admin/removecategory/{id}', 'App\Http\Controllers\SpecificationController@deletecategory')->name('removecategory');
Route::post('/admin/updatecategory/{id}', 'App\Http\Controllers\SpecificationController@updatecategory');

Route::post('/admin/addos', 'App\Http\Controllers\SpecificationController@addos');
Route::get('/admin/removeos/{id}', 'App\Http\Controllers\SpecificationController@deleteos')->name('removeos');
Route::post('/admin/updateos/{id}', 'App\Http\Controllers\SpecificationController@updateos');

Route::post('/admin/adddisplay', 'App\Http\Controllers\SpecificationController@adddisplay');
Route::get('/admin/removedisplay/{id}', 'App\Http\Controllers\SpecificationController@deletedisplay')->name('removedisplay');
Route::post('/admin/updatedisplay/{id}', 'App\Http\Controllers\SpecificationController@updatedisplay');

Route::post('/admin/addprocessor', 'App\Http\Controllers\SpecificationController@addprocessor');
Route::get('/admin/removeprocessor/{id}', 'App\Http\Controllers\SpecificationController@deleteprocessor')->name('removeprocessor');
Route::post('/admin/updateprocessor/{id}', 'App\Http\Controllers\SpecificationController@updateprocessor');

Route::post('/admin/addgraphics', 'App\Http\Controllers\SpecificationController@addgraphics');
Route::get('/admin/removegraphics/{id}', 'App\Http\Controllers\SpecificationController@deletegraphics')->name('removegraphics');
Route::post('/admin/updategraphics/{id}', 'App\Http\Controllers\SpecificationController@updategraphics');

Route::post('/admin/addmemory', 'App\Http\Controllers\SpecificationController@addmemory');
Route::get('/admin/removememory/{id}', 'App\Http\Controllers\SpecificationController@deletememory')->name('removememory');
Route::post('/admin/updatememory/{id}', 'App\Http\Controllers\SpecificationController@updatememory');

Route::post('/admin/addhard_drive', 'App\Http\Controllers\SpecificationController@addhard_drive');
Route::get('/admin/removehard_drive/{id}', 'App\Http\Controllers\SpecificationController@deletehard_drive')->name('removehard_drive');
Route::post('/admin/updatehard_drive/{id}', 'App\Http\Controllers\SpecificationController@updatehard_drive');

Route::post('/admin/addpower_supply', 'App\Http\Controllers\SpecificationController@addpower_supply');
Route::get('/admin/removepower_supply/{id}', 'App\Http\Controllers\SpecificationController@deletepower_supply')->name('removepower_supply');
Route::post('/admin/updatepower_supply/{id}', 'App\Http\Controllers\SpecificationController@updatepower_supply');

Route::post('/admin/addbattery', 'App\Http\Controllers\SpecificationController@addbattery');
Route::get('/admin/removebattery/{id}', 'App\Http\Controllers\SpecificationController@deletebattery')->name('removebattery');
Route::post('/admin/updatebattery/{id}', 'App\Http\Controllers\SpecificationController@updatebattery');



require __DIR__.'/auth.php';
