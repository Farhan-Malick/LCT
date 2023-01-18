<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset("assets/styles/payments.css") }}">
        <link rel="stylesheet" href="{{asset('assets/styles/sellticket.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/styles/common.css') }}" />
        <link rel="stylesheet" href="{{asset('newAssets/assets/css/fontawesome.css')}}">
        <link rel="stylesheet" href="{{asset('newAssets/assets/css/templatemo-woox-travel.css')}}">
        <link rel="stylesheet" href="{{asset('newAssets/assets/css/owl.css')}}">
        <link rel="stylesheet" href="{{asset('newAssets/assets/css/animate.css')}}">
        <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
        <!-- Bootstrap icons CDN -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />
        <title>Last Chance Ticket - Buyer</title>
    </head>

<body>
@include("auth.partials.newHeader")
    <!-- tabs sections starts here  -->
    <section class="section-two" style="margin-top: 70px">
        <div class="container-fluid bg-white">
            <div class="row text-center tabs-row">
                <div class="col-md-4 col-lg-4 p-2">
                    <h5 class="tabs-title "><i class="bi bi-check-lg me-3"></i>1. Browse Events</h5>
                </div>
                <div class="col-md-4 col-lg-4 p-2">
                    <h5 class="tabs-title tabs-active"><i class="bi bi-ticket-fill me-3"></i>2. Choose Your Tickets</h5>
                </div>
                <div class="col-md-4 col-lg-4 p-2">
                    <h5 class="tabs-title "><i class="bi bi-pen-fill me-3"></i>3.Confirm Details</h5>
                </div>
            </div>
            <div class="row" style="background-color: #c3f1f5">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="ticket-img p-4">
                                <?php //dd($events); ?>
                                <img src="{{ asset('/uploads/events/thumbnail/').'/'.$events->thumbnail }}" height="150" width="150" alt="">
                            </div>
                        </div>
                        <div class="col-lg-10 p-4">
                            <div class="ticket-details">
                                <div class="ticket-title">
                                    <h4 class="secondary-text fw-700">{{$events->title}}</h4>
                                </div>
                                <div class="ticket-subtitle">
                                    <p class="fw-600 p-0 m-0">{{$events->vTitle}}</p>
                                </div>
                                <div class="ticket-date">
                                    <span>{{$events->start_date}}</span>
                                </div>
                                <div class="current-date d-flex flex-column">
                                    <span class="text-danger fw-700">{{ get_when($events->start_date) }}</span>
                                    <span> (More {{$events->title}} Events)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- how many tickets start here  -->
    <section class="section-three">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card p-4 mb-3 shadow-sm main-card br-10">
                        <h4 class="fw-700">How Many Tickets?</h4>
                        <div class="row select-ticket">
                            <div class="col-lg-12">
                                <p class="primary-text">
                                    <i class="bi bi-info-circle-fill me-2"></i>
                                    Select a quantity to quickly find the best tickets available for the number of
                                    people attending the event.
                                </p>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-2">
                                <div class="card mb-3">
                                    <div class="card-body ticket-num-card cursor-pointer shadow-sm @if(request()->get('qty') == 1 ) <?php echo 'select-active' ?> @endif" data-tickets-val="1">
                                        <h4>1</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-2">
                                <div class="card mb-3">
                                    <div class="card-body ticket-num-card cursor-pointer shadow-sm @if(request()->get('qty') == 2 ) <?php echo 'select-active' ?> @endif" data-tickets-val="2">
                                        <h4>2</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-2">
                                <div class="card mb-3">
                                    <div class="card-body ticket-num-card cursor-pointer shadow-sm @if(request()->get('qty') == 3 ) <?php echo 'select-active' ?> @endif" data-tickets-val="3">
                                        <h4>3</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-2">
                                <div class="card mb-3">
                                    <div class="card-body ticket-num-card cursor-pointer shadow-sm @if(request()->get('qty') == 4 ) <?php echo 'select-active' ?> @endif" data-tickets-val="4">
                                        <h4>4</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-md-3 col-lg-2">
                                <div class="card mb-3">
                                    <div class="card-body ticket-num-card cursor-pointer shadow-sm @if(request()->get('qty') == 5 ) <?php echo 'select-active' ?> @endif" data-tickets-val="5">
                                        <h4>5 +</h4>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-lg-12">
                                <form action="" method="post">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select tickets amount</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                    </select>
                                </form>
                            </div> --}}
                        </div>
                        {{-- <form method="get" id="qty-form">
                            <div class="row">

                                <input type="hidden" class="form-control" id="total-tickets" placeholder="Total Tickets" name="qty" value="@if(request()->get('qty')) <?= request()->get('qty')?> @endif">
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="search_text"  placeholder="Search Event Name" value="@if(request()->get('search_text')) <?= request()->get('search_text')?> @endif"/>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control" name="ticket_event"  placeholder="Select Event Name">
                                        <option disabled @if(request()->get('ticket_event') == null)selected @endif>Select Event</option>
                                        @foreach ($eventListings as $eventListing)
                                        <option value="{{ $eventListing->id }}" @if(request()->get('ticket_event') && request()->get('ticket_event')== $eventListing->id) selected @endif>{{ $eventListing->event_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <input type="submit" value="Search" class="btn btn primary-btn w-100"/>
                                </div>


                            </div>
                        </form> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- stadium map section starts here  -->
    <section class="section-four">
        <div class="container my-4">
                <div class="row ">
                    {{-- <div class="col-md-5">
                            <h4 class="tabs-title tabs-active  text-center p-3">VENUE MAP</h4>
                    </div>
                    <div class="col-md-7">
                        <h4 class="tabs-title tabs-active text-center p-3">Browse Tickets</h4>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="card mb-3 shadow-sm br-10">
                        <div class="card-body shadow-sm">
                            <img src="{{ asset('uploads/venues').'/'.$events->vImage }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7">
                    <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                        <i class="bi bi-info-circle-fill me-3"></i>You'll be seated together for seated sections
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @if(count($tickets) == 0)
                    <div>
                        <h5>No tickets available.</h5>
                    </div>
                    @endif
                    @foreach($tickets as $ticket)
                    <div class="card mb-3 p-2 br-10 shadow-sm ticket-cards">
                        <div class="row">
                            <div class="col-md-2 col-lg-2">
                                {{-- <img src="/uploads/events/thumbnail/{{$ticket->event->thumbnail}}" class="img-fluid" alt=""> --}}
                                <img src="{{asset('assets/images/t1.webp')}}" height="100px" width="100px" alt="">
                            </div>
                            <div class="col-md-7 col-lg-8">
                                <div class="ticket-title">
                                    <h4 class="fw-700">{{$ticket->event_name}}</h4>
                                    <h6 class="fw-700">Section: {{$ticket->sections}}, Row: {{$ticket->rows}}</h6>
                                    <p class="text-danger fw-600 m-0">@if($ticket->quantity > 0){{$ticket->quantity}} tickets remaining @endif @if($ticket->quantity == 0)SOLD @endif</p>
                                    <p class="m-0">in this listing on our site</p>
                                    {{-- <button class="btn btn-sm success-btn">Instant Download</button> --}}
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-2">
                                <div class="ticket-action-btns">
                                    <p class="m-0">${{$ticket->price}}</p>
                                    <p class="">per ticket</p>
                                    <a class="btn btn primary-btn w-100" href="@if($ticket->quantity > 0){{ route('buyer.ticket.checkout',['eventlisting_id' => $events->id,'ticketid' => $ticket->id, 'sellerid' => $ticket->user_id]) }}@endif @if($ticket->quantity == 0)javascript:void(0) @endif">Select</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="general-notes">
                        <h4 class="fw-700">General Notes</h4>
                        <div class="card shadow-sm mb-3 p-2 br-10">
                            <ul>
                                <li>All sales are final</li>
                                <li>Age restrictions may apply, please check with the venue for more details</li>
                                <li>Event dates and times are subject to change, it is up to you to check local listings
                                    for updates</li>
                                <li>After your purchase, you will receive a confirmation email with your ticket delivery
                                    details and timing</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card bg-dark mb-3 p-3 search-card">
                        <div class="card-body d-sm-flex d-block justify-content-between align-items-center">
                            <div>
                                <h3 class="text-light fw-700"><i class="bi bi-menu-button me-2"></i>Advanced search:
                                </h3>
                                <span class="text-light">Didn't find what you're looking for?</span>
                            </div>
                            <div>
                                <button class="btn btn-lg primary-btn my-2">Click Here</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include("auth.partials.footer")
    <script src="{{asset('newAssets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('newAssets/assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/tabs.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/popup.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/custom.js')}}"></script>
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
