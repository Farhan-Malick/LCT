<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('F_Assets/assets/css/bootstrap.min.css') }}" />
        <!-- animate css -->
        <link rel="stylesheet" href="{{ asset('F_Assets/assets/css/animate.min.css') }}" />
        <!-- Fontawesome css -->
        <link rel="stylesheet" href="{{ asset('F_Assets/assets/css/fontawesome.all.min.css') }}" />
        {{-- <link rel="stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.8.2/font/bootstrap-icons.css"> --}}
        <link rel="stylesheet" type="text/css" href="{{asset('F_Assets/assets/css/slick.min.css')}}" />
        <!--slick-theme.css-->
        <link rel="stylesheet" type="text/css" href="{{asset('F_Assets/assets/css/slick-theme.min.css')}}" />
        <!-- owl.carousel css --><link rel="stylesheet" href="{{ asset('F_Assets/assets/css/owl.carousel.min.css') }}" />
        <!-- Rangeslider css --><link rel="stylesheet" href="{{ asset('F_Assets/assets/css/nouislider.css') }}" />
        <!-- owl.theme.default css --><link rel="stylesheet" href="{{ asset('F_Assets/assets/css/owl.theme.default.min.css') }}" />
        <!-- navber css --><link rel="stylesheet" href="{{ asset('F_Assets/assets/css/navber.css') }}" />
        <!-- meanmenu css --><link rel="stylesheet" href="{{ asset('F_Assets/assets/css/meanmenu.css') }}" />
        <!-- Style css --><link rel="stylesheet" href="{{ asset('F_Assets/assets/css/style.css') }}" />
        <!-- Responsive css --><link rel="stylesheet" href="{{ asset('F_Assets/assets/css/responsive.css') }}" />
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <!-- Bootstrap icons CDN -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />
        <style>
                            /* section five starts here  */
                .footer{
                    /* background-color: #61c3e3; */
                    background-color: #22b3c1;

                }
                .footer ul{
                    padding: 0px;
                }
                .footer ul li{
                    list-style: none;
                }
                .footer ul li a{
                    text-decoration: none;
                    color: #fff;
                }
                .footer a{
                    color: #fff;
                }
                .social-links i{
                    margin-left: 10px;
                    font-size: 30px;
                }
                .bi-facebook:hover{
                    color: #3f77f3;
                }
                .bi-twitter:hover{
                    color: #52a2f3;
                }
                .bi-google:hover{
                    color: #e74235;
                }
                .footer-btn{
                    background-color: #fff;
                    color: grey;
                }
                .footer-btn:hover{
                    color: #61c3e3;
                }
                .footer .nav-link{
                    color: grey;
                }
        </style>
        <title>Last Chance Ticket - Buyer</title>
       
    </head>

