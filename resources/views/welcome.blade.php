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
    <link rel="shortcut icon" type="image/x-icon" href="{{ Vite::img('profile.jpg') }}">
    {{-- ?Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>
	<body>	
	</body>
</html>
