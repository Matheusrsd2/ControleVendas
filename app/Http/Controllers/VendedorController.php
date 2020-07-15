<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendedor;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class VendedorController extends Controller
{
    //******************* METODOS PARA API *********************

    public function index () {
        try {
            $vendedor = Vendedor::all();
            return $vendedor;
        } catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function store (Request $request) 
    {
        try {
            $vendedor = new Vendedor();
            $vendedor->nome = $request->input('nome');
            $vendedor->email = $request->input('email');
            $vendedor->data = Carbon::parse()->format('d-m-Y');
            $vendedor->save();
        }
        catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function show($id){
        $vendedor = DB::table('vendedores')
        ->join('vendas', 'vendas.vendedor_id', '=', 'vendedores.id') 
        ->where('vendedores.id','=', $id)
        ->get();
        if ($vendedor) {
            return response()->json([$vendedor, 200]);
        }
        return response()->json(['response' => 'Vendedor Não Encontrado', 404]);
        
        
        
    }
    //******************* METODOS PARA WEB CLIENT *****************

    public function getIndex()
    {
        $vendedor = $this->index();
        $count = count($vendedor);
        return view('vendedor', compact('vendedor', 'count'));
    }

    public function showVendas ($id){
        $vendedor = \DB::table('vendedores')
        ->join('vendas', 'vendas.vendedor_id', '=', 'vendedores.id') 
        ->where('vendedores.id','=', $id)
        ->paginate(4);

        return view('vendas_vendedor', ['vendedor' => $vendedor /*'count'=>$count*/]);
    }
    

    public function post (Request $request) {
        $vendedor = $this->store($request);
        return redirect('/vendedor');  
    }
}
