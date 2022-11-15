<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\PurchaseController;

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
    return view('layouts.admin');
});


Route::resource('categories','CategoryController');
Route::resource('providers','ProviderController');
Route::resource('products','ProductController');
Route::resource('cllients','ClientController');
Route::resource('compras','PurchaseController');
Route::resource('compras_detalle','PurchaseDetailController');
Route::resource('ventas','SaleController');
Route::resource('ventas_detalle','SaleDetailController');


Route::get('/prueba',function(){
   return view('prueba2');
});
