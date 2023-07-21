
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <!-- Bootstrap core CSS -->
    <link href="{{asset('newAssets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Additional CSS Files -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}" /> --}}
    <link rel="stylesheet" href="{{asset('assets/styles/common.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/sellticket.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <title>Set Price</title>
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
    </style>
</head>

<body>
    <?php //foreach($currencies as $currency){ print_r($currency->id); } exit; ?>
    <?php //echo $maxValue; echo $minValue; ?>
    @include("auth.partials.darkheader")
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
          <span class="dot"></span>
          <div class="dots">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
        @if ($message = Session::get('msg'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif
    <section class="section-two" style="margin-top: 100px">
        <div class="container my-4">
           
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="p-5 mb-3 "  style="background-color: #f9f9f9">
                        <div class="row">
                            <div class="col-lg-12" >
                                <h4 class="fw-700 mb-3">Set Your Price</h4>
                                <p>
                                    <i class="bi bi-info-circle-fill"></i>
                                    Choose the currency in which you would like to be paid.
                                </p>
                            </div>
                            <div class="col-md-8">
                                <form action="{{URL('/dashboard/update-Price',$active_tickets->id)}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example" name="currency" required>
                                            <option value="$" >$</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="" class="mb-4">Amount per ticket</label>
                                        <div class="input-group mb-4">
                                            <span class="input-group-text">$</span>
                                            <input type="text" id="price-field" name="price" class="form-control"
                                                aria-label="Amount (to the nearest dollar)" value = "{{$active_tickets->price}}">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                      
                                    </div>
                                    <button class="btn primary-btn w-100 " style="margin-top: 22px"
                                        type="submit"><strong>CONTINUE</strong></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    @include("auth.partials.footer")
    <script src="{{asset('newAssets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('newAssets/assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/tabs.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/popup.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/custom.js')}}"></script>
    <script>
        const quantity = <?= $active_tickets->quantity ?>;
        $("#price-field").on('change', (e) => {
            var price = e.target.value;
            price = price * quantity;
            divide = price / 100;
            percentage = divide * 15;
            grand_total = price - percentage;

            $(".price").html(price.toFixed(2));
            $(".percentage").html(percentage.toFixed(2));
            $(".grandTotal").html(grand_total.toFixed(2));
        });
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
