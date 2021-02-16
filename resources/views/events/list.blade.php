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
    @section('titlegreat', 'New title')
    @section('content')

    @foreach($events as $event)
        <h4>{{$event->title}}</h4>
        <h5>{{$event->description}}</h5>
    @endforeach
    @endsection
</body>
</html>