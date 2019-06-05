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
	<link rel="stylesheet" href="{{ asset('styles/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('styles/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('styles/css/flaticon.css') }}" />
	<link rel="stylesheet" href="{{ asset('styles/css/owl.carousel.css') }}" />
	<link rel="stylesheet" href="{{ asset('styles/css/style.css') }}" />
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
					<img src="img/logo.png" alt="">
				</a>
				<div class="user-panel">
					<a href="{{ url('login') }}">Login</a><span>/</span><a href="{{ url('create') }}">Register</a>
				</div>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<ul class="main-menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="upload.php">Upload</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{ asset('styles/img/page-top-bg.jpg') }}">
		<div class="container text-white">
			<h3>Register Today!</h3>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Registration form  -->
	<section class="reg-section spad set-bg" data-setbg="{{ asset('styles/img/bg-registration-form.jpg') }}">
		<div class="container">
			<div class="row">
			<!-- <div class="wrapper"> -->
				<div class="inner">
					<div class="col-lg-5 image-holder">
						<figure class="pt-lg-0 pt-5">
							<img src="{{ asset('styles/img/registration-form.jpg') }}" alt="">
						</figure>
					</div>
					<!-- <div class="image-holder">
						<img src="img/registration-form-1.jpg" alt="">
					</div> -->
					<form role='form' class="col-lg-7" method = "post" action="{{ url('create') }}">
						{{ csrf_field() }}
						<h3>Registration Form</h3>
						<div class="form-wrapper">
							<input type="text" name = "full_name" placeholder="Full name" class="form-control">
						</div>
						<div class="form-wrapper">
							<input type="text" name = "username" placeholder="Username" class="form-control">
						</div>
						<div class="form-wrapper">
							<input type="text" name = "email" placeholder="Email Address" class="form-control">
						</div>
						<div class="form-wrapper">
							<input type="text" name = "department" placeholder="Department" class="form-control">
						</div>
						<div class="form-wrapper">
							<input type="password" name = "password" placeholder="Password" class="form-control">
						</div>
						<div style="text-align: center;">
							<button type = "submit" name = "register" class = "site-btn">Register</button>
						</br>
							<p> Already a member? <a href = "{{ url('login') }}">Sign in</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Registration form end -->

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
					<ul class="footer-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="upload.php">Upload</a></li>
						<li><a href="about.php">About us</a></li>
						<li><a href="news.php">News</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					<div class="footer-logo">
						<a href="#">
							<img src="{{ asset('styles/img/footer-logo.png') }}" alt="">
						</a>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<p class="text-white  text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>	
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