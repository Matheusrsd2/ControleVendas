<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Vendas;

class VendasController extends Controller
{
    //************** METODOS PARA API *******************

    public function index () {
        return Vendas::with('vendedor')->get();
    }

    public function show($id){
        $vendas = Vendas::where('id', $id)
        ->with('vendedor')
        ->get();

        return $vendas;
    }

    public function store (Request $request)
    {
        $venda = new Vendas();
        $venda->valor_venda = $request->input('valor_venda');
        $venda->vendedor_id = $request->input('vendedor_id');
        $venda->comissao = (8.5 / 100) * $request->input('valor_venda');
        $venda->save();
    }

    //************************ Metodos web Client **********************

    public function getIndex()
    {
        $vendas = Vendas::with('vendedor')
        ->orderBy('created_at', 'DESC')
        ->get();
        return view('home', compact('vendas'));
    }
}
