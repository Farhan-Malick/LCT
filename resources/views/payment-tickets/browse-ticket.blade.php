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
                                <img style="width:270px" src="{{asset('F_Assets/assets/img/logo1.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <div style="width:50%;">
                            <a class="logo" href="{{URL('/')}}">
                                <img src="{{asset('F_Assets/assets/img/logo1.png')}}" alt="logo" style="width:270px">
                            </a>
                        </div>
                        <div class="navUL collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav" >
                              
                                <li class="nav-item">
                                    <a  style="font-size: 14px"
                                    class="nav-link"
                                    href="{{ route('request.show') }}"
                                    >Request Event</a
                                >
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL('/contact-us')}}"
                                        >Contact us</a
                                    >
                                </li>
                                @auth
                                <li class="dropdown nav-item">
                                    <a  style="font-size: 14px" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        My Account
                                    </a>
                                    <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item text-dark" href="{{ URL('/dashboard') }}">My Profile</a></li>
                                        {{-- <li><a class="dropdown-item text-dark" href="{{ URL('/dashboard/orders') }}">My Order</a></li>
                                        <li><a class="dropdown-item text-dark" href="{{ URL('/dashboard/listings') }}">My Listings</a></li> --}}
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
                                    <a  style="font-size: 14px"
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
                                    <a  style="font-size: 14px"
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
                                                        aria-controls="oneway_flight" aria-selected="true"><b><h5 style="font-weight:600">Last Chance Ticket</h5></b></button>
                                                </li>
                                                {{-- <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="roundtrip-tab" data-bs-toggle="tab"
                                                        data-bs-target="#roundtrip" type="button" role="tab"
                                                        aria-controls="roundtrip"
                                                        aria-selected="false">Filter By No. of Tickets</button>
                                                </li> --}}
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
                                                            <div class="col-md-4">
                                                                <select class="form-control" name="ticket_type"  placeholder="Select Ticket Type" onchange="this.form.submit()">
                                                                    <option disabled @if(request()->get('ticket_type') == null)selected @endif>Filter By Ticket Type</option>
                                                                    <option 
                                                                    value=""  @if(request()->get('ticket_type') && request()->get('ticket_type') !== 'Paper-Ticket' && request()->get('ticket_type') && request()->get('ticket_type') !== 'E-Ticket' && request()->get('ticket_type') && request()->get('ticket_type') !== 'Mobile-Ticket') 
                                                                                    selected @endif 
                                                                    ><a href="{{URL::current()}}"style=" margin-right:20px; text-decoration:none">All Tickets</a></option>
                                                                    <option value="Paper-Ticket"  @if(request()->get('ticket_type') && request()->get('ticket_type') == 'Paper-Ticket') 
                                                                        selected @endif  >Paper Ticket</option>
                            
                                                                    <option value="E-Ticket" @if(request()->get('ticket_type') && request()->get('ticket_type') == 'E-Ticket') 
                                                                        selected @endif>E-Ticket</option>
                            
                                                                    <option value="Mobile-Ticket" @if(request()->get('ticket_type') && request()->get('ticket_type') == 'Mobile-Ticket') 
                                                                        selected @endif>Mobile Ticket</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <form method="get" id="qty-form">
                                                                    <div class="form-group">
                                                                          <select class="form-control"  name="Restriction_filter"  onchange="this.form.submit()">
                                                                              <option selected disabled>Filter by Restrictions</option>
                                                                              
                                                                                @foreach ($restrictionsFromTicketListing as $all)
                                                                                    <option value="{{$all->ticket_restrictions}}" 
                                                                                        @if(request()->get('Restriction_filter') && request()->get('Restriction_filter') == $all->ticket_restrictions) 
                                                                                        selected @endif
                                                                                        >{{implode(' ', json_decode($all->ticket_restrictions, true))}}</option></a>
                                                                                    {{-- <option value="{{$all->ticket_restrictions}}">{{implode(',', json_decode($all->ticket_restrictions, true))}}</option></a> --}}
                                                                                @endforeach
                                                                                <option value=""  @if(request()->get('Restriction_filter') && request()->get('Restriction_filter') == 'all-tickets') 
                                                                                    selected @endif  >  <a href="{{URL::current()}}"style=" margin-right:20px; text-decoration:none">All Tickets</a></option>
                                                                          </select>
                                                                    </div>
                                                                  </form>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <form method="get" id="qty-form">
                                                                    <div class="form-group">
                                                                          <select class="form-control"  name="qty"  onchange="this.form.submit()">
                                                                              <option selected disabled>No. of Tickets in Listing</option>
                                                                              {{-- @foreach ($tickets as $all) --}}
                                                                                @foreach ($ticketsNoFilter as $all)
                                                                                    @if ($all->quantity > 0)
                                                                                    <option value="{{$all->quantity}}"
                                                                                        @if(request()->get('qty') && request()->get('qty') == $all->quantity) 
                                                                                            selected @endif
                                                                                        >{{$all->quantity}}</option></a>
                                                                                    @endif
                                                                                @endforeach
                                                                                <option value="" >
                                                                                    <a href="{{URL('ticket/{id}/view')}}"style=" margin-right:20px; text-decoration:none">All Tickets</a></option>
                                                                          </select>
                                                                    </div>
                                                                  </form>
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
                                                  
                                                        <div class="row">
                                                                <div class="col-lg-10">
                                                                    <div class="oneway_search_form">
                                                                        <form method="get" id="qty-form">

                                                                            <div class="row select-ticket">
                                                                                <div class="col-lg-12">
                                                                                    {{-- <p class="primary-text">
                                                                                        <i class="bi bi-info-circle-fill me-2"></i>
                                                                                        Select a quantity to quickly find the best tickets available for the number of
                                                                                        people attending the event.
                                                                                    </p> --}}
                                                                                </div>
                                                                                <div class="col-sm-3 col-md-3 col-lg-3 mt-3 mt-3">
                                                                                    <div class="cardNew btn_theme btn_md mb-3">
                                                                                        <div class="text-center card-body ticket-num-card cursor-pointer shadow-sm @if(request()->get('qty') == 1 ) <?php echo 'select-active' ?> @endif" data-tickets-val="1">
                                                                                            <h4>1</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                                                                                    <div class="cardNew btn_theme btn_md mb-3">
                                                                                        <div class="text-center card-body ticket-num-card cursor-pointer shadow-sm @if(request()->get('qty') == 2 ) <?php echo 'select-active' ?> @endif" data-tickets-val="2">
                                                                                            <h4>2</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                                                                                    <div class="cardNew btn_theme btn_md mb-3">
                                                                                        <div id="button1" class="text-center card-body ticket-num-card cursor-pointer shadow-sm @if(request()->get('qty') == 3 ) <?php echo 'select-active' ?> @endif" data-tickets-val="3">
                                                                                            <h4>3</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-3 col-md-3 col-lg-3 mt-3">
                                                                                    <div class="cardNew btn_theme btn_md mb-3">
                                                                                        <div class="text-center card-body ticket-num-card cursor-pointer shadow-sm @if(request()->get('qty') == 4 ) <?php echo 'select-active' ?> @endif" data-tickets-val="4">
                                                                                            <h4>4</h4>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            <div class="col-lg-2">
                                                                <div class="col-lg-12 mt-3">
                                                                    <div class="cardNew btn_theme btn_md mb-3">
                                                                        <div class="text-center card-body ticket-card  cursor-pointer shadow-sm" data-tickets-val="5" >
                                                                            <h4>5 +</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12" id="ticket-more-5" style="display:none">
                                                                <form method="get" id="qty-form">
                                                                    <div class="row height d-flex align-items-center">
                                                                      <div class="col-md-10">
                                                                        <div class="search">
                                                                          <input type="text" name="search-no-of-tickets" value="@if(request()->get('search-no-of-tickets')) <?= request()->get('search-no-of-tickets')?> @endif"class="form-control" placeholder="Search Ticket Number Here">
                                                                          <i class="fa fa-search"></i>
                                                                          <button type="submit" value="Search" class="btn btn-primary">Search</button>
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                                  </form>
                                                                {{-- <small class="text-muted">Total tickets</small> --}}
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
                                                            <script>
                                                                 document.addEventListener("DOMContentLoaded", () => {

                                                                    document.querySelectorAll('.ticket-card').forEach(function(element) {
                                                                        element.addEventListener("click", (event) => {
                                                                            document.querySelectorAll('.ticket-card').forEach((element) => element.classList.remove('select-active'));
                                                                            event.currentTarget.classList.add('select-active');
                                                                            const value =event.currentTarget.attributes['data-tickets-val'].value;
                                                                            document.getElementById('total-tickets').value = value;
                                                                            if(value === "5"){
                                                                                document.getElementById('ticket-more-5').style.display = "block";
                                                                                document.getElementById('total-tickets').required = true;
                                                                                document.getElementById('total-tickets').value = "";
                                                                            } else {
                                                                                document.getElementById('ticket-more-5').style.display = "none";
                                                                                document.getElementById('total-tickets').required = false;
                                                                                document.getElementById('total-tickets').value = value;
                                                                            }
                                                                        });
                                                                    });
                                                                    });
                                                                
                                                            </script>
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

    <section id="explore_area" class="">
        <div class="container">
            <div class="row mb-2 section_padding">
                <div class="col-lg-12">
                    <span style="font-size: 18px"><b>Categories : </b>  
                        @foreach ($colors as $key => $dbValues) 
                            @if ($key === 0)
                                <span style='border-left:20px solid red;'></span> &nbsp; {{$dbValues->type_cat}} 
                            @endif
                              @if ($key === 1)
                                <span style='border-left:20px solid yellow;'></span> &nbsp; {{$dbValues->type_cat}} 
                            @endif
                              @if ($key === 2)
                                <span style='border-left:20px solid blue;'></span> &nbsp; {{$dbValues->type_cat}} 
                            @endif
                              @if ($key === 3)
                                <span style='border-left:20px solid green;'></span> &nbsp; {{$dbValues->type_cat}} 
                            @endif
                              @if ($key === 4)
                                <span style='border-left:20px solid grey;'></span> &nbsp; {{$dbValues->type_cat}} 
                            @endif
                            @if ($key === 5)
                            <span style='border-left:20px solid chartreuse;'></span> &nbsp; {{$dbValues->type_cat}} 
                        @endif
                          @if ($key === 6)
                            <span style='border-left:20px solid tomato;'></span> &nbsp; {{$dbValues->type_cat}} 
                        @endif
                          @if ($key === 7)
                            <span style='border-left:20px solid salmon;'></span> &nbsp; {{$dbValues->type_cat}} 
                        @endif
                          @if ($key === 8)
                            <span style='border-left:20px solid crimson;'></span> &nbsp; {{$dbValues->type_cat}} 
                        @endif
                          @if ($key === 9)
                            <span style='border-left:20px solid darkgoldenrod;'></span> &nbsp; {{$dbValues->type_cat}} 
                        @endif
                        @endforeach
                    </span> 
                </div>
            </div>
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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form method="get" id="qty-form">
                                                    <div class="form-group">
                                                          <select class="form-select form-control-lg"  name="Cat_filter"  onchange="this.form.submit()">
                                                              <option selected disabled>SEACH BY CATEGORY</option>
                                                              <option value=""  @if(request()->get('Cat_filter') && request()->get('Cat_filter')) 
                                                                selected @endif  >  <a href="{{URL::current()}}"style=" margin-right:20px; text-decoration:none">All Tickets</a></option>
                                                                @foreach ($categoriesFromTicketListing as $all)
                                                                    <option value="{{$all->type_cat}}"
                                                                        @if(request()->get('Cat_filter') && request()->get('Cat_filter') == $all->type_cat) 
                                                                        selected @endif
                                                                        >{{$all->type_cat}}</option></a>
                                                                @endforeach
                                                          </select>
                                                    </div>
                                                  </form>
                                             </div>
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
                    
                    <div class="col-lg-8">
                        
                        <div class="row">
                                    <div class="flight_search_result_wrapper">
                                        <div class="flight_search_item_wrappper">
                                                @if ($tickets->count() == null)
                                                    <div class="alert alert-success text-center">
                                                        <h4>No Tickets Available for this event</h4>
                                                    </div>
                                                @endif
                                                @foreach ($tickets as $ticket)
                                                    @if ($ticket->quantity > 0)
                                                    <div class="flight_search_items border text-dark"  style="border-radius: 12px; margin-bottom:20px ;">
                                                        <div class="multi_city_flight_lists" style="
                                                                <?php 
                                                                    foreach ($colors as $key => $dbValues) {
                                                                        if ($key === 0){ 
                                                                        if ($dbValues->type_cat === $ticket->type_cat) {  ?>
                                                                                border-left:7px solid red;
                                                                            <?php   }
                                                                        }
                                                                        if ($key === 1){ 
                                                                        if ($dbValues->type_cat === $ticket->type_cat) {  ?>
                                                                                border-left:7px solid yellow;
                                                                            <?php   }
                                                                        }
                                                                        if ($key === 2){ 
                                                                        if ($dbValues->type_cat === $ticket->type_cat) {  ?>
                                                                                border-left:7px solid blue;
                                                                            <?php   }
                                                                        }
                                                                        if ($key === 3){ 
                                                                        if ($dbValues->type_cat === $ticket->type_cat) {  ?>
                                                                                border-left:7px solid green;
                                                                            <?php   }
                                                                        }
                                                                        if ($key === 4){ 
                                                                        if ($dbValues->type_cat === $ticket->type_cat) {  ?>
                                                                                border-left:7px solid grey;
                                                                            <?php   }
                                                                        }
                                                                        if ($key === 5){ 
                                                                        if ($dbValues->type_cat === $ticket->type_cat) {  ?>
                                                                                border-left:7px solid chartreuse;
                                                                            <?php   }
                                                                        }
                                                                        if ($key === 6){ 
                                                                        if ($dbValues->type_cat === $ticket->type_cat) {  ?>
                                                                                border-left:7px solid tomato;
                                                                            <?php   }
                                                                        }
                                                                        if ($key === 7){ 
                                                                        if ($dbValues->type_cat === $ticket->type_cat) {  ?>
                                                                                border-left:7px solid salmon;
                                                                            <?php   }
                                                                        }
                                                                        if ($key === 8){ 
                                                                        if ($dbValues->type_cat === $ticket->type_cat) {  ?>
                                                                                border-left:7px solid crimson;
                                                                            <?php   }
                                                                        }
                                                                        if ($key === 9){ 
                                                                        if ($dbValues->type_cat === $ticket->type_cat) {  ?>
                                                                                border-left:7px solid darkgoldenrod;
                                                                            <?php   }
                                                                        }
                                                                    }
                                                                    
                                                                ?>
                                                            ">
                                                            <div class="flight_multis_area_wrapper" >
                                                                <div class="flight_search_left" >
                                                                    <div class="ticket text-center" style="width:50%">
                                                                        <img src="{{asset('assets/images/t1.webp')}}" class="" alt="img">
                                                                    </div>
                                                                    <div class="flight_search_destination" >
                                                                        <p>Tickets</p>
                                                                        <h6>No of Tickets {{$ticket->quantity}}</h6>
                                                                        <p class="m-0">Benefits</p>
                                                                        <h6 class="fw-700 ">{{implode(' ', json_decode($ticket->ticket_benefits, true))}}</h6> 
                                                                        <p class="m-0">Restriction</p>
                                                                        <h6>{{implode(' ', json_decode($ticket->ticket_restrictions, true))}}</h6> 
                                                                        <!--<h6 class="fw-700 ">{{$ticket->ticket_restrictions}}</h6>-->
                                                                    
                                                                    </div>
                                                                </div>
                                                                <div class="flight_search_middel">
                                                                    <div class="flight_right_arrow">
                                                                        <h6>
                                                                            Category:
                                                                            {{$ticket->type_cat}}
                                                                        </h6>
                                                                        <h6>Section: {{$ticket->type_sec}}</h6>
                                                                        <h6>Row: {{$ticket->type_row}}</h6>
                                                                    </div>
                                                                    <div class="flight_search_destination">
                                                                        <p>Ticket : </p>
                                                                        <h6>{{$ticket->ticket_type}}</h6>
                                                                        {{-- <p>Seating Area</p>
                                                                        <h6 class="fw-700 ">{{$ticket->seated_area}}</h6> --}}
                                                                        @if($ticket->cat_id == 1)
                                                                        <h6 class="fw-700 ">
                                                                            <p class="m-0">Fans Section</p>
                                                                            {{$ticket->fan_section}}
                                                                        </h6>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flight_search_right">
                                                            <div class="row">
                                                                <div class="col-lg-6"><h2 style="font-size: 20px"><b>${{$ticket->price}}</b></h2> </div>
                                                                <div class="col-lg-6"><h2><sup style="font-size: 8px">Per Ticket</sup></h2></div>
                                                            </div>
                                                            {{-- <h2 style="font-size: 20px"><b>${{$ticket->price}}</b><sup style="font-size: 8px">Per Ticket</sup></h2> --}}
                                                            {{-- <a class="btn btn-primary" href="{{ route('buyer.ticket.detail',['eventlisting_id' => $events->id,'ticketid' => $ticket->id, 'sellerid' => $ticket->user_id]) }}">View Ticket Detail</a> --}}
                                                            <a class="@if($ticket->quantity != 0) btn btn_theme btn_sm mb-2 @else btn btn-danger w-100  @endif" href="@if($ticket->quantity > 0)
                                                                {{ route('buyer.ticket.checkout',['eventlisting_id' => $ticket->eventlisting_id,'ticketid' => $ticket->id, 'sellerid' => $ticket->user_id]) }}@endif " >
                                                                @if($ticket->quantity == 0) SOLD @else Select Ticket
                                                                    @endif 
                                                            </a>
                                                            <p> @if ($ticket->book_eticket === "Yes")
                                                                @if ($ticket->quantity != 0)
                                                                <a href="#" class="text-danger" >Instant Download</a>
                                                                    {{-- <a href="{{ route('Pdftemplate',['eventlisting_id' => $events->id,'ticketid' => $ticket->id] ) }}" class="text-danger" >Ticket PDF</a> --}}
                                                                @endif
                                                            @endif</p>
                                                        </div>
                                                    </div>
                                                    @endif
                                                @endforeach
                                        </div>
                                    </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@include('auth.partials.footer')
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
