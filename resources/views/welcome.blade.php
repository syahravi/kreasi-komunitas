<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <meta name="csrf_token" value="{{ csrf_token() }}"/> --}}

        <title>Kreasi Komunitas</title>

        @livewireStyles
    </head>
    <body>
        <div style="text-align: center">
            <a href="/sign-in">Sign In</a>
            <a href="/sign-up">Sign Up</a>
        </div> 
        @livewire('counter')
        @livewireScripts
    </body>
</html>
