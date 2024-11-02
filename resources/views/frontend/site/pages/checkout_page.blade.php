@extends('frontend.layouts.master')

@section('title','Checkout page')

@section('style')
    <link href="{{ asset('assets/css/checkout.css') }}" rel="stylesheet">
    <style>
        #confirm {
            text-align: center;
            background-color: #f8f8f8;
            padding: 40px 15px;
        }
    </style>
@endsection


@section('content')
	<!-- start header top -->
	 @include('frontend.inc.top_header')
	<!-- end header top -->

	<!-- start first div of page -->
	<div id="page">


		<!-- start header -->
		 @include('frontend.inc.menu')
		<!-- end header -->

		<!-- start main -->
        <main class="">


            <div class="container margin_30">
                <div class="page_header">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Category</a></li>
                            <li>Page active</li>
                        </ul>
                </div>
                <h1>Sign In or Create an Account</h1>

            </div>
            <!-- /page_header -->
                    <div class="row">
                        <div style="color: green;margin-bottom: 20px;font-size: 22px" id="responseMessage"></div>

                        {{-- start signup --}}
                        <div class="col-lg-4 col-md-6">
                            <div class="step first">
                                <h3>1. User Info and Billing address</h3>
                            <ul class="nav nav-tabs" id="tab_checkout" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab_1" role="tab" aria-controls="tab_1" aria-selected="true">Register</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab_2" role="tab" aria-controls="tab_2" aria-selected="false">Login</a>
                              </li>
                            </ul>
                            @if (auth()->check() &&  auth()->user()->role->name == 'client')
                            <div class="container">

                                <div class="row justify-content-center">
                                    <div class="col-md-5">
                                        <div id="confirm">
                                            <div class="icon icon--order-success svg add_bottom_15">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                                                    <g fill="none" stroke="#8EC343" stroke-width="2">
                                                        <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                                        <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="tab-content checkout">

                                {{-- start register form --}}
                                <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">

                                    <form id="registerForm">

                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6 form-group pr-1">
                                            <input type="text" name="first_name" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="col-6 form-group pl-1">
                                            <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <div class="form-group">
                                        <input type="text" name="address" class="form-control" placeholder="Full Address">
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-6 form-group pl-1">
                                            <div class="custom-select-form">
                                                <select class="wide add_bottom_15" name="country" id="country">
                                                    <option value="" selected>Country</option>
                                                    <option value="Europe">Europe</option>
                                                    <option value="United states">United states</option>
                                                    <option value="Asia">Asia</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6 form-group pr-1">
                                            <input type="text" name="city" class="form-control" placeholder="City">
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <!-- /row -->
                                    <div class="form-group">
                                        <input type="text" name="mobile" class="form-control" placeholder="Telephone">
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                          <input type="submit" class="btn btn-primary btn_1">
                                    </div>


                                    <!-- /other_addr_c -->
                                    <hr>
                                  </form>
                                </div>
                                {{-- end register form --}}
                                <!-- /tab_1 -->
                              <div class="tab-pane fade" id="tab_2" role="tabpanel" aria-labelledby="tab_2" style="position: relative;">
                                 {{-- start notify --}}
                                 <div id="login_success_notify" style="display: none" class="container">

                                    <div class="row justify-content-center">
                                        <div class="col-md-5">
                                            <div id="confirm">
                                                <div class="icon icon--order-success svg add_bottom_15">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                                                        <g fill="none" stroke="#8EC343" stroke-width="2">
                                                            <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                                            <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                 {{-- end notify --}}
                                <form  id="loginForm">
                                  <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                                    </div>
                                      <div class="clearfix add_bottom_15">
                                        <div class="checkboxes float-start">
                                            <label class="container_check">Remember me
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        {{-- <div class="float-end"><a id="forgot" href="#0">Lost Password?</a></div> --}}
                                    </div>
                                      <div id="forgot_pw">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email_forgot" id="email_forgot" placeholder="Type your email">
                                        </div>
                                        <p>A new password will be sent shortly.</p>
                                        <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                                    </div>
                                    <hr>
                                      <input type="submit" class="btn_1 full-width" value="Login">
                                    </form>
                                </div>
                                <!-- /tab_2 -->
                            </div>
                            @endif

                            </div>
                            <!-- /step -->
                        </div>
                        {{-- end signup --}}

                        {{-- start payement methods --}}
                        <div class="col-lg-4 col-md-6">
                            <div class="step middle payments">
                                <h3>2. Payment and Shipping</h3>
                                    <ul>
                                        <li>
                                            <label class="container_radio">Credit Card<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
                                                <input type="radio" name="payment" checked>
                                                <span class="checkmark"></span>
                                                <span style="margin-left: 30px"><img width="200px" height="40px" src="{{ asset('assets/img/cards.webp') }}" alt=""></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_radio">Paypal<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
                                                <input type="radio" name="payment">
                                                <span class="checkmark"></span>
                                                <span style="margin-left: 60px"><img width="200px" height="40px" src="{{ asset('assets/img/paypal.webp') }}" alt=""></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_radio">Bank Transfer<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
                                                <input type="radio" name="payment">
                                                <span class="checkmark"></span>
                                                <span style="margin-left: 30px"><img width="150px" height="40px" src="{{ asset('assets/img/banque.png') }}" alt=""></span>
                                            </label>
                                        </li>
                                    </ul>
                                    <div class="payment_info d-none d-sm-block"><figure><img src="img/cards_all.svg" alt=""></figure>	<p>Sensibus reformidans interpretaris sit ne, nec errem nostrum et, te nec meliore philosophia. At vix quidam periculis. Solet tritani ad pri, no iisque definitiones sea.</p></div>

                                   {{--  <h6 class="pb-2">Shipping Method</h6> --}}


                               {{--  <ul>
                                        <li>
                                            <label class="container_radio">Standard shipping<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
                                                <input type="radio" name="shipping" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="container_radio">Express shipping<a href="#0" class="info" data-bs-toggle="modal" data-bs-target="#payments_method"></a>
                                                <input type="radio" name="shipping">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>

                                    </ul> --}}

                            </div>
                            <!-- /step -->

                        </div>
                        {{-- end payement methods --}}

                        {{-- start order summary --}}
                        <style>
                            .scrollable-box {
                                max-height: 330px; /* Set your desired height */
                                overflow-y: auto;
                                padding-right: 15px; /* Optional, to avoid content hiding behind the scrollbar */
                            }

                        </style>
                        <div class="col-lg-4 col-md-6">
                            <div class="step last">
                                <h3>3. Order Summary</h3>
                                <div class="box_general summary scrollable-box">
                                    <ul class="cart-items">
                                        <!-- Cart items will be injected here by JavaScript -->
                                    </ul>
                                    <ul>
                                        <li class="subtotal clearfix"><em><strong>Subtotal</strong></em> <span>$0.00</span></li>
                                        <li class="clearfix"><em><strong>Shipping</strong></em> <span>$0</span></li>
                                    </ul>
                                    <div class="total clearfix">TOTAL <span>$0.00</span></div>
                                    <div class="form-group">
                                        <label class="container_check">Register to the Newsletter.
                                          <input type="checkbox" checked>
                                          <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <a href="{{ route('confirm_page') }}" class="btn_1 full-width">Confirm and Pay</a>
                                </div>
                            <!-- /box_general -->
                            </div>
                            <!-- /step -->
                        </div>
                        {{-- end order summary --}}

                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </main>
		<!-- end main -->

