<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset("assets/styles/payments.css") }}">
    <link rel="stylesheet" href="{{asset('assets/styles/sellticket.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/styles/common.css') }}" />
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- Bootstrap icons CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
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
    </style>
</head>

<body>
@include("auth.partials.newHeader")
<section class="" style="background-color: #eee;">
    <div class="container py-5 ">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 mb-3">
          <div class="card card-stepper" style="border-radius: 10px;">
            <div class="card-body p-4">
  
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex flex-column">
                  <span class="lead fw-normal">Your Order Details</span>
                  <span class="text-muted small">by LAST CHANCE TICKET</span>
                </div>
                <div>
                    <a href="{{URL('/')}}" class="logo">
                        <img src="{{asset('assets/images/logo1.png')}}" width="30px" height="40px" alt="">
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
              <div class="d-flex flex-row justify-content-between align-items-center">
                <div class="d-flex flex-column align-items-start"><span><b>EVENT : </b> <br>{{ $events->title }}</span>
                </div>
                <div class="d-flex flex-column justify-content-center"><span></span><b>TIME :</b>{{ $events->start_time }}-{{ $events->end_time }}<span></div>
                <div class="d-flex flex-column justify-content-center align-items-center"><span><b>DATE : </b><br>{{ $events->start_date }}</span></div>
                <div class="d-flex flex-column align-items-center"><span><b>VENUE NAME : </b><br>{{ $events->vTitle }}</span></div>
                <div class="d-flex flex-column align-items-center"><span><b>SECTION : </b><br>{{ $tickets->sections }}</span></div>
                <div class="d-flex flex-column align-items-center"><span><b>ROW NO : </b><br>{{ $tickets->rows }}</span></div>
                <div class="d-flex flex-column align-items-center"><span id="noticket"><b>AVAILABLE TICKETS : </b><br>{{ $tickets->quantity }}</span></div>
                <div class="d-flex flex-column align-items-center"><span><b>PER-TICKET PRICE : </b><br>${{ $tickets->price }}</span></div>
                <input type="hidden" id="pricetotal" value="{{ $tickets->price }}" name="price">
                {{-- <div class="d-flex flex-column align-items-end"><span></span></div> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
            @if ($message = Session::get('message'))
                    <div class="alert alert-success alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
            @endif
            <form method="post" action="{{ route('buyer.ticket.purchase', $tickets->id) }}">
                @csrf
                <div class="card p-3 shadow-sm br-10 mb-3">
                  <div class="row">
                    <div class="col-md-4 ">
                        <div class="confirm d-flex justify-content-between align-items-center " style="margin-top: 30px;">
                            <h5 class="fw-700 mb-5">Please confirm how many tickets you would like to purchase</h5>
                            {{-- <div class="social-link">
                                <i class="bi bi-facebook me-2"></i>
                                <i class="bi bi-twitter me-2"></i>
                                <i class="bi bi-link-45deg"></i>
                            </div> --}}
                        </div>
                            <div class="number-of-tickets mb-5">
                                <h6>Number of tickets</h6>
                                <select class="form-select" id="#ticket" name="quantity" required>
                                    <option disabled>Select Number of Tickets</option>
                                    @for ($i = 1; $i <= $tickets->quantity; $i++)
                                        <option value="{{ $i }}">{{ $i }} Tickets</option>
                                    @endfor
                                </select>
                            </div>
                            {{-- <div>
                                <p>Pricing = </p>
                            </div> --}}
                            <div class="card p-3 shadow-sm br-10 mb-5">
                                <div class="card-header primary-bg text-light">
                                    <h4 class="fw-700 m-0">About Your Tickets</h4>
                                </div>
                                <div class="card-body">
                                    <p> <i class="bi bi-hand-thumbs-up-fill me-2 primary-text"></i>Unrestricted view (what's
                                        this?)</p>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-9 mb-5">
                                <div class="my-ticket  position-relative">
                                    <div class="my_ticket_title p-5">
                                        {{-- <h4 class="fw-700">{{$tickets->event->title}}({{$tickets->title}})
                                        </h4> --}}
                                        <h4 class="fw-700 mb-2"><b>EVENT :</b> {{ $tickets->event_name }}, {{ $events->title }}</h4>
                                        {{-- <p class="m-0">{{$tickets->event->start_time}}<br>
                                            {{$tickets->event->start_date}} </p> --}}
                                        <p class="m-0"><b class="text-dark">TIME :</b> {{ $events->start_time }} To {{ $events->end_time }}</p>
                                        <p><b class="text-dark">DATE :</b>  {{ $events->start_date }} </p>
                                        <p><b class="text-dark">Event Venue :</b>  {{ $events->vTitle }}</p>
                                        <p><b class="text-dark">Notes : </b>  <i class="bi bi-hand-thumbs-up-fill me-2 primary-text"></i>Unrestricted view</p>
                                        <p></p>
                                        <span><i class="bi bi-upc"></i></span>
                                    </div>
                                    <div class="border-right-top"></div>
                                    <div class="border-right-bottom"></div>
                                    <div class="border-left-top"></div>
                                    <div class="border-left-bottom"></div>
                                </div>
                            </div>
                            <div
                                class="col-lg-3 mb-5 text-center d-flex flex-column ticket-left position-relative justify-content-center">
                                <h4 class="fw-700">ADMIT 1</h4>
                                {{-- <span>Section</span>
                                <span class="text-success fw-700">{{$tickets->section}}</span>
                                <span>Row</span>
                                <span class="text-success fw-700">{{$tickets->row}}</span> --}}
                                <span>Section</span>
                                <span class="text-success fw-700">{{ $tickets->sections }}</span>
                                <span>Row</span>
                                <span class="text-success fw-700">{{ $tickets->rows }}</span>
                                <div class="border-right-top"></div>
                                <div class="border-right-bottom"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Finish & Check your Ticket</button>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </section>
    <!-- progress bar starts here  -->
    <section class="section-two">
        <div class="container-fluid mx-0">
            <div class="row px-0">
                <div class="col-lg-12 px-0">
                    {{-- <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">25% Complete</div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- main body starts here  -->
    {{-- <section class="section-three">
        <div class="container-fluid my-3">
            <div class="row px-0 mx-0">
                <div class="col-lg-3">
                    <div class="card p-3 shadow-sm br-10 mb-3">
                        <div class="card-header primary-bg text-light">
                            <h4 class="fw-700 m-0">Your Order Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="ticket-details">
                             
                                <p>{{ $events->event_name }}
                                    <span class="bg-danger text-light  br-10 px-3">{{ get_when($events->event_date) }}</span>
                                </p>
                             
                                <p class="fw-600 m-0">{{ $events->start_time }} to {{ $events->end_time }} <br>
                                    {{ $events->event_date }}
                                </p>
                                <p>{{ $events->venue_name }}</p>
                                <p><span class="bg-secondary text-light p-1 br-10">Section:{{ $tickets->sections }}</span> <span
                                        class="bg-secondary text-light p-1 br-10">row:{{ $tickets->rows }}</span></p>
                            </div>
                            <div class="tickets-details d-sm-flex d-block justify-content-between">
                                <p>Available Tickets</p>
                                <p id="noticket">{{ $tickets->quantity }}</p>
                            </div>
                            <div class="row tickets-details d-sm-flex d-block">
                                <div class="col-md-6">
                                    <p>Per Ticket Price</p>
                                </div>  
                                <div class="col-md-6">
                                    <span style="float: right"> $<span id="priceticket">{{ $tickets->price }} </span>
                                    </span>
                                </div>
                                
                                <input type="hidden" id="pricetotal" value="{{ $tickets->price }}" name="price">
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 shadow-sm br-10 mb-3">
                        <div class="card-header primary-bg text-light">
                            <h4 class="fw-700 m-0">About Your Tickets</h4>
                        </div>
                        <div class="card-body">
                            <p> <i class="bi bi-hand-thumbs-up-fill me-2 primary-text"></i>Unrestricted view (what's
                                this?)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    @if ($message = Session::get('message'))
                            <div class="alert alert-success alert-block">
                                <strong>{{ $message }}</strong>
                            </div>
					@endif
                    <form method="post" action="{{ route('buyer.ticket.purchase', $tickets->id) }}">
                        @csrf
                        <div class="card p-3 shadow-sm br-10 mb-3">
                            <div class="confirm d-flex justify-content-between align-items-center">
                                <h5 class="fw-700">Please confirm how many tickets you would like to purchase</h5>
                                <div class="social-link">
                                    <i class="bi bi-facebook me-2"></i>
                                    <i class="bi bi-twitter me-2"></i>
                                    <i class="bi bi-link-45deg"></i>
                                </div>
                            </div>
                            <div class="number-of-tickets ">
                                <h6>Number of tickets</h6>
                                    <select class="form-select" id="#ticket" name="quantity" required>
                                        <option disabled>Select Number of Tickets</option>
                                        @for ($i = 1; $i <= $tickets->quantity; $i++)
                                            <option value="{{ $i }}">{{ $i }} Tickets</option>
                                        @endfor
                                    </select>
                                </div>
                            <div class="row justify-content-between align-items-center">
                                <div class="col-lg-9">
                                    <div class="my-ticket my-4  position-relative">
                                        <div class="my_ticket_title p-3">
                                            <h4 class="fw-700">{{ $tickets->event_name }}, {{ $events->title }}</h4>
                                            <p class="m-0">{{ $events->start_time }}<br>
                                            {{ $events->event_date }} </p>
                                            <p>{{ $tickets->event_venue }}</p>
                                            <p>Notes:</p>
                                            <p> <i class="bi bi-hand-thumbs-up-fill me-2 primary-text"></i>Unrestricted view
                                                (what's this?)</p>
                                            <span><i class="bi bi-upc"></i></span>
                                        </div>
                                        <div class="border-right-top"></div>
                                        <div class="border-right-bottom"></div>
                                        <div class="border-left-top"></div>
                                        <div class="border-left-bottom"></div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-3 text-center d-flex flex-column ticket-left position-relative justify-content-center">
                                    <h4 class="fw-700">ADMIT 1</h4>
                                    <span>Section</span>
                                    <span class="text-success fw-700">{{ $tickets->sections }}</span>
                                    <span>Row</span>
                                    <span class="text-success fw-700">{{ $tickets->rows }}</span>
                                    <div class="border-right-top"></div>
                                    <div class="border-right-bottom"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Finish & Check your Ticket</button>
                                </div>
                            </div>]
                        </div>
                    </form>
                </div>
            </div>
    </section> --}}

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