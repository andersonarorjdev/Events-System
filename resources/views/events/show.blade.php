<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layouts.main')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/show/show.css">
    <title>{{$event->title}}</title>
</head>
<body>
    @section('content')
        <main id="mainShow">
            <a href="/events/list">Voltar</a> 
            <img src="/img/events/{{$event->image}}" alt="">
            <h1>{{$event->title}}</h1>
            <h1>{{$event->description}}</h1>
            <h1>{{$event->city}}</h1>
            <h2>{{$event->date}}</h2>
            @if($event->private)
                <h1>O evento é privado</h1>
            @else
                <h1>O evento não é privado</h1>
            @endif
            
            @foreach($event->items as $item)
                <h5>{{$item}}</h5>
            @endforeach
        </main>
    @endsection
</body>
</html>