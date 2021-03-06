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
    <form action="/vendedor/novo" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <div class="col-sm-8">
            <label><b>Informe o nome do Vendedor</label><br>
            <input type="text" class="form-control" name="nome" required><br>
        </div>
        <div class="col-sm-8">
            <label><b>Email do vendedor</label>
            <input type="email" class="form-control" name="email" required><br>
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>
</div>
</center>
</body>
</html>
@endsection