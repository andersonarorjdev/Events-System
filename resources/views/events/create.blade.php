<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layouts.main')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title', 'Name')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/create-events/create.css">
</head>
<body>
    @section('content')
            <h1>Criar Eventos</h1>
        <form action="/events" enctype="multipart/form-data" method="post">
            @csrf
            <input type="file" name="image"  id="image">
            <input type="text" name="title" required title="Esse campo precisa ser preenchido"
                placeholder="Digite aqui o nome do seu evento"
            >
            <input type="text" name="city" placeholder="Digite a sua cidade" title="Esse campo precisa ser preenchido" required>
            <input type="text" name="category" placeholder="categoria" title="Esse campo precisa ser preenchido" required>
            <div id="selectWithTextarea">
                <select name="private" id="private">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
                <input type="date" name="date" id="" />
                <div>
                    <textarea name="description" id="descricao" cols="30" title="Esse campo precisa ser preenchido" rows="10"
                         placeholder="Como será o evento?" required
                     ></textarea>
                </div>
                <div>
                    <label for="cerveja">Cerveja gratuita</label>
                    <input type="checkbox" name="items[]" value="Cerveja" id="cerveja">
                    <label for="palco">Palco</label>
                    <input type="checkbox" name="items[]" value="palco" id="palco" >
                </div>
               
            </div>
            <button type="submit">Enviar</button>
        </form>

    @endsection
</body>
</html>










