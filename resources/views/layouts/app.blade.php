<!doctype html>
<html class="fixed has-top-menu">
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
		<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" />

		{{-- *Skin CSS --}}
		<link rel="stylesheet" href="{{ asset('css/theme.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/default.css') }}" />

		{{-- *Kreasi Komunitas CSS --}}
		<link rel="stylesheet" href="css/custom.css">

	</head>
	<body>
		<section class="body">

            @include('layouts.header')
            
			<div class="inner-wrapper">
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Profile</h2>

						<div class="right-wrapper text-end">
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>
					<h1>Iya bagus..</h1>

                    @include('layouts.sidebar')
				</section>
			</div>
		</section>

		<!-- Vendor -->
		<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

	</body>
</html>