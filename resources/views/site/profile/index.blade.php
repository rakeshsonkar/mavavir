@extends('site.layouts.app')
@section('content')
<section class="page-header" style="background-image: url(site/assets/images/background/page-header-bg-1-2.jpg);">
	<div class="container">
		<h2>Profile</h2>
		<ul class="list-unstyled thm-breadcrumb">
			<li><a href="{{ route('site.home.index') }}">Home</a></li>
			<li><span>@lang('message.my_profile')</span></li>
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
								<h5 class="font-weight-700 pull-left text-uppercase">@lang('message.basic_information')</h5><a
									class="site-button right-arrow button-sm float-right"
									href="{{ route('site.home.index') }}">@lang('message.back')</a>
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
							<form role="form" action="{{ url('profile/update',$user->id) }}" method="post" enctype="multipart/form-data" class="contact-one__form contact" autocomplete="off">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">              <div class="row m-b30">
									<div class="col-lg-6 col-md-6">
										<div class="form-group"><label>@lang('message.your_name')</label><input type="text" class="form-control" name="name" value="{{old('name',$user->name) }}"></div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>@lang('message.professional_title')</label>
											<input type="text" class="form-control" name="title" value="{{old('title',$user->title) }}" placeholder="Web Designer">
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>@lang('message.email')</label>
											<input type="text" class="form-control" name="email" value="{{old('email',$user->email) }}">
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group"><label>@lang('message.mobile')</label><input type="text"
												class="form-control" name="mobile" value="{{old('mobile',$user->mobile) }}"></div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group"><label>@lang('message.gender')</label>
										<select name="gender" class="form-control">
											<option value="">Select</option>
											<option value="0" @if($user->gender=='0'){{ 'selected="true"' }}@endif>Male</option>
											<option value="1" @if($user->gender=='1'){{ 'selected="true"' }}@endif>Female</option>
											<option value="2" @if($user->gender=='2'){{ 'selected="true"' }}@endif>Other</option>
										</select>
									   </div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group"><label>@lang('message.zipcode')</label><input type="text"
												class="form-control" name="zipcode" value="{{old('zipcode',$user->zipcode) }}"></div>
									</div>
									<!--<div class="col-md-4">
										<div class="form-group"><label>@lang('message.country')</label>
											<select id="country-dropdown" name="country_id" class="form-control">
												<option value="">Select</option>
												@if ($countries->count())
												@foreach ($countries as $country)
													<option value="{{ $country->id }}" {{ ($user->country_id==$country->id) ? 'selected' : '' }}>{{ $country->name }}</option>
												@endforeach
												@endif
										   </select>
										</div>
									</div>-->
									<div class="col-md-6">
										<div class="form-group"><label>@lang('message.state')</label>
											<select id="state-dropdown" name="state_id" class="form-control">
											<option value="">Select</option>
												@if ($states->count())
												@foreach ($states as $state)
													<option value="{{ $state->id }}" {{ ($user->state_id==$state->id) ? 'selected' : ''}}>{{ $state->name }}</option>
												@endforeach
												@endif
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group"><label>@lang('message.city')</label>
											<select id="city-dropdown" name="city_id" class="form-control">
											<option value="">Select</option>
												@if ($cities->count())
												@foreach ($cities as $data)
													<option value="{{$data->id}}" {{ ($user->city_id==$data->id) ? 'selected' : ''}}>{{$data->name}}</option>
												@endforeach
												@endif					 
											</select>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>@lang('message.full_address')</label>
											<textarea type="text" class="form-control" name="address">{{ old('address',$user->address) }}</textarea>
										</div>
									</div>
								 </div>
								<button type="submit" class="m-b30 thm-btn contact-one__btn">Save</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="mgt"></div>
<!-- [ content ] End -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#country-dropdown').on('change', function() {
	var country_id = this.value;
	$("#state-dropdown").html('');
	$.ajax({
		url:"{{route('site.profile.fetchState')}}",
		type: "POST",
		data: {
			country_id: country_id,
			_token: '{{csrf_token()}}' 
		},
		dataType : 'json',
		success: function(result){
			$('#state-dropdown').html('<option value="">Select State</option>'); 
			$.each(result.states,function(key,value){

				$("#state-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
			});
			$('#city-dropdown').html('<option value="">Select State First</option>'); 
			}
		});
	});    
	$('#state-dropdown').on('change', function() {
		var state_id = this.value;
		$("#city-dropdown").html('');
		$.ajax({
			url:"{{route('site.profile.fetchCity')}}",
			type: "POST",
			data: {
				state_id: state_id,
				_token: '{{csrf_token()}}' 
			},
			dataType : 'json',
			success: function(result){
				$('#city-dropdown').html('<option value="">Select City</option>'); 
				$.each(result.cities,function(key,value){
					$("#city-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
			});
		}
	});
});
});
</script>
@endsection