@extends('front.master')

@section('title')
    Personal Information | {{env('APP_NAME')}}
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
                            <li class="active"><a href="{{route('personal.information')}}">Personal Information</a></li>
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
                <div class="col-lg-8 mt-lg-0 mt-5">
                    <div class="user-info-card">
                        <div class="user-info-card__header">
                            <h3 class="user-info-card__title">Personal Details</h3>
                            <button type="button" id="pinfo"><i class="far fa-edit"></i> Edit</button>
                        </div>
                        <form action="{{route('update.personal')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <ul class="user-info-card__list">
                                <li>
                                    <span class="caption">Name</span>
                                    <input type="text" name="name" disabled class="value" value="{{$user->name}}"/>
                                </li>
                                <li>
                                    <span class="caption">Date of Birth</span>
                                    <input type="date" value="{{$user->date_of_birth}}" disabled name="date_of_birth" class="value" placeholder="Date of birth">
                                </li>
                                <li>
                                    <span class="caption">Address</span>
                                    <input type="text" value="{{$user->address}}" disabled name="address" class="value" placeholder="Address">
                                </li>
                                <li>
                                    <span class="caption">Email</span>
                                    <input type="text" value="{{$user->email}}" disabled name="email" class="value" placeholder="Email">
                                </li>
                                <li>
                                    <span class="caption">Mobile</span>
                                    <input type="tel" value="{{$user->mobile}}" disabled name="mobile" class="value" placeholder="Mobile">
                                </li>
                                <li class="float-end">
                                    <button type="submit" id="pinfobtn" class="btn btn-primary">Save</button>
                                </li>
                            </ul>
                        </form>
                    </div><!-- user-info-card end -->
                    <div class="user-info-card">
                        <div class="user-info-card__header">
                            <h3 class="user-info-card__title">Security</h3>
                            <button type="button" id="passEdit"><i class="far fa-edit"></i> Edit</button>
                        </div>
                        <div class="user-info-card__header">
                            <p class="text-center messagePint"></p>
                        </div>
                        <form id="password-change-form" action="{{route('user.password')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <ul class="user-info-card__list">
                                <div id="passOld">
                                    <li>
                                        <span class="caption">Password</span>
                                        <span class="value user-password">***************</span>
                                    </li>
                                </div>
                                <div id="passNew">
                                    <li>
                                        <span class="caption">Old Password</span>
                                        <input type="password" class="value user-password" name="old_password" required>
                                    </li>
                                    <li>
                                        <span class="caption">New Password</span>
                                        <input type="password" class="value user-password" name="password" required>
                                    </li>
                                    <li>
                                        <span class="caption">Confirm Password</span>
                                        <input type="password" class="value user-password" name="password_confirmation" required>
                                    </li>
                                </div>
                                <li class="float-end">
                                    <button type="submit" id="passSave" class="btn btn-primary">Save</button>
                                </li>
                            </ul>
                        </form>
                    </div><!-- user-info-card end -->
                </div>
            </div>
        </div>
    </div>
    <!-- user section end -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Initially, disable all input fields except for email and hide the "Save" button
            $(".value").prop("disabled", true);
            $("input[name='email']").prop("disabled", true);
            $("#pinfobtn").hide();

            // Click event for the "Edit" button
            $("#pinfo").click(function () {
                $(".value:not([name='email'])").prop("disabled", false); // Enable input fields except email
                $("#pinfobtn").show(); // Show the "Save" button
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            // Initially, disable all input fields except for email and hide the "Save" button
            $("#passSave").hide();
            $("#passNew").hide();

            // Click event for the "Edit" button
            $("#passEdit").click(function () {
                $("#passNew").show(); // Show the "Save" button
                $("#passSave").show(); // Show the "Save" button
                $("#passOld").hide(); // Show the "Save" button
                $(".user-password").prop("disabled", false);
            });
        });

        $(document).ready(function () {
            // Initially, the submit button is disabled
            $("#passSave").prop("disabled", true);

            // Listen for changes in the input fields
            $("input.user-password").on("input", function () {
                // Check if there are any validation errors

                // Get the values of the password and confirm password fields
                var password = $("input[name='password']").val();
                var confirmPassword = $("input[name='password_confirmation']").val();

                // Check if the password and confirm password match
                var passwordsMatch = password === confirmPassword;

                // Enable or disable the submit button based on error status and password matching
                if (!passwordsMatch) {
                    $("#passSave").prop("disabled", true);
                } else {
                    $("#passSave").prop("disabled", false);
                }
            });

            // Form submission using AJAX
            $("#password-change-form").submit(function (event) {
                event.preventDefault(); // Prevent the default form submission

                // Get the form data
                var formData = $(this).serialize();

                // AJAX request to change the password
                $.ajax({
                    type: "POST",
                    url: "{{ route('user.password') }}", // Replace with your route for changing the password
                    data: formData,
                    success: function (response) {
                        // Handle success, e.g., show a success message
                        $(".messagePint").text(response.messageSuc);
                        $(".messagePint").text(response.messageInco).toggleClass("text-danger");
                        $("#passNew").hide();
                        $("#passSave").hide();
                        $("#passOld").show();
                    },
                    error: function (xhr, status, error) {
                        // Handle errors, e.g., show an error message
                        alert("The Confirm Password doesn't match!");
                    },
                });
            });
        });


    </script>



@endsection