<body>
    <header class="main_header_arae">
        <!-- Top Bar -->
       
        <!-- Navbar Bar -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo2">
                            <a href="{{URL('/')}}">
                                <img width="30%" src="{{asset('F_Assets/assets/img/logo1.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="logo" href="{{URL('/')}}">
                            <img src="{{asset('F_Assets/assets/img/logo1.png')}}" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                              
                                <li class="nav-item">
                                    <a
                                    class="nav-link"
                                    href="{{ route('request.show') }}"
                                    >Request_Event</a
                                >
                                </li>
                                @auth
                                <li class="dropdown nav-item">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        My Account
                                    </a>
                                    <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item text-dark" href="{{ URL('/dashboard') }}">My Dashboard</a></li>
                                        <li><a class="dropdown-item text-dark" href="{{ URL('/dashboard/orders') }}">My Order</a></li>
                                        <li><a class="dropdown-item text-dark" href="{{ URL('/dashboard/listings') }}">My Listings</a></li>
                                        <li><a class="dropdown-item text-dark" href="{{ URL('/dashboard/settings') }}">Settings</a></li>
                                        <li class="nav-item">
                                            <form
                                                action="{{ route('logout') }}"
                                                method="POST"
                                            >
                                                @csrf
                                                <button type="submit" class="btn btn-link">Logout</button>
        
                                            </form>
                                        </li>
                                    </ul>
                                </li>
        
                                @endauth @guest
                                <li class="nav-item">
                                    <a
                                         class="nav-link"
                                        href="{{ route('login') }}"
                                        >Login</a
                                    >
                                </li>
                                @endguest
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="#"
                                        >Help Center</a
                                    >
                                </li> --}}
                                <li class="nav-item">
                                    <a
                                        class="nav-link btn btn-sm primary-btn px-3"
                                        href="{{ URL('Sell-tickets') }}"
                                        >Sell Tickets</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="#" class="search-box"><i class="fas fa-search"></i></a>
                                </div>
                                <div class="option-item">
                                    <a href="contact.html" class="btn  btn_navber">Get free quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        {{-- <h2>{{$events->title}}</h2> --}}
                        <ul>
                            <li><a href="{{URL('/')}}">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Browse Events</li>
                            <li><span><i class="fas fa-circle"></i></span>Ticket Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Tour Search Areas -->
    <section id="tour_details_main" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tour_details_leftside_wrapper">
                        <div class="tour_details_heading_wrapper">
                            <div class="tour_details_top_heading">
                                <h2>{{ $events->title }}</h2>
                                <h5><i class="fas fa-map-marker-alt"></i> Amazon evergreen forest, Amazon.</h5>
                            </div>
                        </div>
                        <div class="tour_details_top_bottom">
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <h5>Date</h5>
                                    <p>{{$events->start_date}}</p>
                                </div>
                            </div>
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <i class="fas fa-paw"></i>
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <h5>Ticket type</h5>
                                    <p>{{ $tickets->ticket_type }}</p>
                                </div>
                            </div>
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <h5>Sec - Row</h5>
                                    <p>{{$tickets->sections}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$tickets->rows}}</p>
                                </div>
                            </div>
                            <div class="toru_details_top_bottom_item">
                                <div class="tour_details_top_bottom_icon">
                                    <i class="fas fa-map-marked"></i>
                                </div>
                                <div class="tour_details_top_bottom_text">
                                    <h5>Category</h5>
                                    <p> @if ($tickets->categories == null)
                                        {{$tickets->type_cat}}
                                        @else
                                        {{$tickets->categories}}
                                    @endif </p>
                                </div>
                            </div>
                        </div>
                        <div class="tour_details_img_wrapper">
                            <div class="slider slider-for">
                                <div class="img">
                                    <img src="{{ asset('uploads/venues').'/'.$events->vImage }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tour_details_right_sidebar_wrapper">
                        <div class="tour_detail_right_sidebar">
                            <div class="tour_details_right_boxed">
                                <div class="tour_details_right_box_heading">
                                    <h3>Ticket Detail</h3>
                                </div>
                                <div class="valid_date_area">
                                    <div class="valid_date_area_one">
                                        <h5>Start Time</h5>
                                        <p>{{ $events->start_time }}</p>
                                    </div>
                                    <div class="valid_date_area_one">
                                        <h5>End Time</h5>
                                        <p>{{ $events->end_time }}</p>
                                    </div>
                                </div>
                                <div class="tour_package_details_bar_list">
                                    <h5>More details</h5>
                                    <ul>
                                        <li><i class="fas fa-circle"></i>Seating Area :  {{ $tickets->seated_area }}</li>
                                        <li><i class="fas fa-circle"></i>Number of Tickets : {{ $tickets->quantity }}
                                        </li>
                                        <li><i class="fas fa-circle"></i>Per Ticket : ${{ $tickets->price }}</li>
                                    </ul>
                                </div>
                                <div class="tour_package_details_bar_price">
                                    <h5>Price</h5>
                                    <div class="tour_package_bar_price">
                                        {{-- <h6><del>$ 35,500</del></h6> --}}
                                        <h3>${{ $tickets->price }} <sub>/Per Ticket</sub> </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tour_select_offer_bar_bottom">
                                <button class="btn btn_theme btn_md w-100" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Select
                                    offer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


