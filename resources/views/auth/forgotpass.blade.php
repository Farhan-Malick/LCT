<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">

    <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/styles/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/styles/common.css') }}" />
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- Bootstrap icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Forgot-password</title>
</head>

<body>
    @include("auth.partials.newHeader")
    <section class="section-two" style="margin-top: 75px">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">Why can't you sign in?</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <center><strong>{{ $message }}</strong> <b class="text-primary"></center>
                        </div>
                        @endif
                        @if ($message = Session::get('danger'))
                        <div class="alert alert-danger">
                            <center><strong>{{ $message }}</strong></center>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>I've Forgotten My Password</strong>
                                </button>
                            </h2>

                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form action="{{ URL('Password-Reset/') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <small class="pb-3">Enter your account Email Address<br>
                                                {{-- Please ensure your 'Spam' filters do not block this mail.</small> --}}
                                            <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <small class="pb-3">Enter your new password.<br>
                                                {{-- Please ensure your 'Spam' filters do not block this mail.</small> --}}
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <button class="btn primary-btn my-3">Proceed with passwrod reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong> I don't know the email I registered with</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form action="">
                                        <small>Please provide as much information as possible to help us locate your
                                            account</small>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Your Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="name" name="name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email">Email Address<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="email" name="email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="phone">Primary Phone<span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control" id="phone" name="phone">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="event">Event<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="event" name="event">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="payment">Payment Method</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Credit or Debit Card
                                                    </label>
                                                    <div id="myDIV">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-3">
                                                                <label for="creditcard">Last 4 digits of card used <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="number" class="form-control"
                                                                    name="creditcard">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">PayPal</label>
                                                    <div id="paypal">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="paypalemail">PayPal Email Address<span
                                                                        class="text-danger">*</span></label>
                                                                <input type="email" class="form-control"
                                                                    placeholder="paypal@email.com" name="paypalemail">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="order">Order ID</label>
                                                <input type="number" class="form-control" name="order" id="order">
                                            </div>
                                        </div>
                                        <button class="btn primary-btn float-right mb-4 px-5 my-3">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include("auth.partials.footer")
    <script src="{{asset('newAssets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('newAssets/assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/tabs.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/popup.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/custom.js')}}"></script>
</body>

</html>