@endsection

@section('script')
<script>
    $('#registerForm').on('submit', function(event) {
        event.preventDefault(); // Prevent page refresh

        console.table($(this).serialize());

        $.ajax({
            url: '/users/register_client',  // Set your route here
            type: 'POST',
            data: $(this).serialize(),
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            success: function(response) {
                if (response.status === 200) {
                    $('#responseMessage').text(response.message).css('color', 'green');
                    $('#registerForm')[0].reset(); // Clear the form on success
                     // Simulate form submission success
                    setTimeout(() => {
                        // Programmatically trigger the second tab
                        new bootstrap.Tab(document.querySelector('a[href="#tab_2"]')).show();
                    }, 1000);
                } else {
                    $('#responseMessage').text('Oops error occurred & Registration failed, can you Try again').css('color', 'red');
                }
            },
            error: function(xhr) {
                $('#responseMessage').text('An Server error occurred, please try later after 10 minut').css('color', 'red');
            }
        });
    });
</script>

<script>
    document.getElementById('loginForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        fetch('/users/login_client', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ email, password })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                $('#responseMessage').text(data.message).css('color', 'green'); // Successful login message
                $('#loginForm').css('display','none');
                $('#login_success_notify').css('display','block');
                // Optionally redirect to a protected page
                //window.location.href = "/dashboard";
            } else {
                $('#responseMessage').text(data.message).css('color', 'red'); // Show error message
            }
        })
        .catch(error => console.error('Error:', error));
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const cartContainer = document.querySelector('.box_general.summary .cart-items');
    const subtotalContainer = document.querySelector('.box_general.summary .subtotal');
    const totalContainer = document.querySelector('.box_general.summary .total span');

    // Retrieve and parse the shopping cart data from localStorage
    const cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];

    let subtotal = 0;

    // Clear any existing items in the container
    cartContainer.innerHTML = '';

    // Add each item from the cart to the HTML structure
    cart.forEach(item => {
        const itemTotal = item.quantity * item.price;
        subtotal += itemTotal;

        const itemElement = document.createElement('li');
        itemElement.classList.add('clearfix');
        itemElement.innerHTML = `<em>${item.quantity}x ${item.name}</em> <span>$${itemTotal.toFixed(2)}</span>`;
        cartContainer.appendChild(itemElement);
    });

    // Update subtotal and total
    subtotalContainer.innerHTML = `<strong>Subtotal</strong> <span>$${subtotal.toFixed(2)}</span>`;
    totalContainer.textContent = `$${subtotal.toFixed(2)}`;
});
</script>
@endsection
