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
                                    <li class="breadcrumb-item active">Order Detail
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                                    <div class="form-group breadcrum-right">
                                        <div class="dropdown">
                                            <button type="button" id="btnPrint" class="btn btn-outline-success waves-effect waves-light">
                                                Take Print
                                            </button>
                                        </div>
                                    </div>
                                </div>
            </div>
            <div class="content-body">
                <!-- Table Hover Animation start -->
                <div class="row" id="table-hover-animation">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Order {{$order->order_no}}</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover-animation table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Order No.</th>
                                                <th scope="col">No. of Products</th>
                                                <th scope="col">Order Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                        <td>{{$order->order_no}}</td>
                                                        <td>{{count($order->orderDetails)}}</td>
                                                        <td> {{date('d-m-Y', strtotime($order->created_at))}}</td>
                                                    </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Customer</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover-animation table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{$order->user->name}}</td>
                                                <td>{{$order->user->email}}</td>
                                                <td> {{$order->user->phone}}</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Order Details</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover-animation table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Product Name</th>
                                                <th>Size</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($order->orderDetails as $i=>$item)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$item->product->name}}</td>
                                                <td>{{$item->product->size}}</td>
                                                <td>{{$item->quantity}}</td>
                                                <td> {{$item->product->price*$item->quantity}}</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Shipping Details</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover-animation table-bordered mb-0">
                                            <tbody>
                                            <tr>
                                                <th>First Name</th>
                                                <th>{{$order->orderDetails[0]->shipping->firstname}}</th>

                                            <tr>
                                                <th>Last Name</th>
                                                <th>{{$order->orderDetails[0]->shipping->lastname}}</th>
                                            </tr>
                                            <tr>
                                                <th>Email Address</th>
                                                <th>{{$order->orderDetails[0]->shipping->phone_no}}</th>
                                            </tr>
                                            <tr>
                                                <th>Country</th>
                                                <th>{{$order->orderDetails[0]->shipping->country}}</th>
                                            </tr>
                                            <tr>
                                                <th>City</th>
                                                <th>{{$order->orderDetails[0]->shipping->city}}</th>
                                            </tr>
                                            <tr>
                                                <th>Postal Code</th>
                                                <th>{{$order->orderDetails[0]->shipping->postal_code}}</th>
                                            </tr>
                                            <tr>
                                                <th>Shipping Address</th>
                                                <th>{{$order->orderDetails[0]->shipping->address}}</th>
                                            </tr>
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
    <script type="text/javascript">
        $('#btnPrint').on('click',function () {
            $('.content-header').css('display','none');
            window.print();
            $('.content-header').css('display','block');
        });
    </script>
@endsection
