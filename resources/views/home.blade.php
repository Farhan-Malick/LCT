
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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/63d8ba86c2f1ac1e2030829c/1go39h8c6';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
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
      {{-- <input type="radio" id="banner2" class="sec-1-input" name="banner">
      <input type="radio" id="banner3" class="sec-1-input" name="banner">
      <input type="radio" id="banner4" class="sec-1-input" name="banner"> --}}
      <div class="slider">
        <div id="top-banner-1" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <div class="container">
                <h1 class="mb-5" style="font-size: 20px; color: #58e6f3; text-shadow: 2px 2px #000000;"><b>Here is the last chance to be the member of world largest marketplace for tickets to live events.
                  Prices are set by sellers and may be below or above face value.</b></h1>
                  <marquee behavior="" direction="">
                    <h2 class="" style="color: #fff; text-shadow: 2px 2px #6e14dc;"><b>Hurray! You are in the right place  <span class="text-warning" style=" text-shadow: 2px 2px #33f122;">*  100% customer satisfaction  *</span>  We value every customers <span  style=" text-shadow: 2px 2px #9ffa27;" class="text-warning">* We guarantee your entry *</span> 24/7 Customer Support</b> </h2>
                  </marquee>
                  <div class="container ">
                    <form method="get" id="qty-form">
                      <div class="row height d-flex justify-content-center align-items-center">
                        <div class="col-md-10">
                          <div class="search ">
                            <i class="fa fa-search"></i>
                            <input type="text"  name="search_text" id="search_text" class="form-control" placeholder="Search Ticket Number Here">
                            <button class="btn btn-primary">Search</button>
                          </div>
                            <div id="search_list" style="position:absolute; z-index:1; width:68%;"> </div>
                        </div>
                      </div>
                    </form>
                     
                </div>
                <style>
                  .search{
                          position: relative;
                          box-shadow: 0 0 40px rgba(51, 51, 51, .1);
                            
                          }

                          .search input{

                            height: 60px;
                            text-indent: 25px;
                            border: 2px solid #d6d4d4;


                          }


                          .search input:focus{

                            box-shadow: none;
                            border: 2px solid rgb(74, 185, 226);


                          }

                          .search .fa-search{

                            position: absolute;
                            top: 20px;
                            left: 16px;

                          }

                          .search button{

                            position: absolute;
                            top: 5px;
                            right: 5px;
                            height: 50px;
                            width: 110px;
                            background:  rgb(74, 185, 226);;

                          }
                </style>
                  {{-- <form method="get" id="qty-form">
                    <div class="w-100">
                      <div class="row ">
                        <div class="col-lg-12">
                          <input type="text" class="form-control" name="search_text" id="search_text" placeholder="Search Event Name" value="@if(request()->get('search_text')) <?= request()->get('search_text')?> @endif"/>
                        </div>
                        <div id="search_list"> </div>
                      </div>
                    </div>
                  </form> --}}
              </div>
                      
            </div>
            {{-- <div class="container" style="position:relative;">
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
            </div> --}}
          </div>
        </div>
        {{-- <div id="top-banner-2" class="banner">
          <div class="banner-inner-wrapper header-text">
            <div class="main-caption">
              <div class="container">
                <h2> Here is the last chance to be the member of world largest marketplace for tickets to live events.
                  Prices are set by sellers and may be below or above face value.</h2>
                  <marquee behavior="" direction="">
                    <h2 class="text-primary" style=" text-shadow: 2px 2px #9ffa27;"><b>Hurray! You are in the right place  <span class="text-warning" style=" text-shadow: 2px 2px #9ffa27;">*  100% customer satisfaction  *</span>  We value every customers <span   style=" text-shadow: 2px 2px #9ffa27;" class="text-warning">* We guarantee your entry *</span> 24/7 Customer Support</b> </h2>
                  </marquee>
              </div>

              
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
                    <h2 class="text-primary" style=" text-shadow: 2px 2px #9ffa27;"><b>Hurray! You are in the right place  <span class="text-warning" style=" text-shadow: 2px 2px #9ffa27;">*  100% customer satisfaction  *</span>  We value every customers <span   style=" text-shadow: 2px 2px #9ffa27;" class="text-warning">* We guarantee your entry *</span> 24/7 Customer Support</b> </h2>
                  </marquee>
              </div>

              
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
                    <h2 class="text-primary" style=" text-shadow: 2px 2px #9ffa27;"><b>Hurray! You are in the right place  <span class="text-warning" style=" text-shadow: 2px 2px #9ffa27;">*  100% customer satisfaction  *</span>  We value every customers <span   style=" text-shadow: 2px 2px #9ffa27;" class="text-warning">* We guarantee your entry *</span> 24/7 Customer Support</b> </h2>
                  </marquee>
              </div>

              
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
        </div> --}}
      </div>
      {{-- <nav>
        <div class="controls">
          <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">1</span></label>
          <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">2</span></label>
          <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">3</span></label>
          <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span class="text">4</span></label>
        </div>
      </nav> --}}
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
  {{-- <section id="theme_search_form_tour" class="fligth_top_search_main_form_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
              <div class="filterSectionHomePage">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="flight_categories_search mb-4">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="oneway-tab" data-bs-toggle="tab"
                                        data-bs-target="#oneway_flight" type="button" role="tab"
                                        aria-controls="oneway_flight" aria-selected="true">Filter By Events</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent1">
                  <div class="tab-pane fade show active" id="oneway_flight" role="tabpanel"
                      aria-labelledby="oneway-tab">
                      <div class="row mb-4">
                        <div class="col-lg-12">
                            <div class="oneway_search_form">
                                <div class="row select-ticket">
                                    <div class="col-lg-12">
                                        <p class="primary-text">
                                            <i class="bi bi-info-circle-fill me-2"></i>
                                            Search By Event Name
                                        </p>
                                    </div>
                                    <div class="row p-3">
                                      <div class="col-lg-8">
                                        <form method="get" id="qty-form">
                                          <div class="w-100">
                                            <div class="row ">
                                              <div class="col-lg-11">
                                                <input type="text" class="form-control homeFilterSearch" name="search_text" id="search_text" placeholder="Search Event Name" value="@if(request()->get('search_text')) <?= request()->get('search_text')?> @endif"/>
                                              </div>
                                              <div class="col-lg-1">
                                                <button class="btn btn-lg search-btn px-3" type="submit" value="Search">
                                                    <i class="bi bi-search"></i>
                                                </button>
                                              </div>
                                              <div id="search_list"> </div>
                                            </div>
                                          </div>
                                        </form>
                                      </div>
                                      <div class="col-lg-4">
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
                                    <div class="row">
                                      <style>
                                        .Anchor{
                                            margin-right:20px; text-decoration:none"
                                          }
                                      </style>
                                      <div class="col-lg-8">
                                          <a href="{{URL::current()}}" class="Anchor">ALL</a>
                                          <a href="{{URL::current()."?sort=Sports"}}" class="Anchor">Sports</a>
                                          <a href="{{URL::current()."?sort=Concert"}}" class="Anchor">Concerts</a>
                                          <a href="{{URL::current()."?sort=Festival"}}" class="Anchor">Festivals</a>
                                          <a href="{{URL::current()."?sort=Theater"}}" class="Anchor">Theaters</a>
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
</section> --}}
  <!-- Events Section Start -->
  <div class="amazing-deals">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="mb-5  text-center">
            {{-- section-heading --}}
            <h3>Last chance to explore world top events</h3>
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
            <div class="row mb-5 mt-2">
              <div class="col-lg-8">
                <style>
                  .Anchor{
                      margin-right:20px; text-decoration:none"
                    }
                </style>
                    <span style="font-size: 15px; margin-right:20px">Filter By :</span>
                    <a href="{{URL::current()}}" class="Anchor">ALL</a>
                    <a href="{{URL::current()."?sort=Sports"}}" class="Anchor">Sports</a>
                    <a href="{{URL::current()."?sort=Concert"}}" class="Anchor">Concerts</a>
                    <a href="{{URL::current()."?sort=Festival"}}" class="Anchor">Festivals</a>
                    <a href="{{URL::current()."?sort=Theater"}}" class="Anchor">Theaters</a>
              </div>
              <div class="col-lg-4">
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
        @foreach ($allevents as $event)
            <div class="col-lg-6 col-sm-6">
            <div class="item">
                <div class="row">
                <div class="col-lg-6">
                    <div class="">
                        <a href="{{ route('buyer.ticket.show',$event->id) }}" class="thumbnail-img">
                            <img src="{{ asset('uploads/eventListing/' . $event->layoutImage) }}" height="350px" alt="" style="
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
                    <p>Venue : <b>{{ $event->venue_name }}</b></p>
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
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('newAssets/assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/tabs.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/popup.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/custom.js')}}"></script>

    <script>
        $(document).ready(function(){
          $("#search_text").on('keyup',function(){
            var value = $(this).val();
            $.ajax({
              url: "{{ route('home') }}",
              type: 'GET',
              data: {'search_text':value},
              success:function(data){
                $("#search_list").html(data);
              }
            });
          });
          $(document).on('click','li',function(){
            var value = $(this).text();
            $("#search_text").val(value);
            $("#search_list").html("");
          });
        });
    </script>
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
