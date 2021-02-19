    @extends('layouts.main')
    <link rel="stylesheet" href="/css/home/home.css">

    @section('titlegreat', 'New title')
    @section('content')
        <main>
            @if(session('msg'))
                <p>{{session('msg')}}</p>
            @endif
            
            <section id="searchForm">
                <form action="/" method="get">
                    <div id="inputWithButton">
                        <input type="text" name="search" placeholder="Pesquisar Evento">
                        <button>Pesquisar Evento</button>
                    </div>
                </form>

                
            </section>
            <section id="searchResults">
                @if($search)
                    <h1>Buscando por: "{{$search}}"</h1>
                    @if($eventsCount > 0)
                    <h3>Foram encontrados {{$eventsCount}} resultados para {{$search}}</h3>
                        <div id="Cards">
                            @foreach($events as $event)
                                <div id="Card">
                                    <h1>{{$event->title}}</h1>
                                    <h4>{{$event->description}}</h4>
                                </div>
                            @endforeach
                        </div>
                    @else
                    <h1>Não foram encotrados resultados para {{$search}}</h1>
                    @endif
                @endif
            </section>       
    </main>
    @endsection