@extends('admin.layouts.app')
@section('content')
<!-- [ Layout content ] Start -->
<div class="layout-content">
<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">@lang('message.edit_product')</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">@lang('message.product')</a></li>
            <li class="breadcrumb-item active">@lang('message.edit_product')</li>
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
                    	<form role="form" action="{{ url('admin/product/update',$product->id) }}" method="POST" enctype="multipart/form-data"> 
                        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="row align-items-center m-l-0">
								<div class="col-sm-10 text-left">
									<h6 class="card-header">@lang('message.product_details')</Details></h6>
								</div>
								<div class="col-sm-2 text-center">
									<a href="{{ url('admin/product/view')}}/{{$product->id}}" data-size="xl" class="btn btn-primary btn-sm mb-3 btn-round">View product </a>
								</div>
							</div>
							<div class="card-body">
							<div class="form-row">
									<div class="form-group col-md-6">
                                        <label class="form-label">@lang('message.parent_category')<span class="text-danger">*</label>
										<select class="form-control select2 select2-hidden-accessible" name="parent_category" required>                       
                                            <option value="">Select</option>
                                            @if($categories->count())
												@foreach($categories as $category)
													<option value="{{ $category->id }}" {{ ($product->category_id==$category->id) ? 'selected' : ''}}>{{ $category->name }}</option>
												@endforeach
											@endif
                                        </select>
                                        @if($errors->has('parent_category'))
                                        <div class="text-danger">{{ $errors->first('parent_category') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.sub_category')<span class="text-danger">*</span> </label>
                                        <select class="form-control select2-class" name="sub_category">
											<option value="">Select</option>
                                        </select>
                                        @if($errors->has('sub_category'))
                                        <div class="text-danger">{{ $errors->first('sub_category') }}</div>
                                        @endif
										<div class="clearfix"></div>
									 </div>
								 </div>
								 <div class="form-row">
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.product_name')<span class="text-danger">*</span></label>	
										<input type="text" class="form-control" name="name" placeholder="Enter Product Name" value="{{old('name',$product->name)}}" >
										@if($errors->has('name'))
                                        <div class="text-danger">{{ $errors->first('name') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.brand')<span class="text-danger">*</span></label>
										<select class="form-control select2 select2-hidden-accessible" name="brand_id" required >                       
                                            <option value="">Select</option>
                                            @if($brands->count())
                                                @foreach($brands as $brand)
                                                    <option value="{{ $brand->id }}" {{ ($product->brand_id==$brand->id) ? 'selected' : ''}}>{{ $brand->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
										@if($errors->has('brand_id'))
                                        <div class="text-danger">{{ $errors->first('brand_id') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
								</div>
								 
                                <div class="form-row">
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.price')</label>	
										<input type="text" class="form-control" name="price" placeholder="Enter Price" value="{{old('price',$product->price)}}" >
										@if($errors->has('price'))
                                        <div class="text-danger">{{ $errors->first('price') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.total_stock')<span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="total_stock" placeholder="Total Stock" required value="{{old('total_stock',$product->total_stock)}}">
                                        @if($errors->has('total_stock'))
                                        <div class="text-danger">{{ $errors->first('total_stock') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.meta_title')<span class="text-danger">*</span></label>
										<textarea type="text" class="form-control" name="meta_title" placeholder="Enter Meta Title" >{{ $product->meta_title }}</textarea>
                                        @if($errors->has('meta_title'))
                                        <div class="text-danger">{{ $errors->first('meta_title') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
								<div class="form-group col-md-6">
										<label class="form-label">@lang('message.meta_description')<span class="text-danger">*</span> </label>
										<textarea type="text"  class="form-control" name="meta_description" placeholder="Enter Meta Description">{{ $product->meta_description }}</textarea>
                                        @if($errors->has('meta_description'))
                                        <div class="text-danger">{{ $errors->first('meta_description') }}</div>
                                        @endif
										<div class="clearfix"></div>
									 </div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.status') <span class="text-danger">*</span></label>
										<select class="form-control select2 select2-hidden-accessible" name="status" required>                       
											<option value='1' @if(old('status',$product->status)=='1'){{'selected="true"'}}@endif>Active</option>
											<option value='0' @if(old('status',$product->status)=='0'){{'selected="true"'}}@endif>Inactive</option>                       
										</select> 
                                        @if($errors->has('status'))
										<label class="form-label">Status <span class="text-danger">*</span></label>
                                        <div class="text-danger">{{ $errors->first('status') }}</div>
                                        @endif
									 	<div class="clearfix"></div>
									</div>
									<div class="form-group col-md-6">
										<label class="form-label">@lang('message.image') <span class="text-danger">*</span></label>
										<input type="file" name="image"  class="form-control" id="image">
                                        @if($errors->has('image'))
                                        <div class="text-danger">{{ $errors->first('image') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-12">
										<label class="form-label">@lang('message.meta_keywords')<span class="text-danger">*</span></label>
										<textarea type="text"  class="form-control" name="meta_keywords" placeholder="Enter Meta Keywords" required value="{{old('meta_keywords')}}">{{ $product->meta_keywords }}</textarea>
                                        @if($errors->has('meta_keywords'))
                                        <div class="text-danger">{{ $errors->first('meta_keywords') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-12">
										<label class="form-label">@lang('message.description') <span class="text-danger">*</span></label>
										<textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Product Description">{{ $product->description }}</textarea>
                                        @if($errors->has('description'))
                                        <div class="text-danger">{{ $errors->first('description') }}</div>
                                        @endif
										<div class="clearfix"></div>
									</div>
                                </div>
								<div class="text-right mt-3">
									<button type="submit" class="btn btn-primary">Update </button>&nbsp;
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
            jQuery(function($) {
                let selectedSubCategory = '{{ $product->category_id }}';

                $(document).on('change', '[name="parent_category"]', function (e) {
                    let parent_category = $(this).val();
                    $('[name="sub_category"]').html('<option value=""></option>').trigger('changed');
                    if(parent_category == '') return false;

                    $.get(`{{ URL::to("admin/product/sub_categories") }}/${parent_category}`, response => {
                        let html = '<option value=""></option>';
                        if(response.length > 0) {
                            response.forEach(el => html += `<option value="${el.id}" ${selectedSubCategory == el.id ? 'selected' : ''}>${el.name}</option>`);
                        }
                        $('[name="sub_category"]').html(html).trigger('changed');
                        selectedSubCategory = null;
                    }, 'json');
                });
                $('[name="parent_category"]').change();
			});
        </script>
@endsection