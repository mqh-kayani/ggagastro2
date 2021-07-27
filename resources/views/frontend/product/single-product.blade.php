@extends('frontend.baseLayout')
@section('title',"Zaida's KloZet| Products")
@section('styles')
    <style>

    </style>
@endsection
@section('main-content')
    <div id="sns_content" class="wrap layout-m">
        <div class="container">
            <div class="row">
                <div id="sns_main" class="col-md-12 col-main">
                    <div id="sns_mainmidle">
                        <div class="product-view sns-product-detail">
                            <div class="product-essential clearfix">
                                <div class="row row-img">

                                    <div class="product-img-box col-md-4 col-sm-5">
                                        <div class="detail-img">
                                            <img src="{{asset('assets/frontend/img/product/'.$product->medias[0]->image)}}" alt="">
                                        </div>
                                        <div class="small-img">
                                            <div id="sns_thumbail" class="owl-carousel owl-theme owl-loaded">
                                                @foreach($product->medias as $media)
                                                <div class="item">
                                                    <img src="{{asset('assets/frontend/img/product/'.$media->image)}}" alt="">
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div id="product_shop" class="product-shop col-md-8 col-sm-7">
                                        <div class="item-inner product_list_style">
                                            <div class="item-info">
                                                <div class="item-title">
                                                    <a title="Modular Modern" href="#">{{$product->name}}</a>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box">
                                                    <span class="regular-price">
                                                        <span class="price">$ {{$product->price}}</span>
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="availability">
                                                    <p class="style1">Tilgængelighed: På lager</p>
                                                </div>
                                                <div class="desc std">
                                                    <h5>Beskrivelse</h5>
                                                    <p>{{$product->description}}</p>
                                                </div>
                                                <div class="actions">
                                                    <label class="gfont" for="qty">Antal : </label>
                                                    <form method="post" id="addToCart" action="{{route('addToCart')}}">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                                        <input type="hidden" name="product_name" value="{{$product->name}}">
                                                        <input type="hidden" name="product_price" value="{{$product->price}}">
                                                        <div class="qty-container">
                                                        <button class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty > 1 ) qty_el.value--;return false;" type="button"></button>
                                                        <input id="qty"  class="input-text qty" type="text" title="Qty" value="1" name="quantity">
                                                        <button class="qty-increase" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" type="button"></button>
                                                    </div>

                                                    <button id="addToCartBtn" type="submit" class="btn-cart" title="Add to Cart" data-id="qv_item_8">
                                                        Tilføj til kurv
                                                    </button>
                                                    </form>
{{--                                                    <ul class="add-to-links">--}}
{{--                                                        <li>--}}
{{--                                                            <a class="link-wishlist" data-original-title="Add to Wishlist" data-toggle="tooltip" href="#" title=""></a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a class="link-compare" data-original-title="Add to Compare" data-toggle="tooltip" href="#" title=""></a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <div class="wrap-quickview" data-id="qv_item_8">--}}
{{--                                                                <div class="quickview-wrap">--}}
{{--                                                                    <a class="sns-btn-quickview qv_btn" data-original-title="View" data-toggle="tooltip" href="#">--}}
{{--                                                                        <span>View</span>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="bottom row">--}}
{{--                <div class="2coloum-left">--}}
{{--                    <div id="sns_mainm" class="col-md-12">--}}
{{--                        <div class="products-related">--}}
{{--                            <div class="detai-products1">--}}
{{--                                <div class="title">--}}
{{--                                    <h3>Related products</h3>--}}
{{--                                </div>--}}
{{--                                <div class="products-grid">--}}
{{--                                    <form class="top">--}}
{{--                                        <input type="checkbox" name="vehicle" value="Bike">Check all products--}}
{{--                                    </form>--}}
{{--                                    <div id="related_upsell1" class="item-row owl-carousel owl-theme owl-loaded" style="display: inline-block">--}}





