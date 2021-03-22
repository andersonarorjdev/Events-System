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
        <div id="backButton">
            <a href="/events/list">Voltar</a> 
        </div>
        <main id="mainShow">
            <section>
                <img src="/img/events/{{$event->image}}" alt="Event Image" />
            </section>
            <section>
                <h3> Dono do evento:{{$user['name']}}</h3>
                <h3>{{$event->title}}</h3>
                <h3>{{$event->description}}</h3>
                <h3>{{$event->city}}</h3>
                <h3>{{$event->date}}</h3>
                @if($event->private)
                    <h3>O evento é privado</h3>
                @else
                    <h3>O evento não é privado</h3>
                @endif
                
                @foreach($event->items as $item)
                    <h3>{{$item}}</h3>
                @endforeach
            </section>
        </main>
    @endsection
</body>
</html>