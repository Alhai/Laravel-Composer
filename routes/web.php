<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PostController;
use app\Models\Product;

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


Route::get('/',[HomeController::class,'Home']);
Route::get('/product',[ProductController::class,'productModel']);
    Route::get('/product',[ProductController::class,'productBdd'])
    ->name('product');
    Route::get('/product/{id}',[ProductController::class,'productBdd']);

    Route::get('/product/{id}', [ProductController::class,'productId'])
    -> name('product_id');

Route::get('/cart',[CartController::class,'cart']);

Route::get('/listname',[ProductController::class,'productListName']);
Route::get('/listprice',[ProductController::class,'productListPrice']);
Route::get('/oneproduct',[ProductController::class,'oneProduct']);


Route::resource('backoffice/product',PostController::class);

