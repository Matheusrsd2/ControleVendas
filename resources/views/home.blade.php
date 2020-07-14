@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <head>
        <<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
        <style>
            div#card{
                background: url('../../../public/img/card.jpg');
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
    <center>
        <div id="card" class="card col-sm-11 p-3 mb-2 text-dark">
            <div class="card-body">
                <a href="/cadastrar/vendedor">
                    <button class="btn btn-light">Cadastrar novo vendedor
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </button>  
                </a>
                <a href="/criar/venda">
                    <button class="btn btn-light">Informar Nova Venda
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                    </button>
                </a>
            </div>
            <h3 style="font-family: 'Noto Sans JP', sans-serif; color:#f5f5f5;"><b>ULTIMAS VENDAS (Por ordem de cadastro)</b></h3>
            <table class="table table-light table-hover">
                <thead class="thead thead-secondary"> 
                    <tr>
                        <th>Código</th>
                        <th>Valor da Venda</th>
                        <th>Comissão</th>
                        <th>Código do Vendedor</th>
                        <th>Nome do Vendedor</th>
                        <th>Email do Vendedor</th>
                        <th>Data da Venda</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendas as $v) 
                    <tr>
                        <td>{{$v->id}}</td>
                        <td>R$ {{$v->valor_venda}}</td>
                        <td>R$ {{$v->comissao}}</td>
                        <td>{{$v->vendedor->id}}</td>
                        <td>{{$v->vendedor->nome}}</td>
                        <td>{{$v->vendedor->email}}</td> 
                        <th>{{$v->created_at}}</th>
                        <td>
                            <!--a href="javascript: if(confirm('Tem certeza que deseja Excluir?')) 
                                location.href='/os/deletar/'">                           
                                <button class="btn btn-danger"><i class="medium material-icons" style="font-size: 1.2em">close</i>Excluir</button>
                            </a> 
                            <td>
                            <a href="javascript: if(confirm('Clique em OK para Confirmar')) 
                                location.href='/os/update/'">                           
                                <button class="btn btn-danger"><i class="medium material-icons" style="font-size: 1.2em">close</i>Concluído</button>
                            </a>            
                            <a href="/os/detalhes/">
                                <button class="btn btn-info">Ver Detalhes</button>
                            </a!-->
                        </td>
                        @endforeach;
                    </tr>  
                </tbody>
            </table>
        </div>
        </center>
    </body>
@endsection