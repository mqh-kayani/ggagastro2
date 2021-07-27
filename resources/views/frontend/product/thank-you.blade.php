@extends('frontend.baseLayout')
@section('title',"ggaGastro| Thank You")
@section('styles')
    <style>

    </style>
@endsection
@section('main-content')
    <section class="cart-section pt-120 pb-120">

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 col-12 text-center">
                    <h1 class="text-dark text-center">Tak skal du have !</h1>
                    <h2 class="text-dark text-center">Din ordre er afgivet med succes</h2>
                    <h3 class="text-dark text-center">Din ordre sendes snart</h3>
                    <h4 class="text-dark text-center">For mere information kontakt på : info@ggagastro.com</h4>
                    <a href="{{url('/')}}" class="main-btn btn-filled">Fortsæt med at handle</a>
                </div>
            </div>
        </div>

    </section>
@endsection
@section('scripts')
    <script type="text/javascript">
    </script>
@endsection
