<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>AL-QAISAR - شركة القيصر للتجارة والمقاولات</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />


		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<!-- Bootstrap  -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

		<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700" rel="stylesheet">

		<!-- Animate.css -->
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
		

		<!-- Magnific Popup -->
		<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

		<!-- Flexslider  -->
		<link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">

		<!-- Owl Carousel -->
		<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

		<!-- Flaticons  -->
		<link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">

		<!-- Theme style  -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

		<!-- Modernizr JS -->
		<script src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="{{ asset('assets/js/respond.min.js') }}"></script>
		<![endif]-->

		</head>
		<body>

		<div class="colorlib-loader"></div>

		<div id="page">
			<nav class="colorlib-nav" role="navigation">

        <!-- Code for Desktop View -->
<div class="top-menu desktop-view">
	<div class="container">
		<div class="row">
			<div class="col-xs-3">
 <div class="column"> 
			<div>
				<div id="logo-container">
					<img src="{{ asset('assets/images/logo.png') }}" alt="First Logo">
					<div id="colorlib-logo">
						  <a href="/"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; AL-QAISAR</a>


					</div>
				</div>
			</div>
			
			
			<div>
				<div id="logo-container">
					
					<div id="colorlib-logo">
						  <a class="arabic-text" href="/">    شركة القيصر للتجارة والمقاولات</a>


					</div>
				</div>
			</div>
			
			</div>
			</div>
			
			
			
			<div class="col-xs-9 text-right menu-1">
			    <div class="column">
			       <div>
			              .
			       </div> 
			        <div>
				<Ul>
					<li><a href="/">Home</a></li>
					<li><a href="/about">About</a></li>
					<li><a href="/services">Services</a></li>
					<li><a href="/projects">Projects</a></li>
					<!-- <li><a href="/blog">Blog</a></li> -->

					<li><a href="/contact">Contact</a></li>
				</ul>
			        </div>
			    </div>

			</div>
		</div>
	</div>
</div>

<!-- Code for Mobile View -->
<div class="top-menu mobile-view">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
					
 <div class="column"> 
			<div>
				<div id="logo-container">
					<img src="{{ asset('assets/images/logo.png') }}" alt="First Logo">
					<div id="colorlib-logo">
						  <a href="/"> &nbsp; &nbsp; &nbsp; AL-QAISAR</a>


					</div>
				</div>
			</div>
			
			
			<div>
				<div id="logo-container">
					
					<div id="colorlib-logo">
						  <a class="arabic-text" href="/">    شركة القيصر للتجارة والمقاولات</a>


					</div>
				</div>
			</div>
			
			</div>
					
					
		</div>
		
			<div class="col-xs-9 text-right menu-1">
			    
				<Ul>
					<li><a href="/">Home</a></li>
					<li><a href="/about">About</a></li>
					<li><a href="/services">Services</a></li>
					<li><a href="/projects">Projects</a></li>
					<!-- <li><a href="/blog">Blog</a></li> -->

					<li><a href="/contact">Contact</a></li>
				</ul>
			    </div>

			</div>
		
		
		
	</div>
</div>

<style>


.logo-text{
    font-size:20px;
}

/* Styles for Desktop View */
@media (max-width: 767px) {
	.top-menu.desktop-view {
		display: none;
	}
}

/* Styles for Mobile View */
@media (min-width: 768px) {
	.top-menu.mobile-view {
		display: none;
	}

	#logo-container {
		display: flex;
		align-items: center;
		justify-content: space-between;
	}

	#colorlib-logo {
		flex-shrink: 0;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}
}
</style>



			</nav>



		@yield('content')



		@if((Route::current()->getName() !== 'login') && (Route::current()->getName() !== 'register'))
		<footer id="colorlib-footer">
			<div class="contact-information">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">

						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row row-pb-md">
				<div class="col-md-3 colorlib-widget">
						<h4>About AL-QAISAR</h4>
						<p>AL-QAISAR is an Engineering, Trading & Construction company well established and operating in Qatar providing engineering services in Qatar. since 2005</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="https://twitter.com/alqaisartrading"><i class="icon-twitter"></i></a></li>
								<li><a href="https://www.facebook.com/profile.php?id=100094503848372"><i class="icon-facebook"></i></a></li>
								<li><a href="https://wa.me/+97431327711"><i class="icon-whatsapp"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 col-md-push-1 colorlib-widget">
						<h4>Core Area</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> Designing</a></li>
								<li><a href="#"><i class="icon-check"></i> Planning</a></li>
								<li><a href="#"><i class="icon-check"></i> Maintenance</a></li>
								<li><a href="#"><i class="icon-check"></i> Construction</a></li>


							</ul>
						</p>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Gallery</h4>
						<div class="instagram">
							<a href="#" class="insta-img" style="background-image: url(assets/images/building-1.jpg);"></a>
							<a href="#" class="insta-img" style="background-image: url(assets/images/building-2.jpg);"></a>
							<a href="#" class="insta-img" style="background-image: url(assets/images/building-3.jpg);"></a>
							<a href="#" class="insta-img" style="background-image: url(assets/images/building-4.jpg);"></a>
							<a href="#" class="insta-img" style="background-image: url(assets/images/building-5.jpg);"></a>
							<a href="#" class="insta-img" style="background-image: url(assets/images/building-6.jpg);"></a>
						</div>
					</div>
					<div class="col-md-3 col-md-push-1 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>Street No 891 Thakira Road, <br> Alkhor, Doha-Qatar 60560</li>
							<li><a href="tel://+97474051111"><i class="icon-phone"></i>  +974 74051111, +974 31327711</a></li>
							<li><a href="mailto:info@al-qaisar.com"><i class="icon-envelope"></i>info@al-qaisar.com</a></li>
							<li><a href="/"><i class="icon-globe"></i>al-qaisar.com</a></li>
						</ul>
					</div>
				</div>
			</div>

		</footer>
		@endif
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
	<!-- Owl carousel -->
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/magnific-popup-options.js') }}"></script>
	<!-- Counters -->
	<script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('assets/js/main.js') }}"></script>

	</body>
</html>

