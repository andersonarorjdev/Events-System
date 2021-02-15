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
            <a href="/products">First</a>
            <a href="/">Refresh</a>
        </nav>
    </header>

    @yield('content')
    
    <footer>
        Footer &copy; 
    </footer>
</body>
</html>