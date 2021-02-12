    <?php
        $hello = ['anderson', 'Rogério', 'de', 'Oliveira', 'Rodrigues', 'Junior'];
    ?>
    
    <style>
        li{
            color:red;
        }
    </style>

    <h1>The name is {{$name}}</h1>
    @foreach($hello as $word)
            <ul>
                <li>{{$word}}</li>
            </ul>
    @endforeach
