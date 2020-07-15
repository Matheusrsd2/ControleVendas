<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Vendas;
use Carbon\Carbon;
use App\Mail\TotalVendas;
use Illuminate\Support\Facades\Mail;
class VendasController extends Controller
{
    //************** METODOS PARA API *******************

    public function index () {
        try {
            $vendas = Vendas::all();
            return $vendas;
        } catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function show($id){
        $vendas = Vendas::where('id', $id)
        ->with('vendedor')
        ->get();
        if (!$vendas) {
            return response()->json(['response' => 'Venda Não Encontrada', 404]);
        }
        return response()->json([$vendas, 200]);
    }

    public function store (Request $request)
    {
        try {
            $venda = new Vendas();
            $venda->valor_venda = $request->input('valor_venda');
            $venda->vendedor_id = $request->input('vendedor_id');
            $venda->comissao = (8.5 / 100) * $request->input('valor_venda');
            $venda->data = Carbon::parse()->format('d-m-Y');
            $venda->save();
        }
        catch(\Exception $e){
            return $e->getMessage();
        }
    }

    //************************ Metodos web Client **********************

    public function getIndex()
    {
        $vendas = Vendas::with('vendedor')
        ->orderBy('data', 'DESC')
        ->get();

        return view('home', compact('vendas'));
    }

    public function post (Request $request)
    {
        $venda = $this->store($request);
        return redirect('/');
    }

    public function BuscarVendasDoDia(Request $request)
    {
        $data = $request->input('data');
        $data = Carbon::parse()->format('d-m-Y');
        $vendas = Vendas::with('vendedor')
        ->where('data', '=', $data)
        ->get();

        return view('vendas_dia', compact('vendas'));
    }

    public function EnviarEmail(Request $request) {
        $data = Carbon::parse()->format('d-m-Y');
        $vendas = Vendas::with('vendedor')
        ->where('data', '=', $data)
        ->get();
        $mail = $request->input('email');

        Mail::send('vendas_dia', ['vendas' => $vendas], function ($m) {
            $m->from('teste@no-reply.com');
            $m->to('$mail');
        });

        return redirect()->back();
    }
}