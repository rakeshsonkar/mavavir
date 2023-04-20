<!doctype html>
<html lang="zxx">
    

<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap Min CSS --> 
		<link rel="stylesheet" href="{{ asset('site/assets/css/bootstrap.min.css') }}">
		<!-- Owl Theme Default Min CSS --> 
		<link rel="stylesheet" href="{{ asset('site/assets/css/owl.theme.default.min.css') }}">
		<!-- Owl Carousel Min CSS --> 
		<link rel="stylesheet" href="{{ asset('site/assets/css/owl.carousel.min.css') }}">
		<!-- Animate Min CSS --> 
		<link rel="stylesheet" href="{{ asset('site/assets/css/animate.min.css') }}">
		<!-- Boxicons Min CSS --> 
		<link rel="stylesheet" href="{{ asset('site/assets/css/boxicons.min.css') }}"> 
		<!-- Magnific Popup Min CSS --> 
		<link rel="stylesheet" href="{{ asset('site/assets/css/magnific-popup.min.css') }}"> 
		<!-- Flaticon CSS --> 
		<link rel="stylesheet" href="{{ asset('site/assets/css/flaticon.css') }}">
		<!-- Meanmenu Min CSS -->
		<link rel="stylesheet" href="{{ asset('site/assets/css/meanmenu.min.css') }}">
		<!-- Nice Select Min CSS -->
		<link rel="stylesheet" href="{{ asset('site/assets/css/nice-select.min.css') }}">
		<!-- Odometer Min CSS-->
		<link rel="stylesheet" href="{{ asset('site/assets/css/odometer.min.css') }}">
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('site/assets/css/responsive.css') }}">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="site/assets/img/favicon.png">
		<!-- Title -->
		 <title> Health Insurance - Compare & Buy Insurance Plans – Health, Term, Life, Car</title>
<meta name='keywords' content='compare, insurance, life, car, health, travel, pension, investment, child, home, corporate, quotes, rates, online, plans, policy, best, India, companies, buy' />
<meta name='description' content='Compare insurance policies offered by various insurers in India & buy insurance policy online. Get instant quotes & save huge on premiums.' />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Insurance - Compare & Buy Insurance Plans – Health, Term, Life, Car" />
        <meta property="og:description" content="Compare insurance policies offered by various insurers in India & buy insurance policy online. Get instant quotes & save huge on premiums." />
        <meta property="og:url" content="http://healthsinsurance.xyz/" />
    </head>

    <body>
		<!-- Start Preloader Area -->
		<!-- <div class="preloader"> -->
			<div class="lds-ripple">
				<div></div>
				<div></div>
			</div>
		<!-- </div> -->
		<!-- End Preloader Area -->
		
		<!-- Start Header Area -->
		<header class="header-area">
			<!-- Start Top Header -->
			<div class="top-header">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-8 col-md-7">
							<ul class="header-left-content">
								<li>
									<i class="bx bx-envelope"></i>
									<a href="#">Info@healthinsurance.in</a>
								</li>
								<li>
									<i class="bx bx-location-plus"></i>
									B-701-702, Ithum Tower, Sector 62, Noida, Uttar Pradesh 201301
								</li>
							</ul>
						</div>

						<div class="col-lg-4 col-md-5">
							<div class="header-right-content">
								<ul class="language-area">
									<li class="language-item-top">
										<a href="#" class="language-bar">
											<span>Language</span>		
											<i class="bx bx-chevron-down"></i>
										</a>

										<ul class="language-item-bottom">
											<li class="language-item">
												<a href="#" class="language-link">
													<img src="site/assets/img/language/english.png" alt="Image">
													English
												</a>
											</li>
											<li class="language-item">
												<a href="#" class="language-link">
													<img src="site/assets/img/language/arab.png" alt="Image">
													العربيّة
												</a>
											</li>
											<li class="language-item">
												<a href="#" class="language-link">
													<img src="site/assets/img/language/germany.png" alt="Image">
													Deutsch
												</a>
											</li>
											<li class="language-item">
												<a href="#" class="language-link">
													<img src="site/assets/img/language/portugal.png" alt="Image">
													󠁥󠁮󠁧󠁿Português
												</a>
											</li>
											<li class="language-item">
												<a href="#" class="language-link">
													<img src="site/assets/img/language/china.png" alt="Image">
													简体中文
												</a>
											</li>
										</ul>
									</li>
								</ul>
								@if(Auth::user())
								@if(!empty(Auth::user()->image))
									<img src="{!! asset(Auth::user()->image) !!}" width="50" height="50"
										class="rounded-circle">
									@else
									<img src="{!! asset('storage/uploads/users/users.jpg') !!}" width="50" height="50"
										class="rounded-circle">	
									@endif
									{{ Auth::user()->name }}
									<a class="dropdown-item" href="{{ url('logout') }}">Logout</a>
									@else

								<div class="log-in">
									<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
										Log In
									</a>
								</div>

								<div class="register">
									<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-2">
										Register
									</a>
								</div>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Start Top Header -->
			
			<!-- Start Navbar Area -->
			<div class="navbar-area">
				<div class="mobile-nav">
					<div class="container-fluid">
						<div class="mobile-menu">
							<div class="logo">
								<a href="{{ route('site.home.index') }}">
						<img src="{{ asset('site/assets/img/logo.png') }}" alt="logo" style="width: 62px;">
								</a>
							</div>
						</div>
					</div>
				</div>
	
				<div class="desktop-nav">
					<div class="container-fluid">
						<nav class="navbar navbar-expand-md navbar-light">
							<a class="navbar-brand" href="{{ route('site.home.index') }}">
							<img src="{{ asset('site/assets/img/logo.png') }}" alt="logo" style="width: 62px;">
							</a>
	
							<div class="collapse navbar-collapse mean-menu">
								<ul class="navbar-nav m-auto">
									<li class="nav-item">
										<a href="#" class="nav-link active">Home</a>
									</li>
			
									<li class="nav-item">
										<a href="#aboutus" class="nav-link">About Us</a>
									</li>

									<li class="nav-item">
										<a href="#" class="nav-link">
											Insurance
											<i class="bx bx-chevron-down"></i>
										</a>
	
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="business-insurance.html" class="nav-link">Business Insurance</a>
											</li>
											<li class="nav-item">
												<a href="health-insurance.html" class="nav-link">Health Insurance</a>
											</li>
											<li class="nav-item">
												<a href="life-insurance.html" class="nav-link">Life Insurance</a>
											</li>
											<li class="nav-item">
												<a href="car-insurance.html" class="nav-link">Car Insurance</a>
											</li>
										</ul>
									</li>
			
									<li class="nav-item">
										<a href="#packages" class="nav-link">
											Package
											
										</a>
									</li>
									
									<li class="nav-item">
										<a href="#" class="nav-link">Contact Us</a>
									</li>
								</ul>
								
								<div class="others-option">
									<form class="search-box">
										<input type="text" name="Search" placeholder="Search for..." class="form-control">

										<button type="submit" class="search-btn">
											<i class="bx bx-search"></i>
										</button>

										<button type="submit" class="close-btn">
											<i class="bx bx-x"></i>
										</button>
									</form>
									
									<div class="call-us">
										<i class="bx bx-mail-send"></i>
										<a href="#">Info@healthinsurance.in</a>
									</div>
									
									<div class="get-quote">
										<a href="#" class="default-btn">
											Get a Quote
										</a>
									</div>
								</div>
							</div>
						</nav>
					</div>
				</div>
	
				<div class="others-option-for-responsive">
					<div class="container">
						<div class="dot-menu">
							<div class="inner">
								<div class="circle circle-one"></div>
								<div class="circle circle-two"></div>
								<div class="circle circle-three"></div>
							</div>
						</div>
						
						<div class="container">
							<div class="option-inner">
								<div class="others-option justify-content-center d-flex align-items-center">
									<form class="search-box">
										<input type="text" name="Search" placeholder="Search for..." class="form-control">

										<button type="submit" class="search-btn">
											<i class="bx bx-search"></i>
										</button>

										<button type="submit" class="close-btn">
											<i class="bx bx-x"></i>
										</button>
									</form>
									
									<div class="call-us">
										<i class="bx bx-mail-send"></i>
										<a href="#">Info@healthinsurance.in</a>
									</div>
									
									<div class="get-quote">
										<a href="#" class="default-btn">
											Get a Quote
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Navbar Area -->
		</header>
		<!-- End Header Area -->


		<!-- Start Page Title Area -->
		<div class="page-title-area bg-19">
			<div class="container">
				<div class="page-title-content">
					<h2 style="color: red;">Login</h2>
					<ul>
						<li>
							<a href="{{ route('site.home.index') }}">
								Home 
							</a>
						</li>
						<li class="active">Login</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start User Area -->
		<section class="user-area-style ptb-100">
			<div class="container">
				<div class="contact-form-action" style="width: 500px;">
					<div class="account-title">
						<h2 style="color: red; text-align: center;">Login</h2>
						<hr>
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
				<form role="form" action="{{ url('user/login') }}" method="POST" enctype="multipart/form-data" autocomplete="off"> 
					<input type="hidden" name="_token" value="{{ csrf_token() }}">           
						<div class="row">
							<div class="col-12">
								<div class="col-md-12">
								<div class="form-group">
									<label>Username/Email Id</label>
									<input type="text" class="form-control" id="email" name="email">
								</div>
							</div>
							
                            </div>
                            <div class="col-12">
								<div class="col-md-12">
								<div class="form-group">
									<label>Password</label>
									<input  type="Password" class="form-control" id="password" name="password">
								</div>
							</div>
                            </div>
							
							<div class="col-12">
								<div class="row align-items-center">
									<div class="col-lg-6 col-sm-6">
										<button class="default-btn register" type="submit">
											Login now
										</button>
									</div>
								</div>
							</div>

							<div class="col-12">
								<p>Have an account? <a href="{{ route('site.user.register') }}">Register Now!</a></p>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<!-- End User Area -->

		<!-- Start Footer Area -->
		<footer class="footer-area bg-color pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget single-bg">
							<a href="{{ route('site.home.index') }}" class="logo">
								<img src="{{ asset('site/assets/img/logo.png') }}" alt="logo" style="width: 62px;">
							</a>

							<p style="text-align: justify;">Surprises, both good and bad, are inevitable. Everyone loves the good ones and prays that they are spared the unpleasant ones. Yet, things happen. That is why general insurance policies from Bajaj Allianz safeguard you.</p>

							<ul class="social-icon">
								<li>
									<a href="#">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-instagram"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-linkedin-square"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>Contact</h3>

							<ul class="address">
								
								<li>
									<span>Email:</span>
									<a href="#">Info@healthinsurance.in</a>
									
								</li>
								<li class="location">
									<span>Address:</span>
									B-701-702, Ithum Tower, Sector 62, Noida, Uttar Pradesh 201301
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>Services</h3>

							<ul class="import-link">
								<li>
									<a href="#">Home Insurance</a>
								</li>
								<li>
									<a href="#">Life Insurance</a>
								</li>
								<li>
									<a href="#">Business Insurance</a>
								</li>
								<li>
									<a href="#">Travel Insurance</a>
								</li>
								<li>
									<a href="#">Auto Insurance</a>
								</li>
								<li>
									<a href="#">Property Insurance</a>
								</li>
								
							</ul>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>Get in Touch</h3>
							<p>Sign up to get new exclusive offers from our latest news.</p>

							<form class="newsletter-form" data-toggle="validator">
								<input type="email" class="form-control" placeholder="Enter email address" name="EMAIL" required autocomplete="off">
	
								<button class="default-btn" type="submit">
									Subscribe Now
								</button>
	
								<div id="validator-newsletter" class="form-result"></div>
							</form>	
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Area -->

		<!-- Start Copy Right Area -->
		<div class="copy-right-area bg-color">
			<div class="container">
				<p>
					Copyright @2021 Health Insurance. Designed By 
					<a href="#" target="_blank">Health Insurance</a>
				</p>
			</div>
		</div>
		<!-- End Copy Right Area -->
		
		

		
		
		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="bx bx-chevrons-up"></i>
			<i class="bx bx-chevrons-up"></i>
		</div>
		<!-- End Go Top Area -->
		

        <!-- Jquery Min JS -->
        <!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
		<script src="{{ asset('site/assets/js/jquery.min.js') }}"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="{{ asset('site/assets/js/bootstrap.bundle.min.js') }}"></script>
        <!-- Meanmenu Min JS -->
		<script src="{{ asset('site/assets/js/meanmenu.min.js') }}"></script>
        <!-- Wow Min JS -->
        <script src="{{ asset('site/assets/js/wow.min.js') }}"></script>
        <!-- Owl Carousel Min JS -->
		<script src="{{ asset('site/assets/js/owl.carousel.min.js') }}"></script>
        <!-- Owl Carousel Thumbs Min JS -->
		<script src="{{ asset('site/assets/js/carousel-thumbs.min.js') }}"></script>
        <!-- Nice Select Min JS -->
		<script src="{{ asset('site/assets/js/nice-select.min.js') }}"></script>
        <!-- Magnific Popup Min JS -->
		<script src="{{ asset('site/assets/js/magnific-popup.min.js') }}"></script>
		<!-- Jarallax Min JS -->
		<script src="{{ asset('site/assets/js/jarallax.min.js') }}"></script>
		<!-- Appear Min JS --> 
        <script src="{{ asset('site/assets/js/appear.min.js') }}"></script>
		<!-- Odometer Min JS --> 
		<script src="{{ asset('site/assets/js/odometer.min.js') }}"></script>
		<!-- Smoothscroll Min JS --> 
		<script src="{{ asset('site/assets/js/smoothscroll.min.js') }}"></script>
		<!-- Form Validator Min JS -->
		<script src="{{ asset('site/assets/js/form-validator.min.js') }}"></script>
		<!-- Contact JS -->
		<script src="{{ asset('site/assets/js/contact-form-script.js') }}"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="{{ asset('site/assets/js/ajaxchimp.min.js') }}"></script>
        <!-- Custom JS -->
		<script src="{{ asset('site/assets/js/custom.js') }}"></script>	
    </body>


</html>