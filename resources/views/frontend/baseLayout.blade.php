<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from demo.snstheme.com/html/simen/# by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Jul 2021 08:55:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>ggaGastro</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins:300,700' rel='stylesheet' type='text/css'>
    <!-- Style Sheet-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/font/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/js/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/js/owl-carousel/owl.theme.css')}}">
    <!-- META TAGS -->
    <meta name="viewport" content="width=device-width" />
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
        .goog-te-banner-frame{
            display: none;
        }
        .goog-logo-link{
            display: none;
        }
        .goog-tooltip{
            display: none !important;
        }
    </style>
</head>
<body id="bd" class=" cms-index-index cms-simen-home-page-v2 default cmspage">
<div id="sns_wrapper">
    <!-- HEADER -->
    <div id="sns_header" class="wrap" style="background-color: #FFA500 !important;">
        <!-- Header Top -->
        <div class="sns_header_top">
            <div class="container">
                <div class="sns_module">
                    <div class="header-setting">
                        <div class="module-setting">
                            <div class="mysetting language-switcher">
                                <div class="tongle">
                                    <img alt="" src="{{asset('frontend/images/flag/danish.png')}}">
                                    <span>Danish</span>
                                </div>
                                <div class="content">
                                    <div class="language-switcher">
                                        <ul id="google_translate_element">
{{--                                            <div id="google_translate_element"></div>--}}
{{--                                            <li>--}}
{{--                                                <a class="selected" href="#">--}}
{{--                                                    <img alt="" src="{{asset('frontend/images/flag/english.png')}}">--}}
{{--                                                    <span>English</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#">--}}
{{--                                                    <img alt="" src="{{asset('frontend/images/flag/german.png')}}">--}}
{{--                                                    <span>German</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="mysetting currency-switcher">
                                <div class="tongle">
                                    <span class="gfont"> Valuta: DKK </span>
                                </div>
                                <div class="content">
                                    <ul id="select-currency">
                                        <li>
                                            <a href="#"> GBP - British Pound
                                                 </a>
                                        </li>
                                        <li>
                                            <a class="selected" href="#"> BGN - Bulgarian lev </a>
                                        </li>
                                        <li>
                                            <a class="selected" href="#"> EUR - Euro </a>
                                        </li>
                                        <li>
                                            <a class="selected" href="#"> NOK - Norwegian krone </a>
                                        </li>
                                        <li>
                                            <a class="selected" href="#"> NOK - Norwegian krone </a>
                                        </li>
                                        <li>
                                            <a class="selected" href="#"> PLN - Polish Zloty </a>
                                        </li>
                                        <li>
                                            <a class="selected" href="#"> RON - Romanian leu </a>
                                        </li>
                                        <li>
                                            <a class="selected" href="#"> RUB - Russian ruble </a>
                                        </li>
                                        <li>
                                            <a class="selected" href="#"> SEK - Swedish krona </a>
                                        </li>
                                        <li>
                                            <a class="selected" href="#"> HUF - Hungarian forint </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-account">
                        <div class="myaccount">
                            <div class="tongle">
                                <i class="fa fa-user"></i>
                                <span>Min konto</span>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <div class="customer-ct content">
                                <ul class="links">
                                    <li class="first">
                                        <a class="top-link-myaccount" title="Min konto" href="#">Min konto</a>
                                    </li>
                                    <li>
                                        <a class="top-link-cart" title="Checkout" href="{{route('cart')}}">Vogn</a>
                                    </li>
                                    @if(auth()->check())
                                        <li class=" last">
                                            <a class="top-link-login" title="Logout" href="{{route('userLogout')}}">Logout
                                            </a>
                                        </li>
                                    @else
                                        <li class=" last">
                                            <a class="top-link-login" title="Log In" href="{{route('signIn')}}">Log på
                                            </a>
                                        </li>
                                    @endif


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Logo -->
        <div id="sns_header_logo">
            <div class="container">
                <div class="container_in">
                    <div class="row">
                        <h1 id="logo" class="responsv col-md-3">
                            <a href="{{route('home')}}" title="GGA Gastro">
                                <img alt="" src="{{asset('frontend/images/ggaLogo.jpeg')}}">
                            </a>
                        </h1>
                        <div class="col-md-9 policy">
                            <form method="post" action="{{route('homeSearch')}}" style="padding-top: 45px">
                                @csrf
                                <div class="form-group" style="position:relative;">
                                    <input type="text" name="keyword" class="form-control" style="background-color: transparent;border: 1px solid #000000" placeholder="Søg i dine ønskede genstande">
                                    <button type="submit" class="btn" style="position: absolute;top: 0;right: 1px;background-color: #ffffff; height: 90%; margin-top: 1px">Søg</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu -->
        <div id="sns_menu">
            <div class="container">
                <div class="sns_mainmenu">
                    <div id="sns_mainnav">
                        <div id="sns_custommenu" class="visible-md visible-lg">
                            <ul class="mainnav">
                                @foreach($categories as $category)
                                <li class="level0 active custom-itemdrop-staticblock">
                                    <a class="menu-title-lv0" href="#" title="{{$category->name}}">
                                        <span class="title"><img src="{{asset('frontend/images/categories/'.$category->image)}}"> {{$category->name}}</span>
                                    </a>
                                    <div class="wrap_dropdown fullwidth">
                                        <div class="row">
                                            @if(count($category->products) > 0)
                                                @foreach($category->products as $product)
                                                <div class="col-sm-3">
                                                <a class="banner5 banner22" href="{{route('singleProduct',$product->slug)}}" style="border: 1px dashed #000000">
                                                    <img alt="" src="{{asset('assets/frontend/img/product/'.$product->medias[0]->image)}}" style="max-height: 255px">
                                                </a>
                                                <br>
                                                <h3 class="headtitle text-center" style="border: 1px solid #000000">{{$product->name}}</h3>
                                            </div>
                                                @endforeach
                                            @else
                                            <small>Intet produkt er tilføjet til denne kategori</small>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AND HEADER -->
    @yield('main-content')


    <!-- PARTNERS -->

    <!-- AND PARTNERS -->

    <!-- FOOTER -->
    <div id="sns_footer" class="footer_style vesion2 wrap">
        <div id="sns_footer_top" class="footer" style="background-color: orange;color: #ffffff">
            <div class="container">
                <div class="container_in">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12 column0">
                            <div class="contact_us">
                                <h6>KONTAKT OS</h6>
                                <ul class="fa-ul">
                                    <li class="pd-right">
                                        <i class="fa-li fa fw fa-home"> </i>
                                        8888 xyz Street, City, Country
                                    </li>
                                    <li>
                                        <i class="fa-li fa fw fa-phone"> </i>
                                        <p>(12) 3 456 7896</p>
                                        <p>(12) 3 456 7895</p>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fw fa-envelope"> </i>
                                        <p>
                                            <a href="mailto:info@yourdomain.com">info@ggagastro.com</a>
                                        </p>
                                        <p>
                                            <a href="mailto:info@yourdomain.com">info@ggagastro.com</a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-phone-12 col-xs-6 col-sm-3 col-md-2 column column1">
                            <h6>VORES SERVICE</h6>
                            <ul>
                                <li>
                                    <a href="#">Sikker betaling</a>
                                </li>
                                <li>
                                    <a href="#">Leveringstider og omkostninger</a>
                                </li>
                                <li>
                                    <a href="#">Retur og udveksling</a>
                                </li>
                                <li>
                                    <a href="#">FAQ's</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-phone-12 col-xs-6 col-sm-3 col-md-2 column column2">
                            <h6>KONTO</h6>
                            <ul>
                                <li>
                                    <a href="#">Min konto</a>
                                </li>
                                <li>
                                    <a href="#">Ønskeliste</a>
                                </li>
                                <li>
                                    <a href="#">Ordre historik</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-phone-12 col-xs-6 col-sm-3 col-md-3 column column4">
                            <div class="subcribe-footer">
                                <div class="block_border block-subscribe">
                                    <div class="block_head">
                                        <h6>Newsletter</h6>
                                        <p>Registrer din e-mail for nyheder</p>
                                    </div>
                                    <form id="newsletter-validate-detail">
                                        <div class="block_content">
                                            <div class="input-box">
                                                <div class="input_warp">
                                                    <input id="newsletter" class="input-text required-entry validate-email" type="text" title="Sign up for our newsletter" placeholder="Your email here" name="email">
                                                </div>
                                                <div class="button_warp">
                                                    <button class="button gfont" title="Subcribe" type="submit">
                                                                <span>
                                                                    <span>Abonner</span>
                                                                </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="sns_footer_bottom" class="footer">
            <div class="container">
                <div class="row">
                    <div class="bottom-pd1 col-sm-6">
                        <div class="sns-copyright">
                            © 2021 GGA Gastro. Alle rettigheder forbeholdes.
                        </div>
                    </div>
                    <div class="bottom-pd2 col-sm-6">
                        <div class="payment">
                            <img src="{{asset('frontend/images/sns_paymal.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- AND FOOTER -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Log ind</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="" method="post" action="{{route('userLogin')}}">
                        @csrf
                        <div class="row mx-auto p-5">
                            @if(session()->has('error-msg'))
                                <div class="col-sm-12 ">
                                    <span class="text-danger">{{session('error-msg')}}</span>
                                </div>
                            @endif
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input name="email"  class="form-control required-entry input-text" id="email" placeholder="Email adresse" title="Email" value="" type="email">
                                    @if($errors->has('email'))
                                        <span style="font-size: 12px; color: red">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input name="password"  class="form-control input-text required-entry validate-email" id="password" placeholder="Adgangskode" title="Password" value="" type="password">
                                    @if($errors->has('password'))
                                        <span style="font-size: 12px; color: red">{{$errors->first('password')}}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-block" type="submit" style="background-color: #000000;color: #ffffff">Log ind</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Scripts -->
<script src="{{asset('frontend/js/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('frontend/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/less.min.js')}}"></script>
<script src="{{asset('frontend/js/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/sns-extend.js')}}"></script>
<script src="{{asset('frontend/js/custom.js')}}"></script>
<script src="//code.tidio.co/2ga8v174dhrqd1nloehsaytwne0smxk3.js" async></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
@yield('scripts')
</body>

<!-- Mirrored from demo.snstheme.com/html/simen/# by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Jul 2021 08:56:41 GMT -->
</html>
