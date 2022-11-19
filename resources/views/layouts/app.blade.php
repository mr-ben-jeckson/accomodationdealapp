<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body style="background-image: url('{{ asset('img/bg-wave~1.gif') }}'); background-size: cover; background-attachment: fixed;">
    <header>
        @include('layouts.nav')
    </header>
    @yield('content')
</body>
</html>