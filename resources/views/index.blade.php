    @extends('layouts.main')
    <link rel="stylesheet" href="/css/home/home.css">

    @section('titlegreat', 'New title')
    @section('content')
        <section>
            @if(session('msg'))
                <p>{{session('msg')}}</p>
            @endif
            
            <div id="searchForm">
                <form action="/" method="get">
                    <input type="text" name="search" placeholder="Pesquisar Evento">
                    <button>Pesquisar Evento</button>
                </form>

                @if($search)
                    <h1>Buscando por: {{$search}}</h1>
                    @foreach($events as $event)
                        <h1>{{$event->title}}</h1>
                        <h4>{{$event->description}}</h4>
                    @endforeach
                @else

                @endif
            </div>
           
        </section>
    @endsection