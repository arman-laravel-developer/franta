<div class="modal fade" id="loginModal" tabindex="1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="account-form-area">
                    <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                    <h3 class="title">Welcome Back</h3>
                    <div class="account-form-wrapper">
                        <form action="{{route('login.check')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Email <sup>*</sup></label>
                                <input type="email" name="email" id="login_name" placeholder="Enter your Email">
                            </div>
                            <div class="form-group">
                                <label>password <sup>*</sup></label>
                                <input type="password" name="password" id="login_pass" placeholder="password">
                            </div>
                            <div class="d-flex flex-wrap justify-content-between mt-2">
                                <div class="custom-checkbox">
                                    <input type="checkbox" name="id-1" id="id-1" checked>
                                    <label for="id-1">Remember Password</label>
                                    <span class="checkbox"></span>
                                </div>
                                <a href="#0" class="link">Forgot Password?</a>
                            </div>
                            <div class="form-group text-center mt-5">
                                <button class="cmn-btn">log in</button>
                            </div>
                        </form>
                        <p class="text-center mt-4">Don't have an account? <a href="#0" data-bs-toggle="modal" data-bs-target="#signupModal"> Sign Up Now</a></p>
                        <div class="divider">
                            <span>or</span>
                        </div>
                        <ul class="social-link-list">
                            <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sign Up modal -->
<div class="modal fade" id="signupModal" tabindex="1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <div class="account-form-area">
                    <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                    <h3 class="title">Open Free Account</h3>
                    <div class="account-form-wrapper">
                        <form action="{{route('new.user')}}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
                            @csrf
                            <div class="form-group">
                                <label>Full Name <sup>*</sup></label>
                                <input type="text" name="name" id="signup_name" placeholder="Enter your Name">
                            </div>
                            <div class="form-group">
                                <label>Mobile <sup>*</sup></label>
                                <input type="tel" name="mobile" id="signup_mobile" pattern="[+0-9]{10,15}" autocomplete="off" placeholder="Enter your Mobile">
                            </div>
                            <div class="form-group">
                                <label>Email <sup>*</sup></label>
                                <input type="email" name="email" id="signup_email" autocomplete="off" placeholder="Enter your Email">
                                <div class="error-message"></div>
                            </div>
                            <div class="form-group">
                                <label>password <sup>*</sup></label>
                                <input type="password" name="password" id="signup_pass" autocomplete="off" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>confirm password <sup>*</sup></label>
                                <input type="password" name="password_confirmation" id="signup_re-pass" autocomplete="off" placeholder="Confirm Password">
                            </div>
                            <div class="d-flex flex-wrap mt-2">
                                <div class="custom-checkbox">
                                    <input type="checkbox" name="agree" id="id-2" value="1" checked>
                                    <label for="id-2">I agree to the</label>
                                    <span class="checkbox"></span>
                                </div>
                                <a href="#0" class="link ml-1">Terms, Privacy Policy and Fees</a>
                            </div>
                            <div class="form-group text-center mt-5">
                                <button class="cmn-btn" type="submit">Sign up</button>
                            </div>
                        </form>
                        <p class="text-center mt-4"> Already have an account? <a href="#0" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></p>
                        <div class="divider">
                            <span>or</span>
                        </div>
                        <ul class="social-link-list">
                            <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Clear and focus the email input when the page loads
    document.addEventListener('DOMContentLoaded', function() {
        var emailInput = document.getElementById('signup_email');
        emailInput.value = ''; // Clear the input
        emailInput.focus();    // Focus the input
    });
</script>
<script>
    function validateForm() {
        var emailInput = document.getElementById("signup_email");
        var emailError = document.querySelector("#signup_email + .error-message");

        // Clear previous error messages
        emailError.innerHTML = "";

        // Get the email value
        var email = emailInput.value;

        // Perform an AJAX request to check email uniqueness
        $.ajax({
            url: "{{ route('checkEmailUnique') }}",
            type: "POST",
            data: { email: email, _token: "{{ csrf_token() }}" },
            success: function(response) {
                if (!response.isUnique) {
                    appendError(emailError, response.message);
                }
            },
            error: function(error) {
                console.error(error);
            }
        });

        // Rest of the form validation logic
        // ...

        return true;
    }

    function appendError(element, message) {
        var errorDiv = document.createElement("div");
        errorDiv.classList.add("alert", "alert-danger");
        errorDiv.textContent = message;
        element.appendChild(errorDiv);
    }
</script>