{{--                                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-890px, 0px, 0px); transition: all 0s ease 0s; width: 2892.5px;"><div class="owl-item cloned" style="width: 222.5px; margin-right: 0px;"><div class="item">--}}
{{--                                                        <div class="item-inner">--}}
{{--                                                            <div class="prd">--}}
{{--                                                                <div class="item-img clearfix">--}}
{{--                                                                    <form class="bot">--}}
{{--                                                                        <input type="checkbox" name="vehicle" value="Bike">--}}
{{--                                                                    </form>--}}
{{--                                                                    <div class="ico-label">--}}
{{--                                                                        <span class="ico-product ico-new">New</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">--}}
{{--                                                                    <span class="img-main">--}}
{{--                                                                        <img alt="" src="images/products/13.jpg">--}}
{{--                                                                    </span>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="item-info">--}}
{{--                                                                    <div class="info-inner">--}}
{{--                                                                        <div class="item-title">--}}
{{--                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="item-price">--}}
{{--                                                                            <div class="price-box">--}}
{{--                                                                            <span class="regular-price">--}}
{{--                                                                                <span class="price">--}}
{{--                                                                                    <span class="price1">$ 540.00</span>--}}
{{--                                                                                    <span class="price2">$ 600.00</span>--}}
{{--                                                                                </span>--}}
{{--                                                                            </span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="action-bot">--}}
{{--                                                                    <div class="wrap-addtocart">--}}
{{--                                                                        <button class="btn-cart" title="Add to Cart">--}}
{{--                                                                            <i class="fa fa-shopping-cart"></i>--}}
{{--                                                                            <span>Add to Cart</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="actions">--}}
{{--                                                                        <ul class="add-to-links">--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">--}}
{{--                                                                                    <i class="fa fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-compare" title="Add to Compare" href="#">--}}
{{--                                                                                    <i class="fa fa-random"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li class="wrap-quickview" data-id="qv_item_7">--}}
{{--                                                                                <div class="quickview-wrap">--}}
{{--                                                                                    <a class="sns-btn-quickview qv_btn" href="#">--}}
{{--                                                                                        <i class="fa fa-eye"></i>--}}
{{--                                                                                    </a>--}}
{{--                                                                                </div>--}}
{{--                                                                            </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div></div><div class="owl-item cloned" style="width: 222.5px; margin-right: 0px;"><div class="item">--}}
{{--                                                        <div class="item-inner">--}}
{{--                                                            <div class="prd">--}}
{{--                                                                <div class="item-img clearfix">--}}
{{--                                                                    <form class="bot">--}}
{{--                                                                        <input type="checkbox" name="vehicle" value="Bike">--}}
{{--                                                                    </form>--}}
{{--                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">--}}
{{--                                                                    <span class="img-main">--}}
{{--                                                                        <img alt="" src="images/products/3.jpg">--}}
{{--                                                                    </span>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="item-info">--}}
{{--                                                                    <div class="info-inner">--}}
{{--                                                                        <div class="item-title">--}}
{{--                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="item-price">--}}
{{--                                                                            <div class="price-box">--}}
{{--                                                                            <span class="regular-price">--}}
{{--                                                                                <span class="price">--}}
{{--                                                                                    <span class="price1">$ 540.00</span>--}}
{{--                                                                                    <span class="price2">$ 600.00</span>--}}
{{--                                                                                </span>--}}
{{--                                                                            </span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="action-bot">--}}
{{--                                                                    <div class="wrap-addtocart">--}}
{{--                                                                        <button class="btn-cart" title="Add to Cart">--}}
{{--                                                                            <i class="fa fa-shopping-cart"></i>--}}
{{--                                                                            <span>Add to Cart</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="actions">--}}
{{--                                                                        <ul class="add-to-links">--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">--}}
{{--                                                                                    <i class="fa fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-compare" title="Add to Compare" href="#">--}}
{{--                                                                                    <i class="fa fa-random"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li class="wrap-quickview" data-id="qv_item_7">--}}
{{--                                                                                <div class="quickview-wrap">--}}
{{--                                                                                    <a class="sns-btn-quickview qv_btn" href="#">--}}
{{--                                                                                        <i class="fa fa-eye"></i>--}}
{{--                                                                                    </a>--}}
{{--                                                                                </div>--}}
{{--                                                                            </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div></div><div class="owl-item cloned" style="width: 222.5px; margin-right: 0px;"><div class="item">--}}
{{--                                                        <div class="item-inner">--}}
{{--                                                            <div class="prd">--}}
{{--                                                                <div class="item-img clearfix">--}}
{{--                                                                    <form class="bot">--}}
{{--                                                                        <input type="checkbox" name="vehicle" value="Bike">--}}
{{--                                                                    </form>--}}
{{--                                                                    <div class="ico-label">--}}
{{--                                                                        <span class="ico-product ico-new">New</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">--}}
{{--                                                                    <span class="img-main">--}}
{{--                                                                        <img alt="" src="images/products/26.jpg">--}}
{{--                                                                    </span>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="item-info">--}}
{{--                                                                    <div class="info-inner">--}}
{{--                                                                        <div class="item-title">--}}
{{--                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="item-price">--}}
{{--                                                                            <div class="price-box">--}}
{{--                                                                            <span class="regular-price">--}}
{{--                                                                                <span class="price">--}}
{{--                                                                                    <span class="price1">$ 540.00</span>--}}
{{--                                                                                    <span class="price2">$ 600.00</span>--}}
{{--                                                                                </span>--}}
{{--                                                                            </span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="action-bot">--}}
{{--                                                                    <div class="wrap-addtocart">--}}
{{--                                                                        <button class="btn-cart" title="Add to Cart">--}}
{{--                                                                            <i class="fa fa-shopping-cart"></i>--}}
{{--                                                                            <span>Add to Cart</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="actions">--}}
{{--                                                                        <ul class="add-to-links">--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">--}}
{{--                                                                                    <i class="fa fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-compare" title="Add to Compare" href="#">--}}
{{--                                                                                    <i class="fa fa-random"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li class="wrap-quickview" data-id="qv_item_7">--}}
{{--                                                                                <div class="quickview-wrap">--}}
{{--                                                                                    <a class="sns-btn-quickview qv_btn" href="#">--}}
{{--                                                                                        <i class="fa fa-eye"></i>--}}
{{--                                                                                    </a>--}}
{{--                                                                                </div>--}}
{{--                                                                            </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div></div><div class="owl-item cloned" style="width: 222.5px; margin-right: 0px;"><div class="item">--}}
{{--                                                        <div class="item-inner">--}}
{{--                                                            <div class="prd">--}}
{{--                                                                <div class="item-img clearfix">--}}
{{--                                                                    <form class="bot">--}}
{{--                                                                        <input type="checkbox" name="vehicle" value="Bike">--}}
{{--                                                                    </form>--}}
{{--                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">--}}
{{--                                                                    <span class="img-main">--}}
{{--                                                                        <img alt="" src="images/products/29.jpg">--}}
{{--                                                                    </span>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="item-info">--}}
{{--                                                                    <div class="info-inner">--}}
{{--                                                                        <div class="item-title">--}}
{{--                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="item-price">--}}
{{--                                                                            <div class="price-box">--}}
{{--                                                                            <span class="regular-price">--}}
{{--                                                                                <span class="price">--}}
{{--                                                                                    <span class="price1">$ 540.00</span>--}}
{{--                                                                                    <span class="price2">$ 600.00</span>--}}
{{--                                                                                </span>--}}
{{--                                                                            </span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="action-bot">--}}
{{--                                                                    <div class="wrap-addtocart">--}}
{{--                                                                        <button class="btn-cart" title="Add to Cart">--}}
{{--                                                                            <i class="fa fa-shopping-cart"></i>--}}
{{--                                                                            <span>Add to Cart</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="actions">--}}
{{--                                                                        <ul class="add-to-links">--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">--}}
{{--                                                                                    <i class="fa fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-compare" title="Add to Compare" href="#">--}}
{{--                                                                                    <i class="fa fa-random"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li class="wrap-quickview" data-id="qv_item_7">--}}
{{--                                                                                <div class="quickview-wrap">--}}
{{--                                                                                    <a class="sns-btn-quickview qv_btn" href="#">--}}
{{--                                                                                        <i class="fa fa-eye"></i>--}}
{{--                                                                                    </a>--}}
{{--                                                                                </div>--}}
{{--                                                                            </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div></div><div class="owl-item active" style="width: 222.5px; margin-right: 0px;"><div class="item">--}}
{{--                                                        <div class="item-inner">--}}
{{--                                                            <div class="prd">--}}
{{--                                                                <div class="item-img clearfix">--}}
{{--                                                                    <form class="bot">--}}
{{--                                                                        <input type="checkbox" name="vehicle" value="Bike">--}}
{{--                                                                    </form>--}}
{{--                                                                    <div class="ico-label">--}}
{{--                                                                        <span class="ico-product ico-sale">Sale</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">--}}
{{--                                                                    <span class="img-main">--}}
{{--                                                                        <img alt="" src="images/products/8.jpg">--}}
{{--                                                                    </span>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="item-info">--}}
{{--                                                                    <div class="info-inner">--}}
{{--                                                                        <div class="item-title">--}}
{{--                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="item-price">--}}
{{--                                                                            <div class="price-box">--}}
{{--                                                                            <span class="regular-price">--}}
{{--                                                                                <span class="price">--}}
{{--                                                                                    <span class="price1">$ 540.00</span>--}}
{{--                                                                                    <span class="price2">$ 600.00</span>--}}
{{--                                                                                </span>--}}
{{--                                                                            </span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="action-bot">--}}
{{--                                                                    <div class="wrap-addtocart">--}}
{{--                                                                        <button class="btn-cart" title="Add to Cart">--}}
{{--                                                                            <i class="fa fa-shopping-cart"></i>--}}
{{--                                                                            <span>Add to Cart</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="actions">--}}
{{--                                                                        <ul class="add-to-links">--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">--}}
{{--                                                                                    <i class="fa fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-compare" title="Add to Compare" href="#">--}}
{{--                                                                                    <i class="fa fa-random"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li class="wrap-quickview" data-id="qv_item_7">--}}
{{--                                                                                <div class="quickview-wrap">--}}
{{--                                                                                    <a class="sns-btn-quickview qv_btn" href="#">--}}
{{--                                                                                        <i class="fa fa-eye"></i>--}}
{{--                                                                                    </a>--}}
{{--                                                                                </div>--}}
{{--                                                                            </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div></div><div class="owl-item active" style="width: 222.5px; margin-right: 0px;"><div class="item">--}}
{{--                                                        <div class="item-inner">--}}
{{--                                                            <div class="prd">--}}
{{--                                                                <div class="item-img clearfix">--}}
{{--                                                                    <form class="bot">--}}
{{--                                                                        <input type="checkbox" name="vehicle" value="Bike">--}}
{{--                                                                    </form>--}}
{{--                                                                    <div class="ico-label">--}}
{{--                                                                        <span class="ico-product ico-new">New</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">--}}
{{--                                                                    <span class="img-main">--}}
{{--                                                                        <img alt="" src="images/products/13.jpg">--}}
{{--                                                                    </span>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="item-info">--}}
{{--                                                                    <div class="info-inner">--}}
{{--                                                                        <div class="item-title">--}}
{{--                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="item-price">--}}
{{--                                                                            <div class="price-box">--}}
{{--                                                                            <span class="regular-price">--}}
{{--                                                                                <span class="price">--}}
{{--                                                                                    <span class="price1">$ 540.00</span>--}}
{{--                                                                                    <span class="price2">$ 600.00</span>--}}
{{--                                                                                </span>--}}
{{--                                                                            </span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="action-bot">--}}
{{--                                                                    <div class="wrap-addtocart">--}}
{{--                                                                        <button class="btn-cart" title="Add to Cart">--}}
{{--                                                                            <i class="fa fa-shopping-cart"></i>--}}
{{--                                                                            <span>Add to Cart</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="actions">--}}
{{--                                                                        <ul class="add-to-links">--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">--}}
{{--                                                                                    <i class="fa fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-compare" title="Add to Compare" href="#">--}}
{{--                                                                                    <i class="fa fa-random"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li class="wrap-quickview" data-id="qv_item_7">--}}
{{--                                                                                <div class="quickview-wrap">--}}
{{--                                                                                    <a class="sns-btn-quickview qv_btn" href="#">--}}
{{--                                                                                        <i class="fa fa-eye"></i>--}}
{{--                                                                                    </a>--}}
{{--                                                                                </div>--}}
{{--                                                                            </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div></div><div class="owl-item active" style="width: 222.5px; margin-right: 0px;"><div class="item">--}}
{{--                                                        <div class="item-inner">--}}
{{--                                                            <div class="prd">--}}
{{--                                                                <div class="item-img clearfix">--}}
{{--                                                                    <form class="bot">--}}
{{--                                                                        <input type="checkbox" name="vehicle" value="Bike">--}}
{{--                                                                    </form>--}}
{{--                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">--}}
{{--                                                                    <span class="img-main">--}}
{{--                                                                        <img alt="" src="images/products/3.jpg">--}}
{{--                                                                    </span>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="item-info">--}}
{{--                                                                    <div class="info-inner">--}}
{{--                                                                        <div class="item-title">--}}
{{--                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="item-price">--}}
{{--                                                                            <div class="price-box">--}}
{{--                                                                            <span class="regular-price">--}}
{{--                                                                                <span class="price">--}}
{{--                                                                                    <span class="price1">$ 540.00</span>--}}
{{--                                                                                    <span class="price2">$ 600.00</span>--}}
{{--                                                                                </span>--}}
{{--                                                                            </span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="action-bot">--}}
{{--                                                                    <div class="wrap-addtocart">--}}
{{--                                                                        <button class="btn-cart" title="Add to Cart">--}}
{{--                                                                            <i class="fa fa-shopping-cart"></i>--}}
{{--                                                                            <span>Add to Cart</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="actions">--}}
{{--                                                                        <ul class="add-to-links">--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">--}}
{{--                                                                                    <i class="fa fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-compare" title="Add to Compare" href="#">--}}
{{--                                                                                    <i class="fa fa-random"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li class="wrap-quickview" data-id="qv_item_7">--}}
{{--                                                                                <div class="quickview-wrap">--}}
{{--                                                                                    <a class="sns-btn-quickview qv_btn" href="#">--}}
{{--                                                                                        <i class="fa fa-eye"></i>--}}
{{--                                                                                    </a>--}}
{{--                                                                                </div>--}}
{{--                                                                            </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div></div><div class="owl-item active" style="width: 222.5px; margin-right: 0px;"><div class="item">--}}
{{--                                                        <div class="item-inner">--}}
{{--                                                            <div class="prd">--}}
{{--                                                                <div class="item-img clearfix">--}}
{{--                                                                    <form class="bot">--}}
{{--                                                                        <input type="checkbox" name="vehicle" value="Bike">--}}
{{--                                                                    </form>--}}
{{--                                                                    <div class="ico-label">--}}
{{--                                                                        <span class="ico-product ico-new">New</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">--}}
{{--                                                                    <span class="img-main">--}}
{{--                                                                        <img alt="" src="images/products/26.jpg">--}}
{{--                                                                    </span>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="item-info">--}}
{{--                                                                    <div class="info-inner">--}}
{{--                                                                        <div class="item-title">--}}
{{--                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="item-price">--}}
{{--                                                                            <div class="price-box">--}}
{{--                                                                            <span class="regular-price">--}}
{{--                                                                                <span class="price">--}}
{{--                                                                                    <span class="price1">$ 540.00</span>--}}
{{--                                                                                    <span class="price2">$ 600.00</span>--}}
{{--                                                                                </span>--}}
{{--                                                                            </span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="action-bot">--}}
{{--                                                                    <div class="wrap-addtocart">--}}
{{--                                                                        <button class="btn-cart" title="Add to Cart">--}}
{{--                                                                            <i class="fa fa-shopping-cart"></i>--}}
{{--                                                                            <span>Add to Cart</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="actions">--}}
{{--                                                                        <ul class="add-to-links">--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">--}}
{{--                                                                                    <i class="fa fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-compare" title="Add to Compare" href="#">--}}
{{--                                                                                    <i class="fa fa-random"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li class="wrap-quickview" data-id="qv_item_7">--}}
{{--                                                                                <div class="quickview-wrap">--}}
{{--                                                                                    <a class="sns-btn-quickview qv_btn" href="#">--}}
{{--                                                                                        <i class="fa fa-eye"></i>--}}
{{--                                                                                    </a>--}}
{{--                                                                                </div>--}}
{{--                                                                            </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div></div><div class="owl-item" style="width: 222.5px; margin-right: 0px;"><div class="item">--}}
{{--                                                        <div class="item-inner">--}}
{{--                                                            <div class="prd">--}}
{{--                                                                <div class="item-img clearfix">--}}
{{--                                                                    <form class="bot">--}}
{{--                                                                        <input type="checkbox" name="vehicle" value="Bike">--}}
{{--                                                                    </form>--}}
{{--                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">--}}
{{--                                                                    <span class="img-main">--}}
{{--                                                                        <img alt="" src="images/products/29.jpg">--}}
{{--                                                                    </span>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="item-info">--}}
{{--                                                                    <div class="info-inner">--}}
{{--                                                                        <div class="item-title">--}}
{{--                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="item-price">--}}
{{--                                                                            <div class="price-box">--}}
{{--                                                                            <span class="regular-price">--}}
{{--                                                                                <span class="price">--}}
{{--                                                                                    <span class="price1">$ 540.00</span>--}}
{{--                                                                                    <span class="price2">$ 600.00</span>--}}
{{--                                                                                </span>--}}
{{--                                                                            </span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="action-bot">--}}
{{--                                                                    <div class="wrap-addtocart">--}}
{{--                                                                        <button class="btn-cart" title="Add to Cart">--}}
{{--                                                                            <i class="fa fa-shopping-cart"></i>--}}
{{--                                                                            <span>Add to Cart</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="actions">--}}
{{--                                                                        <ul class="add-to-links">--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">--}}
{{--                                                                                    <i class="fa fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-compare" title="Add to Compare" href="#">--}}
{{--                                                                                    <i class="fa fa-random"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li class="wrap-quickview" data-id="qv_item_7">--}}
{{--                                                                                <div class="quickview-wrap">--}}
{{--                                                                                    <a class="sns-btn-quickview qv_btn" href="#">--}}
{{--                                                                                        <i class="fa fa-eye"></i>--}}
{{--                                                                                    </a>--}}
{{--                                                                                </div>--}}
{{--                                                                            </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div></div><div class="owl-item cloned" style="width: 222.5px; margin-right: 0px;"><div class="item">--}}
{{--                                                        <div class="item-inner">--}}
{{--                                                            <div class="prd">--}}
{{--                                                                <div class="item-img clearfix">--}}
{{--                                                                    <form class="bot">--}}
{{--                                                                        <input type="checkbox" name="vehicle" value="Bike">--}}
{{--                                                                    </form>--}}
{{--                                                                    <div class="ico-label">--}}
{{--                                                                        <span class="ico-product ico-sale">Sale</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">--}}
{{--                                                                    <span class="img-main">--}}
{{--                                                                        <img alt="" src="images/products/8.jpg">--}}
{{--                                                                    </span>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="item-info">--}}
{{--                                                                    <div class="info-inner">--}}
{{--                                                                        <div class="item-title">--}}
{{--                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="item-price">--}}
{{--                                                                            <div class="price-box">--}}
{{--                                                                            <span class="regular-price">--}}
{{--                                                                                <span class="price">--}}
{{--                                                                                    <span class="price1">$ 540.00</span>--}}
{{--                                                                                    <span class="price2">$ 600.00</span>--}}
{{--                                                                                </span>--}}
{{--                                                                            </span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="action-bot">--}}
{{--                                                                    <div class="wrap-addtocart">--}}
{{--                                                                        <button class="btn-cart" title="Add to Cart">--}}
{{--                                                                            <i class="fa fa-shopping-cart"></i>--}}
{{--                                                                            <span>Add to Cart</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="actions">--}}
{{--                                                                        <ul class="add-to-links">--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">--}}
{{--                                                                                    <i class="fa fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-compare" title="Add to Compare" href="#">--}}
{{--                                                                                    <i class="fa fa-random"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li class="wrap-quickview" data-id="qv_item_7">--}}
{{--                                                                                <div class="quickview-wrap">--}}
{{--                                                                                    <a class="sns-btn-quickview qv_btn" href="#">--}}
{{--                                                                                        <i class="fa fa-eye"></i>--}}
{{--                                                                                    </a>--}}
{{--                                                                                </div>--}}
{{--                                                                            </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div></div><div class="owl-item cloned" style="width: 222.5px; margin-right: 0px;"><div class="item">--}}
{{--                                                        <div class="item-inner">--}}
{{--                                                            <div class="prd">--}}
{{--                                                                <div class="item-img clearfix">--}}
{{--                                                                    <form class="bot">--}}
{{--                                                                        <input type="checkbox" name="vehicle" value="Bike">--}}
{{--                                                                    </form>--}}
{{--                                                                    <div class="ico-label">--}}
{{--                                                                        <span class="ico-product ico-new">New</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">--}}
{{--                                                                    <span class="img-main">--}}
{{--                                                                        <img alt="" src="images/products/13.jpg">--}}
{{--                                                                    </span>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="item-info">--}}
{{--                                                                    <div class="info-inner">--}}
{{--                                                                        <div class="item-title">--}}
{{--                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="item-price">--}}
{{--                                                                            <div class="price-box">--}}
{{--                                                                            <span class="regular-price">--}}
{{--                                                                                <span class="price">--}}
{{--                                                                                    <span class="price1">$ 540.00</span>--}}
{{--                                                                                    <span class="price2">$ 600.00</span>--}}
{{--                                                                                </span>--}}
{{--                                                                            </span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="action-bot">--}}
{{--                                                                    <div class="wrap-addtocart">--}}
{{--                                                                        <button class="btn-cart" title="Add to Cart">--}}
{{--                                                                            <i class="fa fa-shopping-cart"></i>--}}
{{--                                                                            <span>Add to Cart</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="actions">--}}
{{--                                                                        <ul class="add-to-links">--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">--}}
{{--                                                                                    <i class="fa fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-compare" title="Add to Compare" href="#">--}}
{{--                                                                                    <i class="fa fa-random"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li class="wrap-quickview" data-id="qv_item_7">--}}
{{--                                                                                <div class="quickview-wrap">--}}
{{--                                                                                    <a class="sns-btn-quickview qv_btn" href="#">--}}
{{--                                                                                        <i class="fa fa-eye"></i>--}}
{{--                                                                                    </a>--}}
{{--                                                                                </div>--}}
{{--                                                                            </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div></div><div class="owl-item cloned" style="width: 222.5px; margin-right: 0px;"><div class="item">--}}
{{--                                                        <div class="item-inner">--}}
{{--                                                            <div class="prd">--}}
{{--                                                                <div class="item-img clearfix">--}}
{{--                                                                    <form class="bot">--}}
{{--                                                                        <input type="checkbox" name="vehicle" value="Bike">--}}
{{--                                                                    </form>--}}
{{--                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">--}}
{{--                                                                    <span class="img-main">--}}
{{--                                                                        <img alt="" src="images/products/3.jpg">--}}
{{--                                                                    </span>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="item-info">--}}
{{--                                                                    <div class="info-inner">--}}
{{--                                                                        <div class="item-title">--}}
{{--                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="item-price">--}}
{{--                                                                            <div class="price-box">--}}
{{--                                                                            <span class="regular-price">--}}
{{--                                                                                <span class="price">--}}
{{--                                                                                    <span class="price1">$ 540.00</span>--}}
{{--                                                                                    <span class="price2">$ 600.00</span>--}}
{{--                                                                                </span>--}}
{{--                                                                            </span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="action-bot">--}}
{{--                                                                    <div class="wrap-addtocart">--}}
{{--                                                                        <button class="btn-cart" title="Add to Cart">--}}
{{--                                                                            <i class="fa fa-shopping-cart"></i>--}}
{{--                                                                            <span>Add to Cart</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="actions">--}}
{{--                                                                        <ul class="add-to-links">--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">--}}
{{--                                                                                    <i class="fa fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-compare" title="Add to Compare" href="#">--}}
{{--                                                                                    <i class="fa fa-random"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li class="wrap-quickview" data-id="qv_item_7">--}}
{{--                                                                                <div class="quickview-wrap">--}}
{{--                                                                                    <a class="sns-btn-quickview qv_btn" href="#">--}}
{{--                                                                                        <i class="fa fa-eye"></i>--}}
{{--                                                                                    </a>--}}
{{--                                                                                </div>--}}
{{--                                                                            </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div></div><div class="owl-item cloned" style="width: 222.5px; margin-right: 0px;"><div class="item">--}}
{{--                                                        <div class="item-inner">--}}
{{--                                                            <div class="prd">--}}
{{--                                                                <div class="item-img clearfix">--}}
{{--                                                                    <form class="bot">--}}
{{--                                                                        <input type="checkbox" name="vehicle" value="Bike">--}}
{{--                                                                    </form>--}}
{{--                                                                    <div class="ico-label">--}}
{{--                                                                        <span class="ico-product ico-new">New</span>--}}
{{--                                                                    </div>--}}
{{--                                                                    <a class="product-image have-additional" href="detail.html" title="Modular Modern">--}}
{{--                                                                    <span class="img-main">--}}
{{--                                                                        <img alt="" src="images/products/26.jpg">--}}
{{--                                                                    </span>--}}
{{--                                                                    </a>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="item-info">--}}
{{--                                                                    <div class="info-inner">--}}
{{--                                                                        <div class="item-title">--}}
{{--                                                                            <a href="detail.html" title="Modular Modern"> Modular Modern </a>--}}
{{--                                                                        </div>--}}
{{--                                                                        <div class="item-price">--}}
{{--                                                                            <div class="price-box">--}}
{{--                                                                            <span class="regular-price">--}}
{{--                                                                                <span class="price">--}}
{{--                                                                                    <span class="price1">$ 540.00</span>--}}
{{--                                                                                    <span class="price2">$ 600.00</span>--}}
{{--                                                                                </span>--}}
{{--                                                                            </span>--}}
{{--                                                                            </div>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="action-bot">--}}
{{--                                                                    <div class="wrap-addtocart">--}}
{{--                                                                        <button class="btn-cart" title="Add to Cart">--}}
{{--                                                                            <i class="fa fa-shopping-cart"></i>--}}
{{--                                                                            <span>Add to Cart</span>--}}
{{--                                                                        </button>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="actions">--}}
{{--                                                                        <ul class="add-to-links">--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-wishlist" title="Add to Wishlist" href="#">--}}
{{--                                                                                    <i class="fa fa-heart"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li>--}}
{{--                                                                                <a class="link-compare" title="Add to Compare" href="#">--}}
{{--                                                                                    <i class="fa fa-random"></i>--}}
{{--                                                                                </a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li class="wrap-quickview" data-id="qv_item_7">--}}
{{--                                                                                <div class="quickview-wrap">--}}
{{--                                                                                    <a class="sns-btn-quickview qv_btn" href="#">--}}
{{--                                                                                        <i class="fa fa-eye"></i>--}}
{{--                                                                                    </a>--}}
{{--                                                                                </div>--}}
{{--                                                                            </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div class="owl-dots" style="display: none;"></div></div></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('#addToCartBtn').on('click',function (e) {
            @if(!auth()->check())
            e.preventDefault();
            $('#loginModal').modal('show');
            @else
            $('#addToCart').submit();
            @endif
        });
    </script>
@endsection
