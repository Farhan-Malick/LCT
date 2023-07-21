<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('B_assets/style.css') }}" rel="stylesheet">
    <link href="{{ asset('B_assets/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset(" assets/styles/payments.css") }}">
    <link rel="stylesheet" href="{{asset('assets/styles/sellticket.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/styles/common.css') }}" />
    <!--<link rel="stylesheet" href="{{asset('newAssets/assets/css/fontawesome.css')}}">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('newAssets/assets/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/animate.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

    <!-- Bootstrap icons CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    {{-- sweet alert --}}


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>

    <title>Last Chance Ticket - Buyer</title>
    <style>
        .track-line {
            height: 2px !important;
            background-color: #61c3e3;
            opacity: 1;
        }

        .dot {
            height: 10px;
            width: 10px;
            margin-left: 3px;
            margin-right: 3px;
            margin-top: 0px;
            background-color: #61c3e3;
            border-radius: 50%;
            display: inline-block
        }

        .big-dot {
            height: 25px;
            width: 25px;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 0px;
            background-color: #61c3e3;
            border-radius: 50%;
            display: inline-block;
        }

        .big-dot i {
            font-size: 12px;
        }

        .card-stepper {
            z-index: 0
        }

        .countdown {
            font-size: 40px;
            font-weight: bold;
            color: #ffffff;
            /* margin-left: 200px; */
            margin-top: 40px;
        }

        .countdown span {
            display: inline-block;
            padding: 0 10px;
            background-color: #6b5d5d;
            border-radius: 10px;
        }
        .text {
            display: inline-block;
            font-size: 11px;
            margin-top: 30px;
            margin-left: 25px;
            color: black;
            padding: 0 2px;
            /* background-color: black; */
            border-radius: 10px;
        }


        #text {
            font-size: 20px
        }
    </style>
</head>

