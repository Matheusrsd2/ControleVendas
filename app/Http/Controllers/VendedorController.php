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
        $vendedor = Vendedor::findOrFail($id);
        $vendas_vendedor = $vendedor->with('vendas')->get();

        return $vendas_vendedor;
    }

    //******************* METODOS PARA WEB CLIENT *****************
    
    public function indexWeb()
    { 
        $vendedor = Vendedor::all(); 
        return view ('home')->with('vendedor',$vendedor);
    }
}
