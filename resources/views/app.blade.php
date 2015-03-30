<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="{{ asset('../css/style.css') }}" rel="stylesheet">

	<title>Document</title>
</head>

<body>
	<div class="logo">
	  <a  href="/"><img class="img-responsive" src="{{ asset('img/logo.jpg') }}"  alt=""></a>
	</div>

	@include('partials.nav')

	<div class="container">

		@yield('content')

	</div>
   	

   	<script src="{{ asset('js/app.js') }}"></script>
   	
   	@yield('footer')

</body>
</html>
