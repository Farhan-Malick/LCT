<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/styles/sellticket.css">
    <link rel="stylesheet" href="../../assets/styles/common.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>sell-tickets</title>
</head>

<body>
    @include("auth.partials.darkheader")
    <section class="section-two">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-9">
                    <!-- alert start here -->
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <i class="bi bi-info-circle me-3"></i>
                        <div>You can edit your ticket details and price later</div>
                    </div>
                    <!-- cards-row starts here  -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 class="fw-700">Choose Ticket Type</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card shadow-sm mb-3 select-card select-active">
                                        <div class="card-body py-5">
                                            <div class="card-subtitle">
                                                <strong> Paper Tickets</strong>
                                            </div>
                                            <div class="card-description">Printed tickets, not in electronic format
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card shadow-sm mb-3 select-card">
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
                            </div>
                        </div>
                        <!-- <div class="col-lg-12">
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
                                            <div class="card-body ticket-num-card cursor-pointer shadow-sm">
                                                <h4>1</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-2">
                                        <div class="card mb-3">
                                            <div class="card-body ticket-num-card cursor-pointer shadow-sm">
                                                <h4>2</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-2">
                                        <div class="card mb-3">
                                            <div class="card-body ticket-num-card cursor-pointer shadow-sm">
                                                <h4>3</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-2">
                                        <div class="card mb-3">
                                            <div class="card-body ticket-num-card cursor-pointer shadow-sm">
                                                <h4>4</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-2">
                                        <div class="card mb-3">
                                            <div class="card-body ticket-num-card cursor-pointer shadow-sm">
                                                <h4>5</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-md-3 col-lg-2">
                                        <div class="card mb-3">
                                            <div class="card-body ticket-num-card cursor-pointer shadow-sm">
                                                <h4>6+</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <form action="{{route('seller.ticket.update',$tickets->id)}}" method="post">
                            @csrf
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
                                                <label for="section">Sections</label>
                                                <select class="form-select" 
                                                    name="sections" value="">
                                                    <option selected disabled>Please Select Section</option>
                                                    @foreach($venue_sections as $venue_section)
                                                    <option value="{{$venue_section->sections}}">{{$venue_section->sections}}</option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="row">Rows</label>
                                                <select class="form-select" 
                                                    name="row">
                                                    <option selected disabled>Please Select Row</option>
                                                    @foreach($venue_section_rows as $venue_section_row)
                                                    <option value="{{$venue_section_row->rows}}">{{$venue_section_row->rows}}</option>
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
                                                        id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        The primary site has not provided me with this information
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" 
                                                        id="flexRadioDefault2" checked>
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
                                                    <option value="{{$currency->currency_type}}">{{$currency->currency_type}}</option>
                                                    @endforeach
                                                    <!-- <option value="AUD" data-digits="2" data-symbol="A$">AU$ -
                                                        Australian Dollar</option>
                                                    <option value="BHD" data-digits="3" data-symbol="BHD">BHD - Bahraini
                                                        Dinar</option>
                                                    <option value="BOB" data-digits="2" data-symbol="Bs.">Bs. - Bolivian
                                                        Boliviano</option>
                                                    <option value="BRL" data-digits="2" data-symbol="R$">R$ - Brazilian
                                                        Real</option>
                                                    <option value="CAD" data-digits="2" data-symbol="C$">CA$ - Canadian
                                                        Dollar</option>
                                                    <option value="CHF" data-digits="2" data-symbol="CHF">CHF - Swiss
                                                        Franc</option>
                                                    <option value="CLP" data-digits="0" data-symbol="CL$">CL$ - Chilean
                                                        Peso</option>
                                                    <option value="CNY" data-digits="2" data-symbol="¥">CN¥ - Chinese
                                                        Yuan Renmibi</option>
                                                    <option value="COP" data-digits="0" data-symbol="COL$">COL$ -
                                                        Colombian Peso</option>
                                                    <option value="CZK" data-digits="0" data-symbol="Kč">Kč - Czech
                                                        Republic Koruna</option>
                                                    <option value="DKK" data-digits="0" data-symbol="DKK">DKK - Danish
                                                        Krone</option>
                                                    <option value="DOP" data-digits="2" data-symbol="RD$">RD$ -
                                                        Dominican Peso</option>
                                                    <option value="EUR" data-digits="2" data-symbol="€">€ - Euro
                                                    </option>
                                                    <option value="GBP" data-digits="2" data-symbol="£">£ - British
                                                        Pound Sterling</option>
                                                    <option value="HKD" data-digits="0" data-symbol="HK$">HK$ - Hong
                                                        Kong Dollar</option>
                                                    <option value="HRK" data-digits="2" data-symbol="HRK">HRK - Croatian
                                                        Kuna</option>
                                                    <option value="HUF" data-digits="0" data-symbol="Ft">Ft - Hungarian
                                                        Forint</option>
                                                    <option value="IDR" data-digits="0" data-symbol="Rp.">Rp. -
                                                        Indonesian Rupiah</option>
                                                    <option value="ILS" data-digits="2" data-symbol="₪">ILS - Israeli
                                                        New Shekel</option>
                                                    <option value="INR" data-digits="0" data-symbol="Rs.">Rs. - Indian
                                                        Rupee</option>
                                                    <option value="ISK" data-digits="0" data-symbol="kr.">kr. -
                                                        Icelandic Króna</option>
                                                    <option value="JPY" data-digits="0" data-symbol="¥">JP¥ - Japanese
                                                        Yen</option>
                                                    <option value="KRW" data-digits="0" data-symbol="₩">KRW - South
                                                        Korean Won</option>
                                                    <option value="KWD" data-digits="3" data-symbol="KWD">KWD - Kuwaiti
                                                        Dinar</option>
                                                    <option value="MUR" data-digits="2" data-symbol="Rs">Rs - Mauritian
                                                        Rupee</option>
                                                    <option value="MXN" data-digits="2" data-symbol="MX$">MX$ - Mexican
                                                        Peso</option>
                                                    <option value="MYR" data-digits="0" data-symbol="RM">MYR - Malaysian
                                                        Ringgit</option>
                                                    <option value="NOK" data-digits="0" data-symbol="NOK">NOK -
                                                        Norwegian Krone</option>
                                                    <option value="NZD" data-digits="2" data-symbol="NZ$">NZ$ - New
                                                        Zealand Dollar</option>
                                                    <option value="PEN" data-digits="2" data-symbol="S/.">S/. - Peruvian
                                                        Nuevo Sol</option>
                                                    <option value="PHP" data-digits="0" data-symbol="PHP">PHP -
                                                        Philippine Peso</option>
                                                    <option value="PLN" data-digits="2" data-symbol="zł">PLN - Polish
                                                        Zloty</option>
                                                    <option value="PYG" data-digits="0" data-symbol="Gs.">Gs. -
                                                        Paraguayan Guaraní</option>
                                                    <option value="QAR" data-digits="2" data-symbol="QAR">QAR - Qatari
                                                        Rial</option>
                                                    <option value="RON" data-digits="2" data-symbol="lei">lei - Romanian
                                                        Leu</option>
                                                    <option value="RUB" data-digits="0" data-symbol="RUB">RUB - Russian
                                                        Ruble</option>
                                                    <option value="SAR" data-digits="2" data-symbol="SAR">SAR - Saudi
                                                        Arabian Riyal</option>
                                                    <option value="SEK" data-digits="0" data-symbol="Kr">Kr - Swedish
                                                        Krona</option>
                                                    <option value="SGD" selected="" data-digits="2" data-symbol="S$">S$
                                                        - Singapore Dollar</option>
                                                    <option value="THB" data-digits="0" data-symbol="฿">THB - Thai Baht
                                                    </option>
                                                    <option value="TRY" data-digits="2" data-symbol="TL">TL - Turkish
                                                        Lira</option>
                                                    <option value="TWD" data-digits="0" data-symbol="NT$">NT$ - New
                                                        Taiwan Dollar</option>
                                                    <option value="UAH" data-digits="2" data-symbol="UAH">UAH -
                                                        Ukrainian Hryvnia</option>
                                                    <option value="USD" data-digits="2" data-symbol="$">US$ - United
                                                        States Dollar</option>
                                                    <option value="UYU" data-digits="2" data-symbol="$U">$U - Uruguayan
                                                        Peso</option>
                                                    <option value="VEF" data-digits="2" data-symbol="Bs.">VEF -
                                                        Venezuelan Bolívar</option>
                                                    <option value="ZAR" data-digits="0" data-symbol="R">R - South
                                                        African Rand</option> -->

                                                </select>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="">Amount per ticket</label>
                                                <div class="input-group mb-3">

                                                    <span class="input-group-text">$</span>
                                                    <input type="text" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)"
                                                        name="price" value="{{$tickets->price}}">
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
                            <h4 class="fw-700">Choose Ticket Type</h4>
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
                                                    <input type="checkbox" class="form-check-input" name="ticket_restrictions">
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
                            <button class="btn primary-btn w-100 fw-700" type="submit">conferm Details</button>
                        </div>
                    </form>
                        <div class="container mt-3">
                            <a class="btn primary-btn w-100 fw-700" href="{{route('seller.ticket_price.index',$tickets->id)}}">View Details</a>
                        </div>
                    </div>
                </div>
            
            
                <div class="col-lg-3 order-md-last order-first">
                    <div class="card shadow-sm mb-3 type-card main-card br-10">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>{{$tickets->title}}</h4>
                            </div>
                            <p>
                                <strong>{{$tickets->event->start_time}}</strong><br>
                                <strong>{{$tickets->event->start_date}}</strong><br>
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
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>