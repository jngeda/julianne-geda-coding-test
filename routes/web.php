<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomepageController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'App\Http\Controllers\HomepageController@index');
Route::get('products', 'App\Http\Controllers\ProductController@index');
Route::get('add', 'App\Http\Controllers\ProductController@add');
Route::get('detail', 'App\Http\Controllers\ProductController@detail');
Route::post('store','App\Http\Controllers\ProductController@store');
Route::get('edit-product/{id}', [ProductController::class, 'edit']);
