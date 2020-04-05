<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
	  @yield('title')

	  <!-- CSRF Token -->
	  <meta name="csrf-token" content="{{ csrf_token() }}">
	  <!-- Scripts -->
	  <script src="{{ asset('js/app.js') }}" defer></script>
	  <!-- Style --> 
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	  <!-- Style Sheet -->
	  <link rel="stylesheet" href={{asset('css/app.css')}}>
	</head>
	<body>
		<main>
			<div class="wrapper fadeInDown">
				<div id="formContent">
					@yield('content')
				</div>				
			</div>			
		</main>		
	</body>
</html>