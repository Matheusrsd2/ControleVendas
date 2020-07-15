@extends('layouts.app')

@section('content')
<head>
    <style>
    div#pagination{
        position: absolute;
        left: 440px;
    }
    </style>
</head>
<body>
    <center>
        <div id="card" class="card col-sm-5 p-0 mb-2 text-dark">
            <div class="card-body">
                <h6>Total de Vendas deste Vendedor: {{$count}} </h6> 
            </div>
        </div>
        @foreach($vendedor as $v)
            <div id="card" class="card col-sm-8 p-1 mb-1 text-dark">
                <div class="card-body">
                <img src=" {{asset('img/check.jpg')}}" height="90px" width="90px" style="position:absolute; left:520px;">
                    <p style="position: absolute; font-size: .9em;">Vendedor: {{$v->nome}}</p><br>
                    <p style="position: absolute; font-size: .9em;">Data da Venda: {{$v->data}}</p><br>
                    <p style="position: absolute; font-size: .9em;">Código da Venda: {{$v->id}}</p><br>
                    <p style="position: absolute; font-size: .9em;">Valor da Venda: R$ {{$v->valor_venda}}</p><br>
                    <p style="position: absolute; font-size: .9em;">Comissão (centavos após o ponto): R$ {{$v->comissao}}</p><br>
                </div>          
            </div> 
        @endforeach <br>
    </center>
</body>

@endsection