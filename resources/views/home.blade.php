
@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
<head>
    <script>
		$(document).ready(function(){
			$('#myModal').modal('show');
		});
	</script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <center>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#verificar">
            Verificar todas as Vendas do Dia 
        </button>
        <div id="card" class="card col-sm-11 p-3 mb-2 text-dark" style="position:absolute; left:5%">
            <div class="card-body">
                <a href="/cadastrar/vendedor">
                    <button class="btn btn-info">Cadastrar novo vendedor
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </button>  
                </a>
                <a href="/cadastrar/venda">
                    <button class="btn btn-info">Informar Nova Venda
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                    </button>
                </a>
            </div>
            <h3 style="font-family: 'Noto Sans JP', sans-serif;"><b>HISTÓRICO DE VENDAS</b></h3>
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
                        <th>{{$v->data = \Carbon\Carbon::parse()->format('d-m-Y')}}</th>
                        
                        @endforeach
                    </tr>  
                </tbody>
            </table>
        </div>
        <!-- modal -->
        <div class="modal fade" id="verificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <form action="/venda/verificar" method="get">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Informe o dia que deseja</h4>
                        </div>
                        <div class="modal-body">
                            <input type="date" name="data" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Verificar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </center>
	
    </body>

@endsection