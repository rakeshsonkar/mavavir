@extends('admin.layouts.app')
@section('content')
<!-- [ Layout content ] Start -->
<div class="layout-content">
<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">@lang('message.edit_cmspage')</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.cms_page.index') }}">@lang('message.cmspage')</a></li>
            <li class="breadcrumb-item active">@lang('message.edit_about_us')</li>
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
                    	<form role="form" action="{{ url('admin/cms-page/update',$cmspage->id) }}" method="POST" enctype="multipart/form-data"> 
                        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="row align-items-center m-l-0">
								<div class="col-sm-10 text-left">
									<h6 class="card-header">@lang('message.cmspage_detail')</Details></h6>
								</div>
								<div class="col-sm-2 text-center">
									<a href="{{ url('admin/cms-page/view')}}/{{$cmspage->id}}" data-size="xl" class="btn btn-primary btn-sm mb-3 btn-round">@lang('message.view_cmspage') </a>
								</div>
							</div>
							<div class="card-body">
							<div class="form-row">
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.title')</label>
										<input type="text"  class="form-control" name="title" placeholder="title" required value="{{old('title',$cmspage->title)}}">
                                        @if($errors->has('title'))
                                        <div class="text-danger">{{ $errors->first('title') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.image')<span class="text-danger">*</span></label>
										<input type="file"  class="form-control" name="image">
                                        @if($errors->has('image'))
                                        <div class="text-danger">{{ $errors->first('image') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-12">
										<label class="form-label">@lang('message.description')<span class="text-danger">*</span></label>
										<textarea type="text" id="description" rows="8" class="form-control" name="description" placeholder="@lang('message.description')">{{old('description',$cmspage->description)}}</textarea>
                                        @if($errors->has('description'))
                                        <div class="text-danger">{{ $errors->first('description') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
								</div>
								  <div class="text-right mt-3">
									<button type="submit" class="btn btn-primary">Save </button>&nbsp;
									<a href="{{route('admin.cms_page.index');}}"  class="btn btn-default">Cancel</a>
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
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<script>
ClassicEditor
.create( document.querySelector( '#description' ) )
.catch( error => {
console.error( error );
} );
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection