<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layouts.main')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title', 'Name')</title>
</head>
<body>
    @section('content')
    <h1>Criar Eventos</h1>
        <form action="" method="post">
            <input type="text" name="TitleEvent"
                placeholder="Digite aqui o nome do seu evento"
            >
            <button type="submit">Enviar</button>
        </form>

    @endsection
</body>
</html>










