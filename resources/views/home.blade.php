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
        <title>Last-chance-home</title>
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
                                    Prices are set by sellers and may be below or above face value.
                                </h6>
                            </div>
                           <div class="row">
                            <?php
                                $catClasses = ['btn-danger', 'btn-success', 'btn-warning', 'btn-primary'];    
                            ?>
                            @foreach ($categories as $cat)
                            <?php $key = array_rand($catClasses); ?>
                                <div class="col-sm-6 col-xl-3 my-3">
                                    <a href="{{ route("tickets.category", ['id'=>$cat->id]) }}" class="btn btn-sm <?= $catClasses[$key] ?> w-100">{{ $cat->name }}</a>
                                </div>
                            @endforeach
                            
                            {{-- <div class="col-sm-6 col-xl-3 my-3">
                                <a href="{{ route("tickets") }}" class="d-block btn btn-sm  w-100">Sports Tickets</a>
                            </div>
                            <div class="col-sm-6 col-xl-3 my-3">
                                <a href="{{ route("tickets") }}" class="btn btn-sm  w-100">Theater Tickets</a>
                            </div>
                            <div class="col-sm-6 col-xl-3 my-3">
                                <a href="{{ route("tickets") }}" class="btn btn-sm  w-100">Festival Tickets</a>
                            </div> --}}
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

        <section class="section-two">
            <div class="top-events mt-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-center mb-3">Top Events</h2>
                            <h3 class="text-center mb-4">
                                Top Events in worldwide
                            </h3>
                        </div>
                        @foreach ($events as $event)
                        <div class="col-md-6 col-lg-3">
                            <a href="{{ route('buyer.ticket.show',$event->id) }}">
                                <div class="card mb-2">
                                    <div class="" style="height: 200px" width="200px">
                                        <img
                                            src="{{ asset('uploads/events/poster/' . $event->poster) }}" 
                                            class="" height="200px"
                                            alt="..."
                                            />
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            {{ $event->title }}
                                        </h6>
                                        <span class="text-danger card-span">
                                            {{$event->start_time}}-{{$event->end_time}}<br>
                                            {{$event->start_date}}
                                            </span
                                        >
                                        <p class="card-text">
                                            {{$event->vTitle}}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach

                        {{-- <div class="col-lg-12">
                            <h3 class="text-center mb-4">
                                Top International Events
                            </h3>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="{{ URL('/tickets') }}">
                                <div class="card mb-4">
                                    <img
                                        src="../assets/images/hoston.jpg"
                                        class="card-img-top"
                                        alt="card_img"
                                        height="175px"
                                    />
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            Philadelphia Phillies at Houston
                                            Astros: World Series (Home Game 1,
                                            Series Game 1)
                                        </h6>
                                        <span class="text-danger card-span"
                                            >Friday, October 28 2022 7:03
                                            PM</span
                                        >
                                        <p class="card-text">
                                            Minute Maid Park, Houston, Texas,
                                            USA
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="{{ URL('/tickets') }}">
                                <div class="card mb-4">
                                    <img
                                        src="../assets/images/avril.jpg"
                                        class="card-img-top"
                                        alt="card_img"
                                        height="175px"
                                    />
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            Avril Lavigne & Paramore & My
                                            Chemical Romance - When We Were
                                            Young 2022 - Saturday (October 29)
                                        </h6>
                                        <span class="text-danger card-span"
                                            >Saturday, October 29 2022 12:00
                                            PM</span
                                        >
                                        <p class="card-text">
                                            Las Vegas Festival Grounds, Las
                                            Vegas, NV, USA
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="{{ URL('/tickets') }}">
                                <div class="card mb-4">
                                    <img
                                        src="../assets/images/topevent.jpg"
                                        class="card-img-top"
                                        alt="card_img"
                                        height="175px"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Chicago Bears at Dallas Cowboys
                                        </h5>
                                        <span class="text-danger card-span"
                                            >Sunday, October 30 2022 12:00
                                            PM</span
                                        >
                                        <p class="card-text">
                                            AT&T Stadium, Arlington, Texas, USA
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <a href="{{ URL('/tickets') }}">
                                <div class="card mb-4">
                                    <img
                                        src="../assets/images/cowboys.jpg"
                                        class="card-img-top"
                                        alt="card_img"
                                        height="175px"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Pittsburgh Steelers at Philadelphia
                                            Eagles
                                        </h5>
                                        <span class="text-danger card-span"
                                            >Sunday, October 30 2022 1:00
                                            PM</span
                                        >
                                        <p class="card-text">
                                            Lincoln Financial Field,
                                            Philadelphia, Pennsylvania, USA
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="section-three">
            <div class="find-best mt-5">
                <div class="container p-5">
                    <div class="row text-center text-light">
                        <div class="col-md-6 col-xl-4">
                            <h2>Find the perfect ticket</h2>
                            <p>
                                Search over 4,000,000 tickets to popular
                                concert, sport, theatre and festival events in
                                over 50 countries.
                            </p>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <h2>Get it delivered</h2>
                            <p>
                                We deliver to any country around the world,
                                including yours.
                            </p>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <h2>Enjoy the show</h2>
                            <p>
                                Join millions of happy customers that have
                                attended their favourite events, thanks to
                                Last-Chance-Ticket.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-four">
            <div class="stay-uptodate my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-xl-4">
                            <h1>Stay Up to Date</h1>
                        </div>
                        <div class="col-md-8 col-xl-8">
                            <form class="">
                                <div class="form-group">
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="exampleInputEmail2"
                                        placeholder="Email Address"
                                    />
                                    <small
                                        >Be the first to know about the latest
                                        events and special offers</small
                                    >
                                    <small>
                                        By signing up, you acknowledge and
                                        accept our <a href="">privacy policy</a>
                                        and consent to receiving emails.
                                    </small>
                                </div>
                                <button
                                    type="submit"
                                    class="btn btn-sm primary-btn px-5"
                                >
                                    Sign Up
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-five">
            <div class="footer text-light">
                <div class="container p-5">
                    <div class="row">
                        <div class="col-xl-3">
                            <h5>Regional Settings</h5>
                            <!-- Button trigger modal -->
                            <button
                                type="button"
                                class="btn footer-btn mb-2"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                            >
                                <i class="bi bi-globe me-2"></i>Country:
                                worl-wide
                            </button>
                            <!-- Button trigger modal -->
                            <button
                                type="button"
                                class="btn footer-btn mb-2"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                            >
                                <i class="bi bi-chat-fill me-2"></i> Language:
                                English (US)
                            </button>
                            <!-- Button trigger modal -->
                            <button
                                type="button"
                                class="btn footer-btn mb-2"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                            >
                                <i class="bi bi-cash-coin me-2"></i> Currency:
                                US$
                            </button>
                            <!-- Modal -->
                            <div
                                class="modal fade"
                                id="exampleModal"
                                tabindex="-1"
                                aria-labelledby="exampleModalLabel"
                                aria-hidden="true"
                            >
                                <div class="modal-dialog text-dark">
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
                            <h5>More</h5>
                            <ul>
                                <li><a href="">Help Center</a></li>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Affiliates</a></li>
                                <li><a href="">Careers</a></li>
                                <li><a href="">How do i contact?</a></li>
                                <li><a href="">Event Organizers</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-3">
                            <h5>Popular Events</h5>
                        </div>
                        <div class="col-xl-3">
                            <h5>Stay Up to Date</h5>
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
                            <p>
                                Copyright © Last-Chance-Ticket AG 2022
                                <a href="">Company Details</a><br />
                                Use of this web site constitutes acceptance of
                                the <a href="">Terms and Conditions</a> and
                                <a href="">Privacy Policy</a>
                                and <a href="">Cookies Policy</a> and
                                <a href="">Mobile Privacy Policy</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
