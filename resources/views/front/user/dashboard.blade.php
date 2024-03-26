@extends('front.master')

@section('title')
    User Dashboard | {{env('APP_NAME')}}
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
                            <li class="active">
                                <a href="{{route('userAuth.dashboard')}}">My Tickets <span class="badge">{{$ticketCount}}</span></a></li>
                            <li><a href="{{route('personal.information')}}">Personal Information</a></li>
                            <li><a href="{{route('transaction')}}">Transactions</a></li>
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
                    <div class="upcoming-draw-wrapper">
                        <h3 class="title">Upcoming Draw</h3>
                        <div class="draw-ticket-slider">
                            @if(count($tickets) > 0)
                            @foreach($tickets as $ticket)
                                <div class="draw-single-ticket">
                                    <div class="draw-single-ticket__header">
                                        <div class="left">Tickey#{{$loop->iteration}}</div>
                                        <div class="right">Contest No:{{$ticket->contest_code}}</div>
                                    </div>
                                    <div class="circle-divider"><img src="{{asset('/')}}front/assets/images/elements/circle-border.png" alt="image"></div>
                                    @php
                                        $ticketNumber = $ticket->ticket_no;
                                        $characters = str_split($ticketNumber, 1);
                                    @endphp
                                    <ul class="ticket-numbers-list">
                                        @foreach($characters as $character)
                                            <li>{{$character}}</li>
                                        @endforeach
                                    </ul>
                                </div><!-- draw-single-ticket end -->
                            @endforeach
                            @else
                            <div class="draw-single-ticket">
                                <p class="text-center text-danger">Nothing found!</p>
                            </div>
                            @endif
                        </div><!-- draw-ticket-slider end -->
                    </div><!-- upcoming-draw-wrapper end -->
                    <div class="past-draw-wrapper">
                        <h3 class="title">Past Draws</h3>
                        <div class="table-responsive-lg">
                            <table>
                                <thead>
                                <tr>
                                    <th>Draw</th>
                                    <th>Contest No</th>
                                    <th>Result</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tickets_draw as $ticket_draw)
                                    @php
                                        $ticketNumbers = $ticket_draw->ticket_no;
                                        $characterss = str_split($ticketNumbers, 1);
                                    @endphp
                                <tr>
                                    <td><span class="date">{{ $ticket_draw->draw_date }}</span></td>
                                    <td><span class="contest-no">{{$ticket_draw->contest_code}}</span></td>
                                    <td>
                                        <ul class="number-list">
                                            @foreach($characterss as $characterssd)
                                            <li>{{$characterssd}}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    @if($ticket_draw->draw_status == 'win')
                                    <td><span class="win">Win</span></td>
                                    @else
                                    <td><span class="fail">No Win</span></td>
                                    @endif
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="load-more">
                            <button id="browseContestBtn" type="button">Browse Contest <i class="las la-angle-down ml-2"></i></button>
                            <script>
                                // Add an event listener to the button
                                document.getElementById('browseContestBtn').addEventListener('click', function() {
                                    // Change the window location to the specified route
                                    window.location.href = "{{ route('all.contest') }}";
                                });
                            </script>
                        </div>
                    </div><!-- past-draw-wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- user section end -->
@endsection
