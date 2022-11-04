<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mess_Management') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    
     <script src="{{ asset('js/app.js') }}"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
       @include('user_m.inc.navbar')
       @include('user_m.inc.messages')
        <div class="container">
            {{-- @include('user_m.inc.messages') --}}
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    </div>
   
    
</body>

</html>
