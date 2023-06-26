<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kreasi Komunitas | Mewarnai digital dengan hati</title>

    </head>
    <body>
        <div style="text-align: center">
            <a href="{{ route('sign-up') }}">Mendaftar</a>
            <hr>
            <a href="{{ route('sign-in') }}">Masuk</a>
            <hr>
            <a href="{{ route('profiles') }}">Username</a>
        </div>
    </body>
</html>
