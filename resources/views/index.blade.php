    @extends('layouts.main')
    <link rel="stylesheet" href="/css/home/home.css">

    @section('titlegreat', 'New title')
    @section('content')
        <section>
            @if(session('msg'))
                <p>{{session('msg')}}</p>
            @endif
            
            <div id="searchForm">
                <form action="" method="get">
                    <input type="text" placeholder="Pesquisar Evento">
                    <button>Pesquisar Evento</button>
                </form>
            </div>
        </section>
            @if(count($events) == 0)
                <h1>Não há eventos disponiveis!</h1>
            @else
                <h1>Há eventos disponiveis, consulte a página de eventos</h1>
            @endif
    @endsection