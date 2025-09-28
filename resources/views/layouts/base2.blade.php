<!doctype html>
<html lang="zxx">
<head>
	<!--Start Title -->
    <title>Glory IT Solutions</title>
    <!--End Title -->

    <!--Start Meta Tag -->
    <meta charset="UTF-8" />
    <meta name="google-site-verification" content="90hrVJ503Vqs0KUy_5H9nswvt2TieKR9Yra6rdhrA8U" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="Glory IT Solutions, gloryitsolutions, IT Solutions Company">
    <meta name="description" content="Glory IT Solutions, gloryitsolutions, IT Solutions Company">
    <meta name="keywords" content="Glory IT Solutions, gloryitsolutions, IT Solutions Company">

    <!--End Meta Tag -->
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="gloryitsolutions/assets/img/logo.jpg">
	<!-- Bootstrap Min CSS -->
	<link rel="stylesheet" href="gloryitsolutions/assets/css/bootstrap.min.css">
	<!-- Animate Min CSS -->
	<link rel="stylesheet" href="gloryitsolutions/assets/css/animate.min.css">
	<!-- FlatIcon CSS -->
	<link rel="stylesheet" href="gloryitsolutions/assets/css/flaticon.css">
	<!-- Font Awesome Min CSS -->
	<link rel="stylesheet" href="gloryitsolutions/assets/css/fontawesome.min.css">
	<!-- Bootstrap Icon CSS -->
	<link rel="stylesheet" href="gloryitsolutions/assets/css/bootstrap-icons.css">
	<!-- Mean Menu CSS -->
	<link rel="stylesheet" href="gloryitsolutions/assets/css/meanmenu.css">
	<!-- Magnific Popup Min CSS -->
	<link rel="stylesheet" href="gloryitsolutions/assets/css/magnific-popup.min.css">
	<!-- Swiper Min CSS -->
	<link rel="stylesheet" href="gloryitsolutions/assets/css/swiper.min.css">
	<!-- Owl Carousel Min CSS -->
	<link rel="stylesheet" href="gloryitsolutions/assets/css/owl.carousel.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="gloryitsolutions/assets/css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="gloryitsolutions/assets/css/responsive.css">
    @stack('styles')
</head>

