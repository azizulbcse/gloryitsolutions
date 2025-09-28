@extends('layouts.base2')
@section('content')
    <!-- Start Page Title Section -->
	<div class="page-title-area item-bg1">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Our Practices</h2>
						<ul>
							<li><a href="{{url('/')}}">Home</a></li>
							<li>Our Practices</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Section -->
@include('layouts.ourpractices') 
@endsection