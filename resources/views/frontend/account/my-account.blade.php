@extends('frontend.baseLayout')
@section('title',"Zaida's KloZet| My Account")
@section('styles')
    <style>

    </style>
@endsection
@section('main-content')
    <section class="breadcrumb-area" style="background-image: url('{{asset('assets/frontend/img/myaccount.jpg')}}');">
        <div class="container">
            <div class="breadcrumb-text">
                <span>Zaida's KloZet</span>
                <h2 class="page-title">My Account</h2>
                <ul class="breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li class="active">Account</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="account-sec pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="account-tabs">
                        <ul class="nav flex-column nav-tabs border-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#dashboard" role="tab">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#orders" role="tab">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link logout">
                                    <i class="fal fa-power-off"></i>
                                    Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                            <div class="dashboard-content">
                                <p class="text-dark mb-30">Hello <b>{{auth()->user()->name}}</b>
                                </p>
                                <p class="text-dark">From Your Account Dashboard You can View Your <a href="#">Recent Orders</a>
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="orders" role="tabpanel">
                            <div class="content-heading mb-50">
                                <h3>My Orders</h3>
                            </div>
                            <div class="order-table">
                                <table class="table cw-cart-table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th scope="col" class="product-qty">Order ID</th>
                                        <th scope="col" class="product-price">Order Date</th>
                                        <th scope="col" class="product-price">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($orders) > 0)
                                        @foreach($orders as $i=>$order)
                                            <tr>
                                        <td class="product-remove text-center cw-align">
                                            {{++$i}}
                                        </td>
                                        <td data-title="Product" class="has-title">
                                            <a href="#">{{$order->order_no}}</a>
                                        </td>
                                        <td class="product-price cw-align has-title" data-title="Order Date">
                                            {{$order->created_at->format('Y-M-d')}}
                                        </td>
                                        <td data-title="Actions" class="has-title">
                                            <a href="{{route('myOrder',$order->id)}}" class="main-btn btn-filled">View Detail</a>
                                        </td>
                                    </tr>
                                        @endforeach
                                    @else
                                    <b>No Order Has Been Placed Yet!</b>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
