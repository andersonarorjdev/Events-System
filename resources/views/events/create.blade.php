<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layouts.main')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title', 'Name')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @section('content')
    <h1>Criar Eventos</h1>
        <form action="/events" method="post">
            @csrf
            <input type="text" name="title"
                placeholder="Digite aqui o nome do seu evento"
            >
            <textarea name="description" id="descricao" cols="30" rows="10"
                placeholder="Como será o evento?"
            ></textarea>
            <input type="text" name="city" placeholder="Digite a sua cidade">
            <select name="private" id="private">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
            <input type="text" name="category" placeholder="categoria">
            <button type="submit">Enviar</button>
        </form>

    @endsection
</body>
</html>










