<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="fixed">
	<head>

		{{-- *Basic --}}
		<meta charset="UTF-8">

		<meta name="keywords" content="@yield('keywords', 'Komunitas')" />
		<meta name="description" content="@yield('description', 'Kreasi Komunitas, platform sosial media mahasiswa.')">
		<meta name="author" content="Syahravi">
		<title>@yield('title')</title>

		{{-- *Mobile Metas --}}
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		{{-- *Web Fonts --}}
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		{{-- *Vendor CSS --}}
		<link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/vendor/font-awesome/css/all.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/vendor/boxicons/css/boxicons.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/vendor/theme.css') }}" />

		{{-- *Skin CSS --}}
		<link rel="stylesheet" href="{{ asset('css/default.css') }}" />

		{{-- *Kreasi Komunitas CSS --}}
		<link rel="stylesheet" href="css/custom.css">

	</head>
	<body>
		@yield('content')
	</body>
</html>