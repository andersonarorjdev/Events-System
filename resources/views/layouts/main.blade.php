<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <nav>
            <div id="logoNavbar">
                <a href="/"><h1>Events</h1></a>
            </div>

            <div id="mainMenu">             
                <a href="/events/list">List Events</a>
                <a href="/events/create">Create Event</a>
                <a href="/About">About Us</a>    
                <a href="/contact">Contact US</a>
            </div>

            <button>Login</button>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
    
    <footer>
        <span>
            Events &copy; 
        </span>
        <span>
            Events All Rights Reseverd
        </span>
        <span>
            Events <?= date("Y")?>
        </span>
    </footer>
</body>
</html>