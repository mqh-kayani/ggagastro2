@extends('frontend.baseLayout')
@section('title',"Zaida's KloZet| Order Details")
@section('styles')
    <style>

    </style>
@endsection
@section('main-content')
    <section class="breadcrumb-area" style="background-image: url('{{asset('assets/frontend/img/myaccount.jpg')}}');">
        <div class="container">
            <div class="breadcrumb-text">
                <span>Zaida's KloZet</span>
                <h2 class="page-title">Order Detail</h2>
                <ul class="breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li class="active">Order Detail</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="account-sec pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-heading mb-50">
                        <h3 style="color: #000000 !important;">Order Detail</h3>
                    </div>
                    <div class="order-table">
                        <table class="table cw-cart-table mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th scope="col" class="product-qty">Product Name</th>
                                <th scope="col" class="product-price">Size</th>
                                <th scope="col" class="product-price">Quantity</th>
                                <th scope="col" class="product-price">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($order)
                                @foreach($order->orderDetails as $i=>$item)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td><a href="{{route('singleProduct',$item->product->slug)}}"> {{$item->product->name}}</a></td>
                                        <td>{{$item->product->size}}</td>
                                        <td>{{$item->quantity}}</td>
                                        <td> {{$item->product->price*$item->quantity}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <b>No Order Has Been Placed Yet!</b>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-12 pt-2">
                    <div class="content-heading mb-50">
                        <h3 style="color: #000000 !important;">Shipping Detail</h3>
                    </div>
                    <div class="order-table">
                        <table class="table cw-cart-table mb-0">
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

                <div class="col-lg-12 d-flex justify-content-around">
                    <a href="{{route('myAccount')}}" class="main-btn btn-filled">Return Dashboard</a>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
