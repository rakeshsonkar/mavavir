@extends('admin.layouts.app')
@section('content')
<!-- [ Layout content ] Start -->
<div class="layout-content">
<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">@lang('message.view_about_us')</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.about_us.index') }}">@lang('message.about_us')</a></li>
            <li class="breadcrumb-item active">@lang('message.view_about_us')</li>
        </ol>
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
    <div class="card mb-4">
		<div class="row align-items-center m-l-0">
			<div class="col-sm-10 text-left">
				<h6 class="card-header">@lang('message.about_us_detail')</Details></h6>
			</div>
			<div class="col-sm-2 text-center">
				<a href="{{ url('admin/about_us/edit')}}/{{$about_us->id}}" data-size="xl" class="btn btn-primary btn-sm mb-3 btn-round">@lang('message.edit_about_us') </a>
			</div>
		</div>
		<div class="card-body">
			<table class="table user-view-table">
				<tbody>
					<tr>
						<td>@lang('message.name')</td>
						<td>{{ $about_us->name }}</td>
					</tr>
					<tr>
						<td>@lang('message.title')</td>
						<td>{{ $about_us->title }}</td>
					</tr>
					<tr>
						<td>@lang('message.description')</td>
						<td>{!! $about_us->description !!}</td>
					</tr>
					<tr>
						<td>@lang('message.image')</td>
						<td>
						@if(!empty($about_us['image']))
							<img src="{!! asset($about_us['image'])!!}" width="120">
						@endif
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- [ content ] End -->
@endsection