@extends('front.master')

@section('title')
   Contest Cart | {{env('APP_NAME')}}
@endsection

@section('body')
    <!-- inner-hero-section start -->
    <div class="inner-hero-section">
        <div class="bg-shape"><img src="{{asset('/')}}front/assets/images/elements/inner-hero-shape.png" alt="image"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="page-list">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#0">Lottery</a></li>
                        <li class="active">My Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- inner-hero-section end -->

    <!-- cart section start -->
    <section class="pb-120 mt-minus-300">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-wrapper">
                        <h2 class="cart-wrapper__title">My Cart</h2>
                        <p class="text-center text-success" style="margin-top: -4%; margin-bottom: 2%;">
                        {{Session::get('message')}}</p>
                        <div class="row justify-content-lg-between">
                            <div class="col-lg-7">
                                <div class="ticket-wrapper">
                                    <div class="ticket-wrapper__body">
                                        <table class="table text-center text-white table-responsive">
                                            <thead>
                                            <tr>
                                                <th>Sl.</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php($total = 0)
                                            @if(count($cartContests) > 0)
                                            @foreach($cartContests as $cartContest)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>
                                                    <img src="{{asset($cartContest->attributes->image)}}" style="height: 100px;" alt="">
                                                </td>
                                                <td><a href="{{route('details.contest', ['id' => $cartContest->id,'slug' => \Illuminate\Support\Str::slug($cartContest->name)])}}">{{$cartContest->name}}</a></td>
                                                <td>
                                                    <form method="POST" action="{{route('update.cart', ['id' => $cartContest->id])}}">
                                                        @csrf
                                                        <input type="number" name="qty" value="{{$cartContest->quantity}}" min="1">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </form>
                                                </td>
                                                <td>Tk.{{$cartContest->price}}</td>
                                                <td class="action-btns">
                                                    <a href="{{route('delete-cart-contest', ['id' => $cartContest->id])}}" onclick="return confirm('Are You Sure To Delete This...');" type="button" class="del-btn">
                                                        <i class="las la-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @php($total = $total + ($cartContest->quantity * $cartContest->price))
                                            @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="6">Cart Item Not Found</td>
                                                </tr>
                                            @endif
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-lg-0 mt-4">
                                <div class="checkout-wrapper">
                                    <div class="checkout-wrapper__header">
                                        <h3>Your tickets:</h3>
                                    </div>
                                    <div class="checkout-wrapper__body">
                                        <ul class="price">
                                            @php($subtotal = 0)
                                            @foreach($cartContests as $cartContest)
                                            <li>
                                                <div class="left">
                                                    <h4 class="caption"><a href="{{route('details.contest', ['id' => $cartContest->id,'slug' => \Illuminate\Support\Str::slug($cartContest->name)])}}">{{\Illuminate\Support\Str::limit($cartContest->name, 10)}}</a></h4>
                                                    <span>({{$cartContest->quantity}} tickets X Tk. {{$cartContest->price}})</span>
                                                </div>
                                                @php($subTotal = $subtotal  + ($cartContest->quantity * $cartContest->price))
                                                <div class="right">
                                                    <span class="price">Tk. {{number_format($subTotal)}}</span>
                                                </div>
                                            </li>
                                            @endforeach
                                            <li>
                                                <div class="left">
                                                    <h4 class="caption">Total</h4>
                                                </div>
                                                <div class="right">
                                                    <span class="price">Tk.{{number_format($total)}}</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="checkout-wrapper__btn">
                                            <a href="{{ count($cartContests) > 0 ? route('checkout') : 'javascript:void(0);' }}" class="cmn-btn">buy tickets</a>
                                        </div>
                                    </div>s
                                </div><!-- checkout-wrapper end -->
                                <div class="mt-30">
                                    <img src="{{asset('/')}}front/assets/images/elements/payment.png" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-lg-12 pt-120">--}}
{{--                    <div class="pick-lottery-package">--}}
{{--                        <h2 class="title">Choose a Quick Pick</h2>--}}
{{--                        <div class="lottery-package-list">--}}
{{--                            <a href="#0">3 Quick Picks For $14.97</a>--}}
{{--                            <a href="#0">5 Quick Picks For $24.95</a>--}}
{{--                            <a href="#0">10 Quick Picks For $49.90</a>--}}
{{--                            <a href="#0">20 Quick Picks For $99.80</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div><!-- col-lg-12 -->--}}
            </div>
        </div>
    </section>
    <!-- cart section end -->
@endsection
