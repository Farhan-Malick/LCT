
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
                <div class="col-lg-12 mb-3">
                    <div class="card card-stepper" style="border-radius: 10px;background-color: #f9f9f9">
                      <div class="card-body p-4">
            
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="d-flex flex-column">
                            <span class="lead fw-normal">Your Ticket Details</span>
                            <span class="text-muted small">by LAST CHANCE TICKET</span>
                          </div>
                          <div>
                              <a href="{{URL('/')}}" class="">
                                  <h3 style="font-family: Georgia, 'Times New Roman', Times, serif">LAST CHANCE TICKET</h3>
                                  {{-- <img src="{{asset('assets/images/logo1.png')}}" width="30px" height="40px" alt=""> --}}
                              </a>
                            {{-- <button class="btn btn-outline-primary" type="button">Track order details</button> --}}
                            {{-- <span class="bg-danger text-white p-2" style=" border-radius: 30%" type="">{{ get_when($events->event_date) }}</span> --}}
                          </div>
                        </div>
                        <hr class="my-4">
            
                        <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                          <span class="dot"></span>
                          <hr class="flex-fill track-line"><span class="dot"></span>
                          <hr class="flex-fill track-line"><span class="dot"></span>
                          <hr class="flex-fill track-line"><span class="dot"></span>
                          <hr class="flex-fill track-line"><span
                            class="d-flex justify-content-center align-items-center big-dot dot">
                            <i class="fa fa-check text-white"></i></span>
                        </div>
                        <div class="row d-flex flex-row justify-content-between align-items-center">
                          
                          <div class="col-md-2 d-flex flex-column align-items-start"><span><b>EVENT : </b> <br>{{$tickets->event->event_name}}</span></div>
                          <div class="col-md-2 d-flex flex-column "><span></span><b>TIME :</b>{{$tickets->event->start_time}} - {{$tickets->event->end_time}}<span></div>
                          <div class="col-md-2 d-flex  flex-column  "><span><b>DATE : </b><br>({{$tickets->event->event_date}})</span></div>
                          <div class="col-md-2 d-flex flex-column "><span><b>VENUE : </b><br>{{$tickets->event->venue_name}} , {{$tickets->event->location}}</span></div>
                          <div class="col-md-2 d-flex flex-column "><span><b>CATEGORY : </b><br>@if ($tickets->categories == null)
                              {{$tickets->type_cat}}
                              @else
                              {{$tickets->categories}}
                          @endif</span></div>
                          <div class="col-md-2 d-flex flex-column "><span><b>SECTION : ROW</b><br>{{$tickets->section}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $tickets->row }}</span></div>

                          {{-- <div class="d-flex flex-column align-items-end"><span></span></div> --}}
                        </div><br>
                        <div class="row d-flex flex-row justify-content-between align-items-center">
                          <div class="col-md-2 d-flex flex-column "><span><b>SEATING AREA :</b><br>{{ $tickets->seated_area }}</span></div>
                          <div class="col-md-2 d-flex flex-column "><span><b>TICKET : </b><br>{{ $tickets->ticket_type }}</span></div>
                          <div class="col-md-2 d-flex flex-column "><span id="noticket"><b>NO.OF TICKETS : </b><br>{{ $tickets->quantity }}</span></div>
                          <div class="col-md-2 d-flex flex-column "><span><b>PER-TICKET :</b><br>${{ $tickets->price }}</span></div>
                          <div class="col-md-2 d-flex flex-column "><span><b>Service Charges : </b><br>{{$webCharge}}</span></div>
                          <div class="col-md-2 d-flex flex-column "><span><b>TOTAL TICKET PRICE:</b><br>${{$price}}</span></div>
                          <input type="hidden" id="pricetotal" value="{{ $tickets->price }}" name="price">
                          {{-- <div class="d-flex flex-column align-items-end"><span></span></div> --}}
                        </div><br>
                        <div class="row d-flex flex-row justify-content-between align-items-center">
                            <div class="col-md-12 d-flex flex-column "><span><b>YOU WILL RECEIVE:</b><br>${{$grand_total}}</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
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
                                <form action="{{route('seller.complete_ticket.save',$tickets->id)}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example" name="currency" required>
                                            @foreach($currencies as $currency)
                                            <option value="{{$currency->id}}" @if($ticketCurrency->id === $currency->id) @php echo "selected='true'" @endphp @endif>{{$currency->currency_type}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="" class="mb-4">Amount per ticket</label>
                                        <div class="input-group mb-4">
                                            <span class="input-group-text">$</span>
                                            <input type="text" id="price-field" name="price" class="form-control"
                                                aria-label="Amount (to the nearest dollar)" value = "{{$tickets->price}}">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                        @if($minValue != '' && $maxValue != '')<small >Tickets in this area are currently selling between <strong>{{$ticketCurrency->currency_type}} {{ $minValue }} and
                                            {{$ticketCurrency->currency_type}}
                                                {{ $maxValue }}</strong> per ticket. In order to sell your tickets quickly we
                                            suggest you sell
                                            your tickets at <strong>{{$ticketCurrency->currency_type}} {{ $minValue }}</strong> per ticket</small>@endif
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
        const quantity = <?= $tickets->quantity ?>;
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
