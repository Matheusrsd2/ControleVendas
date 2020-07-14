@extends('layouts.app')

@section('content')

<body>
    @foreach($vendedor as $v)
        <center>
            <div id="card" class="card col-sm-10 p-1 mb-2 text-dark">
                <div class="card-body">
                    <h3>Vendedor: {{$v->nome}}</h3>
                    <h3>Vendas:</h3> 
                </div>
            </div>
        
            @foreach ($v->vendas as $vendas)
                <div id="card" class="card col-sm-11 p-3 mb-2 text-dark">
                    <div class="card-body">
                        <h5>Data da Venda: {{$vendas->created_at}}</h5>
                        <h5>Código da Venda: {{$vendas->id}}</h5>
                        <h5>Valor da Venda: R$ {{$vendas->valor_venda}}</h5>
                        <h5>Comissão: R$ {{$vendas->comissao}}</h5>
                    </div>          
                </div>
            @endforeach;
        </center>
    @endforeach;
</body>

@endsection