<body>
    @include("auth.partials.newHeader")


    <div class="event-dt-block p-80">

        <div class="container">
            <div class="row">
                <div class="text-center">
                    <div class="countdown">
                        <span id="minutes">10</span>
                        <span>:</span>
                        <span id="seconds">00</span>
                        <strong class="text">left to complete purchase..!</strong>
                    </div>

                </div>
            </div>

            <div class="row">
                @if(session('message'))
                    <script>
                        Swal.fire({
                        icon: 'success',
                        title: '{{ session('message') }}',
                        showConfirmButton: false,
                        timer: 5000
                    });
                </script>
                @endif
                @if(session('ticketSold'))
                <script>
                    Swal.fire({
                    icon: 'warning',
                    title: '{{ session('ticketSold') }}',
                    showConfirmButton: false,
                    timer: 5000
                });
                </script>
                @endif
                @if(session('NotEnough'))
                <script>
                    Swal.fire({
                    icon: 'warning',
                    title: '{{ session('NotEnough') }}',
                    showConfirmButton: false,
                    timer: 5000
                });
                </script>
                @endif
                @if (Session::has('ticketSold'))
                <div class="alert alert-warning text-center mt-5">
                    <p class="text-dark" style="font-size: 17px">{{ Session::get('ticketSold') }}</p>
                </div>
                @endif
                @if (Session::has('NotEnough'))
                <div class="alert alert-warning text-center mt-5">
                    <p class="text-dark" style="font-size: 15px">{{ Session::get('NotEnough') }}</p>
                </div>
                @endif


                <div class="col-lg-4 ">
                    <div class="main-card order-summary">
                        <div class="bp-title">
                            <h4>Order Summary</h4>
                        </div>
                        <div class="order-summary-content p_30">
                            <div class="event-order-dt">
                                <div class="event-thumbnail-img">
                                    <img src="{{asset('assets/images/t1.webp')}}" class="" alt="img">
                                </div>
                                <div class="event-order-dt-content">
                                    <h5>{{ $events->event_name }}</h5>
                                    {{-- <div class=""><b>Date : {{ $events->event_date }}</b></div> --}}
                                    <div class=""><b>Date: {{ date('d-m-Y', strtotime($events->event_date)) }}</b></div>
                                    <div class=""><b>Event Time : {{ $events->start_time }} - {{ $events->end_time
                                            }}</b></div>
                                    <div class=""><b>Ticket Type : {{ $tickets->ticket_type }}</b></div>
                                </div>
                            </div>
                            <div class="order-total-block">
                                <div class="order-total-dt">
                                   <div class="row">
                                    <div class="col-md-6">
                                        <div class="order-text">Venue</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="order-number">{{ $events->vTitle }}</div>

                                    </div>
                                   </div>
                                </div>
                                <div class="order-total-dt">
                                    <div class="order-text">Category</div>
                                    <div class="order-number">{{$tickets->type_cat}}</div>
                                </div>
                                <div class="order-total-dt">
                                    <div class="order-text">Section</div>
                                    <div class="order-number">{{$tickets->type_sec}}</div>
                                </div>
                                <div class="order-total-dt">
                                    <div class="order-text">Row</div>
                                    <div class="order-number">{{$tickets->type_row}}</div>
                                </div>
                                <div class="order-total-dt">
                                    <div class="order-text">Seating Area</div>
                                    <div class="order-number">{{ $tickets->seated_area }}</div>
                                </div>
                                <div class="order-total-dt">
                                    <div class="order-text">Per-Ticket</div>
                                    <div class="order-number">${{ $tickets->price }}</div>
                                </div>
                                <div class="order-total-dt">
                                    <div class="order-text">Total Tickets</div>
                                    <div class="order-number"><small>x</small>{{ $quantity ?? '' }}</div>
                                </div>
                                <div class="order-total-dt">
                                    <div class="order-text">Total Tickets Price</div>
                                    <div class="order-number">${{$ticketPrice ?? ''}}</div>
                                </div>

                                <div class="order-total-dt">
                                    <div class="order-text">Shipping and Handling Fee</div>
                                    @if ($tickets->ticket_type === "Paper-Ticket")
                                    <div class="order-number">+ ${{$shipping_charges }}</div>
                                    @else
                                    <div class="order-number">$0.00</div>
                                    @endif
                                </div>
                                <div class="order-total-dt">
                                    <div class="order-text">Service Charges</div>
                                    <div class="order-number">+ ${{$percentageForBuyer ?? ''}}</div>
                                </div>
                                <div class="divider-line"></div>
                                <div class="order-total-dt">
                                    <div class="order-text" style="font-size: 18px"><b>Total</b></div>
                                    <div class="order-number ttl-clr" style="font-size: 18px;"><b>${{ $grand_total2 ??
                                            ''}}</b></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 ">

                    <div class="checkout-block">
                        <div class="row">
                            <div class="col-md-12 ">

                                <div class="card" style="padding: 13px;">
                                    <div class="panel-heading">
                                        <div class="row text-center">
                                            {{-- <h3 class="panel-heading">Payment Details</h3> --}}
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="">
                                            <h4 class="">Payment Details </h4>
                                            <hr>
                                        </div>
                                        <div class="mt-4 mb-3">
                                            <h4>Total Payable Amount : ${{ $grand_total2 ?? '' }}</h4>
                                        </div>
                                        <form method="post"
                                            action="{{ route('payment.checkout.finalize',
                           ['eventlisting_id' => $eventlisting_id ?? '','ticketid' => $ticket_id ?? '', 'sellerid' => $seller_id ?? ''])}} "
                                            role="form" method="post" class="validation" data-cc-on-file="false"
                                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                            @csrf
                                            <input type="hidden" name="ticketid" value="{{ $ticket_id }}">
                                            <input type="hidden" name="country_id" value="{{ $country }}">
                                            <input type="hidden" name="quantity" value="{{ $quantity }}">
                                            <input type="hidden" name="shipingCharges" value="{{ $shipping_charges }}">

                                            <div class='form-row row'>
                                                <div class='col-xs-12 form-group required p-4'>
                                                    <label class='control-label'>Name on Card</label> <input
                                                        class='form-control h_50' style="outline:thick" size='4'
                                                        type='text'>
                                                </div>
                                            </div>
                                            <div class='form-row row'>
                                                <div class='col-xs-12 form-group  required p-4'>
                                                    <label class='control-label'>Card Number</label> <input
                                                        autocomplete='off' class='form-control card-num h_50' size='20'
                                                        type='text'>
                                                </div>
                                            </div>
                                            <div class='form-row row'>
                                                <div class='col-xs-12 col-md-4 form-group cvc required p-4'>
                                                    <label class='control-label'>CVC</label>
                                                    <input autocomplete='off' class='form-control card-cvc h_50'
                                                        placeholder='e.g 415' size='4' type='text'>
                                                </div>
                                                <div class='col-xs-12 col-md-4 form-group expiration required p-4'>
                                                    <label class='control-label'>Expiration Month</label> <input
                                                        class='form-control card-expiry-month h_50' placeholder='MM'
                                                        size='2' type='text'>
                                                </div>
                                                <div class='col-xs-12 col-md-4 form-group expiration required p-4'>
                                                    <label class='control-label'>Expiration Year</label> <input
                                                        class='form-control card-expiry-year h_50' placeholder='YYYY'
                                                        size='4' type='text'>
                                                </div>
                                                <div class='col-lg-12 form-group p-4'>
                                                    <label class="m-2 "><input style="" class="" type="checkbox" name=""
                                                            value="" id="" required>&nbsp; I agree with the LCT Terms &
                                                        Conditions</label>

                                                </div>
                                            </div>
                                            <div class='form-row row'>
                                                <div class='col-md-12 hide error form-group'>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 mt-4">
                                                    <button type="submit" id="submit_button"
                                                        class=" main-btn btn-hover h_50 w-100 ">Pay
                                                        ${{$grand_total2}}</button>
                                                </div>
                                            </div>
                                            {{-- <button type="submit" class="btn btn-primary">Finish & Check your
                                                Ticket</button> --}}
                                            {{-- <a class="btn btn-primary"
                                                href="{{ route('buyer.ticket.proceedToCheckout',
                                      ['eventlisting_id' => $tickets->eventlisting_id,'ticketid' => $tickets->id, 'sellerid' => $tickets->user_id]) }}">
                                                Proceed to checkout
                                            </a> --}}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    @include("auth.partials.footer")

    <script src="{{asset('newAssets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"
        integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('newAssets/assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/tabs.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/popup.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/custom.js')}}"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script>
        var sellerCountry = "<?php echo $tickets->country ?>";
