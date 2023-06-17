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
        @livewire('counter')
        @livewireScripts
    </body>
</html>
