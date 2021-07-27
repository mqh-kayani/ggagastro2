@extends('frontend.baseLayout')
@section('title',"Zaida's KloZet| Products")
@section('styles')
    <
@endsection
@section('main-content')
    <div id="sns_content" class="wrap layout-m">
        <div class="container">
            <div class="row">
                <div class="shoppingcart">
                    <div class="sptitle col-md-12">
                        <h3>INDKØBSKURV</h3>

                    </div>
                    <div class="content col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">PRODUKTNAVN</th>
                                <th scope="col">PRIS PER STK</th>
                                <th scope="col">ANTAL</th>
                                <th scope="col">SUB TOTAL</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cart as $item)
                            <tr>
                                <th scope="row">{{$item->name}}</th>
                                <td>${{$item->price}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>${{$item->getPriceSum()}}</td>
                                <td><a href="{{route('removeCart',$item->id)}}"><i class="btn-remove fa fa-remove"></i></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <ul class="nav-bot clearfix">
                            <li class="continue"><a href="{{url('/')}}">Fortsætte med at handle</a></li>

                            <li class="update"> <a href="#">Total pris : ${{$subTotal}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Forsendelsesdetaljer</h3>
                    <form method="post" action="{{route('saveShippingDetails')}}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                <label>Fornavn</label>
                                <input type="text" class="form-control" required name="first_name" placeholder="Enter Your First Name">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                <label>Efternavn</label>
                                <input type="text" class="form-control" required name="last_name" placeholder="Enter Your Last Name">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                <label>Telefon Nej.</label>
                                <input type="text" class="form-control" required name="phone_no" placeholder="Enter Your Phone No">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                <label>Land</label>
                                <input type="text" class="form-control" required name="country" placeholder="Enter Your Country">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                <label>By</label>
                                <input type="text" class="form-control" required name="city" placeholder="Enter Your City">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                <label>Postnummer</label>
                                <input type="text" class="form-control" required name="postal_code" placeholder="Enter Zip Code">
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                <label>Forsendelsesadresse</label>
                                <textarea  class="form-control" required name="address" placeholder="Enter Your Shipping Address">
                                </textarea>
                            </div>
                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                <h4 class="style">
                                    <button class="btn" type="submit" style="background-color: #FFA500; color: #ffffff;padding: 10px">
                                        GÅ TIL KASSEN
                                    </button>
                                </h4>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
    </script>
@endsection
