<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

        <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/styles/common.css') }}" />
        <!-- Bootstrap icons CDN -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />
        <title>Last-chance-ticket</title>
    </head>

    <body>
        <section class="section-one">
            <div class="banner">
            <div class="header">
                    <nav class="navbar navbar-expand-sm navbar-DARK shadow-lg">
                        <div class="container">
                            <div class="logo">
                                    {{-- <a class="navbar-brand" href="{{ URL("/") }}" style="color: skyblue; font-size:25px; text-decoration:none">Last Chance Ticket</a> --}}
                                   <a href="{{ URL("/") }}"> <img src="../../assets/images/logodark2.jpg" height="40" width="250" alt=""></a>
                            </div>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div
                                class="collapse navbar-collapse"
                                id="navbarSupportedContent"
                            >
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item active">
                                        <a
                                            class="nav-link"
                                            href="{{ route('request.show') }}"
                                            >Request Event</a
                                        >
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">US$</a>
                                    </li>

                                    @auth
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            My Account
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="{{ URL('/dashboard') }}">My Dashboard</a></li>
                                            <li><a class="dropdown-item" href="{{ URL('/dashboard/orders') }}">My Order</a></li>
                                            <li><a class="dropdown-item" href="{{ URL('/dashboard/listings') }}">My Listings</a></li>
                                            <li><a class="dropdown-item" href="{{ URL('/dashboard/settings') }}">Settings</a></li>
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
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"
                                            >Help Center</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link btn btn-sm primary-btn px-3"
                                            href="{{ URL('Sell-tickets') }}"
                                            >Sell Tickets</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
            </div>
            <div class="container-fluid pt-5">
                    <div class="row text-light banner-btns">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="col-lg-12">
                                <h6>
                                    Here is the last chance to be the member of world largest marketplace for tickets to live events.
                                    Prices are set by sellers and may be <center> below or above face value.</center>
                                </h6>
                            </div>
                           <div class="row">
                            <div class="col-sm-6 col-xl-3 my-3">
                                <a href="{{ route("tickets") }}" class="btn btn-sm btn-danger w-100">Concerts Tickets</a>
                            </div>
                            <div class="col-sm-6 col-xl-3 my-3">
                                <a href="{{ route("tickets") }}" class="d-block btn btn-sm btn-success w-100">Sports Tickets</a>
                            </div>
                            <div class="col-sm-6 col-xl-3 my-3">
                                <a href="{{ route("tickets") }}" class="btn btn-sm btn-warning w-100">Theater Tickets</a>
                            </div>
                            <div class="col-sm-6 col-xl-3 my-3">
                                <a href="{{ route("tickets") }}" class="btn btn-sm btn-primary w-100">Festival Tickets</a>
                            </div>
                            <div class="col-lg-12 my-4">
                                <marquee behavior="" direction="">
                                    <h5>Hurray! You are in the right place. 100% customer satisfaction. We value every single customers. We guarantee your entry. Secured payout.</h5>
                                </marquee>
                                <form action="" class="form-inline">
                                    <div class="input-group w-100">
                                        <input type="search" class="form-control form-control-lg"
                                            placeholder="Search for and event, venue or city">
                                        <div class="input-group-append">
                                            <button class="btn btn-lg search-btn px-3" type="button">
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
        </section>
        <div class="container m-5 ">
          <div class="row">
            <div class="col-md-6">
                <h1 style=" margin: 0px;
                position: relative;
                top: 50%;
                transform: translate(0,-50%);
                text-align: center;">
                    Request Your Event
                </h1>
            </div>
            <div class="col-md-6">
                <form method="post" action="{{ route('request.event') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <H3>LAST CHANCE TICKET EVENT FORM</H3>
                        <label for="InputEvent">Event Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="event"
                            aria-describedby="emailHelp"
                            placeholder="Enter Event To Add"
                        />
                    </div>
                    <div class="form-group mb-3">
                        <label for="InputCategory">Event Category</label>
                        <input
                            type="text"
                            class="form-control"
                            name="event_category"
                            placeholder="Event Category"
                        />
                    </div>
                    <button type="submit" class="btn btn-primary">Request</button>
                </form>
            </div>
          </div>
        </div>
        @include("auth.partials.footer")
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    --></body>
</html>
