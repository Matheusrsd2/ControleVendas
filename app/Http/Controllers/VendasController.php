<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Vendas;

class VendasController extends Controller
{
    //************** METODOS PARA API *******************

    public function index () {
        return Vendas::all(); 
    }

    public function show($id){
        $vendas = Vendas::findOrFail($id);
        $vendedor = $vendas->with('vendedor')->get();

        return $vendedor;
    }

    public function store (Request $request)
    {
        $venda = new Vendas();
        $venda->valor_venda = $request->input('valor_venda');
        $venda->vendedor_id = $request->input('vendedor_id');
        $venda->comissao = (8.5 / 100) * $request->input('valor_venda');
        $venda->save();
    }
}
