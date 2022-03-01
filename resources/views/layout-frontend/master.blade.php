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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<div class="header">
	 <div class="container">
		 <div class="headr-left">
			 <div class="social">							
				<img src="{{ asset('image/logo_bani.png')}}" class="img-circle elevation-2" width="100" alt="User Image" style="width: 30%; border-radius: 50%;">
			 </div>
			 <div class="clearfix"></div>
		 </div>
		 <div class="headr-right">
			 <div class="details">
				 <ul>
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
						@if(Auth::user()->user_role == "admin")
							<li><a href="{{ url('/backend') }}"><b>Dashboard</b></a></li>
						@endif
						<li class="@yield('pendaftaran')"><a href="{{ url('pendaftaran/list-calon-siswa') }}"><b>Pembayaran</b></a></li>
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
				
			 </div>	
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p>Yayasan Islam Bani Murida</p>
	 </div>
</div>
<!---->

</body>
</html>