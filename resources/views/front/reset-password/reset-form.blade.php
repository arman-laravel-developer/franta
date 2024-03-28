@extends('front.master')

@section('title')
    Reset Password | {{env('APP_NAME')}}
@endsection

@section('body')
    <!-- inner-hero-section start -->
    <div class="inner-hero-section">
        <div class="bg-shape"><img src="{{asset('/')}}front/assets/images/elements/inner-hero-shape.png" alt="image"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="page-list">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Password Reset</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- inner-hero-section end -->

    <!-- checkout section start -->
    <section class="pb-120 mt-minus-300">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="checkout-area">
                        <div class="row">
                            <div class="col-md-3">

                            </div>
                            <div class="col-lg-6">
                                <div class="checkout-form-area">
                                    <div class="personal-details mt-30">
                                        <h3 class="title">Change Your Password </h3>
                                        <form class="personal-details-form" action="{{ route('password.update') }}" method="POST">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-lg-12">
                                                    <input type="hidden" name="token" value="{{ $user->remember_token }}">
                                                    <input type="password" name="new_password" placeholder="Enter New Password">
                                                    @error('new_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <input type="password" name="password_confirmation" placeholder="Confirm Password">
                                                    @error('password_confirmation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <button type="submit" class="cmn-btn">Continue</button>
                                                </div>
                                                @if ($errors->has('token'))
                                                    <div class="form-group col-lg-12">
                                                        <span class="text-danger">{{ $errors->first('token') }}</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- checkout-form-area end -->
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout section end -->
@endsection
