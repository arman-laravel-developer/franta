<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- site favicon -->
    <link rel="icon" type="image/png" href="{{asset('/')}}front/assets/images/favicon.png" sizes="16x16">
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/vendor/bootstrap.min.css">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/all.min.css">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/line-awesome.min.css">
    <!-- custom select css -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/vendor/nice-select.css">
    <!-- animate css  -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/vendor/animate.min.css">
    <!-- lightcase css -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/vendor/lightcase.css">
    <!-- slick slider css -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/vendor/slick.css">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/vendor/jquery-ui.min.css">
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/vendor/datepicker.min.css">
    <!-- style main css -->
    <link rel="stylesheet" href="{{asset('/')}}front/assets/css/main.css">

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                telegram: "luckee7", // Telegram bot username
                call_to_action: "Message us", // Call to action
                button_color: "#FF6550", // Color of button
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->
</head>
<body>

<div class="preloader">
{{--    <video id="preloaderVideo" autoplay loop muted>--}}
{{--        <source src="{{asset('/')}}front/assets/your-video.mp4" type="video/mp4">--}}
{{--        <!-- Add additional video sources for different formats if needed -->--}}
{{--    </video>--}}
    <svg class="mainSVG" viewBox="0 0 800 600" xmlns="{{asset('/')}}front/assets/svg.html">
        <defs>
            <path id="puff" d="M4.5,8.3C6,8.4,6.5,7,6.5,7s2,0.7,2.9-0.1C10,6.4,10.3,4.1,9.1,4c2-0.5,1.5-2.4-0.1-2.9c-1.1-0.3-1.8,0-1.8,0
        s-1.5-1.6-3.4-1C2.5,0.5,2.1,2.3,2.1,2.3S0,2.3,0,4.4c0,1.1,1,2.1,2.2,2.1C2.2,7.9,3.5,8.2,4.5,8.3z" fill="#fff"/>
            <circle id="dot"  cx="0" cy="0" r="5" fill="#fff"/>
        </defs>

        <circle id="mainCircle" fill="none" stroke="none" stroke-width="2" stroke-miterlimit="10" cx="400" cy="300" r="130"/>
        <circle id="circlePath" fill="none" stroke="none" stroke-width="2" stroke-miterlimit="10" cx="400" cy="300" r="80"/>

        <g id="mainContainer" >
            <g id="car">
                <path id="carRot" fill="#FFF"  d="M45.6,16.9l0-11.4c0-3-1.5-5.5-4.5-5.5L3.5,0C0.5,0,0,1.5,0,4.5l0,13.4c0,3,0.5,4.5,3.5,4.5l37.6,0
      C44.1,22.4,45.6,19.9,45.6,16.9z M31.9,21.4l-23.3,0l2.2-2.6l14.1,0L31.9,21.4z M34.2,21c-3.8-1-7.3-3.1-7.3-3.1l0-13.4l7.3-3.1
      C34.2,1.4,37.1,11.9,34.2,21z M6.9,1.5c0-0.9,2.3,3.1,2.3,3.1l0,13.4c0,0-0.7,1.5-2.3,3.1C5.8,19.3,5.1,5.8,6.9,1.5z M24.9,3.9
      l-14.1,0L8.6,1.3l23.3,0L24.9,3.9z"/>
            </g>
        </g>
    </svg>
</div>

<!-- scroll-to-top start -->
<div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="las la-arrow-up"></i>
    </span>
</div>
<!-- scroll-to-top end -->


{{--<!-- theme-switcher start -->--}}
{{--<div class="theme-switcher">--}}
{{--    <div class="theme-switcher__icon">--}}
{{--        <i class="las la-cog"></i>--}}
{{--    </div>--}}
{{--    <div class="theme-switcher__body">--}}
{{--        <div class="single dark active">--}}
{{--            <a href="index.html">Dark Version</a>--}}
{{--        </div>--}}
{{--        <div class="single light mt-4">--}}
{{--            <a href="light-index.html">Light Version</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- theme-switcher end -->--}}
<!-- page-wrapper start -->
<div class="page-wrapper">
    <!-- login modal -->


    @include('front.inc.sign-up-modal')

