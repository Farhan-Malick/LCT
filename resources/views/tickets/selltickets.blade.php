
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
        <div class="sell-ticket-heading">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <h4>Sell your tickets on LAST CHANCE TICKET</h4>
                  <h2>Select Your Event</h2>
                  <p> Reach millions of buyers around the world
                    through the world's largest ticket marketplace.</p>
                  <div class="main-button"><a href="#">Discover More</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="more-info reservation-info">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-sm-6">
                  <div class="info-item">
                    <i class="fa fa-volleyball"></i>
                    <h4>Sports Tickets</h4>
                            @foreach($events_concert as $event)
                            <a
                                href="{{
                                    route('event.category.ticket',$event->id)
                                }}"
                            >
                            {{$event->title}}
                            <hr>
                            </a>
                            @endforeach
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="info-item">
                    <i class="fa fa-music"></i>
                    <h4>Concerts Tickets</h4>
                        
                            @foreach($events_sports as $event)
                            <a
                                href="{{
                                    route('event.category.ticket',$event->id)
                                }}"
                            >
                                    {{$event->title}}
                                <hr>
                            </a>
                            @endforeach
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                  <div class="info-item">
                    <i class="fa fa-masks-theater"></i>
                    <h4>Theatre Tickets</h4>
                            @foreach($events_theatre as $event)
                            <a
                                href="{{
                                    route('event.category.ticket',$event->id)
                                }}"
                            >
                            {{$event->title}}
                            <hr>
                            </a>
                            @endforeach
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="info-item">
                      <i class="fa-solid fa-spa"></i>
                      <h4>Festival Tickets</h4>
                                @foreach($events_festival as $event)
                                <a
                                    href="{{
                                        route('event.category.ticket',$event->id)
                                    }}"
                                >
                                {{$event->title}}
                                <hr>
                                </a>
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
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });
  </script>    
    </body>
</html>
