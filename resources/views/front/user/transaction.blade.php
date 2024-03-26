@extends('front.master')

@section('title')
    My Transaction | {{env('APP_NAME')}}
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
                            <li class="active"><a href="{{route('transaction')}}">Transactions</a></li>
                            <li><a href="{{route('order.history')}}">Order History</a></li>
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
{{--                    <div class="transaction-balance-wrapper">--}}
{{--                        <div class="left">--}}
{{--                            <div class="transaction-balance">--}}
{{--                                <h4 class="balance">$2956.00</h4>--}}
{{--                                <span>Available Balance</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="right">--}}
{{--                            <a href="#0" class="transaction-action-btn">--}}
{{--                                <img src="{{asset('/')}}front/assets/images/icon/transaction/1.png" alt="image">--}}
{{--                                <span>Deposit</span>--}}
{{--                            </a>--}}
{{--                            <a href="#0" class="transaction-action-btn ms-4">--}}
{{--                                <img src="{{asset('/')}}front/assets/images/icon/transaction/2.png" alt="image">--}}
{{--                                <span>Withdraw</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div><!-- transaction-balance-wrapper end -->--}}
                    <div class="all-transaction">
                        <div class="all-transaction__header">
                            <h3 class="title">All Transactions</h3>
                            <div class="date-range">
                                <input type="text" data-range="true" data-multiple-dates-separator=" - " data-language="en" class="datepicker-here form-control" data-position='top left' placeholder="min - max date">
                                <i class="las la-calendar-alt"></i>
                            </div>
                        </div>
                        <div class="table-responsive-xl">
                            <table>
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th>Pay. method</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($transactions) > 0)
                                @foreach($transactions as $transaction)
                                <tr>
                                    <td>
                                        <div class="date">
                                            <span>{{$transaction->created_at->format('d M')}}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p>lottery purchase</p>
                                        <span>Contest No: {{$transaction->contest->code}}</span>
                                    </td>
                                    <td>
                                        <p>{{$transaction->payment_method}}</p>
                                    </td>
                                    <td>
                                        <span class="amount minus-amount">Tk. {{$transaction->payment_amount}}</span>
                                    </td>
                                    <td>
                                        @if($transaction->payment_status == 1)
                                            <div class="status-success"><i class="fas fa-check-circle"></i></div>
                                        @else
                                        <div class="status-pending"><i class="fas fa-ellipsis-h"></i></div>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center">Transactions Item Not Found</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="load-more">
                            <button type="button">Show More Lotteries <i class="las la-angle-down ml-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- user section end -->
@endsection

