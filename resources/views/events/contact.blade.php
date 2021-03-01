<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layouts.main')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title', 'Name')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/create-events/create.css">
</head>
<body>
    @section('content')
         <h1>Hello</h1>
    @endsection
</body>
</html>



