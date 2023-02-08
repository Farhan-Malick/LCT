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
                        <div class="">
                            <a class="logo" href="{{URL('/')}}">
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
                        <h2>{{$events->title }}</h2>
                        <ul>
                            <li><a href="{{URL('/')}}">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Browse Events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Area -->
    <section id="theme_search_form_tour" class="fligth_top_search_main_form_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="theme_search_form_area">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="flight_categories_search">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="oneway-tab" data-bs-toggle="tab"
                                                        data-bs-target="#oneway_flight" type="button" role="tab"
                                                        aria-controls="oneway_flight" aria-selected="true">Multi Filters</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="roundtrip-tab" data-bs-toggle="tab"
                                                        data-bs-target="#roundtrip" type="button" role="tab"
                                                        aria-controls="roundtrip"
                                                        aria-selected="false">Filter By No. of Tickets</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content" id="myTabContent1">
                                    <div class="tab-pane fade show active" id="oneway_flight" role="tabpanel"
                                        aria-labelledby="oneway-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="oneway_search_form">
                                                    <form method="get" id="qty-form">
                                                        <div class="row">
                            
                                                            <input type="hidden" class="form-control" id="total-tickets" placeholder="Total Tickets" name="qty" value="@if(request()->get('qty')) <?= request()->get('qty')?> @endif">
                                                            <div class="col-md-3">
                                                                <select class="form-control" name="ticket_type"  placeholder="Select Ticket Type">
                                                                    <option disabled @if(request()->get('ticket_type') == null)selected @endif>Filter By Ticket Type</option>
                            
                                                                    <option value="paper-ticket"  @if(request()->get('ticket_type') && request()->get('ticket_type') == 'paper-ticket') 
                                                                        selected @endif  >Paper Ticket</option>
                            
                                                                    <option value="e-ticket" @if(request()->get('ticket_type') && request()->get('ticket_type') == 'e-ticket') 
                                                                        selected @endif>E-Ticket</option>
                            
                                                                    <option value="mobile-ticket" @if(request()->get('ticket_type') && request()->get('ticket_type') == 'mobile-ticket') 
                                                                        selected @endif>Mobile Ticket</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <select class="form-control" name="ticket_restrictions"  placeholder="Select Restrictions">
                                                                    <option disabled @if(request()->get('ticket_restrictions') == null)selected @endif>Filter By Restrictions</option>
                            
                                                                    <option value=" No Restriction "  @if(request()->get('ticket_restrictions') && request()->get('ticket_restrictions') == 'No Restriction') 
                                                                        selected @endif  >No Restriction</option>
                                                                    <option value=" Restricted View "  @if(request()->get('ticket_restrictions') && request()->get('ticket_restrictions') == 'Restricted View') 
                                                                        selected @endif  >Restricted View</option>
                                                                    <option value="Age Limit 14+"  @if(request()->get('ticket_restrictions') && request()->get('ticket_restrictions') == 'Age Limit 14+') 
                                                                        selected @endif  >Age Limit 14+</option>
                                                                    <option value="Age Limit 18+"  @if(request()->get('ticket_restrictions') && request()->get('ticket_restrictions') == 'Age Limit 18+') 
                                                                        selected @endif  >Age Limit 18+</option>
                                                                    <option value="Age Limit 21+"  @if(request()->get('ticket_restrictions') && request()->get('ticket_restrictions') == 'Age Limit 21+') 
                                                                        selected @endif  >Age Limit 21+</option>
                                                                </select>
                                                            </div>
                                                            {{-- <div class="col-md-1">
                                                                <input type="submit" value="Search" class="btn btn-primary w-100"/>
                                                            </div> --}}
                                                            <div class=" col-md-1 top_form_search_button">
                                                                <input type="submit" value="Search" class="btn btn_theme btn_md"/>
                                                                {{-- <button class="">Search</button> --}}
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-12">
                                                                <span style="font-size: 15px; margin-right:20px">Sort By :</span>
                                                                <a href="{{URL::current()}}"style=" margin-right:20px; text-decoration:none">ALL</a>
                                                                <a href="{{URL::current()."?sort=price_asc"}}"style=" margin-right:20px; text-decoration:none">PRICE : Low to High</a>
                                                                <a href="{{URL::current()."?sort=price_desc"}}"style=" margin-right:20px; text-decoration:none">PRICE : High to Low</a>
                                                                <a href="{{URL::current()."?sort=best_value"}}"style=" margin-right:20px; text-decoration:none">Best Value</a>
                                                                <a href="{{URL::current()."?sort=newest"}}"style=" margin-right:20px; text-decoration:none">Newest</a>
                                                             </div>
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
                                                                Select a quantity to quickly find the best tickets available for the number of
                                                                people attending the event.
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-3 col-md-3 col-lg-2 mt-3 mt-3">
                                                            <div class="cardNew btn_theme btn_md mb-3">
                                                                <div class="card-body ticket-num-card cursor-pointer shadow-sm @if(request()->get('qty') == 1 ) <?php echo 'select-active' ?> @endif" data-tickets-val="1">
                                                                    <h4>1</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-md-3 col-lg-2 mt-3">
                                                            <div class="cardNew btn_theme btn_md mb-3">
                                                                <div class="card-body ticket-num-card cursor-pointer shadow-sm @if(request()->get('qty') == 2 ) <?php echo 'select-active' ?> @endif" data-tickets-val="2">
                                                                    <h4>2</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-md-3 col-lg-2 mt-3">
                                                            <div class="cardNew btn_theme btn_md mb-3">
                                                                <div class="card-body ticket-num-card cursor-pointer shadow-sm @if(request()->get('qty') == 3 ) <?php echo 'select-active' ?> @endif" data-tickets-val="3">
                                                                    <h4>3</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-md-3 col-lg-2 mt-3">
                                                            <div class="cardNew btn_theme btn_md mb-3">
                                                                <div class="card-body ticket-num-card cursor-pointer shadow-sm @if(request()->get('qty') == 4 ) <?php echo 'select-active' ?> @endif" data-tickets-val="4">
                                                                    <h4>4</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-md-3 col-lg-2 mt-3">
                                                            <div class="cardNew btn_theme btn_md mb-3">
                                                                <div class="card-body ticket-num-card cursor-pointer shadow-sm @if(request()->get('qty') == 5 ) <?php echo 'select-active' ?> @endif" data-tickets-val="5">
                                                                    <h4>5 +</h4>
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
                    </div>
                </div>
            </div>
    </section>

    <section id="explore_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left_side_search_area">
                            <div class="card mb-3 shadow-sm br-10">
                                <div class="card-body shadow-sm">
                                    <img src="{{ asset('uploads/venues').'/'.$events->vImage }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div  class="card mb-3 shadow-sm br-10">
                                <div class="card-body shadow-sm" >
                                    <h5 class="mb-3">Filter By Category</h5>
                                    <form method="get" id="qty-form">
                                        <input type="hidden" class="form-control" id="total-tickets" placeholder="Total Tickets" name="qty" value="@if(request()->get('qty')) <?= request()->get('qty')?> @endif">   
                                        <div class="row">
                                            <div class="col-md-12">                                        
                                                     <input class="form-control-md m-3" type="checkbox" name="categories" id="" value="CAT 1"  >
                                                     <label for="" name="categories" class="form-control-md">CAT 1</label>
                                                     <input class="form-control-md m-3" type="checkbox" name="categories" id="" value="CAT 2"  >
                                                     <label for="" name="categories" class="form-control-md">CAT 2</label>
                                                     <input class="form-control-md m-3" type="checkbox" name="categories" id="" value="CAT 3"  >
                                                     <label for="" name="categories" class="form-control-md">CAT 3</label>
                                                     <input class="form-control-md m-3" type="checkbox" name="categories" id="" value="CAT 4"  >
                                                     <label for="" name="categories" class="form-control-md">CAT 4</label>
                                             </div>
                                        </div>
                                       <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" value="Search" class="btn btn primary-btn w-100 mt-2"/>
                                        </div>
                                       </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
                
                    <div class="col-lg-8">
                        <div class="row">
                                    <div class="flight_search_result_wrapper">
                                        <div class="flight_search_item_wrappper">
                                             <?php
                                                $catClasses = ['btn-danger', 'btn-warning','btn-secondary'];    
                                                ?>
                                                @foreach ($tickets as $ticket)
                                                    <?php $key = array_rand($catClasses); ?>
                                            <div class="flight_search_items border border <?php echo $catClasses[$key] ?> text-dark" 
                                                                                    style="  
                                                                                    border: 1px; 
                                                                                    border-radius: 12px;
                                                                                    margin-bottom:20px
                                                                                    ;"
                                                                                    >
                                                <div class="multi_city_flight_lists">
                                                    <div class="flight_multis_area_wrapper">
                                                        <div class="flight_search_left">
                                                            <div class="ticket text-center">
                                                                <img src="{{asset('F_Assets/assets/img/t1.webp')}}" width="" alt="">
                                                                {{-- <img src="{{asset('F_Assets/assets/img/common/biman_bangla.png')}}" alt="img"> --}}
                                                            </div>
                                                            <div class="flight_search_destination">
                                                                <p>Event</p>
                                                                <h3>{{$ticket->event_name}}</h3>
                                                                <h6>Ticket : {{$ticket->ticket_type}}</h6>
                                                            </div>
                                                        </div>
                                                        <div class="flight_search_middel">
                                                            <div class="flight_right_arrow">
                                                                <h6>Section: {{$ticket->sections}}</h6>
                                                                <h6>
                                                                    Category: @if ($ticket->categories == null)
                                                                    {{$ticket->type_cat}}
                                                                    @else
                                                                    {{$ticket->categories}}
                                                                @endif
                                                                </h6>
                                                                <h6>Row: {{$ticket->rows}}</h6>
                                                            </div>
                                                            <div class="flight_search_destination">
                                                                <p>Ticket Type</p>
                                                                <h6 class="fw-700 ">{{$ticket->ticket_type}}</h6>
                                                                <p class="m-0">Restriction</p>
                                                                <h6 class="fw-700 ">{{$ticket->ticket_restrictions}}</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flight_search_right">
                                                    <h2>${{$ticket->price}}<sup>per.tick</sup></h2>
                                                    {{-- <a class="btn btn-primary" href="{{ route('buyer.ticket.detail',['eventlisting_id' => $events->id,'ticketid' => $ticket->id, 'sellerid' => $ticket->user_id]) }}">View Ticket Detail</a> --}}
                                                    <a class="@if($ticket->quantity != 0) btn btn_theme btn_sm mb-2 @else btn btn-danger w-100  @endif" href="@if($ticket->quantity > 0)
                                                        {{ route('buyer.ticket.checkout',['eventlisting_id' => $events->id,'ticketid' => $ticket->id, 'sellerid' => $ticket->user_id]) }}@endif " >
                                                        @if($ticket->quantity == 0) SOLD @else Select Ticket
                                                            @endif 
                                                    </a>
                                                    @if ($ticket->ticket_type === "E-Ticket")
                                                        @if ($ticket->quantity != 0)
                                                        <a href="#" class="text-danger" >Ticket PDF</a>
                                                            {{-- <a href="{{ route('Pdftemplate',['eventlisting_id' => $events->id,'ticketid' => $ticket->id] ) }}" class="text-danger" >Ticket PDF</a> --}}
                                                        @endif
                                                    @endif
                                                    {{-- <a href="flight-booking-submission.html" class="btn btn_theme btn_sm">Book
                                                        now</a> --}}
                                                    <p>*Discount applicable on some conditions</p>
                                                    {{-- <h6 data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                                        aria-expanded="false" aria-controls="collapseExample">Show more <i
                                                            class="fas fa-chevron-down"></i></h6> --}}
                                                </div>
                                            </div>
                                            @endforeach
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
    
    <!-- Range js -->
    <script src="{{asset('F_Assets/assets/js/nouislider.min.js')}}"></script>
    
    <script src="{{asset('F_Assets/assets/js/wNumb.js')}}"></script>
    
    <!-- owl carousel js -->
    <script src="{{asset('F_Assets/assets/js/owl.carousel.min.js')}}"></script>
    
    <!-- wow.js -->
    <script src="{{asset('F_Assets/assets/js/wow.min.js')}}"></script>
    
    <!-- Custom js -->
    <script src="{{asset('F_Assets/assets/js/custom.js')}}"></script>
    
    <script src="{{asset('F_Assets/assets/js/add-form.js')}}"></script>
    
    <script src="{{asset('F_Assets/assets/js/form-dropdown.js')}}"></script>
    
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
