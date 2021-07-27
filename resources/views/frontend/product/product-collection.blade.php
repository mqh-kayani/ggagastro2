@extends('frontend.baseLayout')
@section('title',"Zaida's KloZet| Collections")
@section('main-content')
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url('{{asset('assets/frontend/img/img18.jpeg')}}');">
        <div class="container">
            <div class="breadcrumb-text">
                <span>Style THat Define You</span>
                <h2 class="page-title">Collections</h2>
                <ul class="breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li class="active">Collection</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== SHOP SECTION START ======-->
    <section class="Shop-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Shop Sidebar -->
                <div class="col-lg-12 col-md-12">
                    <div class="shop-products-wrapper">
                        <div class="shop-product-top">
                            <p></p>
                            <div class="sorting-box">
                                <select name="guests" id="guests">
                                    <option value="" disabled selected>Default Sorting</option>
                                    <option value="1">Sort By Popularity</option>
                                    <option value="2">Sort By Latest</option>
                                    <option value="4">Sort By Rating</option>
                                    <option value="8">Sort By Price:Low to High</option>
                                    <option value="8">Sort By Price:High to Low</option>
                                </select>
                            </div>
                        </div>
                        @if(count($clothing_collection) > 0)
                        <div class="product-wrapper restaurant-tab-area">
                            @foreach($clothing_collection as $collection)
                                @if(count($collection->products)>0)
                            <div class="card">
                                <div class="row justify-content-around">
                                    <div class="col-lg-5 col-md-5 p-3" style="background-color: #353530">
                                        <h4 class="text-center" style="color: #ffffff">{{$collection->name}}</h4>
                                    </div>
                                </div>
                            </div>
                                @endif
                            <div class="row">
                                @foreach($collection->products as $product)
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                                    <div class="food-box shop-box">
                                            <div class="thumb product-listing">
                                                <img src="{{asset('assets/frontend/img/product/'.$product->medias[0]->image)}}" alt="images">
                                                {{--                                            <div class="badges">--}}
                                                {{--                                                <span class="price">Sale</span>--}}
                                                {{--                                                <span class="price discounted">-15%</span>--}}
                                                {{--                                            </div>--}}
                                                <div class="button-group">
                                                    <a href="#"><i class="far fa-heart"></i></a>
                                                    {{--                                                <a href="#" data-toggle="modal" data-target="#quickViewModal"><i class="far fa-eye"></i></a>--}}
                                                </div>
                                            </div>
                                            <div class="desc">
                                                <h4>
                                                    <a href="{{route('singleProduct',$product->slug)}}">{{$product->name}}</a>
                                                </h4>
                                                <span class="price">${{$product->price}}</span>
                                                <a href="{{route('singleProduct',$product->slug)}}" class="link"><i class="fal fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== SHOP SECTION END ======-->

@endsection
