@extends('frontend.baseLayout')
@section('title',"ggaGastro")
@section('main-content')
    <!-- SLIDESHOW -->
    <div id="sns_slideshow1" class="wrap">
        <div id="header-slideshow">
            <div class="container">
                <div class="row">
                    <div class="slideshows col-md-6 col-sm-8">
                        <div id="slider123" class="owl-carousel owl-theme" style="overflow: hidden;">
                            <div class="item style1">
                                <img src="{{asset('frontend/images/slider1.jpg')}}" alt="">
                            </div>
                            <div class="item style2">
                                <img src="{{asset('frontend/images/slider2.jpg')}}" alt="">
                            </div>
                            <div class="item style3">
                                <img src="{{asset('frontend/images/slider3.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="banner-right col-md-6 col-sm-4">
                        <div class="banner6 banner5 dbn col-md-12 col-sm-6">
                            <a href="#" class="banner22">
                                <img src="{{asset('frontend/images/s1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="banner6 pdno col-md-12 col-sm-12">
                            <div class="banner7 banner6  banner5 col-md-6 col-sm-12">
                                <a href="#" class="banner22">
                                    <img src="{{asset('frontend/images/s2.png')}}" alt="">
                                </a>
                            </div>
                            <div class="banner8 banner6  banner5 col-md-6 col-sm-12">
                                <a href="#" class="banner22">
                                    <img src="{{asset('frontend/images/s3.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AND SLIDESHOW -->

    <!-- CONTENT -->
    <div id="sns_content" class="wrap layout-m">
        <div class="container">
            <div class="row">
                <div id="sns_main" class="col-md-12 col-main">
                    <div id="sns_mainmidle">
                        <div id="sns_producttaps1" class="sns_producttaps_wraps">
                            <h3 class="precar">PRODUCT TAPS</h3>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Bedst sælgende</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="products-grid row style_grid">
                                        @if(count($products) > 0)
                                            @foreach($products as $product)
                                            <div class="item col-lg-2d4 col-md-3 col-sm-4 col-xs-6 col-phone-12">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <div class="ico-label">
                                                        </div>
                                                        <a class="product-image have-additional"
                                                           title="Product"
                                                           href="{{route('singleProduct',$product->slug)}}">
                                                                <span class="img-main">
                                                               <img src="{{asset('assets/frontend/img/product/'.$product->medias[0]->image)}}" alt="" style="max-height: 162px">
                                                                </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Product" href="#">{{$product->name}}</a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ {{$product->price}}</span>
                                                                    </span>
                                                                </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-bot">
                                                        <div class="wrap-addtocart">
                                                            <form method="post" id="addToCart" action="{{route('addToCart')}}">
                                                                @csrf
                                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                                <input type="hidden" name="product_name" value="{{$product->name}}">
                                                                <input type="hidden" name="product_price" value="{{$product->price}}">
                                                                <input type="hidden" name="quantity" value="1">
                                                            <button type="submit" id="addToCartBtn" class="btn-cart"
                                                                    title="Tilføj til kurv">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span>Tilføj til kurv</span>
                                                            </button>
                                                            </form>
                                                        </div>
                                                        <div class="actions">
                                                            <ul class="add-to-links">
                                                                <li>
                                                                    <a class="link-wishlist"
                                                                       href="#"
                                                                       title="Add to Wishlist">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="link-compare"
                                                                       href="#"
                                                                       title="Add to Compare">
                                                                        <i class="fa fa-random"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="wrap-quickview" data-id="qv_item_7">
                                                                    <div class="quickview-wrap">
                                                                        <a class="sns-btn-quickview qv_btn"
                                                                           href="#">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            @endforeach
                                        @else
                                        <small>No Product Has Been Added Yet!</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                           <a href="{{route('allProducts')}}">
                               <h3 class="bt-more">
                                <span>Se alle emner</span>
                            </h3>
                           </a>
                        </div>

                        <div class="sns_banner">
                            <a href="#">
                                <img src="{{asset('frontend/images/banner11.png')}}" alt="">
                            </a>
                        </div>
                        <div class="sns-products-list">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-title">
                                        <h3>Top emner</h3>
                                    </div>
                                </div>
                                <div id="products_small" class="products-small owl-carousel owl-theme" style="display: inline-block">
                                    <div class="item-row">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Product"
                                                           href="#">
                                                                    <span class="img-main">
                                                                   <img src="{{asset('frontend/images/c111.jpg')}}" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Product"
                                                                   href="#">
                                                                    Product </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Tilføj til kurv">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Tilføj til kurv</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Product"
                                                           href="#">
                                                                    <span class="img-main">
                                                                   <img src="{{asset('frontend/images/c122.jpg')}}" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Product"
                                                                   href="#">
                                                                    Product </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Tilføj til kurv">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Tilføj til kurv</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-row">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Product"
                                                           href="#">
                                                                    <span class="img-main">
                                                                   <img src="{{asset('frontend/images/c131.png')}}" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Product"
                                                                   href="#">
                                                                    Product </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Tilføj til kurv">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Tilføj til kurv</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Product"
                                                           href="#">
                                                                    <span class="img-main">
                                                                   <img src="{{asset('frontend/images/c141.jpg')}}" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Product"
                                                                   href="#">
                                                                    Product </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Tilføj til kurv">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Tilføj til kurv</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-row">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Product"
                                                           href="#">
                                                                    <span class="img-main">
                                                                   <img src="{{asset('frontend/images/c151.jpg')}}" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Product"
                                                                   href="#">
                                                                    Product </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Tilføj til kurv">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Tilføj til kurv</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Product"
                                                           href="#">
                                                                    <span class="img-main">
                                                                   <img src="{{asset('frontend/images/c161.jpg')}}" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Product"
                                                                   href="#">
                                                                    Product </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Tilføj til kurv">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Tilføj til kurv</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-row">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Product"
                                                           href="#">
                                                                    <span class="img-main">
                                                                   <img src="{{asset('frontend/images/c171.jpg')}}" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Product"
                                                                   href="#">
                                                                    Product </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Tilføj til kurv">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Tilføj til kurv</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Product"
                                                           href="#">
                                                                    <span class="img-main">
                                                                   <img src="{{asset('frontend/images/c181.jpg')}}" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Product"
                                                                   href="#">
                                                                    Product </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Tilføj til kurv">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Tilføj til kurv</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-row">
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Product"
                                                           href="#">
                                                                    <span class="img-main">
                                                                   <img src="{{asset('frontend/images/c13.jpg')}}" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Product"
                                                                   href="#">
                                                                    Product </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Tilføj til kurv">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Tilføj til kurv</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="item-inner">
                                                <div class="prd">
                                                    <div class="item-img clearfix">
                                                        <a class="product-image have-additional"
                                                           title="Product"
                                                           href="#">
                                                                    <span class="img-main">
                                                                   <img src="{{asset('frontend/images/c43.jpg')}}" alt="">
                                                                    </span>
                                                        </a>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title">
                                                                <a title="Product"
                                                                   href="#">
                                                                    Product </a>
                                                            </div>
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <span class="regular-price">
                                                                        <span class="price">
                                                                            <span class="price1">$ 540.00</span>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="action-bot">
                                                            <div class="wrap-addtocart">
                                                                <button class="btn-cart"
                                                                        title="Tilføj til kurv">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Tilføj til kurv</span>
                                                                </button>
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
                        <div class="sns-latestblog">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="block-title">
                                        <h3>Vores blogs</h3>
                                    </div>
                                </div>
                                <div id="latestblog132" class="latestblog-content owl-carousel owl-theme" style="display: inline-block">
                                    <div class="item">
                                        <div class="banner5">
                                            <a href="#" class="banner22">
                                                <img src="{{asset('frontend/images/b1.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-page">
                                            <div class="blog-left">
                                                <p class="text1">08</p>
                                                <p class="text2">JAN</p>
                                            </div>

                                            <div class="blog-right">
                                                <p class="style1"><a href="#">Blogtype</a></p>
                                                <p class="style2">Blogtitel </p>
                                                <p class="style3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="banner5">
                                            <a href="#" class="banner22">
                                                <img src="{{asset('frontend/images/b2.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-page">
                                            <div class="blog-left">
                                                <p class="text1">06</p>
                                                <p class="text2">JAN</p>
                                            </div>

                                            <div class="blog-right">
                                                <p class="style1"><a href="#">Blogtype</a></p>
                                                <p class="style2">Blogtitel </p>
                                                <p class="style3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ...</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="banner5">
                                            <a href="#" class="banner22">
                                                <img src="{{asset('frontend/images/b3.jpeg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-page">
                                            <div class="blog-left">
                                                <p class="text1">05</p>
                                                <p class="text2">JAN</p>
                                            </div>

                                            <div class="blog-right">
                                                <p class="style1"><a href="#">Blogtype</a></p>
                                                <p class="style2">Blogtitel </p>
                                                <p class="style3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ...</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="banner5">
                                            <a href="#" class="banner22">
                                                <img src="{{asset('frontend/images/b4.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-page">
                                            <div class="blog-left">
                                                <p class="text1">08</p>
                                                <p class="text2">JAN</p>
                                            </div>

                                            <div class="blog-right">
                                                <p class="style1"><a href="#">Blogtype</a></p>
                                                <p class="style2">Blogtitel </p>
                                                <p class="style3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ...</p>
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
    </div>
    <!-- AND CONTENT -->
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
