
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
    <link rel="stylesheet" href="{{ asset('assets/styles/common.css') }}" />
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
        <title>Sell Tickets</title>
    </head>

    <body>
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
        @include("auth.partials.darkheader")
        <div class="call-to-action" style="margin-top: 75px">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 p-5 text-center mt-5">
                <h2> Sell your tickets on Last Chance Ticket</h2>
                <h4>Last chance ticket helps you to sell the tickets quickly by making your listing available to millions of customers around the world.</h4>
              </div>
             
            </div>
          </div>
        </div>
        <div class="weekly-offers">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="section-heading text-center">
                  <h1>Event
                      @foreach($events as $event)
                      {{$event->title}}
                      @endforeach
                  </h1>
                  {{-- <p>Hurray! You are in the right place. 100% customer satisfaction. We value every single customers. We guarantee your entry. Secured payout.</p> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row ">
              <div class="col-12 ">
                <div class="alert alert-primary "  role="alert" >
                  <p class="text-dark">
                   <strong>Easily sell your tickets with last chance ticket.
                   </strong>
                  </p>
               </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="owl-weekly-offers owl-carousel">
                  @foreach($eventListings as $eventListing)
                  <div class="item">
                    <div class="thumb">
                      <a href="{{ route('buyer.ticket.show',$eventListing->id) }}" class="thumbnail-img">
                        <img src="{{ asset('uploads/eventListing/' . $eventListing->layoutImage) }}" height="350px" alt="" style="
                        background-position: center center;
                        background-size: cover;
                        background-repeat: no-repeat; ">
                      </a>
                      {{-- <img src="{{asset('assets/images/1673434292_cricket2.png')}}" alt=""> --}}
                      <div class="text">
                        <h4>{{$eventListing->event_name}}<br><span><i class="fa fa-volleyball"></i> {{$eventListing->category_event}}</span></h4>
                        <h6>LCT<br><span style="font-size: 10px">Last Chance Ticket</span></h6>
                        <div class="line-dec"></div>
                        
                        <ul style="font-size: 25px">
                          <li>Details:</li>
                          <li><i class="fa fa-clock"></i>   {{$eventListing->start_time}} AM - {{$eventListing->end_time}} PM</li>
                          <li><i class="fa fa-globe"></i>  {{$eventListing->event_date}}</li>
                          <li><i class="fa fa-location"></i> {{$eventListing->location}}</li>
                        </ul>
                        <div class="main-button" style="padding-top: 30px">
                          <a href="{{route('seller.ticket.index',$eventListing->id)}}" class="btn primary-btn"> Sell Tickets Here</a>
                      </div>
                      </div>
                    </div>
                  </div>
                @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
       
          
       
        <!-- Optional JavaScript; choose one of the two! -->
        @include("auth.partials.footer")
          <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('newAssets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('newAssets/assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/tabs.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/popup.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/custom.js')}}"></script>
  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>
  <script>
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 10000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 10000)
    });
  </script>    
    </body>
</html>
