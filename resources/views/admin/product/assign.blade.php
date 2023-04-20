@extends('admin.layouts.app')
@section('content')
<!-- [ Layout content ] Start -->
<div class="layout-content">
<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">@lang('message.assign_target')</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.product.index') }}">@lang('message.product')</a></li>
            <li class="breadcrumb-item active">@lang('message.assign_target')</li>
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
                    	<form role="form" action="{{ url('admin/product/assignUpdate',$product->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off"> 
                        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                        	<h6 class="card-header">@lang('message.assign_target')</Details></h6>
                       		    <div class="card-body">
								 <form id="formid" name="formid" action="" method="post" >
									<div class="table-responsive">
										<table id="example" class="table table-bordered table-striped mb-0">
											<thead>
												<tr>
													<th>
														<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
														<input type="checkbox" name="cb1" value="1" onClick="isValid(this.form)">  All
													</th>
													<th>@lang('message.employee_id')</th>
													<th>@lang('message.employee_type')</th>
													<th>@lang('message.employee_name')</th>
													<th>@lang('message.target')</th>
												</tr>
											</thead>
											<tbody>
												@if(count($employee)>0)
												@foreach($employee as $val)
												<tr>
													<th scope="col">
														<?php 
														// print_r($targetvalue);
														// die();
														?>
														<input type="checkbox" class="check_box" name="employee[]" id="field2" value="{{ $val->id }}" @if(is_array($assignarray) && !empty($assignarray)) @if(in_array($val->id,$assignarray)){{ 'checked' }} @endif @endif />
													</th>
													<td>{{ $val->employee_id }}</td>
													<td>@if($val->employee_type=='0'){{'ISD'}}
														@elseif($val->employee_type=='1'){{'RSO'}}
														@elseif($val->employee_type=='2'){{'TL'}}
														@elseif($val->employee_type=='3'){{'RPT/BPT'}}
														@elseif($val->employee_type=='4'){{'BSSO'}}
														@elseif($val->employee_type=='5'){{'BM'}}
														@elseif($val->employee_type=='6'){{'Employee'}}
														@endif
													</td>
													<td>{{ $val->name }}</td>
													<td><input type="text" class="form-control" name="target[]" value="<?php if(is_array($assignarray) && !empty($assignarray)) if(in_array($val->id,$assignarray)) echo $targetvalue[$val->id]; ?>" ></td>
												</tr>
												@endforeach
												@else
												<tr><td colspan="13" style="text-align:center"> No record founds</td></tr>
												@endif
											</tbody>
										</table>
									</div>
								</form>
								<div class="text-right mt-3">
									<button type="submit" class="btn btn-primary">Save </button>&nbsp;
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
<style>
	.row-bordered {
    overflow: initial;
}
.overflow-hidden {
    overflow: inherit !important;
}
</style>
<script src="{{ asset('assets/js/multiselect-dropdown.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
/*******Search *********/
	function isValid(formRef)
	{
		for(var i=0;i<formRef.elements.length;i++)
		{
			if(formRef.elements[i].type == "checkbox")
			{
				formRef.elements[i].checked = formRef.cb1.checked
			}
		}
	}
function muldelete()
    {
        element_lenght= formid.elements.length;
        for(i=0;i<element_lenght;i++)
        {
			if(formid.elements[i].name=="mul_del[]")
			{
				if(formid.elements[i].checked==true)
				{
					if(confirm("Are you sure delete record(s)?"))
					{
						$("#formid").attr("action", "{{url('admin/question/delete')}}");
						this.formid.submit();
						break;
					}
				}	
			}
		}
	}
</script>
<script>
	$(document).ready(function () {
    $('#example').DataTable();
});
</script>
@endsection