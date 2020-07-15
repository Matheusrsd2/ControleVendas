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
//ROTAS PARA VENDAS
Route::get('/', 'VendasController@getIndex');

Route::get('/cadastrar/venda', function () {
    return view('cadastrovenda');
});

Route::get('/venda/verificar', 'VendasController@BuscarVendasDoDia');

Route::post('/venda/novo', 'VendasController@post');

Route::post('/venda/sendmail', 'VendasController@EnviarEmail');


//ROTAS PARA VENDEDORES
Route::get('/vendedor', 'VendedorController@getIndex');

Route::get('/cadastrar/vendedor', function () {
    return view('cadastrovendedor');
});

Route::get('/vendedor/vendas/{id}', 'VendedorController@showVendas');

Route::post('/vendedor/novo', 'VendedorController@post');

Route::get('/buscar', 'VendedorController@buscarVendedor');