<section class="section-five mt-5">
    <div class="footer ">
        <div class="container p-5">
            <div class="row">
                <div class="col-xl-3">
                    <h5 class="mb-4 text-white">Regional Settings</h5>
                    <!-- Button trigger modal -->
                    <button
                        type="button"
                        class="btn footer-btn mb-2"
                        data-bs-toggle="modal"
                        data-bs-target="#"
                    >
                        <i class="bi bi-globe me-2"></i>Country:
                        world-wide
                    </button>
                    <!-- Button trigger modal -->
                    <button
                        type="button"
                        class="btn footer-btn mb-2"
                        data-bs-toggle="modal"
                        data-bs-target="#"
                    >
                        <i class="bi bi-chat-fill me-2"></i> Language:
                        English (US)
                    </button>
                    <!-- Button trigger modal -->
                    <button
                        type="button"
                        class="btn footer-btn mb-2"
                        data-bs-toggle="modal"
                        data-bs-target="#"
                    >
                        <i class="bi bi-cash-coin me-2"></i> Currency:
                        US$
                    </button>
                    <!-- Modal -->
                    <div
                        class="modal fade"
                        id=""
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true"
                    >
                        <div class="modal-dialog text-white">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4>Modal title here</h4>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body">
                                    <h4>modal content here</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <h5 class="mb-4 text-white">More</h5>
                    <ul>
                        <li><a href="" class="text-white">Help Center</a></li>
                        <li><a href="" class="text-white">About Us</a></li>
                        <li><a href="" class="text-white">Affiliates</a></li>
                        <li><a href="" class="text-white">Careers</a></li>
                        <li><a href="" class="text-white">How do i contact?</a></li>
                        <li><a href="" class="text-white">Event Organizers</a></li>
                    </ul>
                </div>
                <div class="col-xl-3">
                    <h5 class="mb-4 text-white">Popular Events</h5>
                </div>
                <div class="col-xl-3">
                    <h5 class="mb-4 text-white">Stay Up to Date</h5>
                    <ul class="d-flex social-links text-center">
                        <li>
                            <a href=""
                                ><i class="bi bi-facebook"></i
                            ></a>
                        </li>
                        <li>
                            <a href=""><i class="bi bi-twitter"></i></a>
                        </li>
                        <li>
                            <a href=""><i class="bi bi-google"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-12 mt-4">
                    <p class="text-white">
                        Copyright © Last-Chance-Ticket AG 2022
                        Company Details<br />
                        Use of this web site constitutes acceptance of
                        the Terms and Conditions and
                        Privacy Policy
                        and Cookies Policy and
                        Mobile Privacy Policy
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
    {{-- @include("auth.partials.footer") --}}
    {{-- <script src="{{asset('newAssets/vendor/jquery/jquery.min.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="{{asset('newAssets/assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/tabs.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/popup.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/custom.js')}}"></script> --}}

    <script src="{{asset('F_Assets/assets/js/jquery-3.6.0.min.js')}}"></script>
    
    <!-- Bootstrap js -->
    <script src="{{asset('F_Assets/assets/js/bootstrap.bundle.js')}}"></script>
    
    <!-- Meanu js -->
    <script src="{{asset('F_Assets/assets/js/jquery.meanmenu.js')}}"></script>
    
   
    <!-- owl carousel js -->
    <script src="{{asset('F_Assets/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('F_Assets/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('F_Assets/assets/js/slick-slider.js')}}"></script>
    <!-- wow.js -->
    <script src="{{asset('F_Assets/assets/js/wow.min.js')}}"></script>
    
    <!-- Custom js -->
    <script src="{{asset('F_Assets/assets/js/custom.js')}}"></script>
    
    <script src="{{asset('F_Assets/assets/js/add-form.js')}}"></script>
    
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
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
