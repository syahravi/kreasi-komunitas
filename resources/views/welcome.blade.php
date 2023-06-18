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
            <a href="{{ route('sign-in') }}">Masuk</a>
            <a href="{{ route('sign-up') }}">Mendaftar</a>
        </div> 
        @livewire('counter')
        @livewireScripts
    </body>
</html>
