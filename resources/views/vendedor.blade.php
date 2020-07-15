@extends('layouts.app')

@section('content')

<body>
    <center><h3 style="font-family: 'Noto Sans JP', sans-serif; color:#f5f5f5;"><b>VENDEDORES</b></h3></center>
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
                        <th>{{$v->hora}}</th>
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