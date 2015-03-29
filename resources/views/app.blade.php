<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<title>Document</title>
</head>

<body>
	@include('partials.nav')

	<div class="container">

			@yield('content')

	</div>
   	

   	<script src="{{ asset('js/app.js') }}"></script>
   	
   	@yield('footer')
</body>
</html>
