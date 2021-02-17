    @extends('layouts.main')
    <link rel="stylesheet" href="/css/home/home.css">

    @section('titlegreat', 'New title')
    @section('content')
        <section>
            <div id="searchForm">
                <form action="" method="get">
                    <input type="text" placeholder="Pesquisar Evento">
                    <button>Pesquisar Evento</button>
                </form>
            </div>
        </section>
    @endsection