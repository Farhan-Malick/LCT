
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <!-- Bootstrap core CSS -->
    <link href="{{asset('newAssets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Additional CSS Files -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}" /> --}}
    <link rel="stylesheet" href="{{asset('assets/styles/common.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/sellticket.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <title>Sell Tickets - LAST CHANCE TICKET</title>
</head>

<body>
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
          <span class="dot"></span>
          <div class="dots">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    @include("auth.partials.darkheader")
    <section class="section-two reservation-form-sell" style="margin-top: 100px">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-9">
                    <form action="{{route('seller.ticketlisting.store',$EventListing->id)}}" method="post" id="reservation-form">
                    @csrf
                        <!-- alert start here -->
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <i class="bi bi-info-circle me-3"></i>
                            <div>You can edit your ticket details and price later</div>
                        </div>
                        <!-- cards-row starts here  -->
                        <div class="row ">
                            <div class="col-lg-12">
                                <h4 class="fw-700 mb-2">Choose Ticket Type</h4>
                                <input  type="hidden" id="ticket-type" name="ticket_type" value="paper-ticket" />
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card shadow-sm mb-3 select-card select-active" data-ticket="paper-ticket">
                                            <div class="card-body py-5">
                                                <div class="card-subtitle">
                                                    {{-- <input style="border:none" type="text" id="test" value="Paper Ticket"> --}}
                                                    <strong> Paper Tickets</strong>
                                                </div>
                                                <div class="card-description">Printed tickets, not in E-format
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div id="ticket_type" class="card shadow-sm mb-3 select-card" data-ticket="e-ticket">
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
                                        <div id="ticket_type" class="card shadow-sm mb-3 select-card" data-ticket="mobile-ticket">
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
                                                    <h5>1</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-2">
                                            <div class="card mb-3">
                                                <div class="card-body ticket-num-card cursor-pointer shadow-sm" data-tickets-val="2">
                                                    <h5>2</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-2">
                                            <div class="card mb-3">
                                                <div class="card-body ticket-num-card cursor-pointer shadow-sm" data-tickets-val="3">
                                                    <h5>3</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-2">
                                            <div class="card mb-3">
                                                <div class="card-body ticket-num-card cursor-pointer shadow-sm" data-tickets-val="4">
                                                    <h5>4</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-2">
                                            <div class="card mb-3">
                                                <div class="card-body ticket-num-card cursor-pointer shadow-sm" data-tickets-val="5">
                                                    <h5>5</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-2">
                                            <div class="card mb-3">
                                                <div class="card-body ticket-num-card cursor-pointer shadow-sm" data-tickets-val="6">
                                                    <h5>6+</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12" id="ticket-more-6" style="display:none">
                                            <input  type="text" class="form-control inputstyle" id="total-tickets" placeholder="Total Tickets" name="total_tickets">
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
                                            <p class="mb-3">
                                                <i class="bi bi-info-circle-fill "></i>
                                                     You are required to provide section, row and seat information.
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form">
                                                <div class="form-group">
                                                    <label for="row">Seating Area</label>
                                                    <select class="form-select" name="seated_area">
                                                        <option selected disabled>Please Select Row</option>
                                                        <option value="Seated Tickets">Seated Tickets</option>
                                                        <option value="Standing Tickets">Standing Tickets</option>
                                                        <option value="Free Seating">Free Seating</option>
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
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
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="section">Category</label>
                                                            <input  type="text" class="form-control inputstyle" placeholder="Type Category" name="type_cat" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="section">Section</label>
                                                            <select class="form-select"
                                                                name="sections" value="">
                                                                <option selected disabled>Please Select Section</option>
                                                                @foreach($venue_sections as $venue_section)
                                                                <option value="{{$venue_section->id}}">{{$venue_section->sections}}</option>
                                                                @endforeach
        
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="section">Section</label>
                                                            <input  type="text" class="form-control inputstyle" placeholder="Type Section" name="type_sec" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                               <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="row">Rows</label>
                                                            <select class="form-select" name="row">
                                                                <option selected disabled>Please Select Row</option>
                                                                @foreach($venue_section_rows as $venue_section_row)
                                                                <option value="{{$venue_section_row->id}}">{{$venue_section_row->rows}}</option>
                                                                @endforeach
        
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="section">Rows</label>
                                                            <input  type="text" class="form-control inputstyle" placeholder="Type Row" name="type_row">
                                                        </div>
                                                    </div>
                                               </div>
                                               
                                                <div class="form-group">
                                                    <label for="seats">Seats</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input  type="text" class="form-control inputstyle" placeholder="From First seat" name="seat_from">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input  type="text" class="form-control inputstyle" placeholder="To Last seat" name="seat_to">
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label for="">If you are unable to provide seating information please
                                                        select a reason why:</label>
                                                    <div class="form-check">
                                                        <input  class="form-check-input" type="radio"
                                                            id="flexRadioDefault1" name="reason_seating_unable" value="The primary site has not provided me with this information">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            The primary site has not provided me with this information
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input  class="form-check-input" type="radio"
                                                            id="flexRadioDefault2" name="reason_seating_unable" value="other" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Other
                                                        </label>
                                                    </div>
                                                </div> --}}

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
                                                    <label for="" class="mb-3">Amount per ticket</label>
                                                    <div class="input-group mb-3">
                                                        {{-- <span class="input-group-text">$</span> --}}
                                                        <input  type="text" class="form-control inputstyle"
                                                            aria-label="Amount (to the nearest dollar)"
                                                            name="price" value="">
                                                        {{-- <span class="input-group-text">.00</span> --}}
                                                    </div>
                                                </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-12">
                                <h4 class="fw-700">Select Restrictions on Use</h4>
                                <div class="card p-4 main-card mb-3 br-10">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="mb-3"><i class="bi bi-info-circle-fill me-2"></i>
                                                If any of the following conditions apply to your tickets, please select them
                                                from the list below. If there is a restriction on the use of your ticket not
                                                shown here, please stop listing and <a href="">contact us</a>
                                            </p>
                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="row">Restrictions</label>
                                                <select class="form-select"  name="ticket_restrictions">
                                                    <option selected disabled>Please Restriction</option>
                                                    <option value="No Restriction">No Restrictions</option>
                                                    <option value="Restricted View">Restricted View</option>
                                                    <option value="Age Limit 14+">Age Limit 14+</option>
                                                    <option value="Age Limit 18+">Age Limit 18+</option>
                                                    <option value="Age Limit 21+">Age Limit 21+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="row">Benefits</label>
                                                <select class="form-select"  name="ticket_benefits">
                                                    <option selected disabled>Please Choose Benefits</option>
                                                    <option value="Food and Meals"> Food and Meals</option>
                                                    <option value="Parking">Parking</option>
                                                    <option value="VIP Section">VIP Section</option>
                                                    <option value="Lounge Access">Lounge Access</option>
                                                    <option value="Early Entry">Early Entry</option>
                                                    <option value="Meet and Greet">Meet and Greet</option>
                                                </select>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-6">
                                            <div class="form-group">
                                                <div class="mb-3 form-check " style="border: 1px">
                                                    <label class="" for="">Select</label><br>
                                                   <div class="border 1px p-3">
                                                        <input   type="checkbox" class="form-check-input checkboxs " name="ticket_restrictions" value="No Restrictions">
                                                        <label class="form-check-label" for="exampleCheck1">No
                                                            Restrictions </label>
                                                   </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn primary-btn w-100 fw-700" type="submit">Continue</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 order-md-last order-first">
                    <div class="card shadow-sm mb-3 type-card main-card br-10">
                        <div class="card-body">
                            <div class="card-title">

                                {{-- <h2 class="mb-3">Ticket Detail</h2> --}}
                                <h2 class="mb-3">{{$EventListing->event_name}}</h2>
                            </div>
                            <p style="font-size: 14px">
                               <b>TIME : </b> <strong>{{$EventListing->start_time}} AM - {{$EventListing->end_time}} PM</strong><br>
                               <b>DATE : </b><strong>{{$EventListing->event_date}}</strong><br>
                               <b>VENUE : </b><strong>{{$EventListing->venue_name}}</strong><br>
                            </p>
                            <p style="font-size: 14px" class="p_type p-1 rounded-3" id="ticket-type-box">

                                {{-- <script>show()</script> --}}

                            </p>
                        </div>
                    </div>
                    <div class=" alert alert-primary br-10">
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
           <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('newAssets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('newAssets/assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/tabs.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/popup.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/custom.js')}}"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll('.select-card').forEach(function(element) {
                element.addEventListener("click", (event) => {
                    document.querySelectorAll('.select-card').forEach((element) => element.classList.remove('select-active'));
                    event.currentTarget.classList.add('select-active');
                    const value = event.currentTarget.attributes['data-ticket'].value;
                    document.getElementById('ticket-type-box').innerHTML = `<strong>TICKET-TYPE : </strong>${value}`
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
</body>

</html>
