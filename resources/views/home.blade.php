@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <body>
    <center>
        <div id="card" class="card col-sm-11 p-3 mb-2 bg-primary text-dark">
            <div class="card-body">
                <a href="/cadastrar/vendedor">
                <button class="btn btn-secondary">Cadastrar novo vendedor</button>
                </a>
                <a href="/criar/venda">
                <button class="btn btn-secondary">Informar Nova Venda</button>
                </a>
            </div>
            <table class="table table-light table-hover">
                <thead class="thead thead-secondary"> 
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendedor as $v) 
                    <tr>
                        <td>{{$v->id}}</td>
                        <td>{{$v->nome}}</td>
                        <td>{{$v->email}}</td> 
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
    </body>
@endsection