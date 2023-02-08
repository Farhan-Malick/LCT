
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
    <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/styles/common.css') }}" />
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <title>LCT - Last Chance Ticket</title>
  </head>

<body>
<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/63da4b37474251287910d929/1go6bbklo';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
  <!--End of Tawk.to Script-->
  <!--End of Tawk.to Script-->
  <!-- ***** Preloader Start ***** -->
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
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  @include("auth.partials.newHeader")
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section id="section-1">
    <div class="content-slider">
      <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
      <input type="radio" id="banner2" class="sec-1-input" name="banner">
      <input type="radio" id="banner3" class="sec-1-input" name="banner">
      <input type="radio" id="banner4" class="sec-1-input" name="banner">
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <div class="container">
                <h2> Here is the last chance to be the member of world largest marketplace for tickets to live events.
                  Prices are set by sellers and may be below or above face value.</h2>
                  <marquee behavior="" direction="">
                    <h5>Hurray! You are in the right place. 100% customer satisfaction. We value every single customers. We guarantee your entry. Secured payout.</h5>
                </marquee>
              </div>
              {{-- <div class="border-button"><a href="about.html">Go There</a></div> --}}
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                     <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span><a href="{{URL::current()."?sort=Sports"}}" class="Anchor2">Sports</a></span><br>Events</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span> <a href="{{URL::current()."?sort=Concert"}}" class="Anchor2">Concerts</a></span><br>Events</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span><a href="{{URL::current()."?sort=Theater"}}" class="Anchor2">Theaters</a></span><br>Events</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span><a href="{{URL::current()."?sort=Festival"}}" class="Anchor2">Festivals</a></span><br>Events</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-2" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <div class="container">
                <h2> Here is the last chance to be the member of world largest marketplace for tickets to live events.
                  Prices are set by sellers and may be below or above face value.</h2>
                  <marquee behavior="" direction="">
                    <h5 class="text-light">Hurray! You are in the right place. 100% customer satisfaction. We value every single customers. We guarantee your entry. Secured payout.</h5>
                </marquee>
              </div>

              {{-- <div class="border-button"><a href="about.html">Go There</a></div> --}}
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                     <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span><a href="{{URL::current()."?sort=Sports"}}" class="Anchor2">Sports</a></span><br>Events</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span> <a href="{{URL::current()."?sort=Concert"}}" class="Anchor2">Concerts</a></span><br>Events</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span><a href="{{URL::current()."?sort=Theater"}}" class="Anchor2">Theaters</a></span><br>Events</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span><a href="{{URL::current()."?sort=Festival"}}" class="Anchor2">Festivals</a></span><br>Events</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-3" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <div class="container">
                <h2> Here is the last chance to be the member of world largest marketplace for tickets to live events.
                  Prices are set by sellers and may be below or above face value.</h2>
                  <marquee behavior="" direction="">
                    <h5>Hurray! You are in the right place. 100% customer satisfaction. We value every single customers. We guarantee your entry. Secured payout.</h5>
                </marquee>
              </div>

              {{-- <div class="border-button"><a href="about.html">Go There</a></div> --}}
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                     <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span><a href="{{URL::current()."?sort=Sports"}}" class="Anchor2">Sports</a></span><br>Events</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span> <a href="{{URL::current()."?sort=Concert"}}" class="Anchor2">Concerts</a></span><br>Events</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span><a href="{{URL::current()."?sort=Theater"}}" class="Anchor2">Theaters</a></span><br>Events</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span><a href="{{URL::current()."?sort=Festival"}}" class="Anchor2">Festivals</a></span><br>Events</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="top-banner-4" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <div class="container">
                <h2> Here is the last chance to be the member of world largest marketplace for tickets to live events.
                  Prices are set by sellers and may be below or above face value.</h2>
                  <marquee behavior="" direction="">
                    <h5 class="text-light">Hurray! You are in the right place. 100% customer satisfaction. We value every single customers. We guarantee your entry. Secured payout.</h5>
                </marquee>
              </div>

              {{-- <div class="border-button"><a href="about.html">Go There</a></div> --}}
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="more-info">
                    <div class="row">
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-user"></i>
                        <h4><span><a href="{{URL::current()."?sort=Sports"}}" class="Anchor2">Sports</a></span><br>Events</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-globe"></i>
                        <h4><span> <a href="{{URL::current()."?sort=Concert"}}" class="Anchor2">Concerts</a></span><br>Events</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span><a href="{{URL::current()."?sort=Theater"}}" class="Anchor2">Theaters</a></span><br>Events</h4>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-6">
                        <i class="fa fa-home"></i>
                        <h4><span><a href="{{URL::current()."?sort=Festival"}}" class="Anchor2">Festivals</a></span><br>Events</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="controls">
          <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">1</span></label>
          <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">2</span></label>
          <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">3</span></label>
          <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">4</span></label>
        </div>
      </nav>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->
  <style>
    