<body>

	<!-- Start Preloader Section -->
	<div class="preloader">
		<div class="loader">
			<div class="shadow"></div>
			<div class="box"></div>
		</div>
	</div>
	<!-- End Preloader Section -->
	
	<!-- Start Navbar Section -->
	<div class="navbar-section">
		<div class="techvio-responsive-nav index-navber-responsive">
			<div class="container">
				<div class="techvio-responsive-menu">
					<div class="logo">
						<a href="{{url('/')}}">
							<img src="{{asset('gloryitsolutions/assets/img/logo.jpg')}}" class="white-logo" alt="logo">
							<img src="{{asset('gloryitsolutions/assets/img/logo.jpg')}}" class="black-logo" alt="logo">
						</a>
					</div>
				</div>
			</div>
		</div>
        <div class="techvio-nav">
			<div class="container">
				<nav class="navbar navbar-expand-md navbar-light">
					<a class="navbar-brand" href="{{url('/')}}">
						<img src="{{asset('gloryitsolutions/assets/img/logo.jpg')}}" class="white-logo" alt="logo">
						<img src="{{asset('gloryitsolutions/assets/img/logo.jpg')}}" class="black-logo" alt="logo">
					</a>
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
								<a href="{{url('/')}}" class="nav-link">Home</a>
							</li>

							<li class="nav-item {{request()->is('AboutUs*') ? 'active' : ''}}">
								<a href="{{url('/AboutUs')}}" class="nav-link">About Us</a>
							</li>

							<li class="nav-item">
								<a href="{{url('/OurPractices')}}" class="nav-link">Our Practices</a>
							</li>

							<li class="nav-item">
								<a href="#" class="nav-link">Our Services</a>
							</li>

							<li class="nav-item">
								<a href="{{url('/OurClients')}}" class="nav-link">Our Clients</a>
							</li>
							
							<li class="nav-item">
								<a href="{{url('/ContactUs')}}" class="nav-link">Contact Us</a>
							</li>
						</ul></br>
						<div class="other-option1">
							<a class="default-btn" href="{{url('/EDBs')}}"> Enterprise DB's <span></span></a>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- End Navbar Section -->
	
    @yield('content')
	
	<!-- Start Footer & Subscribe Section -->
	<section class="footer-subscribe-wrapper">
		<!-- Start Footer Section -->
		<div class="footer-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<a class="footer-logo" href="#">
								<img src="gloryitsolutions/assets/img/logo.jpg" class="white-logo" alt="logo">
							</a>
							<p align="justify">Innovation and productivity are two key attributes for success and development. It is these characteristics that have helped shape of Glory Corporation’s modern infrastructure and skill set to meet the demands of its customers and partners.</p>
							<ul class="footer-social">
								<li>
									<a href="#"> <i class="fab fa-facebook-f"></i></a>
								</li>
								<li>
									<a href="#"> <i class="fab fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"> <i class="fab fa-youtube"></i></a>
								</li>
								<li>
									<a href="#"> <i class="fab fa-linkedin"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<div class="footer-heading">
								<h3>Useful Links</h3>
							</div>
							<ul class="footer-quick-links">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Our Practices</a></li>
								<li><a href="#">Our Services</a></li>
								<li><a href="#">Our Clients</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
							<div class="footer-heading">
								<h3>Contact Info (BD)</h3>
							</div>
							<div class="footer-info-contact">
								<i class="flaticon-phone-call"></i>
								<h3>Phone</h3>
								<span><a href="tel:+880 1715-000029">+880 1715-000029</a></span>
							</div>
							<div class="footer-info-contact">
								<i class="flaticon-envelope"></i>
								<h3>Email</h3>
								<span><a href="masud@gloryitsolutions.com">masud@gloryitsolutions.com</a></span>
							</div>
							<div class="footer-info-contact">
								<i class="flaticon-placeholder"></i>
								<h3>Address</h3>
								<span>House 19, Road 27, Block J, Banani. A-44, Amin Tower (3 rd Floor), Bazar Road, Savar, Dhaka.</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<div class="footer-heading">
								<h3>Contact Info (USA)</h3>
							</div>
							<div class="footer-info-contact">
								<i class="flaticon-phone-call"></i>
								<h3>Phone</h3>
								<span><a href="tel:+880 1715-000029">+880 1715-000029</a></span>
							</div>
							<div class="footer-info-contact">
								<i class="flaticon-envelope"></i>
								<h3>Email</h3>
								<span><a href="masud@gloryitsolutions.com">masud@gloryitsolutions.com</a></span>
							</div>
							<div class="footer-info-contact">
								<i class="flaticon-placeholder"></i>
								<h3>Address</h3>
								<span>17019 84 th Road, Jamaica NY 11432</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Section -->
	</section>
	<!-- End Footer & Subscribe Section -->
	
	<!-- Start Copy Right Section -->
	<div class="copyright-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<p><i class="far fa-copyright"></i> 2025 <a href="https://www.gloryitsolutions.com/">Glory IT Solutions</a>  - All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 col-md-6">
					<ul>
						<li>Powered by <a href="#">Matrik Solutions</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End Copy Right Section -->
	
	<!-- Start Go Top Section -->
	<div class="go-top">
		<i class="fas fa-chevron-up"></i>
		<i class="fas fa-chevron-up"></i>
	</div>
	<!-- End Go Top Section -->
	
	<!-- jQuery Min JS -->
	<script src="gloryitsolutions/assets/js/jquery.min.js"></script>
	<!-- Popper Min JS -->
	<script src="gloryitsolutions/assets/js/popper.min.js"></script>
	<!-- Bootstrap Min JS -->
	<script src="gloryitsolutions/assets/js/bootstrap.bundle.min.js"></script>
	<!-- Mean Menu JS  -->
	<script src="gloryitsolutions/assets/js/jquery.meanmenu.js"></script>
	<!-- Appear Min JS -->
	<script src="gloryitsolutions/assets/js/jquery.appear.min.js"></script>
	<!-- CounterUp Min JS -->
	<script src="gloryitsolutions/assets/js/jquery.waypoints.min.js"></script>
	<script src="gloryitsolutions/assets/js/jquery.counterup.min.js"></script>
	<!-- Owl Carousel Min JS -->
	<script src="gloryitsolutions/assets/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup Min JS -->
	<script src="gloryitsolutions/assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Isotope Min JS -->
	<script src="gloryitsolutions/assets/js/isotope.pkgd.min.js"></script>
	<!-- Swiper Min JS -->
	<script src="gloryitsolutions/assets/js/swiper.min.js"></script>
	<!-- Vanilla Tilt Min JS -->
	<script src="gloryitsolutions/assets/js/vanilla-tilt.min.js"></script>
	<!-- WOW Min JS -->
	<script src="gloryitsolutions/assets/js/wow.min.js"></script>
	<!-- Main JS -->
	<script src="gloryitsolutions/assets/js/main.js"></script>
	@stack('scripts')
</body>
</html>