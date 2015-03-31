<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="5-page-template">
    <meta name="author" content="Shane Lawes">
	<link href="{{ asset('../css/style.css') }}" rel="stylesheet">

	<title>Document</title>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<div class="logo">
	  <a  href="/"><img class="img-responsive" src="{{ asset('img/logo.jpg') }}"  alt=""></a>
	</div>

	@include('partials.nav')

	<div class="pad-30"></div>

		<div class="container">

			@if(Session::has('flash_message'))
			    <div class="alert alert-info">
					{{ Session::get('flash_message') }}
			    </div>
			@endif

				@yield('content')

		</div>
	   	

	   	<script src="{{ asset('js/app.js') }}"></script>
	   	
	   	@yield('footer')

</body>
</html>
