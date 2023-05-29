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
    <style>
          @media (max-width: 560px) {
                                    .example-element{
                                        inset: auto auto 0px 0px;
                                            margin: 0px;

                                    }
                                    #example-element2{
                                        padding-left: 20px;

                                    }
                                        a.mean-expand {
                                            /* margin-top: 3px; */
                                            width: 100%;
                                            height: 24px;
                                            padding: 12px !important;
                                            /* text-align: right; */
                                            /* position: absolute; */
                                            right: 0;
                                            top: 0;
                                            z-index: 2;
                                            font-weight: 700;
                                            background: 0 0;
                                            border: none !important;
                                        }
                                    .dropdown-menu{
                                        --bs-dropdown-min-width: 10rem;
                                            --bs-dropdown-padding-x: 0;
                                            --bs-dropdown-padding-y: 0.5rem;
                                            --bs-dropdown-spacer: 0.125rem;
                                            --bs-dropdown-font-size: 1rem;
                                            --bs-dropdown-color: #212529;
                                            --bs-dropdown-bg: #fff;
                                            --bs-dropdown-border-color: var(--bs-border-color-translucent);
                                            --bs-dropdown-border-radius: 0.375rem;
                                            --bs-dropdown-border-width: 1px;
                                            --bs-dropdown-inner-border-radius: calc(0.375rem - 1px);
                                            --bs-dropdown-divider-bg: var(--bs-border-color-translucent);
                                            --bs-dropdown-divider-margin-y: 0.5rem;
                                            --bs-dropdown-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
                                            --bs-dropdown-link-color: #212529;
                                            --bs-dropdown-link-hover-color: #1e2125;
                                            --bs-dropdown-link-hover-bg: #e9ecef;
                                            --bs-dropdown-link-active-color: #fff;
                                            --bs-dropdown-link-active-bg: #0d6efd;
                                            --bs-dropdown-link-disabled-color: #adb5bd;
                                            --bs-dropdown-item-padding-x: 1rem;
                                            --bs-dropdown-item-padding-y: 0.25rem;
                                            --bs-dropdown-header-color: #6c757d;
                                            --bs-dropdown-header-padding-x: 1rem;
                                        --bs-dropdown-header-padding-y: 0.5rem;
                                        /* position: relative; */
                                        z-index: 1000;
                                        display: none;
                                        min-width: var(--bs-dropdown-min-width);
                                        padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
                                        margin: 0;
                                        font-size: var(--bs-dropdown-font-size);
                                        color: var(--bs-dropdown-color);
                                        text-align: center;
                                        list-style: none;
                                        background-color: var(--bs-dropdown-bg);
                                        background-clip: padding-box;
                                        border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
                                        border-radius: var(--bs-dropdown-border-radius);
                                    }
                                    }
            #search_list{
              position:absolute; z-index:1; width:68%;
            }
            @media (max-width: 1001px) {
          #search_list {
            position:absolute; z-index:1; width:76.5%;
            }
          }   
          
        
          @media (max-width: 1200px) {
          #search_list {
            position:absolute; z-index:1; width:76.5%;
            }
            
          }
          #marquee-container {
                          width: 100%;
                          height: 50px;
                          overflow: hidden;
                        }
                        #marquee {
                          white-space: nowrap;
                          display: inline-block;
                          transition: transform 0.5s ease; /* Add transition property with duration and easing function */
                          }
                          
                          #marquee:hover {
                            animation-play-state: paused;
                            transform: translateX(0%); /* Add this line to reset the transform on hover */
                          }
                        @media (max-width: 1920px) {
                          #marquee {
                          white-space: nowrap;
                          display: inline-block;
                          animation: marquee 11.5s linear infinite;
                        }
                          }
                        @keyframes marquee-web {
                              0% {
                                transform: translateX(100%);
                              }
                              100% {
                                transform: translateX(-100%);
                              }
                            }
                          
                            @keyframes marquee-mobile {
                              0% {
                                transform: translateX(100%);
                              }
                              100% {
                                transform: translateX(-100%);
                              }
                            }
                        /* Media query for mobile devices with max-width of 767px */
                        @media (max-width: 540px) {
                            #section-1 .content-slider .slider .banner .banner-inner-wrapper h1 {
                              font-size: 13px; color: #58e6f3; text-shadow: 2px 2px #000000;
                            }
                          }
                            @media (max-width: 428px) {
                        
                          #marquee {
                          white-space: nowrap;
                          display: inline-block;
                          transition: transform 0.5s ease; /* Add transition property with duration and easing function */
                          }
                          
                          #marquee:hover {
                            animation-play-state: paused;
                            transform: translateX(0%); /* Add this line to reset the transform on hover */
                          }
                        }
                        @media (max-width: 767px) {
                          #marquee {
                            animation: marquee-mobile 30s linear infinite;
                          }
                        }
                          @media (max-width: 1920px) {
                          #marquee {
                            animation: marquee-web 20s linear infinite;
                          }
                        }
                        @media (max-width: 1366px) {
                          #marquee {
                            animation: marquee-web 13.5s linear infinite;
                          }
                        }
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
                                  background:  rgb(74, 185, 226);
                                }
                                
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
  </head>

