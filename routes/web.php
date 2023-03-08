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

Route::get('products', [ProductController::class, 'index']);
Route::get('add-products', [ProductController::class, 'add']);
Route::post('insert-product',[ProductController::class, 'store']);

Route::get('edit-product/{id}', [ProductController::class, 'edit']);
Route::put('update-product/{id}', [ProductController::class, 'update']);

Route::get('detail-product/{id}', [ProductController::class, 'detail']);

Route::get('search', [ProductController::class, 'search']);
