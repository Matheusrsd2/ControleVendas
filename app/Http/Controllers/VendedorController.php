<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendedor;

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

    public function store (Request $request) {
        try {
            Vendedor::create($request->all());
        }
        catch (\Exception $e) {
            return $e->getMessage();
        }  
    }

    public function show($id){
        $vendedor = Vendedor::where('id', $id)
        ->with('vendas')
        ->get();
        if (!$vendedor) {
            return response()->json(['response' => 'Vendedor Não Encontrado', 404]);
        }
        return response()->json([$vendedor, 200]);
        
        
    }
    //******************* METODOS PARA WEB CLIENT *****************

    public function getIndex()
    {
        $vendedor = $this->index();
        //$vendedor = Vendedor::get();
        return view('vendedor', compact('vendedor'));
    }

    public function showVendas ($id){
        $vendedor = Vendedor::where('id', $id)
        ->with('vendas')
        ->get();
        return view('vendas_vendedor', compact('vendedor'));
    }

    public function post (Request $request) {
        Vendedor::create($request->all());
        return redirect('/vendedor');   
    }
}
