<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		{{-- ?Meta --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1>
    <meta name="description" content="{{ env('APP_NAME') }}">
    <meta name="author" content="Syahravi">
    {{-- *Title --}}
		<title>{{ env('APP_NAME') }}</title>
    {{-- ?Favicon --}}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="/site.webmanifest">
    {{-- ?Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>
	<body>	
	</body>
</html>
