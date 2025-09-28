@extends('layouts.base')
@section('content')
	<!-- Start Home Section -->
	<div class="home-section home-2">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-12">
							<div class="main-banner-content">
								<h6 class="text-gradient">Quality IT Service</h6> 
								<h1>Your Successful Business, Our Fantastic <span class="text-gradient"> Glory IT Solutions.</span></h1>
								<!--<p>Glory IT </p>-->
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="banner-image">
								<img src="gloryitsolutions/assets/img/home-font-2.png" alt="image">
							</div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<div class="home-shape-animation">
			<div class="shape-1">
				<img src="gloryitsolutions/assets/img/shape/1.png" alt="shape image">
			</div>
			<div class="shape-2">
				<img src="gloryitsolutions/assets/img/shape/2.png" alt="shape image">
			</div>
			<div class="shape-3">
				<img src="gloryitsolutions/assets/img/shape/3.png" alt="shape image">
			</div>
			<div class="shape-4">
				<img src="gloryitsolutions/assets/img/shape/4.png" alt="shape image">
			</div>
			<div class="shape-5">
				<img src="gloryitsolutions/assets/img/shape/5.png" alt="shape image">
			</div>
			<div class="shape-6">
				<img src="gloryitsolutions/assets/img/shape/6.png" alt="shape image">
			</div>
			<div class="shape-7">
				<img src="gloryitsolutions/assets/img/shape/7.png" alt="shape image">
			</div>
		</div>
	</div>
	<!-- End Home Section -->

    <!-- Start About Section -->
	@include('layouts.aboutus') 
	<!-- End About Section -->

    <!-- Start Overview Section -->
	<section class="overview-section pt-50 pb-100">
		<div class="container">
			<div class="row align-items-center">
                <div class="col-lg-6">
					<div class="overview-image-2">
						<img src="gloryitsolutions/assets/img/choose-2.png" alt="image">
					</div>
				</div>

				<div class="col-lg-6">
					<div class="overview-content">
						<h6 class="sub-title">OUR APPROACH</h6>
						<p align="justify">We aim to consistently be amongst the Top-100 network solution IT companies in Bangladesh. Our goal is based upon a number of key elements</p>
                        <p align="justify"> We maintain a team of technical excellence structured on modern international standards, and in line with our focused product set. Our internal resources are supplemented with strategically selected 'best-of-breed' business partners and vendors. </p>
                        <p align="justify"> Glory Corporation success as a corporate network solution provider is wholly dependent on our contemporary total solution model. Our management team forms a hub, inter-linking project management, technical skills, office support and key business partners – a 'total team' approach. This facilitates appropriate proactive management and implementation of economical computer and cloud-based solutions. </p>
                        <p align="justify"> Our team is innovative, flexible and addresses problem solving for our customers within a well-defined framework utilizing the resources available. Clients can be assured that all of their critical business issues are addressed: performance, stability, reliability, efficiency and future upgradability receive special attention. Our aim is to comprehensively fulfill – even exceed the clients' requirements. </p>
                        <p align="justify"> We focus our attention on providing every customer with a complete solution. To this end Glory Corporation is continually expanding and developing. Whilst we understand that there are diverse areas of business that customers need assistance with, we do not focus our business on growth in all areas simultaneously.
                        Our concept and method of choosing individual 'best of breed' partners in niche areas has proved to be especially successful. </p>
                        <p align="justify"> The development of new, successful business partner relationships and the fostering of existing ones are central to our concept. Mutual value is extracted by leveraging the extensive technical infrastructure- and skills base of all partners involved. </p>
                        <p align="justify"> The values that this brings to Glory Corporation customers is realized by way of focused service delivery and back up from partners that understand select products. It allows for Glory Corporation to provide optimized and effective solutions to our customer - whilst maintaining a single interface. </p>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Overview Section -->

    <!-- Start About Section -->
	<section class="about-area bg-grey section-padding">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-lg-6 col-md-12">
					<div class="about-content">
						<h6 class="sub-title">OUR STRATEGY</h6> 
						<h2>Providing Your Business With A Quality IT Service is Our Passion</h2>
						<p align="justify"> Glory Corporationwas established primarily as an Implementation, Support and Services entity within the Bangladesh IT sector. As a support and services entity we believe that training and knowledge transfer of concepts, products and IT business practices is the correct strategy to bring about 'bridging the gap' in Information Technology & Value-added Services. We will continue focusing on growth within this sector.</p>
						<p align="justify"> Many companies have strategies that involve recruiting specialists in high-end technology solution areas. Glory Corporation, however, intends growing through the development of its own technical skills. </p>
                        <p align="justify"> Glory Corporationis committed to a program that ensures that employees are trained and developed, from the most basic- to high-end technical skills. Based on aptitude, Glory Corporation staff mature and develop within a structured management program – and at the pace that they feel comfortable at. </p>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="about-image">
						<img src="gloryitsolutions/assets/img/about.jpg" alt="About image">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Section -->

    <!-- Start Our Practices section -->
	@include('layouts.ourpractices') 
    <!-- End Our Practices Section -->

    <!-- Start Partner section -->
	@include('layouts.ourclients') 
	<!-- End Partner section -->
@endsection