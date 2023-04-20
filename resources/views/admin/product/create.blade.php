@extends('admin.layouts.app')
@section('content')
<!-- [ Layout content ] Start -->
<div class="layout-content">
<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">@lang('message.create_product')</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">@lang('message.product')</a></li>
            <li class="breadcrumb-item active">@lang('message.create_product')</li>
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
                    	<form role="form" action="{{ url('admin/product/store') }}" method="POST" enctype="multipart/form-data" autocomplete="off"> 
                        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                        	<h6 class="card-header">@lang('message.product_details')</Details></h6>
                       		<div class="card-body">
                               <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label">@lang('message.category') <span class="text-danger">*</span> </label>
                                        <select id="category-dropdown" class="form-control select2 select2-accessible" name="category_id" >                       
                                            <option value='' selected >Select</option>
                                            @if ($categories->count())
                                                @foreach($categories as $val)
                                                    <option value='{{$val->id}}' @if(old('category_id')==$val->id){{'selected="true"'}}@endif>{{$val->name}}</option>  
                                                @endforeach 
                                            @endif             
                                        </select>
                                            @if($errors->has('category_id'))
                                            <div class="text-danger">{{ $errors->first('category_id') }}</div>
                                            @endif
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-label">@lang('message.sub_category')  </label>
                                        <select id="sub-dropdown" class="form-control" name="sub_category_id">               
                                        </select>
                                            @if($errors->has('sub_category_id'))
                                            <div class="text-danger">{{ $errors->first('sub_category_id') }}</div>
                                            @endif
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
								 <div class="form-row">
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.product_name')<span class="text-danger">*</span></label>	
										<input type="text" class="form-control" name="name" placeholder="Enter Product Name" value="{{old('name')}}" >
										@if($errors->has('name'))
                                        <div class="text-danger">{{ $errors->first('name') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.meta_title')<span class="text-danger">*</span></label>
										<textarea type="text" class="form-control" name="meta_title" placeholder="Enter Meta Title" ></textarea>
                                        @if($errors->has('meta_title'))
                                        <div class="text-danger">{{ $errors->first('meta_title') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.status')<span class="text-danger">*</span></label>
										<select class="form-control select2 select2-hidden-accessible" name="status" required>                       
											<option value='1' @if(old('status')=='1'){{'selected="true"'}}@endif >Active</option>
											<option value='0' @if(old('status')=='0'){{'selected="true"'}}@endif>Inactive</option>                       
										</select> 
                                        @if($errors->has('status'))
                                        <div class="text-danger">{{ $errors->first('status') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.image') </label>
										<input type="file" name="image" class="form-control" id="image">
                                        @if($errors->has('image'))
                                        <div class="text-danger">{{ $errors->first('image') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-12">
										<label class="form-label">@lang('message.meta_keywords')<span class="text-danger">*</span></label>
										<textarea type="text"  class="form-control" name="meta_keywords" placeholder="Enter Meta Keywords" required value="{{old('meta_keywords')}}"></textarea>
                                        @if($errors->has('meta_keywords'))
                                        <div class="text-danger">{{ $errors->first('meta_keywords') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-12">
										<label class="form-label">@lang('message.description') <span class="text-danger">*</span></label>
										<textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Product Description"></textarea>
                                        @if($errors->has('description'))
                                        <div class="text-danger">{{ $errors->first('description') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
                                </div>
									<div class="text-right mt-3">
									<button type="submit" class="btn btn-primary">Add </button>&nbsp;
									<a href="{{route('admin.product.index');}}"  class="btn btn-default">Cancel</a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
			$('#category-dropdown').on('change', function() {
				//alert('HIi');
				var idCategory = this.value;
				$("#sub-dropdown").html('');
				$.ajax({
					url:"{{url('admin/get-subcategory-by-category')}}",
					type: "POST",
					data: {
						category_id: idCategory,
						_token: '{{csrf_token()}}'
					},
					dataType : 'json',
					success: function(result){
						$('#sub-dropdown').html('<option value="">Select Sub Category</option>'); 
						$.each(result.subCategory, function(key, value){
							$("#sub-dropdown").append('<option value="' + value
						.id + '">' + value.name + '</option>');
					});
				}
			});
		});
	});
</script>
@endsection