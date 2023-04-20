<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
	@include('site.partials.head')
	<body>
		<!-- [ Preloader ] Start -->
		<div class="page-loader">
			<div class="bg-primary"></div>
		</div>
		<!-- [ Preloader ] End -->
		<!-- [ Layout wrapper ] Start -->
		<div class="layout-wrapper layout-2">
			<div class="layout-inner">
			@include('site.partials.menu')
			
			<!-- [ Layout container ] Start -->
			<div class="layout-container">
			

				<!-- [ Layout content ] Start -->
				<div class="layout-content">
				<!-- [ content ] Start -->
					@yield('content')
				</div>
				@include('site.partials.footer')
				<!-- [ Layout content ] Start -->
			</div>
			<!-- [ Layout container ] End -->
			</div>
			<!-- Overlay -->
			<div class="layout-overlay layout-sidenav-toggle"></div>
		</div>
		@include('site.partials.script')
		@yield('extra-js')
		@stack('scripts')
	</body>
</html>
