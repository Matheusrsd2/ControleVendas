<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('vendedor', 'VendedorController');

Route::apiResource('vendas', 'VendasController');



