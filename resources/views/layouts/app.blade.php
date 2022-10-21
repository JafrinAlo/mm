<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" > 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css\app.css')}}">
        <title>{{config('app.name','MessManagement')}}</title>
    </head>
    <body>
        @include('user_m.inc.navbar')
        <div class="container">
        @yield('content')
        </div>
    </body>
</html>