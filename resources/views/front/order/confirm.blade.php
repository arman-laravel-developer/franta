@extends('front.master')

@section('title')
    Order Confirmation | {{env('APP_NAME')}}
@endsection

@section('body')

    <style>
        .content {
            display: none;
        }
        .content.active {
            display: block;
        }
    </style>
    <!-- inner-hero-section start -->
    <div class="inner-hero-section">
        <div class="bg-shape"><img src="{{asset('/')}}front/assets/images/elements/inner-hero-shape.png" alt="image"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="page-list">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Make Payment</li>
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
                                    <div class="payment-details mt-30">
                                        <h3 class="title">Payment Option</h3>
                                        <form class="payment-form" action="{{route('make.payment')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="payment-methods">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <button type="button" class="checked" data-target="bkash-content" data-value="Bkash" onclick="setPaymentMethod('Bkash')">
                                                            <img src="{{asset('/')}}front/assets/images/bkash.png" alt="" >
                                                            <span>Bkash</span>
                                                        </button>
                                                    </div>
                                                    <div class="col-4">
                                                        <button type="button" data-value="Nagad" data-target="nagad-content" onclick="setPaymentMethod('Nagad')">
                                                            <img src="{{asset('/')}}front/assets/images/nagad.png" alt="" >
                                                            <span>Nagad</span>
                                                        </button>
                                                    </div>
                                                    <div class="col-4">
                                                        <button type="button" data-value="Rocket" data-target="rocket-content" onclick="setPaymentMethod('Rocket')">
                                                            <img src="{{asset('/')}}front/assets/images/rocket.png" alt="">
                                                            <span>Rocket</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container py-3">
                                                <div id="bkash-content" class="content active">
                                                    <!-- Content for Bkash -->
                                                    <p>Personal Please Send Money(Bkash) <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bkash-modal">Show Instruction</a></p>
                                                    <p>018***********</p>
                                                </div>
                                                <div id="nagad-content" class="content">
                                                    <!-- Content for Nagad -->
                                                    <p>Personal Please Send Money(Nagad) <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#nagad-modal">Show Instruction</a></p>
                                                    <p>017***********</p>
                                                </div>
                                                <div id="rocket-content" class="content">
                                                    <!-- Content for Rocket -->
                                                    <p>Personal Please Send Money(Rocket) <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#rocket-modal">Show Instruction</a></p>
                                                    <p>019***********</p>
                                                </div>
                                            </div>
                                            <h5 class="payment-form__title">Enter Your Payment Details </h5>
                                            <div class="form-row">
                                                <input type="hidden" name="payment_method" id="payment_method" value="Bkash">
                                                <input type="hidden" name="order_id" id="payment_method" value="{{$order->id}}">
{{--                                                <input type="text" name="order_id" id="payment_method" value="{{$order->id}}">--}}
                                                <div class="form-group col-lg-12">
                                                    <label>Transaction Number/Payment Number</label>
                                                    <input type="text" name="transaction_no" required>
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <label>Amount</label>
                                                    <input type="text" name="amount" value="{{$order->total_price}}" readonly>
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <button type="submit" class="cmn-btn">Make payment</button>
                                                </div>
                                            </div>
                                        </form>
                                        <p class="info-text">By Clicking "Make Payment" you agree to the <a href="#0">terms and conditions</a></p>
                                    </div>
                                </div><!-- checkout-form-area end -->
                            </div>
                            <div class="col-lg-5 mt-lg-0 mt-4">
                                <div class="checkout-wrapper">
                                    <div class="checkout-wrapper__header">
                                        <h3>Checkout</h3>
                                    </div>
                                    <div class="checkout-wrapper__body">
                                        <ul class="price">
                                            <li>
                                                <div class="left">
                                                    <h4 class="caption">Ticket Price</h4>
                                                </div>
                                                <div class="right">
                                                    <span class="price">Tk.{{$order->total_price}}</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left">
                                                    <h4 class="caption">Total Payble</h4>
                                                </div>
                                                <div class="right">
                                                    <span class="price">Tk.{{$order->total_price}}</span>
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

    <!-- Modals -->
    <div class="modal fade" id="bkash-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Bkash Modal Content -->
                <div class="modal-header">
                    <h4 class="modal-title">Bkash Instruction</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('/')}}front/assets/images/bkash-system.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="nagad-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Nagad Modal Content -->
                <div class="modal-header">
                    <h4 class="modal-title">Nagad Instruction</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Nagad Modal Content...</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="rocket-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Rocket Modal Content -->
                <div class="modal-header">
                    <h4 class="modal-title">Rocket Instruction</h4>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('/')}}front/assets/images/sendmoney.png" alt="">
                </div>
            </div>
        </div>
    </div>


    <script>
        const buttons = document.querySelectorAll('.payment-methods button');
        const contentDivs = document.querySelectorAll('.content');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                // Hide all content divs
                contentDivs.forEach(div => {
                    div.style.display = 'none';
                });

                // Show the content div corresponding to the clicked button
                const targetId = button.getAttribute('data-target');
                const targetDiv = document.getElementById(targetId);
                targetDiv.style.display = 'block';

                // Remove the 'checked' class from all buttons
                buttons.forEach(b => {
                    b.classList.remove('checked');
                });

                // Add the 'checked' class to the clicked button
                button.classList.add('checked');
            });
        });
        function setPaymentMethod(method) {
            document.getElementById('payment_method').value = method;
        }
    </script>
@endsection