<!-- header-section start  -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="left d-flex align-items-center">
                            <a href="https://telegram.me/luckee7" target="_blank"><i class="las la-phone-volume"></i> Customer Support</a>
                            <div class="language">
                                <i class="las la-globe-europe"></i>
                                <select>
                                    <option>En</option>
                                    <option>Rus</option>
                                    <option>Bn</option>
                                    <option>Hp</option>
                                    <option>Frn</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="right">
                            <div class="product__cart">
                                <span class="total__amount">0.00</span>
                                <a href="{{route('cart.show')}}"  class="amount__btn">
                                    <i class="las la-shopping-basket"></i>
                                    <span class="cart__num">{{count($cartContests)}}</span>
                                </a>
                            </div>
                            @if(Session::get('userAuth_id'))
                                <a href="{{route('userAuth.dashboard')}}" class="user__btn">
                                    <i class="las la-user"></i>
                                </a>
                            @else
                                <a href="#0" class="user__btn" data-bs-toggle="modal" data-bs-target="#loginModal">
                                    <i class="las la-user"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- header__top end -->
        <div class="header__bottom">
            <div class="container">
                <nav class="navbar navbar-expand-xl p-0 align-items-center">
                    <a class="site-logo site-title" href="{{route('home')}}"><img src="{{asset('/')}}front/assets/images/logo.png" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-toggle"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav main-menu ms-auto">
                            <li class="menu_has_children">
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="menu_has_children">
                                <a href="{{route('all.contest')}}">Contest</a>
                            </li>
                            <li><a href="{{route('winner')}}">Winners</a></li>
                            <li><a href="{{route('contact')}}">contact</a></li>
                        </ul>
                        <div class="nav-right">
                            <a href="{{route('all.contest')}}" class="cmn-btn style--three btn--sm">
                                <img src="{{asset('/')}}front/assets/images/icon/btn/tag.png" alt="icon" class="me-2">
                                Buy Tickets
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div><!-- header__bottom end -->
    </header>
    <!-- header-section end  -->

    @yield('body')

    <!-- footer section start  -->
    <footer class="footer-section">
        <div class="bg-shape--top"><img src="{{asset('/')}}front/assets/images/elements/round-shape-2.png" alt="image"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
                    <div class="subscribe-area">
                        <div class="left">
                            <span class="subtitle">Subscribe to Sorko</span>
                            <h3 class="title">To Get Exclusive Benefits</h3>
                        </div>
                        <div class="right">
                            <form class="subscribe-form">
                                <input type="email" name="subscribe_email" id="subscribe_email" placeholder="Enter Your Email">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-120">
            <div class="row pb-5 align-items-center">
                <div class="col-lg-4">
                    <ul class="app-btn">
                        <li><a href="#0"><img src="{{asset('/')}}front/assets/images/icon/store-btn/1.png" alt="image"></a></li>
                        <li><a href="#0"><img src="{{asset('/')}}front/assets/images/icon/store-btn/2.png" alt="image"></a></li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <ul class="short-links justify-content-lg-end justify-content-center">
                        <li><a href="#0">Abount</a></li>
                        <li><a href="#0">FAQs</a></li>
                        <li><a href="#0">Contact</a></li>
                        <li><a href="#0">Terms of Services</a></li>
                        <li><a href="#0">Privacy</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row py-5 align-items-center">
                <div class="col-lg-6">
                    <p class="copy-right-text text-lg-start text-center mb-lg-0 mb-3">Copyright © 2023.All Rights Reserved By <a href="{{route('home')}}">Luckee7</a></p>
                </div>
                <div class="col-lg-6">
                    <ul class="social-links justify-content-lg-end justify-content-center">
                        <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer section end -->
</div>
<!-- page-wrapper end -->
<!-- jQuery library -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('/')}}front/assets/js/vendor/jquery-3.5.1.min.js"></script>
<!-- bootstrap js -->
<script src="{{asset('/')}}front/assets/js/vendor/bootstrap.bundle.min.js"></script>
<!-- custom select js -->
<script src="{{asset('/')}}front/assets/js/vendor/jquery.nice-select.min.js"></script>
<!-- lightcase js -->
<script src="{{asset('/')}}front/assets/js/vendor/lightcase.js"></script>
<!-- wow js -->
<script src="{{asset('/')}}front/assets/js/vendor/wow.min.js"></script>
<!-- slick slider js -->
<script src="{{asset('/')}}front/assets/js/vendor/slick.min.js"></script>
<!-- countdown js -->
<script src="{{asset('/')}}front/assets/js/vendor/jquery.countdown.js"></script>
<!-- jquery ui js -->
<script src="{{asset('/')}}front/assets/js/vendor/jquery-ui.min.js"></script>
<!-- datepicker js -->
<script src="{{asset('/')}}front/assets/js/vendor/datepicker.min.js"></script>
<script src="{{asset('/')}}front/assets/js/vendor/datepicker.en.js"></script>
<!-- preloader -->
<script src='{{asset('/')}}front/assets/js/vendor/TweenMax.min.js'></script>
<script src='{{asset('/')}}front/assets/js/vendor/MorphSVGPlugin.min.js'></script>
<script src="{{asset('/')}}front/assets/js/preloader.js"></script>
<!-- contact js -->
<script src="{{asset('/')}}front/assets/js/contact.js"></script>
<!-- custom js -->
<script src="{{asset('/')}}front/assets/js/app.js"></script>
@include('sweetalert::alert')

</body>
</html>