.theme_search_form_area {
    background: #f7f4f4;
    box-shadow: 4px 14px 28px rgba(0, 0, 0, 0.1);
    border-radius: 20px;
    padding: 30px 30px;
    position: relative;
}

.theme_search_form_tabbtn .nav-item {
    margin-right: 20px;
}

.theme_search_form_tabbtn .nav-item:last-child {
    margin-right: 0px;
}

.theme_search_form_tabbtn .nav-tabs {
    border-bottom: none;
}


  </style>
  <section id="theme_search_form_tour" class="fligth_top_search_main_form_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="theme_search_form_area">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="flight_categories_search mb-4">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="oneway-tab" data-bs-toggle="tab"
                                                    data-bs-target="#oneway_flight" type="button" role="tab"
                                                    aria-controls="oneway_flight" aria-selected="true">Filter By Events</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="roundtrip-tab" data-bs-toggle="tab"
                                                    data-bs-target="#roundtrip" type="button" role="tab"
                                                    aria-controls="roundtrip"
                                                    aria-selected="false">Filter By Search</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="myTabContent1">
                                <div class="tab-pane fade show active" id="oneway_flight" role="tabpanel"
                                    aria-labelledby="oneway-tab">
                                    <div class="row">
                                      <style>
                                       .Anchor{
                                        margin-right:20px; text-decoration:none"
                                       }
                                      </style>
                                      <div class="col-lg-8">
                                          <span style="font-size: 15px; margin-right:20px">Sort By :</span>
                                          <a href="{{URL::current()}}" class="Anchor">ALL</a>
                                          <a href="{{URL::current()."?sort=Sports"}}" class="Anchor">Sports</a>
                                          <a href="{{URL::current()."?sort=Concert"}}" class="Anchor">Concerts</a>
                                          <a href="{{URL::current()."?sort=Festival"}}" class="Anchor">Festivals</a>
                                          <a href="{{URL::current()."?sort=Theater"}}" class="Anchor">Theaters</a>
                                      </div>
                                        <div class="col-lg-4">
                                            <div class="oneway_search_form">
                                              <form method="get" id="qty-form">
                                                <div class="form-group">
                                                  <select class="form-select form-control-lg"  name="filter"  onchange="this.form.submit()">
                                                      <option selected disabled>ALL EVENTS</option>
                                                     @foreach ($events as $all)
                                                    <option value="{{$all->id}}">{{$all->title}}</option></a>
                                                     @endforeach
                                                  </select>
                                              </div>
                                              </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="roundtrip" role="tabpanel"
                                    aria-labelledby="roundtrip-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="oneway_search_form">
                                                <div class="row select-ticket">
                                                    <div class="col-lg-12">
                                                        <p class="primary-text">
                                                            <i class="bi bi-info-circle-fill me-2"></i>
                                                            Search By Event Name
                                                        </p>
                                                    </div>
                                                    <form method="get" id="qty-form">
                                                      {{-- <input type="hidden" class="form-control" id="total-tickets" placeholder="Total Tickets" name="qty" value="@if(request()->get('qty')) <?= request()->get('qty')?> @endif"> --}}
                                                      <div class="input-group w-100">
                                                      <input type="text" class="form-control" name="search_text"  placeholder="Search Event Name" value="@if(request()->get('search_text')) <?= request()->get('search_text')?> @endif"/>
                                                        <div class="input-group-append">
                                                            <button class="btn btn-lg search-btn px-3" type="submit" value="Search">
                                                                <i class="bi bi-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
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
            </div>
        </div>
