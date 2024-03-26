@extends('front.master')

@section('title')
    All Contest | {{env('APP_NAME')}}
@endsection

@section('body')
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--three">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="page-list">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="#0">Lottery</a></li>
                        <li class="active">Contest</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- inner-hero-section end -->

    <!-- contest section start  -->
    <section class="pb-120 mt-minus-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contest-wrapper">
                        <div class="contest-wrapper__header pt-120">
                            <h2 class="contest-wrapper__title">Latest Contest</h2>
{{--                            <ul class="nav nav-tabs winner-tab-nav" id="myTab" role="tablist">--}}
{{--                                <li class="nav-item" role="presentation">--}}
{{--                                    <button class="nav-link active" id="dream-tab" data-bs-toggle="tab" data-bs-target="#dream" role="tab" aria-controls="dream" aria-selected="true">--}}
{{--                                        <div class="icon-thumb"><img src="{{asset('/')}}front/assets/images/icon/winner-tab/1.png" alt="image"></div>--}}
{{--                                        <span>Dream Car</span>--}}
{{--                                    </button>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item" role="presentation">--}}
{{--                                    <button class="nav-link" id="bike-tab" data-bs-toggle="tab" data-bs-target="#bike" role="tab" aria-controls="bike" aria-selected="false">--}}
{{--                                        <div class="icon-thumb"><img src="{{asset('/')}}front/assets/images/icon/winner-tab/2.png" alt="image"></div>--}}
{{--                                        <span>bike</span>--}}
{{--                                    </button>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item" role="presentation">--}}
{{--                                    <button class="nav-link" id="watch-tab" data-bs-toggle="tab" data-bs-target="#watch" role="tab" aria-controls="watch" aria-selected="false">--}}
{{--                                        <div class="icon-thumb"><img src="{{asset('/')}}front/assets/images/icon/winner-tab/3.png" alt="image"></div>--}}
{{--                                        <span>watch</span>--}}
{{--                                    </button>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item" role="presentation">--}}
{{--                                    <button class="nav-link" id="laptop-tab" data-bs-toggle="tab" data-bs-target="#laptop" role="tab" aria-controls="laptop" aria-selected="false">--}}
{{--                                        <div class="icon-thumb"><img src="{{asset('/')}}front/assets/images/icon/winner-tab/4.png" alt="image"></div>--}}
{{--                                        <span>laptop</span>--}}
{{--                                    </button>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item" role="presentation">--}}
{{--                                    <button class="nav-link" id="money-tab" data-bs-toggle="tab" data-bs-target="#money" role="tab" aria-controls="money" aria-selected="false">--}}
{{--                                        <div class="icon-thumb"><img src="{{asset('/')}}front/assets/images/icon/winner-tab/5.png" alt="image"></div>--}}
{{--                                        <span>Money</span>--}}
{{--                                    </button>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </div>
                        <div class="contest-wrapper__body">

                            <div class="row contest-filter-wrapper justify-content-center mt-30 mb-none-30">
                                <div class="col-lg-2 col-sm-6 mb-30">
                                    <select>
                                        <option>SORT BY</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-sm-6 mb-30">
                                    <select>
                                        <option>ALL MAKES</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                        <option>Filter option</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 mb-30">
                                    <div class="rang-slider">
                                        <span class="caption">Ticket Price</span>
                                        <div id="slider-range-min-one" class="invest-range-slider" data-value="8" data-maxValue="16"></div>
                                        <div class="amount-wrapper">
                                            <span class="min-amount">0</span>
                                            <div class="main-amount">
                                                <input type="text" class="calculator-invest" id="basic-amount" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-4 mb-30">
                                    <div class="action-btn-wrapper">
                                        <button type="button" class="action-btn"><i class="lar la-heart"></i></button>
                                        <button type="button" class="action-btn"><i class="las la-redo-alt"></i></button>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-8 mb-30">
                                    <form class="contest-search-form">
                                        <input type="text" placeholder="SEARCH HERE">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div><!-- row end -->

                            <div class="tab-content mt-50" id="myTabContent">
                                <div class="tab-pane fade show active" id="dream" role="tabpanel" aria-labelledby="dream-tab">

                                    <div class="row mb-none-30 mt-50">
                                        @foreach($contests as $contest)
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="{{route('details.contest', ['id' => $contest->id, 'slug' => $contest->slug])}}" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset($contest->image)}}" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">{{$contest->code}}</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">{{$contest->title}}</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">Tk. {{$contest->price}}</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>{{ \Carbon\Carbon::now()->diff($contest->end_date)->format('%ad') }}</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
{{--                                                            <span>{{$contest->qty}}</span>--}}
                                                            <p>Buy Ticket Hurry Up</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        @endforeach
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="bike" role="tabpanel" aria-labelledby="bike-tab">

                                    <div class="row mb-none-30 mt-50">
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/9.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">b2t</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Breeze Zodiac IX</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/10.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">x9u</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Del Sol Trailblazer</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/11.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">8y3</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Miata Dart IV</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/12.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">r9d</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Fabia Magnum</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/13.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">pr2</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Omega Navigator</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/14.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">w03</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">Shelby Cobra</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="watch" role="tabpanel" aria-labelledby="watch-tab">


                                    <div class="row mb-none-30 mt-50">
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/1.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">b2t</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Breeze Zodiac IX</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/2.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">x9u</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Del Sol Trailblazer</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/3.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">8y3</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Miata Dart IV</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/4.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">r9d</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Fabia Magnum</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/5.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">pr2</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Omega Navigator</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/6.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">w03</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">Shelby Cobra</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="laptop" role="tabpanel" aria-labelledby="laptop-tab">

                                    <div class="row mb-none-30 mt-50">
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/9.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">b2t</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Breeze Zodiac IX</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/10.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">x9u</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Del Sol Trailblazer</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/11.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">8y3</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Miata Dart IV</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/12.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">r9d</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Fabia Magnum</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/13.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">pr2</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Omega Navigator</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/14.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">w03</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">Shelby Cobra</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="money" role="tabpanel" aria-labelledby="money-tab">


                                    <div class="row mb-none-30 mt-50">
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/1.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">b2t</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Breeze Zodiac IX</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/2.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">x9u</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Del Sol Trailblazer</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/3.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">8y3</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Miata Dart IV</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/4.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">r9d</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Fabia Magnum</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/5.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">pr2</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">The Omega Navigator</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                        <div class="col-xl-4 col-md-6 mb-30">
                                            <div class="contest-card">
                                                <a href="contest-details-one.html" class="item-link"></a>
                                                <div class="contest-card__thumb">
                                                    <img src="{{asset('/')}}front/assets/images/contest/6.png" alt="image">
                                                    <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>
                                                    <div class="contest-num">
                                                        <span>contest no:</span>
                                                        <h4 class="number">w03</h4>
                                                    </div>
                                                </div>
                                                <div class="contest-card__content">
                                                    <div class="left">
                                                        <h5 class="contest-card__name">Shelby Cobra</h5>
                                                    </div>
                                                    <div class="right">
                                                        <span class="contest-card__price">$3.99</span>
                                                        <p>ticket price</p>
                                                    </div>
                                                </div>
                                                <div class="contest-card__footer">
                                                    <ul class="contest-card__meta">
                                                        <li>
                                                            <i class="las la-clock"></i>
                                                            <span>5d</span>
                                                        </li>
                                                        <li>
                                                            <i class="las la-ticket-alt"></i>
                                                            <span>9805</span>
                                                            <p>Remaining</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- contest-card end -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><!-- contest-wrapper end -->
                </div>
            </div>
        </div>
    </section>
    <!-- contest section end -->

    <!-- contest feature section start -->
    <section class="pb-120">
        <div class="container">
            <div class="row mb-none-30 justify-content-center">
                <div class="col-lg-4 col-sm-6 mb-30">
                    <div class="icon-item2">
                        <div class="icon-item2__icon">
                            <img src="{{asset('/')}}front/assets/images/icon/contest-feature/1.png" alt="image">
                        </div>
                        <div class="icon-item2__content">
                            <h3 class="title">Secure Checkout</h3>
                            <p>Pay with the world’s most popular and secure payment methods.</p>
                        </div>
                    </div><!-- icon-item2 end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                    <div class="icon-item2">
                        <div class="icon-item2__icon">
                            <img src="{{asset('/')}}front/assets/images/icon/contest-feature/2.png" alt="image">
                        </div>
                        <div class="icon-item2__content">
                            <h3 class="title">Great Value</h3>
                            <p>We offer competitive prices for every lottery tickets</p>
                        </div>
                    </div><!-- icon-item2 end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30">
                    <div class="icon-item2">
                        <div class="icon-item2__icon">
                            <img src="{{asset('/')}}front/assets/images/icon/contest-feature/3.png" alt="image">
                        </div>
                        <div class="icon-item2__content">
                            <h3 class="title">Free Worldwide Delivery</h3>
                            <p>We are available for providing our services in major countries</p>
                        </div>
                    </div><!-- icon-item2 end -->
                </div>
            </div>
        </div>
    </section>
    <!-- contest feature section end -->
@endsection
