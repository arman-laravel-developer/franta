@extends('front.master')

@section('title')
    Checkout | {{env('APP_NAME')}}
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
                        <li><a href="{{route('all.contest')}}">Lottery</a></li>
                        <li class="active"><a href="{{route('cart.show')}}">My Cart</a></li>
                        <li class="active">Checkout</li>
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
                            <div class="col-lg-7">
                                <div class="checkout-form-area">
                                    <div class="personal-details mt-30">
                                        <h3 class="title">Share your Contact  Details </h3>
                                        <form class="personal-details-form" action="{{route('new.order')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if(Session::get('userAuth_id'))
                                            <div class="form-row">
                                                <div class="form-group col-lg-12">
                                                    <input type="text" value="{{$user->name}}" disabled name="name" placeholder="Full Name">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <input type="email" value="{{$user->email}}" disabled name="email" placeholder="Enter your Email">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <input type="text" value="{{$user->mobile}}" disabled name="mobile" placeholder="Enter your Phone Number">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <button type="submit" class="cmn-btn">Continue</button>
                                                </div>
                                            </div>
                                            @else
                                                <div class="form-row">
                                                    <div class="form-group col-lg-12">
                                                        <input type="text" name="name" placeholder="Full Name">
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <input type="email" class="@error('email') is-invalid @enderror" name="email" placeholder="Enter your Email">
                                                        @error('email')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <input type="text"  name="mobile" placeholder="Enter your Phone Number">
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <button type="submit" class="cmn-btn">Continue</button>
                                                    </div>
                                                </div>
                                            @endif
                                        </form>
                                    </div><!-- personal-details end -->
{{--                                    <div class="payment-details mt-30">--}}
{{--                                        <h3 class="title">Payment Option</h3>--}}
{{--                                        <form class="payment-form">--}}
{{--                                            <div class="payment-methods">--}}
{{--                                                <button type="button" class="checked">--}}
{{--                                                    <i class="las la-credit-card"></i>--}}
{{--                                                    <span>Credit Card</span>--}}
{{--                                                </button>--}}
{{--                                                <button type="button">--}}
{{--                                                    <i class="las la-credit-card"></i>--}}
{{--                                                    <span>Debit Card</span>--}}
{{--                                                </button>--}}
{{--                                                <button type="button">--}}
{{--                                                    <i class="lab la-paypal"></i>--}}
{{--                                                    <span>Credit Card</span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                            <h5 class="payment-form__title">Enter Your Card Details </h5>--}}
{{--                                            <div class="form-row">--}}
{{--                                                <div class="form-group col-lg-12">--}}
{{--                                                    <label>Card Details</label>--}}
{{--                                                    <input type="text">--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group col-lg-12">--}}
{{--                                                    <label>Name on the Card</label>--}}
{{--                                                    <input type="text">--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group col-lg-6">--}}
{{--                                                    <label>Expiration</label>--}}
{{--                                                    <input type="text" placeholder="MM/YY">--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group col-lg-6">--}}
{{--                                                    <label>CVV</label>--}}
{{--                                                    <input type="text" placeholder="CVV">--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group col-lg-12">--}}
{{--                                                    <button type="submit" class="cmn-btn">Make payment</button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                        <p class="info-text">By Clicking "Make Payment" you agree to the <a href="#0">terms and conditions</a></p>--}}
{{--                                    </div>--}}
                                </div><!-- checkout-form-area end -->
                            </div>
                            <div class="col-lg-5 mt-lg-0 mt-4">
                                <div class="checkout-wrapper">
                                    <div class="checkout-wrapper__header">
                                        <h3>Checkout</h3>
                                    </div>
                                    <div class="checkout-wrapper__body">
                                        <ul class="price">
                                            @php($subtotal = 0)
                                            @php($total = 0)
                                            @foreach($cartContests as $cartContest)
                                                <li>
                                                    <div class="left">
                                                        <h4 class="caption"><a href="{{route('details.contest', ['id' => $cartContest->id,'slug' => \Illuminate\Support\Str::slug($cartContest->name)])}}">{{\Illuminate\Support\Str::limit($cartContest->name, 10)}}</a></h4>
                                                        <span>({{$cartContest->quantity}} tickets X Tk. {{$cartContest->price}})</span>
                                                    </div>
                                                    @php($subTotal = $subtotal  + ($cartContest->quantity * $cartContest->price))
                                                    <div class="right">
                                                        <span class="price">Tk.{{number_format($subTotal)}}</span>
                                                    </div>
                                                </li>
                                                @php($total = $total + ($cartContest->quantity * $cartContest->price))
                                            @endforeach
                                            <?php
                                                Session::put('grand_total', $total);
                                            ?>
                                            <li>
                                                <div class="left">
                                                    <h4 class="caption">Total</h4>
                                                </div>
                                                <div class="right">
                                                    <span class="price">Tk.{{number_format($total)}}</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>s
                                </div><!-- checkout-wrapper end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout section end -->
@endsection
