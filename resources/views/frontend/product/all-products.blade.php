@extends('frontend.baseLayout')
@section('title',"ggaGastro| Products")
@section('main-content')
    <div id="sns_content" class="wrap layout-lm">
        <div class="container">
            <h3>Produktliste</h3>
            <hr>
            <div class="row">




                <div id="sns_main" class="col-md-12 col-main">
                    <div id="sns_mainmidle">
                        <div class="category-products">

                            <!-- toolbar clearfix -->

{{--                            <div class="toolbar clearfix">--}}
{{--                                <div class="toolbar-inner">--}}
{{--                                    <p class="view-mode">--}}
{{--                                        <label>View as</label>--}}
{{--                                        <strong class="icon-grid" title="Grid"></strong>--}}
{{--                                        <a class="icon-list" title="List" href="listing-list.html"></a>--}}
{{--                                    </p>--}}
{{--                                    <div class="limiter">--}}
{{--                                        <label>Show</label>--}}
{{--                                        <div class="select-new">--}}
{{--                                            <div class="select-inner jqtransformdone">--}}
{{--                                                <div class="jqTransformSelectWrapper" style="z-index: 10; width: 80px;">--}}
{{--                                                    <div>--}}
{{--                                                        <span style="width: 50px;"> 20 </span>--}}
{{--                                                        <a class="jqTransformSelectOpen" href="#"></a>--}}
{{--                                                    </div>--}}
{{--                                                    <ul style="width: 78px; display: none; visibility: visible;">--}}
{{--                                                        <li>--}}
{{--                                                            <a class="selected" href="#"> 20 </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#"> 28 </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#"> 36 </a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <select class="select-limit-show jqTransformHidden" onchange="setLocation(this.value)" style="">--}}
{{--                                                        <option selected="selected" value="http://demo.snstheme.com/sns-simen/index.php/women.html?limit=20"> 20 </option>--}}
{{--                                                        <option value="http://demo.snstheme.com/sns-simen/index.php/women.html?limit=28"> 28 </option>--}}
{{--                                                        <option value="http://demo.snstheme.com/sns-simen/index.php/women.html?limit=36"> 36 </option>--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <span>per page</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="sort-by">--}}
{{--                                        <label>Sort by</label>--}}
{{--                                        <div class="select-new">--}}
{{--                                            <div class="select-inner jqtransformdone">--}}
{{--                                                <div class="jqTransformSelectWrapper" style="z-index: 10; width: 118px;">--}}
{{--                                                    <div>--}}
{{--                                                        <span style="width: 50px;"> Position </span>--}}
{{--                                                        <a class="jqTransformSelectOpen" href="#"></a>--}}
{{--                                                    </div>--}}
{{--                                                    <ul style="width: 116px; display: none; visibility: visible;">--}}
{{--                                                        <li class="active">--}}
{{--                                                            <a class="selected" href="#"> Position </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#"> Name </a>--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <a href="#"> Price </a>--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <select class="select-sort-by jqTransformHidden" onchange="setLocation(this.value)" style="">--}}
{{--                                                        <option selected="selected"> Position </option>--}}
{{--                                                        <option> Name </option>--}}
{{--                                                        <option> Price </option>--}}
{{--                                                    </select>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <!--  <a class="set-desc" title="Set Descending Direction" href="http://demo.snstheme.com/sns-simen/index.php/women.html?dir=desc&order=position"></a> -->--}}
{{--                                    </div>--}}
{{--                                    <div class="pager">--}}
{{--                                        <p class="amount">--}}
{{--                                            <span>1 to 20 </span>--}}
{{--                                            123 item (s)--}}
{{--                                        </p>--}}
{{--                                        <div class="pages">--}}
{{--                                            <strong>Pages:</strong>--}}
{{--                                            <ol>--}}
{{--                                                <li class="current">1</li>--}}
{{--                                                <li>--}}
{{--                                                    <a href="#">2</a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a href="#">3</a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a class="next i-next" title="Next" href="#"> Next </a>--}}
{{--                                                </li>--}}
{{--                                            </ol>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <!-- toolbar clearfix -->



                            <!-- sns-products-container -->
                            <div class="sns-products-container clearfix">
                                <div class="products-grid row style_grid">
                                    @if(count($products) > 0)
                                        @foreach($products as $product)
                                        <div class="item col-lg-3 col-md-4 col-sm-4 col-xs-6 col-phone-12">
                                        <div class="item-inner">
                                            <div class="prd">
                                                <div class="item-img clearfix">
                                                    <a class="product-image have-additional" title="{{$product->name}}" href="{{route('singleProduct',$product->slug)}}">
                                                                <span class="img-main">
                                                               <img src="{{asset('assets/frontend/img/product/'.$product->medias[0]->image)}}" alt="">
                                                                </span>
                                                    </a>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a title="Modular Modern" href="{{route('singleProduct',$product->slug)}}">
                                                                {{$product->name}} </a>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <span class="regular-price">
                                                                    <span class="price">
                                                                        <span class="price1">$ {{$product->name}}</span>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="action-bot action123">
                                                    <form method="post" id="addToCart" action="{{route('addToCart')}}">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                                        <input type="hidden" name="product_name" value="{{$product->name}}">
                                                        <input type="hidden" name="product_price" value="{{$product->price}}">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <div class="wrap-addtocart">
                                                        <button type="submit" id="addToCartBtn" class="btn-cart" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Tilføj til kurv</span>
                                                        </button>
                                                    </div>
                                                    </form>
                                                    <div class="actions">
                                                        <ul class="add-to-links">
                                                            <li>
                                                                <a class="link-wishlist" href="#" title="Add to Wishlist">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="link-compare" href="#" title="Add to Compare">
                                                                    <i class="fa fa-random"></i>
                                                                </a>
                                                            </li>
                                                            <li class="wrap-quickview" data-id="qv_item_7">
                                                                <div class="quickview-wrap">
                                                                    <a class="sns-btn-quickview qv_btn" href="#">
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
                                    <small>Der er endnu ikke tilføjet noget produkt</small>
                                    @endif
                                </div>
                            </div>
                            <!-- sns-products-container -->


                            <!-- toolbar clearfix  bottom-->

{{--                            <div class="toolbar clearfix">--}}
{{--                                <div class="toolbar-inner">--}}
{{--                                    <div class="pager">--}}
{{--                                        <p class="amount">--}}
{{--                                            <span>1 to 20 </span>--}}
{{--                                            123 item (s)--}}
{{--                                        </p>--}}
{{--                                        <div class="pages">--}}
{{--                                            <strong>Pages:</strong>--}}
{{--                                            <ol>--}}
{{--                                                <li class="current">1</li>--}}
{{--                                                <li>--}}
{{--                                                    <a href="#">2</a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a href="#">3</a>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <a class="next i-next" title="Next" href="#"> Next </a>--}}
{{--                                                </li>--}}
{{--                                            </ol>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <!-- toolbar clearfix bottom -->
                        </div>
                    </div>
                </div>
            </div>
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
