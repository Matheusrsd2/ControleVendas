@extends('layouts.app')

@section('content')

<body>
    <center><h5 style="font-family: 'Noto Sans JP', sans-serif;"><b>TOTAL DE VENDEDORES: {{$count}}</b></h5></center>
        <table class="table table-light table-hover">
                <thead class="thead thead-secondary"> 
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data de Cadastro</th>
                        <th>Vendas do Vendedor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendedor as $v) 
                    <tr>
                        <td>{{$v->id}}</td>
                        <td>{{$v->nome}}</td>
                        <td>{{$v->email}}</td> 
                        <th>{{$v->data}}</th>
                        <td>         
                            <a href="/vendedor/vendas/{{$v->id}}">
                                <button class="btn btn-info">Consultar Todas as vendas</button>
                            </a>
                        </td>
                        @endforeach;
                    </tr>  
                </tbody>
            </table>
        </div>
        </center>
    </body>
    @endsection