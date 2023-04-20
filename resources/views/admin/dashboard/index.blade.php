@extends('admin.layouts.app')
@section('content')

<!-- [ content ] Start -->
<div class="container-fluid flex-grow-1 container-p-y">
    <h4 class="font-weight-bold py-3 mb-0">Dashboard</h4>
    <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Main</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
        </ol>
    </div>
    <div class="row">
        <!-- customar project  start -->
        <div class="col-xl-3 col-md-6">
            <div class="card mb-4">
                <!-- <div class="card-body">
                    <div class="row align-items-center m-l-0">
                        <div class="col-auto">
                            <i class="fas fa-user-injured f-36 text-danger"></i>
                        </div>
                        <div class="col-auto">
                            <h6 class="text-muted m-b-10">@lang('message.users')</h6>
                            <h2 class="m-b-0">{{ $user }}</h2>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <!-- <div class="col-xl-3 col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row align-items-center m-l-0">
                        <div class="col-auto">
                            <i class="fas fa-user-injured f-36 text-danger"></i>
                        </div>
                        <div class="col-auto">
                            <h6 class="text-muted m-b-10">@lang('message.dealer')</h6>
                            <h2 class="m-b-0"></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        
    </div>
</div>
<!-- [ content ] End -->
@endsection