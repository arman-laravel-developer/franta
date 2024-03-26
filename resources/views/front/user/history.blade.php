@extends('front.master')

@section('title')
    Order History | {{env('APP_NAME')}}
@endsection

@section('body')
    <!-- inner-hero-section start -->
    <div class="inner-hero-section style--five">
    </div>
    <!-- inner-hero-section end -->

    <!-- user section start -->
    <div class="mt-minus-150 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="user-card">
                        <div class="avatar-upload">
                            <form id="uploadForm" action="{{ route('upload.image') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="userAuth_id" value="{{Session::get('userAuth_id')}}">
                                <div class="obj-el">
                                    <img src="{{ asset('/') }}front/assets/images/elements/team-obj.png" alt="image">
                                </div>
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg" />
                                    <label for="imageUpload"></label>
                                </div>
                                <div class="avatar-preview">
                                    @if($user->image)
                                        <div id="imagePreview" style="background-image: url({{ asset($user->image) }});"></div>
                                    @else
                                        <div id="imagePreview" style="background-image: url({{ asset('/') }}front/assets/images/user/pp.png);"></div>
                                    @endif

                                </div>
                            </form>
                        </div>
                        <script>
                            // Add an event listener to the file input
                            document.getElementById('imageUpload').addEventListener('change', function () {
                                // Submit the form when a file is selected
                                document.getElementById('uploadForm').submit();
                            });
                        </script>
                        <h3 class="user-card__name">{{$user->name}}</h3>
                        <span class="user-card__id">ID : 000{{Session::get('userAuth_id')}}</span>
                    </div><!-- user-card end -->
                    <div class="user-action-card">
                        <ul class="user-action-list">
                            <li>
                                <a href="{{route('userAuth.dashboard')}}">My Tickets <span class="badge">{{$ticketCount}}</span></a></li>
                            <li><a href="{{route('personal.information')}}">Personal Information</a></li>
                            <li><a href="{{route('transaction')}}">Transactions</a></li>
                            <li class="active"><a href="{{route('order.history')}}">Order History</a></li>
                            {{--                            <li><a href="user-referral.html">Referral Program</a></li>--}}
                            {{--                            <li><a href="user-lottery.html">Favorite Lotteries</a></li>--}}
                            <li><a href="https://telegram.me/luckee7" target="_blank">Help Center</a></li>
                            <li>
                                <a href="#0" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Log Out</a>
                            </li>
                            <form action="{{route('userAuth.logout')}}" method="POST" id="logoutForm">
                                @csrf
                            </form>
                        </ul>
                    </div><!-- user-action-card end -->
                </div>
                <div class="col-lg-8 mt-lg-0 mt-4">

                    <div class="referral-transaction">
                        <div class="all-transaction__header">
                            <h3 class="title">Your Order History:</h3>
                            <div class="date-range">
                                <p class="text-center text-success-lighter">{{Session::get('message')}}</p>
{{--                                <input type="text" data-range="true" data-multiple-dates-separator=" - " data-language="en" class="datepicker-here form-control" data-position='top left' placeholder="min - max date">--}}
{{--                                <i class="las la-calendar-alt"></i>--}}
                            </div>
                        </div>
                        <div class="table-responsive-lg">
                            <table>
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Order Code</th>
                                    <th>Order Quantity</th>
                                    <th>Payment Amount</th>
                                    <th>Payment Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($orders) > 0)
                                @foreach($orders as $order)
                                <tr>
                                    <td>
                                        <div class="date">
                                            {{$order->order_date}}
                                        </div>
                                    </td>
                                    <td>{{$order->order_code}}</td>
                                    <td>{{$order->orderDetailOne->contest_quantity}}</td>
                                    <td>Tk.{{$order->total_price}}</td>
                                    <td>
                                        @if($order->payment_status == 1)
                                            <a href="javascript:void(0);"
                                               class="cmn-btn text-center" style="font-size: 12px;
                                               background-image: -webkit-linear-gradient(86deg, rgb(3 236 75) 0%, rgb(100 251 148) 44%, rgb(7 233 68) 100%); pointer-events: none">
                                                Confirmed
                                            </a>
                                        @elseif($order->payment_status == 3)
                                            <a href="javascript:void(0);"
                                               class="cmn-btn text-center" style="font-size: 12px;
                                               background-image: -webkit-linear-gradient(86deg, rgb(232 236 3) 0%, rgb(233 251 100) 44%, rgb(251 247 54) 100%); pointer-events: none">
                                                <span class="text-dark">Waiting</span>
                                            </a>
                                        @else
                                            <a href="{{route('confirm.order', ['id' => $order->id])}}" class="cmn-btn text-center" style="font-size: 12px">Make Payment</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">Order History Item Not Found</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="load-more text-center">
                            <button type="button"> {{ $orders->links('pagination::bootstrap-4', ['prev_text' => 'Previous', 'next_text' => 'Next']) }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