<body>
  <script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?75859';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#22b3c1",
      "ctaText":"",
      "borderRadius":"25",
      "marginLeft":"10",
      "marginBottom":"25",
      "marginRight":"90",
      "position":"left"
  },
  "brandSetting":{
      "brandName":"Last Chance Ticket",
      "brandSubTitle":"We are here for customer support",
      "brandImg":"https://cdn.clare.ai/wati/images/WATI_logo_square_2.png",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question.",
      "backgroundColor":"#22b3c1",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"12763293991"
  }
  };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
  </script>
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
                <h1 class="mb-5 " ><b>Here is the last chance to be a member of world’s leading ticket marketplace for live events around the globe</b></h1>
               
                <div id="marquee-container"></div>
               
                
                <script>
                  const marqueeContainer = document.getElementById('marquee-container');
                  const marquee = document.createElement('div');
                  marquee.id = 'marquee';
                
                  const h2 = document.createElement('h2');
                  h2.id = 'textofMarquee';
                  h2.style.color = '#ebd6f9';
                  h2.style.textShadow = '2px 2px #040009';
                  h2.innerHTML = '<b>Hurray! You are in the right place  <span class="" style="color: #f3589e; text-shadow: 2px 2px #000000;">*  100% customer satisfaction  *</span>  We value every customer <span  style="color: #f3589e; text-shadow: 2px 2px #000000;" class="">* We guarantee your entry *</span> 24/7 Customer Support</b>';
                  marquee.appendChild(h2);
                  marqueeContainer.appendChild(marquee);
                </script>
                  {{-- <marquee scrollamount="10" behavior="scroll" direction="left">
                    <h2 id="textofMarquee" class="" style="color: #ebd6f9; text-shadow: 2px 2px #040009;"><b>Hurray! You are in the right place  <span class="" style="color: #f3589e; text-shadow: 2px 2px #000000;">*  100% customer satisfaction  *</span>  We value every customers <span  style="color: #f3589e; text-shadow: 2px 2px #000000;" class="">* We guarantee your entry *</span> 24/7 Customer Support</b> </h2>
                  </marquee> --}}
                <h6 style="font-size: 14px lessNotice" class="mb-5 " ><b>Prices are set by sellers may be above or below face value</b></h6>
                  <div class="container ">
                    <form method="get" id="qty-form">
                      <div class="row height d-flex justify-content-center align-items-center">
                        <div class="col-md-10">
                          <div class="search ">
                            <i class="fa fa-search"></i>
                            <input type="text" onclick="mySearchFunction()" href="" name="search_text" id="search_text" class="form-control" placeholder="Search For An Event Here">
                            <button class="btn btn-primary">Search </button>
                           
                          </div>
                        </div>
                      </div>
                      
                      <div class="row height d-flex justify-content-center align-items-center">
                        <div class="col-md-10">
                          <div  id="search_list" style=""></div>
                        </div>
                      </div>
                    </form>
                     
                </div>
                <script>
                  function mySearchFunction() {
                      var query = document.querySelector('#search_text').value;
                      var elements = document.querySelector('#list li');

                      let status = query==="" ? "none" : "block"
                      document.querySelector("#myUL").style.display = status;

                      for (var i = 0; i < elements.length; i++) {
                        var el = elements[i];
                        if (el.innerText.indexOf(query) !== -1)
                          el.style.display = 'block';
                        else
                          el.style.display = 'none';
                      }

                    }
                </script>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--<div id="marquee-container"></div>-->



  </section>
  <!-- Events Section Start -->
  <div class="amazing-deals">
    <div class="container">
      <div class="row">
      
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
          @if($event->status == 1)
            <div class="col-lg-6 col-sm-12 event-item"
            >
            <div class="item">
                <div class="row">
                <div class="col-lg-6 ">
                    <div class="image">
                        <a href="{{ route('buyer.ticket.show',$event->id) }}" class="thumbnail-img">
                            <img src="{{ asset('uploads/eventListing/' . $event->layoutImage) }}" height="350px" alt="" style="
                            background-position: center center;
                            background-size: cover;
                            background-repeat: no-repeat; ">
                          </a>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="content" >
                    {{-- <span class="info">*Limited Offer Today</span> --}}
                    <h4 >{{ $event->event_name }}</h4>
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
                    <div class="main-button" >
                        <a href="{{ route('buyer.ticket.show',$event->id) }}">View Tickets</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
          @endif
        @endforeach
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
  function mySearchFunctionForEvents() {
    var searchText = $('#search_text').val().toLowerCase();
    $('.event-item').each(function () {
      var eventName = $(this).find('h4').text().toLowerCase();
      if (eventName.includes(searchText)) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  }
</script>
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
