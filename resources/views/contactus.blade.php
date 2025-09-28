@extends('layouts.base2')
@section('content')
<!-- Start Page Title Section -->
<div class="page-title-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Contact</h2>
						<ul>
							<li><a href="{{url('/')}}">Home</a>
							</li>
							<li>Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Section -->
	
	<!-- Start Contact Section -->
	<div class="contact-section section-padding">
		<div class="container">
			<div class="section-title">
				<h6 class="sub-title">Let's Talk</h6>
				<h2>Contact Us</h2>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact-form">
						<p class="form-message"></p>
						<form id="contact-form" class="contact-form form" action="#" method="POST">
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control" required placeholder="Your Name">
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control" required placeholder="Your Email">
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<input type="text" name="phone" id="phone" required class="form-control" placeholder="Your Phone">
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<input type="text" name="subject" id="subject" class="form-control" required placeholder="Your Subject">
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<textarea name="message" class="form-control" id="message" cols="30" rows="6" required placeholder="Your Message"></textarea>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<button type="submit" class="default-btn submit-btn">Send Message <span></span></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact Section -->
	
	<!-- Start Contact Info Section -->
	<section class="contact-info-wrapper bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h6 class="sub-title">Find Us</h6>
						<h2>Contact Info</h2>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="contact-info-content">
						<h5>Dhaka Address</h5>
						<p>House 19, Road 27, Block J, Banani. A-44, Amin Tower (3 rd Floor), Bazar Road, Savar, Dhaka.</p>
						<a href="tel:12345678">+880 1715-000029</a>
						<a href="mailto:masud@gloryitsolutions.com">masud@gloryitsolutions.com</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="contact-info-content">
						<h5>USA Address</h5>
						<p>17019 84 th Road, Jamaica NY 11432</p>
						<a href="tel:12345678">+880 1715-000029</a>
						<a href="mailto:masud@gloryitsolutions.com">masud@gloryitsolutions.com</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<!--<div class="contact-info-content">
						<h5>Panama Office</h5>
						<p>103 Richard Ave Ashville, Ohio, Water Mill,3468 16th Hwy Pangburn, Arkansas(AR), Charolais Ashville, Virginia, Panama.</p>
						<a href="tel:12345678">080 707 555-321</a>
						<a href="mailto:demo@example.com">demo@example.com</a>
					</div>-->
				</div>
			</div>
		</div>
    </section>
	<!-- End Contact Info Section -->
	
    <!-- Start Map Section -->
    <!--<div class="map-section">
        <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14602.795330929268!2d90.34041119969439!3d23.793736558250195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s%20%20%20%20%20%20%20%20%20%2010%2FA%2FA%2C%20Second%20Colony%2C%20Mazar%20Road%2C%20Mirpur-1%2C%20Dhaka-1216%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1705930181283!5m2!1sen!2sbd"></iframe>
        </div>
    </div>-->
    <!-- End Map Section -->
@endsection