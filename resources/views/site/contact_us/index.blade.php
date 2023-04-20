@extends('site.layouts.app')
@section('content')
<section class="page-header" style="background-image: url(site/assets/images/background/page-header-bg-1-1.jpg);">
	<div class="container">
		<h2>Contact Us</h2>
		<ul class="list-unstyled thm-breadcrumb">
			<li><a href="{{ route('site.home.index') }}">Home</a></li>
			<li><span>Contact Us</span></li>
		</ul>
	</div>
</section>
<section class="contact-info-one">
	<div class="container">
		<div class="block-title text-center">
			<p>Contact Us</p>
			<h3>Get In Touch</h3>
		</div>
		<div class="row">
			<div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
				<div class="contact-info-one__single text-center">
					<div class="contact-info-one__icon">
						<i class="oberlin-icon-email"></i>
					</div>
					<h3>Email Address</h3>
					<p><a href="mailto:info@azetacare.com">info@azetacare.com</a> <br> <a
							href="mailto:info@azetacare.com">info@azetacare.company.com</a></p>
				</div>
			</div>
			<div class="col-lg-4 wow fadeInDown" data-wow-duration="1500ms">
				<div class="contact-info-one__single text-center">
					<div class="contact-info-one__icon">
						<i class="oberlin-icon-phone"></i>
					</div>
					<h3>Phone Number</h3>
					<p><a href="tel:+2(305)-587-3407">+251-235-3256</a> <br> <a
							href="tel:+2(305)-587-3407">+2(305) 587-3407</a></p>
				</div>
			</div>
			<div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
				<div class="contact-info-one__single text-center">
					<div class="contact-info-one__icon">
						<i class="oberlin-icon-marker"></i>
					</div>
					<h3>Office Address</h3>
					<p>Discover St, New York, <br> NY 10012, USA</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact-one">
	<div class="container">
		<div class="block-title text-center">
			<p>Get in Touch</p>
			<h3>Fill this form to contact Azeta  Care</h3>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12">
				@if(Session::has('message'))  
				<div class="alert alert-success alert-dismissible">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<span class="glyphicon glyphicon-ok "><strong>Success!</strong></span><em> {!! session('message') !!}</em>
				</div>
				@endif
				@foreach ($errors->all() as $error)
			<div class=" alert alert-danger alert-dismissible">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<span class="glyphicon glyphicon-remove"></span>{{ $error }}
			</div>
				@endforeach
			</div>
		</div>
		<form role="form" action="{{ route('site.contact_us.store') }}" method="post" enctype="multipart/form-data" class="contact-one__form contact" autocomplete="off">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">  
			<div class="row">
				<div class="col-md-6">
					<input type="text" id="name" name="name" placeholder="Enter Full Name">
				</div>
				<div class="col-md-6">
					<input type="email" id="email" name="email" placeholder="Email Address">
				</div>
				<div class="col-md-6">
					<input type="text" id="mobile" name="mobile" placeholder="Enter Phone Number">
				</div>
				<div class="col-md-6">
					<select name="discussion" class="selectpicker">
						<option value="0">Select Discussion For</option>
						<option value="0">Basic Query</option>
						<option value="1">Patient Admission</option>
					</select>
				</div>
				<div class="col-md-12">
					<textarea name="message" placeholder="Message"></textarea>
				</div>
				<div class="col-md-12 text-center">
					<button type="submit" class="thm-btn contact-one__btn">Submit Now</button>
				</div>
			</div>
		</form>
		<div class="result"></div>
	</div>
</section>

@endsection