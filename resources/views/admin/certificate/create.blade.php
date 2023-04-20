@extends('admin.layouts.app')
@section('content')
<!-- [ Layout content ] Start -->
<div class="layout-content">
<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Create Certificate</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.certificate.index') }}">Certificate</a></li>
            <li class="breadcrumb-item active">Create Certificate</li>
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
    <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="account-general">
                    	<form role="form" action="{{ url('admin/certificate/store') }}" method="POST" enctype="multipart/form-data" autocomplete="off"> 
                        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                        	<h6 class="card-header">Certificate Details</Details></h6>
                       		<div class="card-body">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label class="form-label">Certificate Name<span class="text-danger">*</span></label>
										<input type="text"  class="form-control" name="certificate_name" placeholder="Certificate Name" required value="{{old('certificate_name')}}">
                                        @if($errors->has('certificate_name'))
                                        <div class="text-danger">{{ $errors->first('certificate_name') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.title')<span class="text-danger">*</span></label>
										<input type="text"  class="form-control" name="title" placeholder="Certificate Name" required value="{{old('title')}}">
										@if($errors->has('title'))
										<div class="text-danger">{{ $errors->first('title') }}</div>
										@endif
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label class="form-label">Image </label>
										<input type="file" name="image" class="form-control" id="image">
										@if($errors->has('image'))
										<div class="text-danger">{{ $errors->first('image') }}</div>
										@endif
										<div class="clearfix"></div>
									</div>
								</div>
									<div class="text-right mt-3">
										<button type="submit" class="btn btn-primary">Save </button>&nbsp;
										<a href="{{route('admin.certificate.index');}}"  class="btn btn-default">Cancel</a>
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
<!-- [ content ] End -->
@endsection