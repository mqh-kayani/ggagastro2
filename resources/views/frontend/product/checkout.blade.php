@extends('frontend.baseLayout')
@section('title',"ggaGastro| Products")
@section('styles')
@endsection
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h3 class="text-center">Kasse</h3>
                <hr>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <h3>Forsendelsesdetaljer</h3>
                <ul class="list-group">
                    <li class="list-group-item"><b style="font-size: 15px">Navn: {{$shipping_detail->firstname}} {{$shipping_detail->lastname}}</b></li>
                    <li class="list-group-item"><b style="font-size: 15px">Telefon Nej .: {{$shipping_detail->phone_no}}</b></li>
                    <li class="list-group-item"><b style="font-size: 15px">Land: {{$shipping_detail->country}}</b></li>
                    <li class="list-group-item"><b style="font-size: 15px">By: {{$shipping_detail->city}}</b></li>
                    <li class="list-group-item"><b style="font-size: 15px">Postnummer: {{$shipping_detail->postal_code}}</b></li>
                    <li class="list-group-item"><b style="font-size: 15px">Adresse: {{$shipping_detail->address}}</b></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 space-top">
                    <h3 style="color: #000000 !important;">Betale ($ {{$subTotal}}) Paypal </h3>
                    <div id="payment-loader" style="display: none" class="spinner-border" role="status">
                        <span class="sr-only">Forarbejdning...</span>
                    </div>
                    <ul id="payment-toggler" class="nav nav-tabs p-3" style="background-color: #353530; color: #ffffff">
                        <li class="active px-0 px-lg-5 px-xl-5 px-sm-2 " style="display: none"><a data-toggle="tab" href="#home">
                                <img style="width: 150px !important; height: 45px;" src="https://www.pngitem.com/pimgs/m/291-2918799_stripe-payment-icon-png-transparent-png.png"></a></li>
                        <li class="active px-0 px-lg-5 px-xl-5 px-sm-2" style="width: 100%"><a data-toggle="tab" href="#menu1">
                                <img style="width: 100% !important; height: 45px; object-fit: contain" src="data:image/png;base64,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">
                            </a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home" style="display: none" class="tab-pane fade ">
                            @if (\Illuminate\Support\Facades\Session::has('success'))
                                <div class="alert alert-success text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <p>{{ \Illuminate\Support\Facades\Session::get('success') }}</p>
                                </div>
                            @endif
                            <form role="form" action="{{ route('stripe.payment') }}" method="post" class="validation"
                                  data-cc-on-file="false"
                                  data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                  id="payment-form">
                                @csrf
                                <input type="hidden" id="shipping_id" name="shipping_id" value="{{$shipping_detail->id}}">
                                <input type="hidden" id="user_id" name="user_id" value="{{auth()->user()->id}}">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 input-group input-group-two mb-20 required">
                                        <label>Name on Card</label>
                                        <input type="text" class="form-control" placeholder="Name" name="full-name">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 input-group input-group-two mb-20 card required">
                                        <label>Card Number</label>
                                        <input type="text" class="form-control" placeholder="Card Number" autocomplete='off' class='card-num' size='20'>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 input-group input-group-two mb-20 cvc required">
                                        <label>CVV*
                                        </label>
                                        <input type="text" class="form-control" autocomplete='off' placeholder="CVV" class="card-cvc" name="CVV-no" size='4'>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 input-group input-group-two mb-20 expiration required">
                                        <label>Expiry Date
                                        </label>
                                        <input type="text" class="form-control" size='2' placeholder="MM" name="exp-date" class="card-expiry-month">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 input-group input-group-two mb-20 expiration required">
                                        <label>Expiry Year
                                        </label>
                                        <input type="text" class="form-control" size='4' placeholder="YYYY" name="exp-date" class="card-expiry-year">
                                    </div>
                                    <input type="hidden" name="total_amount" value="{{auth()->user()->cart->cartItems->sum('total')}}">
                                    <div class="col-12">
                                        <p class="small mb-20">
                                            Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our
                                            <a href="#">Privacy Policy</a>
                                        </p>
                                        <button style="margin-top: 10px; margin-bottom: 10px;" type="submit" class="main-btn btn-filled w-100">Pay Now (${{$subTotal}})</button>
                                    </div>
                                </div>
                                <div class='form-row row'>
                                    <div class='col-md-12 hide error form-group'>
                                        <div class='alert-danger alert'>Fix the errors before you begin.</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="menu1" class="tab-pane fade in active">
                            <div id="paypal-button-container"></div>
                            {{--                                <a href="{{ route('make.payment') }}" class="btn btn-primary mt-3">Pay $224 via Paypal</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_CLIENT_ID')}}&currency=USD"></script>
    <script type="text/javascript">
        $(function() {
            var $form = $(".validation");
            $('form.validation').bind('submit', function(e) {
                var $form = $(".validation"),
                    inputVal = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'].join(', '),
                    $inputs       = $form.find('.required').find(inputVal),
                    $errorStatus = $form.find('div.error'),
                    valid         = true;
                $errorStatus.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorStatus.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-num').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeHandleResponse);
                }

            });

            function stripeHandleResponse(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
    <script>
        // Render the PayPal button into #paypal-button-container
        let total_amount = {{$subTotal}};
        paypal.Buttons({
            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: total_amount
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    // alert('Transaction completed by ' + details.payer.name.given_name + '!');
                    console.log('payment ho gie');
                    $('#payment-loader').css('display','block');
                    let shipping_id  =  $('#shipping_id').val();
                    let user_id  =  $('#user_id').val();
                    let csrfToken = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url : '{{route('paypal.payment')}}',
                        method: 'POST',
                        data : {
                            _token : csrfToken,
                            user_id : user_id,
                            shipping_id: shipping_id,
                        },
                        datatype : 'json',
                        success: function (response) {
                            console.log(response);
                            if(response.status == 'success'){
                                console.log('yes ho gya');
                                window.location.href = "{{ route('thankYou')}}";
                                $('#payment-loader').css('display','none');
                            }else{
                                console.log('No Nie Hua');
                            }
                        }
                    });
                });
            }


        }).render('#paypal-button-container');
    </script>
@endsection

