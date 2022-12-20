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
                <div class="row my-3">
                    <div class="col-lg-12">
                        <h3 class="text-center m-3">
                            @foreach($events as $event)
                            {{$event->title}}
                            @endforeach
                        </h3>
                    </div>
                    <div class="col-lg-12">
                        <div
                            class="alert alert-primary d-flex align-items-center"
                            role="alert"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                fill="currentColor"
                                class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2"
                                viewBox="0 0 16 16"
                                role="img"
                                aria-label="Warning:"
                            >
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                                />
                            </svg>

                            <div>
                                You do not need to have received your tickets
                                yet in order to sell them on LCT!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <h3>International Events</h3>
                            </div>
                            @foreach($eventListings as $eventListing)
                            <div
                                class="card-body"
                                style="border-bottom: 3px solid #61c3e3"
                            >
                                <div class="row">
                                    <div class="col-md-2 col-lg-2">
                                        <p>
                                            <br />
                                            {{-- {{$eventListing->event->start_time}} <br />
                                            <br />
                                            {{$eventListing->event->start_date}} <br /> --}}

                                        </p>
                                    </div>
                                    <div class="col-md-10 col-lg-10">
                                        <div
                                            class="card-content d-md-flex justify-content-between"
                                        >
                                            <div class="card-des">
                                                <h5>{{$eventListing->title}}</h5>
                                                <p></p>
                                                <div
                                                    class="alert alert-danger"
                                                    role="alert"
                                                >
                                                    <strong
                                                        >Only
                                                        {{-- {{$eventListing->quantity}} --}}
                                                        available
                                                        tickets.</strong
                                                    >
                                                    Creating a listing now will
                                                    increase the chances of your
                                                    tickets selling.
                                                </div>
                                            </div>
                                            <div
                                                class="card-action d-flex flex-column text-end"
                                            >
                                                <span>From</span>
                                                {{-- <span>${{$ticket->price}}</span> --}}

                                                <a href="{{route('seller.ticket.index',$eventListing->id)}}" class="btn primary-btn"> Sell Tickets</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- <div class="card-body" style="border-bottom: 3px solid #61c3e3;">
                            <div class="row">
                                <div class="col-md-2 col-lg-2">
                                    <p>Mon <br> 8 Nov 2022 <br> 20:00</p>
                                </div>
                                <div class="col-md-10 col-lg-10">
                                    <div class="card-content d-md-flex justify-content-between">
                                        <div class="card-des">
                                            <h5>Bad Bunny</h5>
                                            <p> Singapore National Stadium Singapore, Singapore</p>
                                        </div>
                                        <div class="card-action d-flex flex-column text-end">
                                            <span>From</span>
                                            <span>$200.00</span>
                                            <a class="btn primary-btn" href="{{URL("Sell-tickets/tickets-details")}}">Sell Tickets</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="border-bottom: 3px solid #61c3e3;">
                            <div class="row">
                                <div class="col-md-2 col-lg-2">
                                    <p>Mon <br> 8 Nov 2022 <br> 20:00</p>
                                </div>
                                <div class="col-md-10 col-lg-10">
                                    <div class="card-content d-md-flex justify-content-between">
                                        <div class="card-des">
                                            <h5>Bad Bunny</h5>
                                            <p> Singapore National Stadium Singapore, Singapore</p>
                                        </div>
                                        <div class="card-action d-flex flex-column text-end">
                                            <span>From</span>
                                            <span>$200.00</span>
                                            <a class="btn primary-btn" href="{{URL("Sell-tickets/tickets-details")}}">Sell Tickets</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
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
