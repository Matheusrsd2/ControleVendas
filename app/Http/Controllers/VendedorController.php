<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendedor;

class VendedorController extends Controller
{
    //******************* METODOS PARA API *********************

    public function index () {
        return Vendedor::all();
    }

    public function store (Request $request) {
        Vendedor::create($request->all());
    }

    public function show($id){
        $vendedor = Vendedor::where('id', $id)
        ->with('vendas')
        ->get();

        return $vendedor;
    }
    //******************* METODOS PARA WEB CLIENT *****************

    public function getIndex()
    {
        $vendedor = Vendedor::get();
        return view('vendedor', compact('vendedor'));
    }

    public function showVendas ($id){
        $vendedor = Vendedor::where('id', $id)
        ->with('vendas')
        ->get();

        return view('vendas_vendedor', compact('vendedor'));
    }
}
