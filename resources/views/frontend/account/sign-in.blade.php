@extends('frontend.baseLayout')
@section('title',"ggaGastro| Sign In")
@section('main-content')
    <div class="container">
        <div class="row ">
            <div class="col-md-5">
                <h3>Sign in To Your Account?</h3>
                <form id="contactForm" method="post" action="{{route('userLogin')}}">
                    @csrf
                    <div class="row mx-auto p-5">
                        @if(session()->has('error-msg'))
                        <div class="col-sm-12 ">
                            <span class="text-danger">{{session('error-msg')}}</span>
                        </div>
                        @endif
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input name="email"  class="form-control required-entry input-text" id="email" placeholder="Email Address" title="Email" value="" type="email">
                                @if($errors->has('email'))
                                    <span style="font-size: 12px; color: red">{{$errors->first('email')}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input name="password"  class="form-control input-text required-entry validate-email" id="password" placeholder="Password" title="Password" value="" type="password">
                                @if($errors->has('password'))
                                    <span style="font-size: 12px; color: red">{{$errors->first('password')}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block" type="submit" style="background-color: #000000;color: #ffffff">Sign In</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-sm-12">
                        <b class="" style="float: right">Don't Have Account? <a href="{{route('signUp')}}">Sign Up Here</a></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
