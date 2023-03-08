<!doctype html>
<html lang="en">

<head>
    <!-- placeholder="" Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <title>Ticket Location Address</title>
</head>
<body style="background-color: #f9f9f9">
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
      <div class="reservation-form" style="background-color: #f9f9f9">
        <div class="container">
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
                          <div class="col-md-2 d-flex flex-column "><span><b>CATEGORY : </b><br>{{$tickets->type_cat}}</span></div>
                          <div class="col-md-2 d-flex flex-column "><span><b>SECTION : ROW</b><br>{{$tickets->type_sec}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $tickets->type_row }}</span></div>

                          {{-- <div class="d-flex flex-column align-items-end"><span></span></div> --}}
                        </div><br>
                        <div class="row d-flex flex-row justify-content-between align-items-center">
                          <div class="col-md-2 d-flex flex-column "><span><b>SEATING AREA :</b><br>{{ $tickets->seated_area }}</span></div>
                          <div class="col-md-2 d-flex flex-column "><span><b>TICKET : </b><br>{{ $tickets->ticket_type }}</span></div>
                          <div class="col-md-2 d-flex flex-column "><span id="noticket"><b>NO.OF TICKETS : </b><br>{{ $tickets->quantity }}</span></div>
                          <div class="col-md-2 d-flex flex-column "><span><b>PER-TICKET :</b><br>${{ $tickets->price }}</span></div>
                          <div class="col-md-2 d-flex flex-column "><span><b>Service Charges : </b><br>${{$webCharge}}</span></div>
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
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                  @if ($message = Session::get('msg'))
                  <div class="alert alert-success alert-block">
                      <strong>{{ $message }}</strong>
                  </div>
                  @endif
                  <form action="{{route('seller.complete_ticket.address.store',$tickets->id)}}" method="post" enctype="multipart/form-data" id="reservation-form">
                      @csrf
                        <div class="col-lg-12">
                          <h2 class="mb-4 text-center"><strong>PLEASE CHECK YOUR TICKET DETAILS ABOVE IN THE MILESTONE AND SUBMIT</strong></h2>
                          <div class="form-group row m-b-10">
                          @if ($tickets->completed == 1)
                            <a  
                            style=" font-size: 14px;
                                    color: #fff;
                                    background-color: #2254c1;
                                    border: 1px solid #2254c1;
                                    padding: 12px 30px;
                                    width: 100%;
                                    text-align: center;
                                    display: inline-block;
                                    border-radius: 25px;
                                    font-weight: 500;
                                    text-transform: capitalize;
                                    letter-spacing: 0.5px;
                                    transition: all .3s;
                                    position: relative;
                                    overflow: hidden;
                            " 
                            class="btn primary-btn w-100 mt-3"
                            type="" id=""><strong>Submitted</strong></a>
                          @else
                          <fieldset>
                            <button class="btn primary-btn w-100 mt-3"
                            type="submit" id="btn-submit"><strong>Submit Ticket</strong></button>
                          </fieldset>
                          @endif
                         
                          </div>
                        </div>
                  </form>
                </div>
            </div>
           </div>
          </div>
        </div>
     </div>
   

    <!-- Optional JavaScript; choose one of the two! -->
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
