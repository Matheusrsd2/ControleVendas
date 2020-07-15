<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Vendas;
use Carbon\Carbon;
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
        ->orderBy('hora', 'DESC')
        ->get();

        return view('home', compact('vendas'));
    }

    public function post (Request $request)
    {
        $venda = new Vendas();
        $venda->valor_venda = $request->input('valor_venda');
        $venda->vendedor_id = $request->input('vendedor_id');
        $venda->comissao = (8.5 / 100) * $request->input('valor_venda');
        $venda->hora = Carbon::parse()->format('d-m-Y');
        $venda->save();

        return redirect('/');
    }

    public function BuscarVendasDoDia(Request $request)
    {
        $data = $request->input('data');
        $vendas = Vendas::with('vendedor')
        ->where('hora', '=', $data)
        ->get();

        return view('vendas_dia', compact('vendas'));
    }

    public function EnviarEmail(Request $request) {
        $venda = new Venda();
        $venda->email = $request->get('email');
        Mail::to($request->get('email'))->send();
     }
}
