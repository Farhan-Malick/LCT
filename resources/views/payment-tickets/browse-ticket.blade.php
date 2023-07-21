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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Fontawesome css -->
    <!--<link rel="stylesheet" href="{{ asset('F_Assets/assets/css/fontawesome.all.min.css') }}" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('F_Assets/assets/css/owl.carousel.min.css') }}" />
    <!-- Rangeslider css -->
    <link rel="stylesheet" href="{{ asset('F_Assets/assets/css/nouislider.css') }}" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="{{ asset('F_Assets/assets/css/owl.theme.default.min.css') }}" />
    <!-- navber css -->
    <link rel="stylesheet" href="{{ asset('F_Assets/assets/css/navber.css') }}" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('F_Assets/assets/css/meanmenu.css') }}" />
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('F_Assets/assets/css/style.css') }}" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('F_Assets/assets/css/responsive.css') }}" />
    <!-- Favicon -->
    <!-- Bootstrap icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

    <title>Last Chance Ticket</title>

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
                                <img style="width:270px;
                                margin-top: 5px;
                            " src="{{asset('F_Assets/assets/img/logo1.png')}}" alt="logo">
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
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                    <a style="font-size: 14px" class="nav-link"
                                        href="{{ route('request.show') }}">Request Event</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL('/contact-us')}}">Contact us</a>
                                </li>
                                @auth
                                <li class="dropdown nav-item">
                                    <a style="font-size: 14px" class="nav-link dropdown-toggle" href="#"
                                        id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        My Account
                                    </a>
                                    <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item text-dark" href="{{ URL('/dashboard') }}">My
                                                Profile</a></li>
                                        <li><a class="dropdown-item text-dark"
                                                href="{{ URL('/dashboard') }}">Settings</a></li>
                                        <li class="nav-item">
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-link">Logout</button>

                                            </form>
                                        </li>
                                    </ul>
                                </li>

                                @endauth @guest
                                <li class="nav-item">
                                    <a style="font-size: 14px" class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                @endguest
                                <li class="nav-item">
                                    <a style="font-size: 14px" class="nav-link btn btn-sm primary-btn px-3"
                                        href="{{ URL('Sell-tickets') }}">Sell Tickets</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section id="common_banner" @isset($events->poster)
        style="background-image: url('{{ asset('uploads/eventListing/poster' . $events->poster) }}');
               padding: 130px 0 130px 0;
               background-repeat: no-repeat;
               background-size: cover;"
    @else
        style="background-image: url('{{asset('F_Assets/assets/img/banner-two-bg-2.png')}}');
               padding: 130px 0 130px 0;
               background-repeat: no-repeat;
               background-size: cover;"
    @endisset>
        <div class="container">
            <div class="row">
                <div id="marquee-container"></div>

                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <p class="text-light"><b class="banner-text">Last Chance Ticket is a ticket reselling
                                marketplace and not the primary ticket provider. Our website enables sellers to resell
                                tickets, which may be priced above or below face value.</b></p>

                        <h2><b style="font-size:23px" class="banner-text">{{$events->event_name}}</b></h2>
                        <p class="text-light"><b class="banner-text">{{$events->title }}</b></p>
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
                                                        aria-controls="oneway_flight" aria-selected="true"><b>
                                                            <h5 style="font-weight:600">Last Chance Ticket</h5>
                                                        </b></button>
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

                                                            <input type="hidden" class="form-control" id="total-tickets"
                                                                name="qty"
                                                                value="@if(request()->get('qty')) <?= request()->get('qty')?> @endif">
                                                            <div class="col-md-4 restrictionsDropdown">
                                                                <select class="form-control" name="ticket_type"

                                                                    onchange="this.form.submit()">
                                                                    <option disabled @if(request()->get('ticket_type')
                                                                        == null)selected @endif>Filter By Ticket Type
                                                                    </option>
                                                                    <option value="" @if(request()->get('ticket_type')
                                                                        && request()->get('ticket_type') !==
                                                                        'Paper-Ticket' && request()->get('ticket_type')
                                                                        && request()->get('ticket_type') !== 'E-Ticket'
                                                                        && request()->get('ticket_type') &&
                                                                        request()->get('ticket_type') !==
                                                                        'Mobile-Ticket')
                                                                        selected @endif
                                                                        ><a href="{{URL::current()}}"
                                                                            style=" margin-right:20px; text-decoration:none">All
                                                                            Tickets</a></option>
                                                                    <option value="Paper-Ticket" @if(request()->
                                                                        get('ticket_type') &&
                                                                        request()->get('ticket_type') == 'Paper-Ticket')
                                                                        selected @endif >Paper Ticket</option>

                                                                    <option value="E-Ticket" @if(request()->
                                                                        get('ticket_type') &&
                                                                        request()->get('ticket_type') == 'E-Ticket')
                                                                        selected @endif>E-Ticket</option>

                                                                    <option value="Mobile-Ticket" @if(request()->
                                                                        get('ticket_type') &&
                                                                        request()->get('ticket_type') ==
                                                                        'Mobile-Ticket')
                                                                        selected @endif>Mobile Ticket</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4 restrictionsDropdown">
                                                                <form method="get" id="qty-form">
                                                                    <div class="form-group">
                                                                        <select class="form-control"
                                                                            name="Restriction_filter"
                                                                            onchange="this.form.submit()">
                                                                            <option selected disabled>Filter by
                                                                                Restrictions</option>

                                                                            @foreach($restrictions as $all)
                                                                            <option
                                                                                value="{{$all->ticket_restrictions}}"
                                                                                @if(request()->get('Restriction_filter')
                                                                                && request()->get('Restriction_filter')
                                                                                == $all->ticket_restrictions)
                                                                                selected @endif
                                                                                >{{implode(' ',
                                                                                json_decode($all->ticket_restrictions,
                                                                                true))}}</option>

                                                                            @endforeach
                                                                            <option value="" @if(request()->
                                                                                get('Restriction_filter') &&
                                                                                request()->get('Restriction_filter') ==
                                                                                'all-tickets')
                                                                                selected @endif > <a
                                                                                    href="{{URL::current()}}"
                                                                                    style=" margin-right:20px; text-decoration:none">All
                                                                                    Tickets</a></option>
                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-md-4 restrictionsDropdown">
                                                                <form method="get" id="qty-form">
                                                                    <div class="form-group">
                                                                        <select class="form-control" name="qty"
                                                                            onchange="this.form.submit()">
                                                                            <option selected disabled>No. of Tickets in
                                                                                Listing</option>
                                                                            {{-- @foreach ($tickets as $all) --}}
                                                                            @foreach ($ticketsNoFilter as $all)
                                                                            @if ($all->quantity > 0)
                                                                            <option value="{{$all->quantity}}"
                                                                                @if(request()->get('qty') &&
                                                                                request()->get('qty') == $all->quantity)
                                                                                selected @endif
                                                                                >{{$all->quantity}}</option></a>
                                                                            @endif
                                                                            @endforeach
                                                                            <option value="">
                                                                                <a href="{{URL('ticket/{id}/view')}}"
                                                                                    style=" margin-right:20px; text-decoration:none">All
                                                                                    Tickets</a>
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-3">
                                                            <div class="col-md-12">
                                                                <span style="font-size: 15px; margin-right:20px">Sort By
                                                                    :</span>
                                                                <a href="{{URL::current()}}"
                                                                    style=" margin-right:20px; text-decoration:none">ALL</a>
                                                                <a href="{{URL::current()."
                                                                    ?sort=price_asc"}}"style=" margin-right:20px; text-decoration:none">PRICE
                                                                    : Low to High</a>
                                                                <a href="{{URL::current()."
                                                                    ?sort=price_desc"}}"style=" margin-right:20px; text-decoration:none">PRICE
                                                                    : High to Low</a>
                                                                <a href="{{URL::current()."
                                                                    ?sort=best_value"}}"style=" margin-right:20px; text-decoration:none">Best
                                                                    Value</a>
                                                                <a href="{{URL::current()."
                                                                    ?sort=newest"}}"style=" margin-right:20px; text-decoration:none">Newest</a>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="oneway_search_form">
                                                                <form method="get" id="qty-form">

                                                                    <div class="row select-ticket">

                                                                        <div class="col-sm-2 col-md-3 col-lg-2 mt-3 mt-3">
                                                                            <div class="cardNew btn_theme btn_md mb-3">
                                                                                <div class="text-center card-body ticket-num-card cursor-pointer shadow-sm"
                                                                                    style="@if(request()->get('qty') == 1 ) <?php echo 'background-color: #2B2540' ?> @endif"
                                                                                    data-tickets-val="1">
                                                                                    <h4 class="text-white">1</h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-2 col-md-3 col-lg-2 mt-3">
                                                                            <div class="cardNew btn_theme btn_md mb-3">
                                                                                <div class="text-center card-body ticket-num-card cursor-pointer shadow-sm"
                                                                                    style="@if(request()->get('qty') == 2 ) <?php echo 'background-color: #2B2540' ?> @endif"
                                                                                    data-tickets-val="2">
                                                                                    <h4 class="text-white">2</h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-2 col-md-3 col-lg-2 mt-3">
                                                                            <div class="cardNew btn_theme btn_md mb-3">
                                                                                <div id="button1"
                                                                                    class="text-center card-body ticket-num-card cursor-pointer shadow-sm"
                                                                                    style="@if(request()->get('qty') == 3 ) <?php echo 'background-color: #2B2540' ?> @endif"
                                                                                    data-tickets-val="3">
                                                                                    <h4 class="text-white">3</h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-2 col-md-3 col-lg-2 mt-3">
                                                                            <div class="cardNew btn_theme btn_md mb-3">
                                                                                <div class="text-center card-body ticket-num-card cursor-pointer shadow-sm"
                                                                                    style="@if(request()->get('qty') == 4 ) <?php echo 'background-color: #2B2540' ?> @endif"
                                                                                    data-tickets-val="4">
                                                                                    <h4 class="text-white">4</h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-2 col-lg-2">
                                                                            <div class="col-lg-12 mt-3">
                                                                                <div class="cardNew btn_theme btn_md mb-3">
                                                                                    <div class="text-center card-body ticket-card  cursor-pointer shadow-sm"
                                                                                        style="@if(request()->get('search-no-of-tickets')) <?php echo 'background-color: #2B2540' ?> @endif"
                                                                                        data-tickets-val="5">
                                                                                        <h4 class="text-white">5 +</h4>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12" id="ticket-more-5" style="display:none">
                                                            <form method="get" id="qty-form">
                                                                <div class="row height d-flex align-items-center">
                                                                    <div class="col-md-10">
                                                                        <div class="search">
                                                                            <input type="text"
                                                                                name="search-no-of-tickets"
                                                                                value="@if(request()->get('search-no-of-tickets')) <?= request()->get('search-no-of-tickets')?> @endif"
                                                                                class="form-control"
                                                                               >
                                                                            <i class="fa fa-search"></i>
                                                                            <button type="submit" value="Search"
                                                                                class="btn btn-primary">Search</button>
                                                                        </div>
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
            </div>
    </section>

    <section id="explore_area" class="">
        <div class="container">
            <div class="row mt-3">
                <div class="col-lg-12">
                    @if(session('TicketPrice'))
                    <script>
                        Swal.fire({
                                    icon: 'success',
                                    title: '{{ session('TicketPrice') }}',
                                    showConfirmButton: false,
                                    timer: 115000
                                 });
                    </script>
                    @endif
                    @if(session('NotEnough'))
                    <script>
                        Swal.fire({
                                    icon: 'success',
                                    title: '{{ session('NotEnough') }}',
                                    showConfirmButton: false,
                                    timer: 15000
                                 });
                    </script>
                    @endif
                    @if(session('deactivate'))
                    <script>
                        Swal.fire({
                                    icon: 'success',
                                    title: '{{ session('deactivate') }}',
                                    showConfirmButton: false,
                                    timer: 15000
                                 });
                    </script>
                    @endif
                    @if ($message = Session::get('deactivate'))
                    <div class="alert alert-warning alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                </div>
            </div>
            <div class="row mb-2 section_padding">

                <div class="col-lg-12">
                  <div class="mb-2">
                    <span style="font-size: 18px"><b>Categories : </b>
                  </div>
                      @foreach ($colors as $key => $dbValues)
                        @if ($key === 0)
                          <div class="category-item ">
                            <span class="category-circle red" ></span>
                            <span class="category-text">{{$dbValues->type_cat}}</span>
                          </div>
                        @endif
                        @if ($key === 1)
                          <div class="category-item ">
                            <span class="category-circle yellow"></span>
                            <span class="category-text">{{$dbValues->type_cat}}</span>
                          </div>
                        @endif
                        @if ($key === 2)
                          <div class="category-item ">
                            <span class="category-circle blue"></span>
                            <span class="category-text">{{$dbValues->type_cat}}</span>
                          </div>
                        @endif
                        @if ($key === 3)
                          <div class="category-item ">
                            <span class="category-circle green"></span>
                            <span class="category-text">{{$dbValues->type_cat}}</span>
                          </div>
                        @endif
                        @if ($key === 4)
                          <div class="category-item ">
                            <span class="category-circle grey"></span>
                            <span class="category-text">{{$dbValues->type_cat}}</span>
                          </div>
                        @endif
                        @if ($key === 5)
                          <div class="category-item ">
                            <span class="category-circle chartreuse"></span>
                            <span class="category-text">{{$dbValues->type_cat}}</span>
                          </div>
                        @endif
                        @if ($key === 6)
                          <div class="category-item ">
                            <span class="category-circle tomato"></span>
                            <span class="category-text">{{$dbValues->type_cat}}</span>
                          </div>
                        @endif
                        @if ($key === 7)
                          <div class="category-item ">
                            <span class="category-circle salmon"></span>
                            <span class="category-text">{{$dbValues->type_cat}}</span>
                          </div>
                        @endif
                        @if ($key === 8)
                          <div class="category-item ">
                            <span class="category-circle crimson"></span>
                            <span class="category-text">{{$dbValues->type_cat}}</span>
                          </div>
                        @endif
                        @if ($key === 9)
                          <div class="category-item ">
                            <span class="category-circle darkgoldenrod"></span>
                            <span class="category-text">{{$dbValues->type_cat}}</span>
                          </div>
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
                        <div class="mb-2">
                            <i class="fa-solid fa-eye" style="color: blue; font-size: 18px;"></i>
                            <span id="viewerCount" style="font-weight: bold; "></span> looking Now
                        </div>
                        <div class="card mb-3 shadow-sm br-10">
                            <div class="card-body shadow-sm">
                                <h5 class="mb-3">Filter By Category</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="get" id="qty-form">
                                            <div class="form-group">
                                                <select class="form-select form-control-lg" name="Cat_filter"
                                                    onchange="this.form.submit()">
                                                    <option selected disabled>SEARCH BY CATEGORY</option>
                                                    <option value="" @if(request()->get('Cat_filter') &&
                                                        request()->get('Cat_filter'))
                                                        selected @endif > <a href="{{URL::current()}}"
                                                            style=" margin-right:20px; text-decoration:none">All
                                                            Tickets</a></option>
                                                    @foreach ($categoriesFromTicketListing as $all)
                                                    <option value="{{$all->type_cat}}" @if(request()->get('Cat_filter')
                                                        && request()->get('Cat_filter') == $all->type_cat)
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
                                <div class="flight_search_items border text-dark"
                                    style="border-radius: 12px; margin-bottom:20px ;">
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
                                        <div class="flight_multis_area_wrapper">
                                            <div class="flight_search_left">
                                                <div class="ticket text-center" style="width:50%">
                                                    <img src="{{asset('assets/images/t1.webp')}}" class="" alt="img">
                                                </div>
                                                <div class="flight_right_arrow">
                                                    <p>Category:</p>
                                                    <h6>
                                                        {{$ticket->type_cat}}
                                                    </h6>
                                                    <p>Section: </p>
                                                    <h6>{{$ticket->type_sec}}</h6>
                                                    @if ($ticket->type_row !== null)
                                                    <h6> <span class="TicketRow">Row:</span>
                                                        {{$ticket->type_row}}</h6>
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="flight_search_middel">
                                                <div class="flight_search_destination">
                                                    <p>Tickets</p>
                                                    <h6>No of Tickets {{$ticket->quantity}}</h6>
                                                    @if ($ticket->ticket_benefits !== "[null]")
                                                    <p class="m-0 benefits">Benefits</p>
                                                    <h6 class="fw-700 benefits2">
                                                        {{implode(' ', json_decode($ticket->ticket_benefits))}}
                                                    </h6>
                                                    @endif
                                                    <p class="m-0">Restriction</p>
                                                    <h6>{{implode(' ', json_decode($ticket->ticket_restrictions,
                                                        true))}}</h6>
                                                    <!--<h6 class="fw-700 ">{{$ticket->ticket_restrictions}}</h6>-->

                                                </div>
                                                <div class="flight_search_destination">
                                                    <p class="type pt-3">Ticket-Type : </p>
                                                    <h6 class="type2">{{$ticket->ticket_type}}</h6>

                                                    @if($ticket->eTitle == "Football" || $ticket->eTitle == "Cricket")
                                                    <h6 class="fw-700  d-none-mobile">
                                                        <p class="m-0">Fans Section</p>
                                                        {{$ticket->fan_section}}
                                                    </h6>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flight_search_right">

                                        <h2><b>${{$ticket->price}}</b></h2>

                                        @if($ticket->quantity != 0)
                                        <?php
                                                $route = route('buyer.ticket.checkout', [
                                                    'eventlisting_id' => $ticket->eventlisting_id,
                                                    'ticketid' => $ticket->id,
                                                    'sellerid' => $ticket->user_id,
                                                ]);
                                                $url = $route . '?selectedQuantity=' . $selectedQuantity;
                                                $redirectResponse = redirect()->to($url);
                                        ?>
                                        <a class="btn btn_theme btn_sm mb-2"
                                            href="{{ $redirectResponse->getTargetUrl() }}">
                                            Select Ticket
                                        </a>
                                        @else
                                        <a class="btn btn-danger w-100">SOLD</a>
                                        @endif
                                        <br>
                                        <span class="spen"> @if ($ticket->book_eticket === "Yes")
                                            @if ($ticket->quantity != 0)
                                            <a href="#" class="text-danger instact">Instant Download</a>
                                            {{-- <a
                                                href="{{ route('Pdftemplate',['eventlisting_id' => $events->id,'ticketid' => $ticket->id] ) }}"
                                                class="text-danger">Ticket PDF</a> --}}
                                            @endif
                                            @endif</span>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js"
        integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
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
    <script>
        const marqueeContainer = document.getElementById('marquee-container');
      const marquee = document.createElement('div');
      marquee.id = 'marquee';

      const h2 = document.createElement('h2');
      h2.id = 'textofMarquee';
      h2.style.color = '#ebd6f9';
      h2.style.textShadow = '2px 2px #040009';
      h2.innerHTML = '<b>Hurray! You are in the right place  <span class="" style="color: #f3589e; text-shadow: 2px 2px #000000;">*  100% customer satisfaction  *</span>  We value every customer <span  style="color: #f3589e; text-shadow: 2px 2px #000000;" class="">* We guarantee your entry *</span> 24/7 Customer Support. </b>';
      marquee.appendChild(h2);
      marqueeContainer.appendChild(marquee);
    </script>
    <script>
        // Function to update the viewer count
        function updateViewerCount() {
            var viewers;

            // Check if the $tickets2 object is not null
            @if ($tickets2)
                // Check if it's before 4 days of the event
                var currentDate = new Date();
                var eventDate = new Date("{{ $tickets2->event_date }}"); // Replace with your event date variable
                var timeDifference = eventDate.getTime() - currentDate.getTime();
                var daysDifference = Math.ceil(timeDifference / (1000 * 3600 * 24));

                // Check if it's during the night of the event
                var currentHour = currentDate.getHours();
                var eventHour = eventDate.getHours();
                var isNight = currentHour >= eventHour && currentHour < eventHour + 8; // Assumes 8 hours as the duration of the night

                if (daysDifference <= 4) {
                    if (isNight) {
                        // Generate a random number of viewers between 50 and 100
                        viewers = Math.floor(Math.random() * 51) + 50;
                    } else {
                        // Generate a random number of viewers between 125 and 300
                        viewers = Math.floor(Math.random() * 176) + 125;
                    }
                } else {
                    // Generate a random number of viewers between 50 and 125
                    viewers = Math.floor(Math.random() * 76) + 50;
                }

                // Update the viewer count element with the new count
                document.getElementById("viewerCount").innerHTML = viewers + " viewers";
            @endif
        }
        // Initial update
        updateViewerCount();
        // Update the viewer count every 5 seconds (15000 milliseconds)
        setInterval(updateViewerCount, 15000);
    </script>
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

        $(document).ready(function(){
        $(".cardNew > div").click(function() {
            $(".cardNew > div").css("background-color", "#22b3c1");
            $(this).css("background-color", "#2B2540");
        });
        });

    </script>

</body>

</html>
