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
                            <h2 class="content-header-title float-left mb-0">Produkter</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('adminDashboard')}}">Hjem</a>
                                    </li>
                                    <li class="breadcrumb-item active">Produkter
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <a href="{{route('addProduct')}}" type="button" class="btn btn-outline-success waves-effect waves-light">
                                + Tilføj ny
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Table Hover Animation start -->
                <div class="row" id="table-hover-animation">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Alle produkter</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover-animation table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th>Billede</th>
                                                <th scope="col">Navn</th>
                                                <th scope="col">Størrelse</th>
                                                <th scope="col">Pris</th>
                                                <th scope="col">Handling</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($products) > 0)
                                                @foreach($products as $i=>$product)
                                                    <tr>
                                                        <th scope="row">{{++$i}}</th>
                                                        <td>
                                                            @if($product->medias)
                                                            <img src="{{asset('assets/frontend/img/product/'.$product->medias[0]->image)}}" class="img-fluid" width="50" height="50">
                                                            @else
                                                                <img  class="img-fluid" width="50" height="50" src="{{asset('assets/frontend/img/no-product.jpg')}}">
                                                            @endif
                                                        </td>
                                                        <td>{{$product->name}}</td>
                                                        <td>{{$product->size}}</td>
                                                        <td>$ {{$product->price}}</td>
                                                        <td>
                                                            <a href="{{route('productDetail',$product->id)}}" type="button" class="btn btn-icon btn-outline-primary mr-1 mb-1 btn-outline-primary waves-effect waves-light float-left btnView" ><i class="feather icon-eye"></i>&nbsp;View</a>
                                                            <a href="{{route('updateProductForm',$product->id)}}" type="button" class="btn btn-icon btn-outline-info mr-1 mb-1 btn-outline-info waves-effect waves-light float-left btnEdit" ><i class="feather icon-edit-1"></i>&nbsp;Edit</a>
                                                            <a href="{{route('removeProduct',$product->id)}}" type="button" class="btn btn-icon btn-outline-danger mr-1 mb-1 btn-outline-danger waves-effect waves-light float-right"><i class="feather icon-trash-2"></i>&nbsp;Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <span>Der er endnu ikke tilføjet noget produkt!</span>
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
