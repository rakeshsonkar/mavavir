@extends('site.layouts.app')
@section('content')
<section class="page-header" style="background-image: url(site/assets/images/background/page-header-bg-1-2.jpg);">
	<div class="container">
		<h2>My Job</h2>
		<ul class="list-unstyled thm-breadcrumb">
			<li><a href="{{ route('site.home.index') }}">Home</a></li>
			<li><span>Change Password</span></li>
		</ul>
	</div>
</section>
<div class="page-content bg-white">
	<div class="content-block">
		<div class="section-full bg-white browse-job p-t50 p-b20">
			<div class="container">
				<div class="row">
					@include('site.partials.side_menu')
					<div class="col-xl-9 col-lg-8 m-b30">
						<div class="job-bx job-profile">
							<div class="job-bx-title clearfix">
								<h5 class="font-weight-700 pull-left text-uppercase">Change Password</h5>
								<a class="site-button right-arrow button-sm float-right" href="{{ route('site.home.index') }}">Back</a>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12">
									@if(Session::has('message'))  
									<div class="alert alert-success alert-dismissible">
										<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										<span class="glyphicon glyphicon-ok "><strong>Success!</strong></span><em> {!! session('message') !!}</em>
									</div>
									@endif
									@if(Session::has('error_message'))  
									<div class="alert alert-danger alert-dismissible">
										<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										<span class="glyphicon glyphicon-ok "><strong>Alert !</strong></span><em> {!! session('error_message') !!}</em>
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
							<form role="form" action="{{ route('site.profile.save_password') }}" method="post" enctype="multipart/form-data" class="contact-one__form contact" autocomplete="off">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="row m-b30">
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<label>New Password </label>
												<input type="password" name="password" value="{{old('password')}}" required class="form-control">
												@if($errors->has('password'))
												<div class="text-danger">{{ $errors->first('password') }}</div>
												@endif
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label>Confirm New Password</label>
												<input type="password" required name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control">
												@if($errors->has('password_confirmation'))
												<div class="text-danger">{{ $errors->first('password_confirmation') }}</div>
												@endif
											</div>
										</div>
										<div class="col-lg-12 m-b10">
											<button type="submit" class="m-b30 thm-btn contact-one__btn">Update  Password</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="mgt"></div>
@endsection