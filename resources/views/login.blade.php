<!DOCTYPE html>
<html lang="en">
<head>
	<title>Smart Notice Board</title>
	<meta charset="UTF-8">
	<meta name="description" content="Smart Noticeboard Project">
	<meta name="keywords" content="noticeboard, final project, innovative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet"  href="{{ asset('styles/css/bootstrap.min.css') }}" />
	<link rel="stylesheet"  href="{{ asset('styles/css/font-awesome.min.css') }}" />
	<link rel="stylesheet"  href="{{ asset('styles/css/flaticon.css') }}"/>
	<link rel="stylesheet"  href="{{ asset('styles/css/owl.carousel.css') }}" />
	<link rel="stylesheet"  href="{{ asset('styles/css/style.css') }}" />


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="container">
				<a href="#" class="site-logo">
					<img src="{{ asset('styles/img/Logo.jpg') }}" alt="">
				</a>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<ul class="main-menu">
					<li><a href="{{url('/index')}}">Home</a></li>
					<li><a href="{{url('/upload')}}">Upload</a></li>
					<li><a href="{{url('/about')}}">About us</a></li>
					<li><a href="{{url('/news')}}">News</a></li>
					<li><a href="{{url('/contact')}}">Contact</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->

		<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{ asset('styles/img/Background.jpg') }}">
		<div class="container text-white">
			<h3>Login In!</h3>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Login form  -->
	<section class="login-section spad set-bg" data-setbg="{{ asset('styles/img/Background_form.jpg') }}">
		<div class="container">
			<div class="row">
			<!-- <div class="wrapper"> -->
				<div class="inner">
					<div class="col-lg-5 image-holder">
						<figure class="pt-lg-0 pt-5">
							<img src="{{ asset('styles/img/login-form.jpg') }}" alt="">
						</figure>
					</div>
					<form role='form' class="col-lg-7 login-form" method = "post" action = "{{ url('loginuser') }}">
                        {{ csrf_field() }}
						<div class="form-wrapper">
							<input type="text" name = "username" placeholder="Username" class="form-control">
						</div>
						<div class="form-wrapper">
							<input type="password" name = "password" placeholder="Password" class="form-control">
						</div>
						<div style="text-align: center;">
							<button type = "submit" name = "login" class = "site-btn">Log in</button>
						<br>
						<p> Not yet a member? <a href = "{{ url('register') }}">Register</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Login form end -->

	<!-- Footer section -->
	<footer class="footer-section spad pb-0">
			<div class="container">
				<div class="footer-bottom">
					<div class="social">
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-dribbble"></i></a>
						<a href=""><i class="fa fa-behance"></i></a>
						<a href=""><i class="fa fa-linkedin"></i></a>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<p class="text-white  text-center">
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |</a>
						</p>	
					</div>
					
				</div>
			</div>

		</footer>
		<!-- Footer section end -->


		<!--====== Javascripts & Jquery ======-->
		<script src="{{ asset('styles/js/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ asset('styles/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('styles/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('styles/js/circle-progress.min.js') }}"></script>
		<script src="{{ asset('styles/js/main.js') }}"></script>


</body>
</html>