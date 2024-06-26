@extends('front.master')

@section('title')
     Online Lottery
@endsection

@section('body')

    <!-- hero start -->
    <section class="hero">
        <div class="hero__shape"><img src="{{asset('/')}}front/assets/images/elements/hero-shape.jpg.png" alt="image"></div>
        <div class="hero__element"><img src="{{asset('/')}}front/assets/images/elements/hero-building.png" alt="image"></div>
        <div class="hero__car wow bounceIn" data-wow-duration="0.5s" data-wow-delay="1s">
            <img src="{{asset('/')}}front/assets/images/elements/car-shadow.png" alt="image" class="car-shadow">
            <img src="{{asset('/')}}front/assets/images/elements/car-ray.png" alt="image" class="car-ray">
            <img src="{{asset('/')}}front/assets/images/elements/car-light.png" alt="image" class="car-light">
            <img src="{{asset('/')}}front/assets/images/elements/hero-car.png" alt="image" class="hero-car">
            <img src="{{asset('/')}}front/assets/images/elements/car-star.png" alt="image" class="car-star">
        </div>
        <div class="container">
            <div class="row justify-content-center justify-content-lg-start">
                <div class="col-lg-6 col-md-8">
                    <div class="hero__content">
                        <div class="hero__subtitle wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">Contest FOR YOUR CHANCE to</div>
                        <h2 class="hero__title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">big win</h2>
                        <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">Now's your chance to win a car! Check out the prestige cars you can win in our car prize draws. Will you be our next lucky winner?</p>
                        <div class="hero__btn wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s">
                            <a href="{{route('all.contest')}}" class="cmn-btn">Participate Now</a>
                            <a class="video-btn"
                               href="https://www.youtube.com/embed/4IDk2vHiGEU?si=WORlh_QyGClXBYKz" data-rel="lightcase:myCollection">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero__thumb">
                        <img src="{{asset('/')}}front/assets/images/elements/car-main.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero start -->

    <!-- how to play section start -->
    <section class="position-relative z-index-two pt-120 pb-120 overflow-hidden">
        <div class="play-elements wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
            <img src="{{asset('/')}}front/assets/images/elements/play-el.png" alt="image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-sm-start text-center wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header">
                        <span class="section-sub-title">Need to know about</span>
                        <h2 class="section-title">How To Play</h2>
                        <p>Follow these 3 easy steps! </p>
                    </div>
                </div>
            </div>
            <div class="row mb-none-30 justify-content-xl-start justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="play-card bg_img" data-background="{{asset('/')}}front/assets/images/elements/card-bg-1.jpg">
                        <div class="play-card__icon">
                            <img src="{{asset('/')}}front/assets/images/icon/play/1.png" alt="image-icon">
                            <span class="play-card__number">01</span>
                        </div>
                        <div class="play-card__content">
                            <h3 class="play-card__title">Choose</h3>
                            <p>Register to Luckee7 & Choose your contest</p>
                        </div>
                    </div><!-- play-card end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="play-card bg_img" data-background="{{asset('/')}}front/assets/images/elements/card-bg-2.jpg">
                        <div class="play-card__icon">
                            <img src="{{asset('/')}}front/assets/images/icon/play/2.png" alt="image-icon">
                            <span class="play-card__number">02</span>
                        </div>
                        <div class="play-card__content">
                            <h3 class="play-card__title">buy</h3>
                            <p>Pick Your Numbers & Complete your Purchase</p>
                        </div>
                    </div><!-- play-card end -->
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                    <div class="play-card bg_img" data-background="{{asset('/')}}front/assets/images/elements/card-bg-3.jpg">
                        <div class="play-card__icon">
                            <img src="{{asset('/')}}front/assets/images/icon/play/3.png" alt="image-icon">
                            <span class="play-card__number">03</span>
                        </div>
                        <div class="play-card__content">
                            <h3 class="play-card__title">Win</h3>
                            <p>Start Dreaming, you're almost there</p>
                        </div>
                    </div><!-- play-card end -->
                </div>
            </div>
        </div>
    </section>
    <!-- how to play section end -->

    <!-- contest section start -->
    <section class="position-relative pt-120 pb-120">
        <div class="bg-el"><img src="{{asset('/')}}front/assets/images/elements/contest-bg.png" alt="image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Try your chance at winning</span>
                        <h2 class="section-title">Current Contest</h2>
                        <p>Participants buy tickets and lots are drawn to determine the winners.</p>
                    </div>
                </div>
            </div><!-- row end -->

            <div class="row wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                <div class="col-lg-12">

