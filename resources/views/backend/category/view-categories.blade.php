@extends('backend.baseLayout')
@section('title',"ggaGastro | Categories")
@section('main-content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Produktkategorier</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{route('adminDashboard')}}">Hjem</a>
                                    </li>
                                    <li class="breadcrumb-item active">Kategorier
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button type="button" class="btn btn-outline-success waves-effect waves-light" data-toggle="modal" data-target="#inlineForm">
                                + Tilføj ny
                            </button>
                            <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Tilføj ny kategori</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form method="post" action="{{route('addCategory')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <label>Navn: </label>
                                                <div class="form-group">
                                                    <input type="text" name="name" placeholder="Indtast kategorienavn" class="form-control" required>
                                                </div>
                                                <label>Ikon: </label>
                                                <div class="form-group">
                                                    <input type="file" name="icon" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary col-8 btn-block waves-effect waves-light">+Add</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
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
                                <h4 class="card-title">Alle produktkategorier</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover-animation table-bordered mb-0">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Navn</th>
                                                <th scope="col">Ikon</th>
                                                <th scope="col">Handling</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($categories) > 0)
                                                @foreach($categories as $i=>$category)
                                                <tr>
                                                    <th scope="row">{{++$i}}</th>
                                                    <td>{{$category->name}}</td>
                                                    <td><img src="{{asset('frontend/images/categories/'.$category->image)}}"></td>
                                                    <td>
                                                        <button type="button" class="btn btn-icon btn-outline-primary mr-1 mb-1 btn-outline-info waves-effect waves-light float-left btnEdit" id="btnEdit" data-id="{{$category->id}}"><i class="feather icon-edit-1"></i>&nbsp;Redigere</button>
                                                        <a href="{{route('deleteCategory',$category->id)}}" type="button" class="btn btn-icon btn-outline-primary mr-1 mb-1 btn-outline-danger waves-effect waves-light float-right"><i class="feather icon-trash-2"></i>&nbsp;Slet</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @else
                                            <span>Der er endnu ikke tilføjet nogen kategori!</span>
                                            @endif
                                            </tbody>
                                        </table>
                                        <div class="modal fade text-left" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="editCategoryModal1" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="editCategoryModal1">Opdater kategori</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <form method="post" action="{{route('updateCategory')}}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <input type="hidden" name="cat_id" id="cat-id">
                                                            <label>Navn: </label>
                                                            <div class="form-group">
                                                                <input type="text" name="name" id="cat-name" placeholder="Enter Category Name" class="form-control" required>
                                                            </div>
                                                            <label>Ikon: </label>
                                                            <div class="form-group">
                                                                <input type="file" name="icon" id="cat-icon" class="form-control" required>
                                                                <img src="" id="cat-image">
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
        $('.btnEdit').each(function () {
            $(this).on('click',function () {
                var category_id = $(this).data("id");
                $.ajax({
                    url:'{{route('getCategory')}}/'+category_id,
                    type:'GET',
                    success:function (response) {
                        $('#cat-id').val(response.data.id);
                        $('#cat-name').val(response.data.name)
                        $("#cat-image").attr("src","{{asset('frontend/images/categories/')}}"+"/"+response.data.image);
                        $('#editCategoryModal').modal('show');
                    },
                });

            });
        })
    </script>
@endsection
