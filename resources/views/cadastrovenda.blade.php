@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar novo Artigo</title>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300&family=Piedra&display=swap" rel="stylesheet">
    <style>
        div#form{
            color: white;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
<center>
<div id="form">
    <form action="/venda/novo" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <div class="col-sm-2">
            <label><b>Valor da Venda</label>
            <input type="number" class="form-control" name="valor_venda" step="0.01" required><br>
        </div>
        <div class="col-sm-2">
            <label><b>Informe o ID do Vendedor</label><br>
            <input type="number" class="form-control" name="vendedor_id" required><br>
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>
</div>
</center>
</body>
</html>
@endsection