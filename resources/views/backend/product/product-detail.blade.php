@extends('backend.baseLayout')
@section('title',"Zaida's KloZet | Products")
@section('main-content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Produktoplysninger</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('adminDashboard')}}">Hjem</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        <a href="{{route('viewProducts')}}">Produkter</a>
                                    </li>
                                    <li class="breadcrumb-item active">
                                        <a href="#">{{$product ? $product->name : ''}}</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">--}}
{{--                    <div class="form-group breadcrum-right">--}}
{{--                        <div class="dropdown">--}}
{{--                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>--}}
{{--                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="content-body">
                <!-- app ecommerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-5 mt-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="{{asset('assets/frontend/img/product/'.$product->medias[0]->image)}}" class="img-fluid" alt="product image">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h5>{{$product->name}}</h5>
                                    <p class="text-muted">Kategori: {{$product->category->name}}</p>
                                    <div class="ecommerce-details-price d-flex flex-wrap">

                                        <p class="text-primary font-medium-3 mr-1 mb-0">${{$product->price}}</p>
{{--                                        <span class="pl-1 font-medium-3 border-left">--}}
{{--                                            <i class="feather icon-star text-warning"></i>--}}
{{--                                            <i class="feather icon-star text-warning"></i>--}}
{{--                                            <i class="feather icon-star text-warning"></i>--}}
{{--                                            <i class="feather icon-star text-warning"></i>--}}
{{--                                            <i class="feather icon-star text-secondary"></i>--}}
{{--                                        </span>--}}
{{--                                        <span class="ml-50 text-dark font-medium-1">424 ratings</span>--}}
                                    </div>
                                    <hr>
                                    <p>{{$product->description}}</p>
                                    <hr>
                                    <hr>
                                    <p>Ledig - <span class="text-success">På lager</span></p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="item-features">
                            <div class="row text-center pt-2">
                                <div class="col-md-12 col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Produktbilleder</h4>
                                            <button type="button" class="btn btn-outline-success waves-effect waves-light" data-toggle="modal" data-target="#inlineForm">
                                                + Tilføj ny
                                            </button>
                                            <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33">Tilføj nyt billede</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="{{route('addMoreProductImage')}}" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                                            <div class="modal-body">
                                                                <label>Upload billeder : </label>
                                                                <div class="form-group">
                                                                    <div class="input-field" style="width: 100% !important;">
                                                                        <div class="input-images-1" style="padding-top: .5rem;"></div>
                                                                        @if($errors->has('images'))
                                                                            <span style="color: red; font-size: 12px">{{$errors->first('images')}}</span>
                                                                        @endif
                                                                        <span id="no-image" style="color: red; font-size: 12px;display: none">Vælg Atleast 1-billede</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer d-flex justify-content-center">
                                                                <button id="btnNewImage" type="submit" class="btn btn-primary col-8 btn-block waves-effect waves-light">+Add</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body">
                                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
{{--                                                        @foreach($product->medias as $i=>$image)--}}
{{--                                                        <li data-target="#carousel-example-generic" data-slide-to="{{++$i}}" class="{{++$i == 2 ? 'active' : ''}}"></li>--}}
{{--                                                        @endforeach--}}
                                                    </ol>
                                                    <div class="carousel-inner" role="listbox">
                                                        @foreach($product->medias as $i=>$image)
                                                            @if(count($product->medias) > 1)
                                                            <div class="carousel-item {{++$i == 2 ? 'active' : ''}}">
                                                                <img class="img-fluid" src="{{asset('assets/frontend/img/product/'.$image->image)}}" alt="">
                                                            </div>
                                                            @else
                                                                <div class="carousel-item active">
                                                                    <img class="img-fluid" src="{{asset('assets/frontend/img/product/'.$image->image)}}" alt="">
                                                                </div>
                                                            @endif
                                                        @endforeach

                                                    </div>
                                                    <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Tidligere</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Næste</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-features">
                            <div class="row text-center pt-2">
                            @foreach($product->medias as $i=>$image)
                            <div class="col-xl-3 col-md-3 col-sm-6">
                                <div class="card" style="height: 208.344px;">
                                    <div class="card-content" style="height: 100% !important; position: relative">
                                        <img style="max-height: 100%; min-height: 100%" class="card-img-top img-fluid" src="{{asset('assets/frontend/img/product/'.$image->image)}}" alt="Card image cap">
                                        <div class="card-body p-0 w-100" style="position: absolute; bottom: 0;">
                                            <div class="card-btns d-flex justify-content-around mt-2">
                                                <button type="button" class="btn btn-info btn-sm waves-effect waves-light float-left btnUpdateImage" data-id="{{$image->id}}"><i class="feather icon-edit"></i> Update</button>
                                                @if(count($product->medias) > 1)
                                                <a href="{{route('removeProductImage',$image->id)}}" type="button" class="btn btn-danger btn-sm waves-effect waves-light float-right"><i class="feather icon-trash"></i> Remove</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                                <div class="modal fade text-left" id="updateProductImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel33">Opdater billede</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <form method="post" action="{{route('updateProductImage')}}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <input type="hidden" name="product_image_id" id="product-image-id">
                                                    <label>Vælg billede : </label>
                                                    <div class="form-group">
                                                        <div class="custom-file">
                                                            <input type="file" name="product_image" class="custom-file-input" id="inputGroupFile01">
                                                            <label class="custom-file-label" for="inputGroupFile01">Vælg fil</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-info col-8 btn-block waves-effect waves-light">Opdatering</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- app ecommerce details end -->

            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $('.btnUpdateImage').each(function () {
            $(this).on('click',function () {
                var image_id = $(this).data("id");
                $.ajax({
                    url:'{{route('getProductImage')}}/'+image_id,
                    type:'GET',
                    success:function (response) {
                        $('#product-image-id').val(response.data.id);
                        $('#updateProductImage').modal('show');
                    },
                });

            });
        })

        $('.input-images-1').imageUploader();


        $('#btnNewImage').on('click',function (e) {
            $images = $('.image-uploader');
            if(!$images.hasClass('has-files')){
                e.preventDefault();
                $images.css('border','1px solid red');
                $('#no-image').css('display','block');
            }
        });
    </script>
@endsection
