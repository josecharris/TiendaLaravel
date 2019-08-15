<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Store')</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" >
    <link rel="stylesheet" href="{{ asset('plugins/fonts/css/all.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" >
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Slabo+27px&display=swap" rel="stylesheet">

</head>
<body>
    @include('store.partials.nav')
    @yield('content')
    @include('store.partials.footer')

    <script src="{{ asset('plugins/bootstrap/jquery/jquery.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{ asset('js/pinterest_grid.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>