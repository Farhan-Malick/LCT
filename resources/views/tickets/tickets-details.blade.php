<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/common.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/sellticket.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Sell Tickets - LAST CHANCE TICKET</title>
</head>

<body>
    @include("auth.partials.darkheader")
    <section class="section-two">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-9">
                    <form action="{{route('seller.ticketlisting.store',$EventListing->id)}}" method="post">
                    @csrf
                        <!-- alert start here -->
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <i class="bi bi-info-circle me-3"></i>
                            <div>You can edit your ticket details and price later</div>
                        </div>
                        <!-- cards-row starts here  -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="fw-700">Choose Ticket Type</h4>
                                <input type="hidden" id="ticket-type" name="ticket_type" value="paper-ticket" />
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card shadow-sm mb-3 select-card select-active" data-ticket="paper-ticket">
                                            <div class="card-body py-5">
                                                <div class="card-subtitle">
                                                    <strong> Paper Tickets</strong>
                                                </div>
                                                <div class="card-description">Printed tickets, not in E-format
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card shadow-sm mb-3 select-card" data-ticket="e-ticket">
                                            <div class="card-body py-5">
                                                <div class="card-subtitle">
                                                    <strong>E-Tickets</strong>
                                                </div>
                                                <div class="card-description">
                                                    Electronic tickets in PDF format
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card shadow-sm mb-3 select-card" data-ticket="mobile-ticket">
                                            <div class="card-body py-5">
                                                <div class="card-subtitle">
                                                    <strong>Mobile Ticket</strong>
                                                </div>
                                                <div class="card-description">
                                                    You'll have Mobile Ticket via App
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h4 class="fw-700">Enter Number of Tickets</h4>
                                <div class="card p-4 mb-3 shadow-sm main-card br-10">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p>
                                                <i class="bi bi-info-circle-fill"></i>
                                                If seat numbers are specified on your tickets, all tickets must be
                                                consecutive. <br>
                                                For non-consecutive tickets, you must create separate listings.
                                            </p>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-2">
                                            <div class="card mb-3">
                                                <div class="card-body ticket-num-card cursor-pointer shadow-sm" data-tickets-val="1">
                                                    <h4>1</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-2">
                                            <div class="card mb-3">
                                                <div class="card-body ticket-num-card cursor-pointer shadow-sm" data-tickets-val="2">
                                                    <h4>2</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-2">
                                            <div class="card mb-3">
                                                <div class="card-body ticket-num-card cursor-pointer shadow-sm" data-tickets-val="3">
                                                    <h4>3</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-2">
                                            <div class="card mb-3">
                                                <div class="card-body ticket-num-card cursor-pointer shadow-sm" data-tickets-val="4">
                                                    <h4>4</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-2">
                                            <div class="card mb-3">
                                                <div class="card-body ticket-num-card cursor-pointer shadow-sm" data-tickets-val="5">
                                                    <h4>5</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-2">
                                            <div class="card mb-3">
                                                <div class="card-body ticket-num-card cursor-pointer shadow-sm" data-tickets-val="6">
                                                    <h4>6+</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="ticket-more-6" style="display:none">
                                            <input type="text" class="form-control" id="total-tickets" placeholder="Total Tickets" name="total_tickets">
                                            <small class="text-muted">Total tickets</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h4 class="fw-700"> Enter Seating Details</h4>
                                <div class="card p-4 mb-3 shadow-sm main-card br-10">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p>
                                                <i class="bi bi-info-circle-fill"></i>
                                                You are required to provide section, row and seat information if this
                                                information is available to you at the time of listing. If you do not have
                                                all of this information at present, you may list your tickets, but you must
                                                update your listing once you have this information. Listings can be updated
                                                using My Account. For help on locating seating details on your tickets, view
                                                examples.
                                            </p>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form">
                                                <div class="form-group">
                                                    <label for="section">Select Category</label>
                                                    <select class="form-select"
                                                        name="categories" value="">
                                                        <option selected disabled>Please Select Category</option>
                                                        @foreach($sellerCategories as $sellerCategory)
                                                        <option value="{{$sellerCategory->categories}}">{{$sellerCategory->categories}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="section">Sections</label>
                                                    <select class="form-select"
                                                        name="sections" value="">
                                                        <option selected disabled>Please Select Section</option>
                                                        @foreach($venue_sections as $venue_section)
                                                        <option value="{{$venue_section->id}}">{{$venue_section->sections}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="row">Rows</label>
                                                    <select class="form-select" name="row">
                                                        <option selected disabled>Please Select Row</option>
                                                        @foreach($venue_section_rows as $venue_section_row)
                                                        <option value="{{$venue_section_row->id}}">{{$venue_section_row->rows}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="seats">Seats</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" placeholder="From" name="seat_from">
                                                            <small class="text-muted">First seat</small>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" placeholder="To" name="seat_to">
                                                            <small class="text-muted">last seat</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">If you are unable to provide seating information please
                                                        select a reason why:</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            id="flexRadioDefault1" name="reason_seating_unable" value="The primary site has not provided me with this information">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            The primary site has not provided me with this information
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            id="flexRadioDefault2" name="reason_seating_unable" value="other" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Other
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <h4 class="fw-700">Enter Face Value</h4>
                                <div class="card mb-3 shadow-sm p-4 main-card br-10">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <p> <i class="bi bi-info-circle-fill me-2"></i>Face value is the price printed
                                                on the
                                                ticket, excluding any booking fees.
                                            </p>
                                        </div>
                                        <div class="col-md-6">

                                                <div class="form-group">
                                                    <select class="form-select" name = "currency">
                                                        <option selected disabled>Please Select Currency</option>
                                                        @foreach($currencies as $currency)
                                                        <option value="{{$currency->id}}">{{$currency->currency_type}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label for="">Amount per ticket</label>
                                                    <div class="input-group mb-3">

                                                        <span class="input-group-text">$</span>
                                                        <input type="text" class="form-control"
                                                            aria-label="Amount (to the nearest dollar)"
                                                            name="price" value="{{-- {{$tickets->price}} --}}">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- <div class="col-lg-12">
                                <h4 class="fw-700">Choose Ticket Type</h4>
                                <div class="card p-4 main-card mb-3 br-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><i class="bi bi-info-circle-fill me-2"></i>
                                                If you work for viagogo, or are the organiser of this event, you are
                                                required by section 90(6) <br>of the Consumer Rights Act to select it below:
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3 about-card">
                                                <div class="card-body">
                                                    <h5>Neither of These</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3 about-card">
                                                <div class="card-body">
                                                    <h5>Event Organiser</h5>
                                                    <p>You are responsible for organising or managing the event, or receive
                                                        some or all of the revenue from the event, or a person who is acting
                                                        on behalf of one of the above</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3 about-card">
                                                <div class="card-body">
                                                    <h5>You are an operator of <br> Last-chance-ticket</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3 about-card">
                                                <div class="card-body">
                                                    <p>You are a parent undertaking or a subsidiary undertaking in relation
                                                        to an operator of Last-chance-ticket</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3 about-card">
                                                <div class="card-body">
                                                    <p>You are employed or engaged by Last-chance-ticket</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3 about-card">
                                                <div class="card-body">
                                                    <p>You are acting on behalf of a person who is employed or engaged by
                                                        Last-chance-ticket</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> -->
                            <div class="col-lg-12">
                                <h4 class="fw-700">Select Restrictions on Use</h4>
                                <div class="card p-4 main-card mb-3 br-10">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p><i class="bi bi-info-circle-fill me-2"></i>
                                                If any of the following conditions apply to your tickets, please select them
                                                from the list below. If there is a restriction on the use of your ticket not
                                                shown here, please stop listing and <a href="">contact us</a>
                                            </p>
                                        </div>
                                        <div class="col-lg-12">

                                                <div class="form-group">
                                                    <div class="mb-3 form-check">
                                                        <input type="checkbox" class="form-check-input" name="ticket_restrictions" value="No Restrictions">
                                                        <label class="form-check-label" for="exampleCheck1">No
                                                            Restrictions</label>
                                                    </div>
                                                </div>
                                                <!-- <h6>Or</h6> -->
                                                <!-- <div class="row">
                                                    <div class="col-md-6 col-lg-4">
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label"
                                                                    for="exampleCheck1">Concession ticket - child</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label"
                                                                    for="exampleCheck1">Wheelchair user only</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1">Under 18
                                                                    Ticket</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1">Original
                                                                    Purchaser's ID must be shown</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4">
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label"
                                                                    for="exampleCheck1">Concession ticket - student</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1">Under 21
                                                                    Ticket</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1">Over 18
                                                                    Ticket</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1">Meetup
                                                                    with Seller</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1">Under
                                                                    15s accompanied by an adult</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4">
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label"
                                                                    for="exampleCheck1">Concession ticket - senior
                                                                    citizen</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1">21 and
                                                                    over Ticket</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1">No Under
                                                                    14s</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1">Resale
                                                                    not allowed</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-12">
                                <h4 class="fw-700">Select Required Ticket Details</h4>
                                <div class="card p-4 main-card mb-3 br-10">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p><i class="bi bi-info-circle-fill me-2"></i>
                                                If any of the following conditions apply to your tickets, you must select
                                                the corresponding options below
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-4">
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1"> Limited
                                                                    or restricted view</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1">
                                                                    Includes VIP pass</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1"> Alcohol
                                                                    free area</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1">Access
                                                                    to VIP Lounge</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4">
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1">Ticket
                                                                    and meal package</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1">Includes
                                                                    parking</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1">Standing
                                                                    Only</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4">
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1"> Aisle
                                                                    seat</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1">Side or
                                                                    rear view</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="mb-3 form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="exampleCheck1">
                                                                <label class="form-check-label"
                                                                    for="exampleCheck1">Restricted legroom</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div> -->
                            <!-- <div class="col-lg-12">
                                <h4 class="fw-700">Selling to people in the United Kingdom or Europe?</h4>
                                <div class="card p-4 main-card mb-3 br-10">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p><i class="bi bi-info-circle-fill me-2"></i>
                                                In order to sell to customer in the United Kingdom or Europe you must select
                                                if any of the below apply to you:
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3 about-card">
                                                <div class="card-body">
                                                    <p>Normal Seller</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3 about-card">
                                                <div class="card-body">
                                                    <p><strong>Trader</strong>
                                                        You sell tickets through a registered company, you are a sole
                                                        trader, you have a VAT number or you pay people to sell tickets on
                                                        your behalf
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mb-3 about-card">
                                                <div class="card-body">
                                                    <p><strong>I prefer not to provide this information</strong>
                                                        Your listings will not be purchasable by UK buyers</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> -->
                            <div class="col-lg-12">
                                <button class="btn primary-btn w-100 fw-700" type="submit">Continue</button>
                            </div>
                            {{-- <div class="container mt-3">
                                <a class="btn primary-btn w-100 fw-700" href="{{route('seller.ticket_price.index',$tickets->id)}}">View Details</a>
                            </div> --}}
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 order-md-last order-first">
                    <div class="card shadow-sm mb-3 type-card main-card br-10">
                        <div class="card-body">
                            <div class="card-title">
                                {{-- <h4>{{$ticketListing->title}}</h4> --}}
                                <h4>Ticket Detail</h4>
                            </div>
                            <p>
                                {{-- <strong>{{$tickets->event->start_time}}</strong><br>
                                <strong>{{$tickets->event->start_date}}</strong><br> --}}
                                Singapore National Stadium, Singapore, Singapore
                            </p>
                            <p class="ticket-type p-1 rounded-3">
                                <strong>Ticket Type: </strong>Paper Tickets
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-sm mb-3 card-success br-10">
                        <div class="card-body">
                            <h6>2 buyers are currently searching for tickets for this event. Now is a good time to
                                sell!</h6>
                        </div>
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
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll('.select-card').forEach(function(element) {
                element.addEventListener("click", (event) => {
                    document.querySelectorAll('.select-card').forEach((element) => element.classList.remove('select-active'));
                    event.currentTarget.classList.add('select-active');
                    const value = event.currentTarget.attributes['data-ticket'].value;
                    document.getElementById('ticket-type').value = value;
                });
            });

            document.querySelectorAll('.ticket-num-card').forEach(function(element) {
                element.addEventListener("click", (event) => {
                    document.querySelectorAll('.ticket-num-card').forEach((element) => element.classList.remove('select-active'));
                    event.currentTarget.classList.add('select-active');
                    const value =event.currentTarget.attributes['data-tickets-val'].value;
                    if(value === "6"){
                        document.getElementById('ticket-more-6').style.display = "block";
                        document.getElementById('total-tickets').required = true;
                        document.getElementById('total-tickets').value = "";
                    } else {
                        document.getElementById('ticket-more-6').style.display = "none";
                        document.getElementById('total-tickets').required = false;
                        document.getElementById('total-tickets').value = value;
                    }
                });
            });
        });
    </script>
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
