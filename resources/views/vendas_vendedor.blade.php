@extends('layouts.app')

@section('content')

<body>
    @foreach($vendedor as $v)
        <center>
            <div id="card" class="card col-sm-5 p-0 mb-2 text-dark">
                <div class="card-body">
                    <h3>Vendedor: {{$v->nome}}</h3>
                    <h3>Vendas:</h3> 
                </div>
            </div>
        
            @foreach ($v->vendas as $vendas)
                <div id="card" class="card col-sm-8 p-1 mb-1 text-dark">
                    <div class="card-body">
                        <h6>Data da Venda: {{$vendas->hora}}</h6>
                        <h6>Código da Venda: {{$vendas->id}}</h6>
                        <h6>Valor da Venda: R$ {{$vendas->valor_venda}}</h6>
                        <h6>Comissão (centavos após o ponto): R$ {{$vendas->comissao}}</h6>
                    </div>          
                </div>
            @endforeach
        </center>
    @endforeach
</body>

@endsection