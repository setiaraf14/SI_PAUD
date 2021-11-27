<!DOCTYPE HTML>
<html>
<head>
<title>Bani Islam Murida @yield('title')</title>
{{-- <link href="{{ asset('template-frontend/css/bootstrap.css') }}" rel='stylesheet' type='text/css' /> --}}

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- jQuery (necessary JavaScript plugins) -->
<script src="{{ asset('template-frontend/js/bootstrap.js') }}"></script>
<!-- Custom Theme files -->
<link href="{{ asset('template-frontend/css/style.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Adventure Gaming  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />\

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="js/jquery.min.js"></script>

</head>
<body>
<!-- header -->
<div class="header">
	 <div class="container">
		 <div class="headr-left">
			 <div class="social">							
				<a href="#"><i class="facebook"></i></a>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		 <div class="headr-right">
			 <div class="details">
				 <ul>
					 <li><a href="mailto@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info(at)example.com</a></li>
					 <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+1)000 123 456789</li>
				 </ul>
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!--banner-info-->	
<div class="banner-info">
	  <div class="container">
		  <div class="logo">
				 <h1><a href="index.html">Yayasan Islam Bani Murida</a></h1>
		  </div>
		 <div class="top-menu">
		     <span class="menu"></span>
				<ul class="nav1">
					<li><a href="{{ url('/') }}" class="@yield('beranda')"><b>Beranda</b></a></li>
					<li class="@yield('pendaftaran')"><a href="{{ url('pendaftaran') }}"><b>Pendaftaran</b></a></li>
					@if(Auth::check()) 
						<a class="btn btn-danger text-white" href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();"  style="border-radius: 25px">
						{{ __('Logout') }}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							@csrf
						</form>
					@else
						<li><a href="{{ route('register') }}"><b>Register Wali</b></a></li>
						<li><a href="{{ route('login') }}"><b>Login</b></a></li>
					@endif
			  </ul>
		 </div>	
<!-- script-for-menu -->
					<script>
						 $( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						// Animation complete.
							});
							});
					</script>
				<!-- /script-for-menu -->		 
		 <div class="clearfix"></div>
	 </div>
</div>
<!-- banner -->
<div class="banner">		  			
		<div class="bnr2">						  
	   </div>			 
</div>
<!-- About -->
<div class="about">
	 @yield('content')
</div>
<!-- footer -->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-12 ftr-info">
				 <p>Sed faucibus mollis laoreet. Sed vehicula faucibus tristique lectus a orci molestie finibus. 
				 Suspendisse pharetra, metus sed rutrum pretium.</p>
			 </div>	
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p>W3layouts</p>
	 </div>
</div>
<!---->

</body>
</html>