</section>
  <!-- Events Section Start -->
  <div class="amazing-deals">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading text-center">
            <h2>Last chance to explore world top events</h2>
          </div>
        </div>
       
          @if(count($allevents) == 0)
          <div>
              <h5>Browse the <b>EVENTS</b> according to your serach to see more.</h5>
          </div>
          @endif
            <script>
                document.addEventListener("DOMContentLoaded", () => {

                    document.querySelectorAll('.ticket-num-card').forEach(function(element) {
                        element.addEventListener("click", (event) => {
                            document.querySelectorAll('.ticket-num-card').forEach((element) => element.classList.remove('select-active'));
                            event.currentTarget.classList.add('select-active');
                            const value =event.currentTarget.attributes['data-tickets-val'].value;
                            document.getElementById('total-tickets').value = value;
                            document.getElementById('qty-form').submit();
                        });
                    });
                });
            </script>
        @foreach ($allevents as $event)
            <div class="col-lg-6 col-sm-6">
            <div class="item">
                <div class="row">
                <div class="col-lg-6">
                    <div class="">
                        <a href="{{ route('buyer.ticket.show',$event->event_id) }}" class="thumbnail-img">
                            <img src="{{ asset('uploads/events/poster/' . $event->poster) }}" height="350px" alt="" style="
                            background-position: center center;
                            background-size: cover;
                            background-repeat: no-repeat; ">
                          </a>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="content">
                    <span class="info">*Limited Offer Today</span>
                    <h4>{{ $event->event_name }}</h4>
                    <div class="row">
                        <div class="col-6" >
                        <i class="fa fa-clock"></i>
                        <span class="list" style="font-size: 13px">{{$event->start_time}}-{{$event->end_time}}</span>
                        </div>
                        <div class="col-6">
                        <i class="fa fa-map"></i>
                        <span class="list"style="font-size: 13px">{{$event->event_date}}</span>
                        </div>
                    </div>
                    <p>{{ $event->description }}</p>
                    <div class="main-button">
                        <a href="{{ route('buyer.ticket.show',$event->id) }}">View Tickets</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            @endforeach
        <div class="col-lg-12">
          <ul class="page-numbers">
            <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Event Section End -->
  <div class="call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
      <div class="row">
        <div class="col-md-6 col-xl-4 ">
            <h3 class="text-white">Find the perfect ticket</h3>
            <p class="text-dark">
                Search over 4,000,000 tickets to popular
                concert, sport, theatre and festival events in
                over 50 countries.
            </p>
        </div>
        <div class="col-md-6 col-xl-4">
            <h3 class="text-white">Get it delivered</h3>
            <p class="text-dark">
                We deliver to any country around the world,
                including yours.
            </p>
        </div>
        <div class="col-md-6 col-xl-4">
            <h3 class="text-white">Enjoy the show</h3>
            <p class="text-dark">
                Join millions of happy customers that have
                attended their favourite events, thanks to
                Last-Chance-Ticket.
            </p>
        </div>
      </div>
        </div>
        <div class="col-lg-3">
          <div class="border-button">
            <a href="{{ route('request.show') }}">Request an Event now</a>
          </div>
        </div>
      </div>
    </div>
</div>

@include('auth.partials.footer')

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
