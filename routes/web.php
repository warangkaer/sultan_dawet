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

Route::get('/', 'WebsiteController@index');


Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/public/admin', 'AdminController@index');
    Route::post('/public/admin/menu', 'MenuController@store');
    Route::post('/public/admin/product', 'ProductController@store');
    Route::post('/public/logout', 'AdminController@logout');
});
