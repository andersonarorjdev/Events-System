@extends('layouts.main')

@section('title', 'Name')

@section('titlegreat', 'New title')

@section('content')

@foreach($events as $event)
    <h1>{{$event->title}}</h1>
@endforeach
<a href="/events">Acessar á pagina para criar</a>

@endsection