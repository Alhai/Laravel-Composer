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

Route::get('/', function () {
    return ('Home');
});
Route::get('/edit', function () {
    return ('welcome');
});
Route::get('/product', function () {
    return ('product');
});
Route::get('/product/{id}', function () {
    return ('hello' . request('id'));
});
Route::get('/cart', function () {
    return ('cart');
});