<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{asset('adminkit-main/static/img/icons/icon-48x48.png')}}" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

	<title>@yield('title')</title>

	<link href="{{asset('adminkit-main/static/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('gunjek.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
        @include('templates.sidebar')
		<div class="main">
			@include('templates.navbar')
			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3"><strong>@yield('subjudul1')</strong> @yield('subjudul2')</h1>
                    @yield('content')
				</div>
			</main>
			@include('templates.footer')
		</div>
	</div>

	<script src="{{asset('adminkit-main/static/js/app.js')}}"></script>
	<script src="{{ asset('gunjek.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>