@extends('backend.baseLayout')
@section('title',"Zaida's KloZet | Orders")
@section('main-content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Orders</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('adminDashboard')}}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Orders
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">--}}
{{--                    <div class="form-group breadcrum-right">--}}
{{--                        <div class="dropdown">--}}
{{--                            <a href="{{route('addProduct')}}" type="button" class="btn btn-outline-success waves-effect waves-light">--}}
{{--                                + Add New--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="content-body">
                <!-- Table Hover Animation start -->
                <div class="row" id="table-hover-animation">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Orders</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover-animation table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th>Order No.</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Order Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($orders) > 0)
                                                @foreach($orders as $i=>$order)
                                                    <tr>
                                                        <th scope="row">{{++$i}}</th>
                                                        <td>{{$order->order_no}}</td>
                                                        <td>{{$order->user->name}}</td>
                                                        <td> {{date('d-m-Y', strtotime($order->created_at))}}</td>
                                                        <td>
                                                            <a href="{{route('orderDetail',$order->id)}}" type="button" class="btn btn-icon btn-outline-primary mr-1 mb-1 btn-outline-primary waves-effect waves-light float-left btnView" ><i class="feather icon-eye"></i>View Details</a>
                                                            <a href="#" type="button" class="btn btn-icon btn-outline-danger mr-1 mb-1 btn-outline-danger waves-effect waves-light float-right"><i class="feather icon-trash-2"></i>&nbsp;Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <span>No Product Has Been Added Yet!</span>
                                            @endif
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table head options end -->
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@endsection
