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

Route::get('/', 'VendedorController@indexWeb');

Route::get('/cadastrar/vendedor', function () {
    return view('vendedor');
});

Route::post('/vendedor/novo', 'VendedorController@store');

