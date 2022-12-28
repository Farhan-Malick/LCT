<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../../assets/styles/sellticket.css" />
        <link rel="stylesheet" href="../../assets/styles/common.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />
        <title>Sell Tickets</title>
    </head>

    <body>
        @include("auth.partials.darkheader")

        <section class="section-two primary-bg p-sm-5 p-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center text-light">
                            <h1 class="fw-700">
                                Sell your tickets on Last Chance Ticket
                            </h1>
                            <p>
                                Reach millions of buyers around the world
                                through the world's largest ticket marketplace
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-three">
            <div class="container">
                <div class="row my-2">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="" class="form-inline my-4">
                            <div class="input-group w-100">
                                <input
                                    type="search"
                                    class="form-control form-control-md banner-search"
                                    placeholder="Search for and event, venue or city"
                                />
                                <div class="input-group-append">
                                    <button
                                        class="btn primary-btn px-4"
                                        type="button"
                                    >
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="text__center">OR</div>
                        <h3 class="text-center my-4">
                            Choose from Popular Events
                        </h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-four">
            <div class="container">
                <div class="row my-4">
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card bg-danger">
                            <div
                                class="card-header text-center text-light fw-700"
                            >
                                <h5>Sports Tickets</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                @foreach($events_concert as $event)
                                <a
                                    href="{{
                                        route('event.category.ticket',$event->id)
                                    }}"
                                >
                                    <li class="list-group-item">
                                        {{$event->title}}
                                    </li>
                                </a>
                                @endforeach
                                <!-- <a href="{{URL('Sell-tickets/tickets-home')}}">
                                <li class="list-group-item">Two Friends</li>
                            </a>
                            <a href="{{URL('Sell-tickets/tickets-home')}}">
                                <li class="list-group-item">Maroon 5</li>
                            </a>
                            <a href="{{URL('Sell-tickets/tickets-home')}}">
                                <li class="list-group-item">Cold Play</li>
                            </a>
                            <a href="{{URL('Sell-tickets/tickets-home')}}">
                                <li class="list-group-item">Aryctic Monkeys</li>
                            </a> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card bg-success">
                            <div
                                class="card-header text-center text-light fw-700"
                            >
                                <h5>Concert Tickets</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                @foreach($events_sports as $event)
                                <a
                                    href="{{
                                        route('event.category.ticket',$event->id)
                                    }}"
                                >
                                    <li class="list-group-item">
                                        {{$event->title}}
                                    </li>
                                </a>
                                @endforeach
                                <!-- <a href="{{URL("Sell-tickets/tickets-home")}}">
                                <li class="list-group-item">Two Friends</li>
                            </a>
                            <a href="{{URL("Sell-tickets/tickets-home")}}">
                                <li class="list-group-item">Maroon 5</li>
                            </a>
                            <a href="{{URL("Sell-tickets/tickets-home")}}">
                                <li class="list-group-item">Cold Play</li>
                            </a>
                            <a href="{{URL("Sell-tickets/tickets-home")}}">
                                <li class="list-group-item">Aryctic Monkeys</li>
                            </a> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card bg-warning">
                            <div
                                class="card-header text-center text-light fw-700"
                            >
                                <h5>Theatre Tickets</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                @foreach($events_theatre as $event)
                                <a
                                    href="{{
                                        route('event.category.ticket',$event->id)
                                    }}"
                                >
                                    <li class="list-group-item">
                                        {{$event->title}}
                                    </li>
                                </a>
                                @endforeach
                                <!-- <a href="{{URL("Sell-tickets/tickets-home")}}">
                                <li class="list-group-item">Two Friends</li>
                            </a>
                            <a href="{{URL("Sell-tickets/tickets-home")}}">
                                <li class="list-group-item">Maroon 5</li>
                            </a>
                            <a href="{{URL("Sell-tickets/tickets-home")}}">
                                <li class="list-group-item">Cold Play</li>
                            </a>
                            <a href="{{URL("Sell-tickets/tickets-home")}}">
                                <li class="list-group-item">Aryctic Monkeys</li>
                            </a> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="card primary-bg">
                            <div
                                class="card-header text-center text-light fw-700"
                            >
                                <h5>Festival Tickets</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                @foreach($events_festival as $event)
                                <a
                                    href="{{
                                        route('event.category.ticket',$event->id)
                                    }}"
                                >
                                    <li class="list-group-item">
                                        {{$event->title}}
                                    </li>
                                </a>
                                @endforeach
                                <!-- <a href="{{URL("Sell-tickets/tickets-home")}}">
                                <li class="list-group-item">Two Friends</li>
                            </a>
                            <a href="{{URL("Sell-tickets/tickets-home")}}">
                                <li class="list-group-item">Maroon 5</li>
                            </a>
                            <a href="{{URL("Sell-tickets/tickets-home")}}">
                                <li class="list-group-item">Cold Play</li>
                            </a>
                            <a href="{{URL("Sell-tickets/tickets-home")}}">
                                <li class="list-group-item">Aryctic Monkeys</li>
                            </a> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Optional JavaScript; choose one of the two! -->
        @include("auth.partials.footer")
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="../../js/bootstrap.min.js"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    --></body>
</html>
