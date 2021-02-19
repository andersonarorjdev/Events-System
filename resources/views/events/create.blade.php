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
            <section id="leftSection">
                    <label for="title">Nome do evento</label>
                    <input type="text" id="title" name="title" required placeholder="Digite aqui o nome do seu evento">

                    <label for="city">Cidade do evento</label>
                    <input type="text" id="city" name="city" placeholder="Digite a sua cidade" title="Esse campo precisa ser preenchido" required>

                    <label for="category">Categoria do Evento</label>
                    <input type="text" id="category" name="category" placeholder="categoria" title="Esse campo precisa ser preenchido" required>
                    
                    <label for="descricao">Fale mais sobre o evento</label>
                    <textarea name="description" id="descricao" cols="30" title="Esse campo precisa ser preenchido" rows="10"
                         placeholder="Como será o evento?" required
                    ></textarea>
            </section>

            <section id="rightSection">
                <div class="inputsLabel">
                    <label for="image">Carregue aqui a imagem do seu evento</label>
                    <input type="file" name="image"  id="image">
                </div>
                <div class="inputsLabel">
                    <label for="date">Selecione a data do evento</label>
                    <input type="date" name="date" id="date" />
                </div>
                    <div id="Selections">
                        <div>
                            <input class="checkbox" type="checkbox" name="items[]" value="Cerveja" id="cerveja">
                            <label for="cerveja">Cerveja gratuita</label>
                        </div>
                        <div>
                            <input class="checkbox" type="checkbox" name="items[]" value="palco" id="palco" >
                            <label for="palco">Palco</label>
                        </div>
                    </div>  
                <div class="inputsLabel">
                    <label for="private">O evento será privado?</label>
                    <select name="private" id="private">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </div>
                <div>
                    <button type="submit">Enviar</button>
                </div>
            </section>
        </form>

    @endsection
</body>
</html>










