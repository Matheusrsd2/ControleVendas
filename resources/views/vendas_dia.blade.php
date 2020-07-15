@extends('layouts.app')

@section('content')
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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sendmail">
            Enviar Relatório
        </button>
    <div id="card" class="card col-sm-11 p-3 mb-2 text-dark"  style="position:absolute; left:5%">
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
                        <th>{{$v->data}}</th>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="sendmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <form action="/venda/sendmail" method="post">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Informe o email para enviar o relatório</h4>
                    </div>
                    <div class="modal-body">
                        <input type="email" name="email" required>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</center>
</body>

@endsection