{{--                    <ul class="nav nav-tabs justify-content-center mb-30 border-0" id="myTab" role="tablist">--}}
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <button class="cmn-btn style--two d-flex align-items-center active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">--}}
{{--                                <span class="me-3"><img src="{{asset('/')}}front/assets/images/icon/btn/car.png" alt="icon"></span> Dream Car--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <button class="cmn-btn style--two d-flex align-items-center" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">--}}
{{--                                <span class="me-3"><img src="{{asset('/')}}front/assets/images/icon/btn/box.png" alt="icon"></span>All lifestyle--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="row mb-none-30">
                                @foreach($contests as $contest)
                                <div class="col-xl-4 col-md-6 mb-30">
                                    <div class="contest-card">
                                        <a href="{{route('details.contest', ['id' => $contest->id,'slug' => $contest->slug])}}" class="item-link"></a>
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
                                                <span class="contest-card__price">Tk.{{$contest->price}}</span>
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
{{--                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">--}}
{{--                            <div class="row mb-none-30">--}}
{{--                                <div class="col-xl-4 col-md-6 mb-30">--}}
{{--                                    <div class="contest-card">--}}
{{--                                        <a href="contest-details-one.html" class="item-link"></a>--}}
{{--                                        <div class="contest-card__thumb">--}}
{{--                                            <img src="{{asset('/')}}front/assets/images/contest/4.png" alt="image">--}}
{{--                                            <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>--}}
{{--                                            <div class="contest-num">--}}
{{--                                                <span>contest no:</span>--}}
{{--                                                <h4 class="number">r9d</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="contest-card__content">--}}
{{--                                            <div class="left">--}}
{{--                                                <h5 class="contest-card__name">The Fabia Magnum</h5>--}}
{{--                                            </div>--}}
{{--                                            <div class="right">--}}
{{--                                                <span class="contest-card__price">$3.99</span>--}}
{{--                                                <p>ticket price</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="contest-card__footer">--}}
{{--                                            <ul class="contest-card__meta">--}}
{{--                                                <li>--}}
{{--                                                    <i class="las la-clock"></i>--}}
{{--                                                    <span>5d</span>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <i class="las la-ticket-alt"></i>--}}
{{--                                                    <span>9805</span>--}}
{{--                                                    <p>Remaining</p>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- contest-card end -->--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-md-6 mb-30">--}}
{{--                                    <div class="contest-card">--}}
{{--                                        <a href="contest-details-one.html" class="item-link"></a>--}}
{{--                                        <div class="contest-card__thumb">--}}
{{--                                            <img src="{{asset('/')}}front/assets/images/contest/5.png" alt="image">--}}
{{--                                            <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>--}}
{{--                                            <div class="contest-num">--}}
{{--                                                <span>contest no:</span>--}}
{{--                                                <h4 class="number">pr2</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="contest-card__content">--}}
{{--                                            <div class="left">--}}
{{--                                                <h5 class="contest-card__name">The Omega Navigator</h5>--}}
{{--                                            </div>--}}
{{--                                            <div class="right">--}}
{{--                                                <span class="contest-card__price">$3.99</span>--}}
{{--                                                <p>ticket price</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="contest-card__footer">--}}
{{--                                            <ul class="contest-card__meta">--}}
{{--                                                <li>--}}
{{--                                                    <i class="las la-clock"></i>--}}
{{--                                                    <span>5d</span>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <i class="las la-ticket-alt"></i>--}}
{{--                                                    <span>9805</span>--}}
{{--                                                    <p>Remaining</p>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- contest-card end -->--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-4 col-md-6 mb-30">--}}
{{--                                    <div class="contest-card">--}}
{{--                                        <a href="contest-details-one.html" class="item-link"></a>--}}
{{--                                        <div class="contest-card__thumb">--}}
{{--                                            <img src="{{asset('/')}}front/assets/images/contest/6.png" alt="image">--}}
{{--                                            <a href="#0" class="action-icon"><i class="far fa-heart"></i></a>--}}
{{--                                            <div class="contest-num">--}}
{{--                                                <span>contest no:</span>--}}
{{--                                                <h4 class="number">w03</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="contest-card__content">--}}
{{--                                            <div class="left">--}}
{{--                                                <h5 class="contest-card__name">Shelby Cobra</h5>--}}
{{--                                            </div>--}}
{{--                                            <div class="right">--}}
{{--                                                <span class="contest-card__price">$3.99</span>--}}
{{--                                                <p>ticket price</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="contest-card__footer">--}}
{{--                                            <ul class="contest-card__meta">--}}
{{--                                                <li>--}}
{{--                                                    <i class="las la-clock"></i>--}}
{{--                                                    <span>5d</span>--}}
{{--                                                </li>--}}
{{--                                                <li>--}}
{{--                                                    <i class="las la-ticket-alt"></i>--}}
{{--                                                    <span>9805</span>--}}
{{--                                                    <p>Remaining</p>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- contest-card end -->--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div><!-- row end-->
            <div class="row mt-30">
                <div class="col-lg-12">
                    <div class="btn-grp">
                        <a href="{{route('all.contest')}}" class="btn-border">browse more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contest section end -->

    <!-- winner section start -->
    <section class="position-relative pt-120 pb-120">
        <div class="bg-el"><img src="{{asset('/')}}front/assets/images/bg/winner.jpg" alt="image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header text-center">
                        <span class="section-sub-title">The biggest lottery winners of the month</span>
                        <h2 class="section-title">Top Ten winners</h2>
                        <p>There have been numerous winnings, but some winners were luckier than others</p>
                    </div>
                </div>
            </div><!-- row end -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="winner-wrapper">
                        <div class="left">
                            <div class="winner-prize-thumb wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s"><img src="{{asset('/')}}front/assets/images/elements/car.png" alt="image"></div>
                        </div>
                        <div class="right">
                            <div class="winner-slider">
                                <div class="winner-slide-item">
                                    <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/w-1.png" alt="image"></div>
                                    <div class="winner-content bg_img" data-background="{{asset('/')}}front/assets/images/elements/winner-content-bg.jpg">
                                        <h6 class="winner-name">Breeze Zodiac</h6>
                                        <p>Draw took place on</p>
                                        <span class="draw-date">19/04/2023</span>
                                    </div>
                                </div><!-- winner-slide-item end -->
                                <div class="winner-slide-item">
                                    <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/w-1.png" alt="image"></div>
                                    <div class="winner-content bg_img" data-background="{{asset('/')}}front/assets/images/elements/winner-content-bg.jpg">
                                        <h6 class="winner-name">Breeze Zodiac</h6>
                                        <p>Draw took place on</p>
                                        <span class="draw-date">19/04/2023</span>
                                    </div>
                                </div><!-- winner-slide-item end -->
                                <div class="winner-slide-item">
                                    <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/w-1.png" alt="image"></div>
                                    <div class="winner-content bg_img" data-background="{{asset('/')}}front/assets/images/elements/winner-content-bg.jpg">
                                        <h6 class="winner-name">Breeze Zodiac</h6>
                                        <p>Draw took place on</p>
                                        <span class="draw-date">19/04/2023</span>
                                    </div>
                                </div><!-- winner-slide-item end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div><!-- container end -->
    </section>
    <!-- winner section end -->

    <!-- latest winner section start  -->
    <section class="latest-winner-section position-relative pt-120 pb-120">
        <div class="el-1"><img src="{{asset('/')}}front/assets/images/elements/w-el-1.png" alt="image"></div>
        <div class="el-2"><img src="{{asset('/')}}front/assets/images/elements/w-el-2.png" alt="image"></div>
        <div class="el-3"><img src="{{asset('/')}}front/assets/images/elements/w-el-3.png" alt="image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Meet the latest winners from your favorite contest</span>
                        <h2 class="section-title">Latest Winners</h2>
                        <p>Check your ticket number's to see if you are a Winner in the Dream Lottery.</p>
                    </div>
                </div>
            </div><!-- row end -->

            <div class="row wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="col-lg-12">
{{--                    <ul class="nav nav-tabs winner-tab-nav" id="winnerTab" role="tablist">--}}
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <button class="nav-link active" id="dream-tab" data-bs-toggle="tab" data-bs-target="#dream" role="tab" aria-controls="dream" aria-selected="true">--}}
{{--                                <div class="icon-thumb"><img src="{{asset('/')}}front/assets/images/icon/winner-tab/1.png" alt="image"></div>--}}
{{--                                <span>Dream Car</span>--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <button class="nav-link" id="bike-tab" data-bs-toggle="tab" data-bs-target="#bike" role="tab" aria-controls="bike" aria-selected="false">--}}
{{--                                <div class="icon-thumb"><img src="{{asset('/')}}front/assets/images/icon/winner-tab/2.png" alt="image"></div>--}}
{{--                                <span>bike</span>--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <button class="nav-link" id="watch-tab" data-bs-toggle="tab" data-bs-target="#watch" role="tab" aria-controls="watch" aria-selected="false">--}}
{{--                                <div class="icon-thumb"><img src="{{asset('/')}}front/assets/images/icon/winner-tab/3.png" alt="image"></div>--}}
{{--                                <span>watch</span>--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <button class="nav-link" id="laptop-tab" data-bs-toggle="tab" data-bs-target="#laptop" role="tab" aria-controls="laptop" aria-selected="false">--}}
{{--                                <div class="icon-thumb"><img src="{{asset('/')}}front/assets/images/icon/winner-tab/4.png" alt="image"></div>--}}
{{--                                <span>laptop</span>--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <button class="nav-link" id="money-tab" data-bs-toggle="tab" data-bs-target="#money" role="tab" aria-controls="money" aria-selected="false">--}}
{{--                                <div class="icon-thumb"><img src="{{asset('/')}}front/assets/images/icon/winner-tab/5.png" alt="image"></div>--}}
{{--                                <span>Money</span>--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                    <div class="tab-content mt-50" id="winnerTabContent">
                        <div class="tab-pane fade show active" id="dream" role="tabpanel" aria-labelledby="dream-tab">
                            <div class="row mb-none-30">
                                <div class="col-lg-4 mb-30">
                                    <div class="number-check-wrapper">
                                        <h3 class="title">Check My Numbers</h3>
                                        <p>Are you holding on to a winning ticket? Here's an easy way to find out.</p>
                                        <form class="check-number-form">
                                            <input type="tel" class="form-control mt-30 mb-30" name="check-number1" id="check-number1" placeholder="Enter Contest No">
                                            <div class="number-list-wrapper">
                                                <p>Enter Your Lottery Numbers</p>
                                                <div class="number-list mt-3 mb-3">
                                                    <input type="text" name="text1" id="text1" placeholder="00">
                                                    <input type="text" name="text2" id="text2" placeholder="00">
                                                    <input type="text" name="text3" id="text3" placeholder="00">
                                                    <input type="text" name="text4" id="text4" placeholder="00">
                                                    <input type="text" name="text5" id="text5" placeholder="00">
                                                    <input type="text" name="text6" id="text6" placeholder="00">
                                                    <input type="text" name="text7" id="text7" placeholder="00">
                                                </div><!-- number-list end -->
                                                <select class="nice-select">
                                                    <option>Last 7 days</option>
                                                    <option>Last 6 days</option>
                                                    <option>Last 5 days</option>
                                                    <option>Last 4 days</option>
                                                    <option>Last 3 days</option>
                                                </select>
                                                <div class="text-center mt-100">
                                                    <button type="submit" class="cmn-btn">check my numbers</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-8 mb-30">
                                    @foreach($latest_winners as $latest_winner)
                                        @php
                                            $contest = \App\Models\Contest::where('code', $latest_winner->contest_code)->first();
                                            $ticketNumbers = $latest_winner->ticket_no;
                                            $characterss = str_split($ticketNumbers, 1);
                                            $user = \App\Models\UserAuth::find($latest_winner->userAuth_id);
                                        @endphp
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset($contest->image)}}" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb">
                                            @if($user->image)
                                                <img src="{{asset($user->image)}}" alt="image"></div>
                                            @else
                                                <img src="{{asset('/')}}front/assets/images/winner/2.png" alt="image"></div>
                                            @endif
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>{{$contest->title}}</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>{{ $latest_winner->draw_date->format('l F j, Y') }}</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        @foreach($characterss as $characterssd)
                                                            <li>{{$characterssd}}</li>
                                                        @endforeach
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">{{$contest->code}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    @endforeach
                                    <div class="btn-grp">
                                        <a href="{{route('winner')}}" class="btn-border">browse more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="bike" role="tabpanel" aria-labelledby="bike-tab">
                            <div class="row mb-none-30">
                                <div class="col-lg-4 mb-30">
                                    <div class="number-check-wrapper">
                                        <h3 class="title">Check My Numbers</h3>
                                        <p>Are you holding on to a winning ticket? Here's an easy way to find out.</p>
                                        <form class="check-number-form">
                                            <input type="tel" class="form-control mt-30 mb-30" name="check-number2" id="check-number2" placeholder="Enter Contest No">
                                            <div class="number-list-wrapper">
                                                <p>Enter Your Lottery Numbers</p>
                                                <div class="number-list mt-3 mb-3">
                                                    <input type="text" name="text8" id="text8" placeholder="00">
                                                    <input type="text" name="text9" id="text9" placeholder="00">
                                                    <input type="text" name="text10" id="text10" placeholder="00">
                                                    <input type="text" name="text11" id="text11" placeholder="00">
                                                    <input type="text" name="text12" id="text12" placeholder="00">
                                                    <input type="text" name="text13" id="text13" placeholder="00">
                                                    <input type="text" name="text14" id="text14" placeholder="00">
                                                </div><!-- number-list end -->
                                                <select class="nice-select">
                                                    <option>Last 7 days</option>
                                                    <option>Last 6 days</option>
                                                    <option>Last 5 days</option>
                                                    <option>Last 4 days</option>
                                                    <option>Last 3 days</option>
                                                </select>
                                                <div class="text-center mt-100">
                                                    <button type="submit" class="cmn-btn">check my numbers</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-8 mb-30">
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/5.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/1.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/6.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/2.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/3.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/3.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/4.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/4.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/5.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/5.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/6.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/6.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="btn-grp">
                                        <a href="{{route('winner')}}" class="btn-border">browse more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="watch" role="tabpanel" aria-labelledby="watch-tab">
                            <div class="row mb-none-30">
                                <div class="col-lg-4 mb-30">
                                    <div class="number-check-wrapper">
                                        <h3 class="title">Check My Numbers</h3>
                                        <p>Are you holding on to a winning ticket? Here's an easy way to find out.</p>
                                        <form class="check-number-form">
                                            <input type="tel" class="form-control mt-30 mb-30" name="check-number3" id="check-number3" placeholder="Enter Contest No">
                                            <div class="number-list-wrapper">
                                                <p>Enter Your Lottery Numbers</p>
                                                <div class="number-list mt-3 mb-3">
                                                    <input type="text" name="text15" id="text15" placeholder="00">
                                                    <input type="text" name="text16" id="text16" placeholder="00">
                                                    <input type="text" name="text17" id="text17" placeholder="00">
                                                    <input type="text" name="text18" id="text18" placeholder="00">
                                                    <input type="text" name="text19" id="text19" placeholder="00">
                                                    <input type="text" name="text20" id="text20" placeholder="00">
                                                    <input type="text" name="text21" id="text21" placeholder="00">
                                                </div><!-- number-list end -->
                                                <select class="nice-select">
                                                    <option>Last 7 days</option>
                                                    <option>Last 6 days</option>
                                                    <option>Last 5 days</option>
                                                    <option>Last 4 days</option>
                                                    <option>Last 3 days</option>
                                                </select>
                                                <div class="text-center mt-100">
                                                    <button type="submit" class="cmn-btn">check my numbers</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-8 mb-30">
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/3.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/1.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/2.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/2.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/3.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/3.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/4.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/4.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/5.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/5.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/6.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/6.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="btn-grp">
                                        <a href="{{route('winner')}}" class="btn-border">browse more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="laptop" role="tabpanel" aria-labelledby="laptop-tab">
                            <div class="row mb-none-30">
                                <div class="col-lg-4 mb-30">
                                    <div class="number-check-wrapper">
                                        <h3 class="title">Check My Numbers</h3>
                                        <p>Are you holding on to a winning ticket? Here's an easy way to find out.</p>
                                        <form class="check-number-form">
                                            <input type="tel" class="form-control mt-30 mb-30" name="check-number4" id="check-number4" placeholder="Enter Contest No">
                                            <div class="number-list-wrapper">
                                                <p>Enter Your Lottery Numbers</p>
                                                <div class="number-list mt-3 mb-3">
                                                    <input type="text" name="text22" id="text22" placeholder="00">
                                                    <input type="text" name="text23" id="text23" placeholder="00">
                                                    <input type="text" name="text24" id="text24" placeholder="00">
                                                    <input type="text" name="text25" id="text25" placeholder="00">
                                                    <input type="text" name="text26" id="text26" placeholder="00">
                                                    <input type="text" name="text27" id="text27" placeholder="00">
                                                    <input type="text" name="text28" id="text28" placeholder="00">
                                                </div><!-- number-list end -->
                                                <select class="nice-select">
                                                    <option>Last 7 days</option>
                                                    <option>Last 6 days</option>
                                                    <option>Last 5 days</option>
                                                    <option>Last 4 days</option>
                                                    <option>Last 3 days</option>
                                                </select>
                                                <div class="text-center mt-100">
                                                    <button type="submit" class="cmn-btn">check my numbers</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-8 mb-30">
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/1.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/1.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/2.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/2.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/3.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/3.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/4.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/4.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/5.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/5.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/6.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/6.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="btn-grp">
                                        <a href="{{route('winner')}}" class="btn-border">browse more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="money" role="tabpanel" aria-labelledby="money-tab">
                            <div class="row mb-none-30">
                                <div class="col-lg-4 mb-30">
                                    <div class="number-check-wrapper">
                                        <h3 class="title">Check My Numbers</h3>
                                        <p>Are you holding on to a winning ticket? Here's an easy way to find out.</p>
                                        <form class="check-number-form">
                                            <input type="tel" class="form-control mt-30 mb-30" name="check-number5" id="check-number5" placeholder="Enter Contest No">
                                            <div class="number-list-wrapper">
                                                <p>Enter Your Lottery Numbers</p>
                                                <div class="number-list mt-3 mb-3">
                                                    <input type="text" name="text29" id="text29" placeholder="00">
                                                    <input type="text" name="text30" id="text30" placeholder="00">
                                                    <input type="text" name="text31" id="text31" placeholder="00">
                                                    <input type="text" name="text32" id="text32" placeholder="00">
                                                    <input type="text" name="text33" id="text33" placeholder="00">
                                                    <input type="text" name="text34" id="text34" placeholder="00">
                                                    <input type="text" name="text35" id="text35" placeholder="00">
                                                </div><!-- number-list end -->
                                                <select class="nice-select">
                                                    <option>Last 7 days</option>
                                                    <option>Last 6 days</option>
                                                    <option>Last 5 days</option>
                                                    <option>Last 4 days</option>
                                                    <option>Last 3 days</option>
                                                </select>
                                                <div class="text-center mt-100">
                                                    <button type="submit" class="cmn-btn">check my numbers</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-8 mb-30">
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/4.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/1.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/2.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/2.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/3.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/3.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/4.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/4.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/5.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/5.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="winner-card mb-30">
                                        <div class="winner-card__thumb">
                                            <img src="{{asset('/')}}front/assets/images/win-car/6.png" alt="image">
                                        </div>
                                        <div class="winner-card__content">
                                            <div class="winner-thumb"><img src="{{asset('/')}}front/assets/images/winner/6.png" alt="image"></div>
                                            <div class="content-top">
                                                <div class="left">
                                                    <h5>The Breeze Zodiac IX</h5>
                                                </div>
                                                <div class="right">
                                                    <span>Draw took place on</span>
                                                    <p>Saturday April 20, 2023</p>
                                                </div>
                                            </div>
                                            <div class="content-bottom">
                                                <div class="number-list-wrapper">
                                                    <p>Winning Numbers:</p>
                                                    <ul class="number-list mt-2">
                                                        <li>11</li>
                                                        <li>88</li>
                                                        <li>23</li>
                                                        <li>9</li>
                                                        <li>19</li>
                                                        <li>26</li>
                                                        <li>87</li>
                                                    </ul><!-- number-list end -->
                                                </div>
                                                <div class="right">
                                                    <p>Contest No:</p>
                                                    <span class="contest-num">B2T</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- winner-card end -->
                                    <div class="btn-grp">
                                        <a href="{{route('winner')}}" class="btn-border">browse more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- tab-content end -->
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <!-- latest winner section end  -->

    <!-- overview section start -->
    <section class="overview-section pt-120">
        <div class="map-el"><img src="{{asset('/')}}front/assets/images/elements/map.png" alt="image"></div>
        <div class="obj-1"><img src="{{asset('/')}}front/assets/images/elements/overview-obj-1.png" alt="image"></div>
        <div class="obj-2"><img src="{{asset('/')}}front/assets/images/elements/overview-obj-2.png" alt="image"></div>
        <div class="obj-3"><img src="{{asset('/')}}front/assets/images/elements/overview-obj-3.png" alt="image"></div>
        <div class="obj-4"><img src="{{asset('/')}}front/assets/images/elements/overview-obj-4.png" alt="image"></div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Our Users Around the World</span>
                        <h2 class="section-title">Let the number speak for us</h2>
                        <p>Over the years we have provided millions of players with tickets to lotteries across the globe and enjoyed having more than one million winners</p>
                    </div>
                </div>
            </div><!-- row end -->
        </div><!-- container end -->
        <div class="map-pointer">
            <div class="pointer num-1"></div>
            <div class="pointer num-2"></div>
            <div class="pointer num-3"></div>
            <div class="pointer num-4"></div>
            <div class="pointer num-5"></div>
            <div class="pointer num-6"></div>
            <div class="pointer num-7"></div>
            <div class="pointer num-8"></div>
            <div class="pointer num-9"></div>
        </div>

        <div class="container">
            <div class="row justify-content-center mb-none-30">
                <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="overview-card hover--effect-1">
                        <div class="overview-card__icon">
                            <img src="{{asset('/')}}front/assets/images/icon/overview/1.png" alt="">
                        </div>
                        <div class="overview-card__content">
                            <span class="number">12000+</span>
                            <p>Verified Users</p>
                        </div>
                    </div><!-- overview-card end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="overview-card hover--effect-1">
                        <div class="overview-card__icon">
                            <img src="{{asset('/')}}front/assets/images/icon/overview/2.png" alt="">
                        </div>
                        <div class="overview-card__content">
                            <span class="number">13</span>
                            <p>Years on the market</p>
                        </div>
                    </div><!-- overview-card end -->
                </div>
                <div class="col-lg-4 col-sm-6 mb-30 wow bounceIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="overview-card hover--effect-1">
                        <div class="overview-card__icon">
                            <img src="{{asset('/')}}front/assets/images/icon/overview/3.png" alt="">
                        </div>
                        <div class="overview-card__content">
                            <span class="number">98%</span>
                            <p>Customer Satisfaction</p>
                        </div>
                    </div><!-- overview-card end -->
                </div>
            </div>
        </div><!-- container end -->
    </section>
    <!-- overview section end -->

    <!-- features section start -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="row mb-none-30">
                        <div class="col-lg-6 mb-30">
                            <div class="row mb-none-30">
                                <div class="col-lg-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                                    <div class="feature-card hover--effect-1">
                                        <div class="feature-card__icon">
                                            <img src="{{asset('/')}}front/assets/images/icon/feature/1.png" alt="image">
                                        </div>
                                        <div class="feature-card__content">
                                            <h3 class="feature-title">Safe Service</h3>
                                            <p>Nulla ultricies in nulla ac efficitur. In vel neque arcu. Donec quis</p>
                                        </div>
                                    </div><!-- feature-card end -->
                                </div><!-- feature-card end -->
                                <div class="col-lg-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                    <div class="feature-card hover--effect-1">
                                        <div class="feature-card__icon">
                                            <img src="{{asset('/')}}front/assets/images/icon/feature/3.png" alt="image">
                                        </div>
                                        <div class="feature-card__content">
                                            <h3 class="feature-title">Network</h3>
                                            <p>Nulla ultricies in nulla ac efficitur. In vel neque arcu. Donec quis</p>
                                        </div>
                                    </div><!-- feature-card end -->
                                </div><!-- feature-card end -->
                            </div>
                        </div>
                        <div class="col-lg-6 mb-30 mt-lg-5">
                            <div class="row mb-none-30">
                                <div class="col-lg-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                                    <div class="feature-card hover--effect-1">
                                        <div class="feature-card__icon">
                                            <img src="{{asset('/')}}front/assets/images/icon/feature/2.png" alt="image">
                                        </div>
                                        <div class="feature-card__content">
                                            <h3 class="feature-title">Security</h3>
                                            <p>Nulla ultricies in nulla ac efficitur. In vel neque arcu. Donec quis</p>
                                        </div>
                                    </div><!-- feature-card end -->
                                </div><!-- feature-card end -->
                                <div class="col-lg-12 col-md-6 mb-30 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                    <div class="feature-card hover--effect-1">
                                        <div class="feature-card__icon">
                                            <img src="{{asset('/')}}front/assets/images/icon/feature/4.png" alt="image">
                                        </div>
                                        <div class="feature-card__content">
                                            <h3 class="feature-title">Support</h3>
                                            <p>Nulla ultricies in nulla ac efficitur. In vel neque arcu. Donec quis</p>
                                        </div>
                                    </div><!-- feature-card end -->
                                </div><!-- feature-card end -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 text-lg-start text-center wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="section-header">
                        <span class="section-sub-title">An Exhaustive list of</span>
                        <h2 class="section-title">Our features.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium, elit quis vehicula interdum, sem metus iaculis sapien, sed bibendum lectus augue eu metus.</p>
                        <a href="#0" class="d-flex align-items-center mt-3 justify-content-lg-start justify-content-center">Show all features<i class="las la-angle-double-right text-danger"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features section end -->

    <!-- testimonial section start -->
    <section class="has-bg--shape pt-120 pb-120">
        <div class="bg-shape">
            <div class="round-shape d-sm-block d-none"><img src="{{asset('/')}}front/assets/images/elements/round-shape.png" alt="image"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="shape-3"></div>
            <div class="shape-4"></div>
            <div class="shape-5"></div>
            <div class="shape-6"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Testimonial</span>
                        <h2 class="section-title">our Happy Customers All Around the World</h2>
                        <p>With over 12 years of experience as the world’s leading online lottery service provider. Find out what our members have to say about us!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="testimonial-area bg_img" data-background="{{asset('/')}}front/assets/images/elements/testimonial-single.jpg">
                        <div class="testimonial-slider">
                            <div class="testimonial-single">
                                <div class="testimonial-single__thumb">
                                    <img src="{{asset('/')}}front/assets/images/winner/2.png" alt="image">
                                </div>
                                <div class="testimonial-single__content">
                                    <h4 class="client-name">Dave Ford</h4>
                                    <p>“Unbelievable this is a dream come true,no way would I ever think I would own a car like this” </p>
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div><!-- testimonial-single end -->
                            <div class="testimonial-single">
                                <div class="testimonial-single__thumb">
                                    <img src="{{asset('/')}}front/assets/images/winner/1.png" alt="image">
                                </div>
                                <div class="testimonial-single__content">
                                    <h4 class="client-name">Dave Ford</h4>
                                    <p>“Unbelievable this is a dream come true,no way would I ever think I would own a car like this” </p>
                                    <div class="ratings">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div><!-- testimonial-single end -->
                        </div><!-- testimonial-slider end -->
                    </div><!-- testimonial-area end -->
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->

    <!-- support section start  -->
    <section class="pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-header text-center">
                        <span class="section-sub-title">Get in touch with our friendly support</span>
                        <h2 class="section-title">Customer Support</h2>
                        <p>Have a question or need help? Contact our friendly support team.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-none-30">
                <div class="col-lg-6 mb-30 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="support-card">
                        <div class="support-card__thumb">
                            <img src="{{asset('/')}}front/assets/images/icon/support/1.png" alt="image">
                        </div>
                        <div class="support-card__content">
                            <h3 class="support-card__title">Talk to our support team</h3>
                            <p>Got a question about Lotteries? Get in touch with our friendly staff.</p>
                            <div class="btn-grp justify-content-xl-start mt-3">
                                <a href="tel:6564545" class="btn-border btn-sm text-capitalize">Call us <i class="fas fa-phone-alt"></i></a>
                                <a href="https://pixner.net/cdn-cgi/l/email-protection#503438343a10373d31393c7e333f3d" class="cmn-btn btn-sm text-capitalize">Email us <i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div><!-- support-card end -->
                </div>
                <div class="col-lg-6 mb-30 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="support-card">
                        <div class="support-card__thumb">
                            <img src="{{asset('/')}}front/assets/images/icon/support/2.png" alt="image">
                        </div>
                        <div class="support-card__content">
                            <h3 class="support-card__title">Our Guide to Luckee7</h3>
                            <p>Check out our FAQs to see if we can help you out. </p>
                            <div class="btn-grp justify-content-xl-start mt-3">
                                <a href="faq.html" class="btn-border btn-sm text-capitalize">FAQs & Help</a>
                            </div>
                        </div>
                    </div><!-- support-card end -->
                </div>
            </div>
        </div>
    </section>
    <!-- support section end  -->
@endsection
