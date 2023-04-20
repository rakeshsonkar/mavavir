@extends('admin.layouts.app')
@section('content')
<!-- [ Layout content ] Start -->
<div class="layout-content">
<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">@lang('message.view_product')</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">@lang('message.product')</a></li>
            <li class="breadcrumb-item active">@lang('message.view_product')</li>
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
				<h6 class="card-header">@lang('message.product_details')</Details></h6>
			</div>
		</div>
		<div class="tab-content">
			<div class="card-body active" id="basic-info-tab">
				<table class="table table-striped table-bordered detail-view">
					<tbody>
						<tr>
							<th>@lang('message.category_name')</th>
							<td>{{ $product->category_name }}</td>
						</tr>
						<tr>
							<th>@lang('message.brand_name')</th>
							<td>{{ $product->brand_name }}</td>
						</tr>
						<tr>
							<th>@lang('message.product_name')</th>
							<td>{{ $product->name }}</td>
						</tr>
					
						<tr>
							<th>@lang('message.price')</th>
							<td>{{ $product->price }}</td>
						</tr>
						<tr>
							<th>@lang('message.total_stock')</th>
							<td>{{ $product->total_stock }}</td>
						</tr>
						<tr>
							<th>@lang('message.meta_title')</th>
							<td>{{ $product->meta_title }}</td>
						</tr>
						<tr>
							<th>@lang('message.meta_description')</th>
							<td>{{ $product->meta_description }}</td>
						</tr>
						<tr>
							<th>@lang('message.meta_keywords')</th>
							<td>{{ $product->meta_keywords }}</td>
						</tr>
					
						<tr>
							<th>Status:</th>
							<td>@if($product->status=='1'){{'Active'}}@else{{'Inactive'}}@endif </td>
						</tr>
						<tr>
							<th>@lang('message.description')</th>
							<td>{{ $product->description }}</td>
						</tr>
						<tr>
							<th>@lang('message.image')</th>
							<td>
							@if(!empty($product['image']))
								<img src="{!! asset($product['image'])!!}" width="120">
							@endif
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			
		</div>
	</div>
<style>
	ul.ultxt {
    list-style-type: none;
	margin-bottom:0;
	margin-left:-28px;
}
ul.ultxt li {
    display: inline-block;
    padding: 10px 30px;
    padding-left: 0;
    margin-top: 10px;
}
ul.ultxt li .activa {
    border: 1px solid rgba(24, 28, 33, 0.06) !important;
	border-top: 3px solid #8b8989 !important;
	border-left:none !important;
    border-bottom: 3px solid #fafafa !important;
    padding: 19px 15px 13px 15px;
    background: #fafafa;
	border-radius: 0px 0px 0px 0px;
}

.card-body {
	padding-top: 0;
	/* border-top:1px solid #8b8989; */
	border-radius:0 0 10px 10px;
}
</style>
<script type="text/javascript">
        $(function() {
            $(document).on('click', '.reload-tabs', function (e) {
                $(this).removeClass('reload-tabs');
                let { tbl } = $(this).data();
                reloadTable(`${tbl}-table`);
            });

            $('#images-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route("admin.product.images.list", ["id"=>$product->id]) }}',
                deferLoading: 0,
                columns : [
                    {
                        data: "image",
                        mRender: (data, type, row) => `<img src="{!! asset($product['image'])!!}/${data}" width="100px">`
                    },
                    { data: "is_default_text", name: "is_default" },
                    {
                        mRender: (data, type, row) => {
                            return `
                                ${ row.is_default == 0 ? `<a href="{{ URL::to("admin/product/images/change/default") }}/${row.id}" class="change-default" data-tbl="images"><i class="fa fa-check fa-fw"></i></a>` : '' }
                                <a href="{{ URL::to("admin/product/images/delete") }}/${row.id}" class="change-entry" data-tbl="images"><i class="fa fa-trash fa-fw"></i></a>
                            `;
                        }, 
                        orderable: false,
                        searchable: false
                    }
                ]
            });
		});
    </script>
@endsection