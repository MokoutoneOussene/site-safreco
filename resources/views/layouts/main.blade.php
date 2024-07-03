<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SAFRECO SARL</title>

    <!-- icon -->
    <link rel="icon" href="{{ asset('img/Design_sans_titre.png') }}" type="image/x-icon">

    @include('layouts.style')
</head>

<body style="background-color: white; font-family: 'Century gothic';">

    @include('layouts.topbar')

    <saction>
        @yield('content')
    </saction>

    @include('layouts.footer')

    @include('layouts.js')

</body>

</html>
