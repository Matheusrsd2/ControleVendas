@extends('layouts.app')

@section('content')
<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#verificar">
    Enviar Relatório de Vendas 
</button> <br>
<div id="card" class="card col-sm-11 p-3 mb-2 text-dark">
    <div class="card-body">
        <h3 style="font-family: 'Noto Sans JP', sans-serif;"><b>Vendas do Dia</b></h3>
        <table class="table table-light table-hover">
            <thead class="thead thead-secondary"> 
                <tr>
                    <th>Código</th>
                    <th>Valor da Venda</th>
                    <th>Comissão</th>
                    <th>Nome do Vendedor</th>
                    <th>Data da Venda</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vendas as $v) 
                <tr>
                    <td>{{$v->id}}</td>
                    <td>R$ {{$v->valor_venda}}</td>
                    <td>R$ {{$v->comissao}}</td>
                    <td>{{$v->vendedor->nome}}</td>
                    <th>{{$v->hora}}</th>
                </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</center>

@endsection