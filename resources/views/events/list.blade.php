<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layouts.main')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/list/list.css">
    <title>@section('title', 'Name')</title>
</head>
<body>
    @section('content')
        <main id="mainList"> 
            @foreach($events as $event)
            <a href="/events/list/{{$event->id}}">
                <div id="cards">
                    @if($event->image)    
                        <img src="/img/events/{{$event->image}}" alt="image of event">
                    @endif
                    <h4 id="titleEventColor">{{$event->title}}</h4>
                    <h5>{{$event->description}}</h5>
                </div>
            </a>
            @endforeach
        </main>
    @endsection
</body>
</html>