@extends('admin.layouts.app')
@section('content')
<!-- [ Layout content ] Start -->
<div class="layout-content">
<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">@lang('message.create_seo')</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.seo.index') }}">@lang('message.seo')</a></li>
            <li class="breadcrumb-item active">@lang('message.create_seo')</li>
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
                    	<form role="form" action="{{ url('admin/seo/store') }}" method="POST" enctype="multipart/form-data" autocomplete="off"> 
                        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                        	<h6 class="card-header">@lang('message.seo_details')</Details></h6>
                       		<div class="card-body">
								
								<div class="form-row">
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.title')<span class="text-danger">*</span></label>
										<input type="text"  class="form-control" name="title" placeholder="Title" required value="{{old('title')}}">
                                        @if($errors->has('title'))
                                        <div class="text-danger">{{ $errors->first('title') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.page_url')<span class="text-danger">*</span></label>
										<input type="text"  class="form-control" name="page_url" placeholder="Page Url" required value="{{old('page_url')}}">
                                        @if($errors->has('page_url'))
                                        <div class="text-danger">{{ $errors->first('page_url') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.keyword')<span class="text-danger">*</span></label>
										<textarea type="text"  class="form-control" name="keyword" placeholder="Keyword" required value="{{old('keyword')}}"></textarea>
                                        @if($errors->has('keyword'))
                                        <div class="text-danger">{{ $errors->first('keyword') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.script')<span class="text-danger">*</span></label>
										<textarea type="text"  class="form-control" name="script" placeholder="Script" required value="{{old('script')}}"></textarea>
                                        @if($errors->has('script'))
                                        <div class="text-danger">{{ $errors->first('script') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-12">
										<label class="form-label">@lang('message.description')<span class="text-danger">*</span></label>
										<textarea type="text"  class="form-control" name="description" placeholder="Description" required value="{{old('description')}}"></textarea>
                                        @if($errors->has('description'))
                                        <div class="text-danger">{{ $errors->first('description') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
								</div>
								
									<div class="text-right mt-3">
										<button type="submit" class="btn btn-primary">Save </button>&nbsp;
										<a href="{{route('admin.seo.index');}}"  class="btn btn-default">Cancel</a>
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