$("#country_id").on('change', function (e) {
    var countrySelected = $(this).val();
    if(sellerCountry !== countrySelected){
        $("#shipment-charges").html("<input type='hidden' value='50' name='shipingCharges'><span><b>INTERNATIONAL SHIPMENT CHARGES :</b><br>$50</span>")
    }else{
        $("#shipment-charges").html("<input type='hidden' value='20' name='shipingCharges'><span><b>LOCAL SHIPMENT CHARGES :</b><br>$20</span>")
    }
});

$(function() {
    var $form         = $(".validation");
  $('form.validation').bind('submit', function(e) {
    var $form         = $(".validation"),
        inputVal = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputVal),
        $errorStatus = $form.find('div.error'),
        valid         = true;
        $errorStatus.addClass('hide');

        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorStatus.removeClass('hide');
        e.preventDefault();
      }
    });

    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-num').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeHandleResponse);
    }

  });

  function stripeHandleResponse(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }

});
    </script>


    {{-- for timer --}}


    <script>
        document.addEventListener("DOMContentLoaded", function() {
        var minutesElement = document.getElementById("minutes");
        var secondsElement = document.getElementById("seconds");

        var startTime = sessionStorage.getItem("startTime");
        var countdownDuration = 600; // Total time in seconds (10 minutes)
        var extendTimeShown = sessionStorage.getItem("extendTimeShown");

        if (startTime) {
            var currentTime = Math.floor(Date.now() / 1000);
            var elapsedTime = currentTime - startTime;
            countdownDuration -= elapsedTime;

            if (countdownDuration <= 0) {
            // Countdown is already over
            countdownDuration = 0;
            }
        } else {
            startTime = Math.floor(Date.now() / 1000);
            sessionStorage.setItem("startTime", startTime);
        }

        function updateCountdown() {
            var minutes = Math.floor(countdownDuration / 60);
            var seconds = countdownDuration % 60;

            // Add leading zero if minutes or seconds are less than 10
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            minutesElement.innerText = minutes;
            secondsElement.innerText = seconds;

            if (countdownDuration <= 0) {
            // Countdown is over, perform any action you need here

            // Clear the sessionStorage when countdown is completed
            sessionStorage.removeItem("startTime");

            clearInterval(countdownInterval);

            // Show SweetAlert and redirect to specified route
            showTimeUpAlert();
            } else if (countdownDuration === 60 && !extendTimeShown) {
            // Remaining time is 1 minute and extendTimeShown is not set
            showSweetAlert();
            } else {
            countdownDuration--; // Decrement the countdown duration
            }
        }

        // Call updateCountdown every second
        var countdownInterval = setInterval(updateCountdown, 1000);

        function showSweetAlert() {
            Swal.fire({
            title: "Remaining time is 1 minute",
            text: "Do you want to extend the time by 1 minute?",
            icon: "question",
            showCancelButton: true,
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            }).then(function(result) {
            if (result.isConfirmed) {
                // User clicked on "Yes", extend the countdown duration by 1 minute
                countdownDuration += 60;
                sessionStorage.setItem("startTime", Math.floor(Date.now() / 1000)); // Update the start time
                sessionStorage.setItem("extendTimeShown", "true"); // Set extendTimeShown in sessionStorage
                extendTimeShown = true;

                // Restart the countdown
                clearInterval(countdownInterval);
                countdownInterval = setInterval(updateCountdown, 1000);
            } else {
                // User clicked on "No", redirect to the specified route
                window.location.href = "/";
            }
            });
        }

        function showTimeUpAlert() {
            Swal.fire({
            title: "Oops! Your time is up",
            text: "Redirecting to the homepage...",
            icon: "error",
            timer: 3000, // Display the alert for 3 seconds
            showConfirmButton: false,
            timerProgressBar: true,
            willClose: function() {
                // Redirect to the homepage
                window.location.href = "/";
            }
            });
        }

        // Check if remaining time is less than or equal to 1 minute and extendTimeShown is not set
        if (countdownDuration <= 60 && !extendTimeShown) {
            showSweetAlert();
        }
        });


    </script>
</body>

</html>
