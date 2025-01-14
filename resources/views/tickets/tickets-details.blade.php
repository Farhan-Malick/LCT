
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
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
    {{-- <link rel="stylesheet" href="{{asset('assets/styles/sellticket.css')}}"> --}}
    <!--<link rel="stylesheet" href="{{asset('newAssets/assets/css/fontawesome.css')}}">-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('newAssets/assets/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('F_Assets/assets/css/style.css') }}" />
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <title>Sell Tickets - LAST CHANCE TICKET</title>
    <style>
        
        .track-line {
            height: 2px !important;
            background-color: #61c3e3;
            opacity: 1;
            }

            .dot {
            height: 10px;
            width: 10px;
            margin-left: 3px;
            margin-right: 3px;
            margin-top: 0px;
            background-color: #61c3e3;
            border-radius: 50%;
            display: inline-block
            }

            .big-dot {
            height: 25px;
            width: 25px;
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 0px;
            background-color: #61c3e3;
            border-radius: 50%;
            display: inline-block;
            }

            .big-dot i {
            font-size: 12px;
            }

            .card-stepper {
            z-index: 0
            }
            .custom_info_icon .fa-info{
                color: #fff;
                background: #818090;
                width: 15px;
                height: 15px;
                border-radius: 4px;
                padding: 3px;
            }
    </style>

</head>

<body style="">
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

            </div>
            <div class="row mb-5">
                <div class="col-lg-12 ">
                    <form action="{{route('seller.ticketlisting.store',$EventListing->id)}}" enctype="multipart/form-data" method="post" id="reservation-form" >
                    @csrf
                        <!-- alert start here -->

                        <!-- cards-row starts here  -->
                            <div class="row ">
                                <div class="col-lg-12 " >
                                    <div class="card card-stepper shadow-sm main-card br-10" style="border-radius: 10px;">
                                    <div class="card-body p-4">

                                        <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex flex-column">
                                            <span class="lead fw-normal">Your Ticket Details</span>
                                            <span class="text-muted small">by LAST CHANCE TICKET</span>
                                        </div>
                                        <div>
                                            <a href="{{URL('/')}}" class="">
                                                <h3 style="font-family: Georgia, 'Times New Roman', Times, serif">LAST CHANCE TICKET</h3>
                                                {{-- <img src="{{asset('assets/images/logo1.png')}}" width="30px" height="40px" alt=""> --}}
                                            </a>
                                            {{-- <button class="btn btn-outline-primary" type="button">Track order details</button> --}}
                                            {{-- <span class="bg-danger text-white p-2" style=" border-radius: 30%" type="">{{ get_when($events->event_date) }}</span> --}}
                                        </div>
                                        </div>
                                        <hr class="my-4">

                                        <div class="d-flex flex-row justify-content-between align-items-center align-content-center">
                                        <span class="dot"></span>
                                        <hr class="flex-fill track-line"><span class="dot"></span>
                                        <hr class="flex-fill track-line"><span class="dot"></span>
                                        <hr class="flex-fill track-line"><span class="dot"></span>
                                        <hr class="flex-fill track-line"><span
                                            class="d-flex justify-content-center align-items-center big-dot dot">
                                            <i class="fa fa-check text-white"></i></span>
                                        </div>
                                        <div class="row d-flex flex-row justify-content-between align-items-center">

                                        <div class="col-md-2 d-flex flex-column align-items-start"><span><b>EVENT : </b> <br>{{$EventListing->event_name}}</span></div>
                                        <div class="col-md-2 d-flex flex-column "><span></span><b>TIME :</b>{{$EventListing->start_time}} - {{$EventListing->end_time}}<span></div>
                                        <div class="col-md-2 d-flex  flex-column  "><span><b>DATE : </b><br>({{$EventListing->event_date}})</span></div>
                                        <div class="col-md-2 d-flex flex-column "><span><b>VENUE : </b><br>{{$EventListing->venue_name}} , {{$EventListing->location}}</span></div>

                                        <div class="col-md-2 d-flex flex-column "><span id="ticket-type-box"></span></div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-5 ">

                                <div class="row">
                                    <div class="col-lg-12">
                                        @if ($errors->any())
                                        <div class="alert alert-danger" role="alert">
                                            <div class="alert-icon">
                                                <i class="flaticon-warning "></i>
                                            </div>
                                            <div class="alert-text">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div><br />
                                    @endif
                                    </div>
                                </div>

                                {{-- <input  type="hidden" id="ticket-type" name="ticket_type" value="Paper-Ticket" /> --}}
                                <div class="row ">
                                    <div class="col-md-12 card p-4 mb-3 shadow-sm main-card br-10">
                                        <h1 class="fw-700 mb-2 mt-3 text-center">Choose Ticket Type <span style="color: red">*</span></h1>
                                            <p style="none" class="text-center mb-2">
                                                <span class="custom_info_icon">
                                                    <i class="fas fa-info"></i>
                                                </span>
                                                
                                                Please Choose Ticket Type. Paper Ticket, Electronic tickets in PDF format, and You'll have Mobile Ticket via App<br>
                                            </p>
                                        <div class="form-group text-center @error('ticket_type') is-invalid @enderror"  name="ticket_type"  style="font-size:18px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                                           <div class="container">
                                            <input type="checkbox" onClick="ckChange(this)" class="m-2 select-card  border 1px " data-ticket="Paper-Ticket" value="Paper-Ticket" name="ticket_type" id="progress1"> Paper Ticket <sup class="checked"></sup>
                                            <input type="checkbox" onClick="ckChange(this)"  onchange="E_Ticket()"class="E_Ticket m-2 select-card  border 1px"  data-ticket="E-Ticket" value="E-Ticket" name="ticket_type" id="progress2"> E-Ticket <sup class="checked"></sup>
                                            <input type="checkbox" onClick="ckChange(this)" onchange="MobileTicket()" class="MobileTicket m-2 select-card  border 1px"  data-ticket="Mobile-Ticket" value="Mobile-Ticket" name="ticket_type" id="progress3">   Mobile Ticket <sup class="checked"></sup>
                                           </div>
                                           @error('ticket_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                            <style>
                                                 .checked{
                                                        color: red;
                                                        content: " *";
                                                        font-weight: bold;
                                                    }
                                            </style>
                                        <script>
                                        function ckChange(ckType){
                                            var ckName = document.getElementsByName(ckType.name);
                                            var checked = document.getElementById(ckType.id);

                                            if (checked.checked) {
                                            for(var i=0; i < ckName.length; i++){
                                                if(!ckName[i].checked){
                                                    ckName[i].disabled = true;
                                                }else{
                                                    ckName[i].disabled = false;
                                                }
                                            }
                                            }
                                            else {
                                            for(var i=0; i < ckName.length; i++){
                                                ckName[i].disabled = false;
                                            }
                                            }
                                        }
                                        </script>
                                        <div class="col-lg-12">
                                            <h4 class="fw-700 mt-4">Enter Number of Tickets <span style="color: red">*</span></h4>
                                            <div class="card p-4 mb-3 shadow-sm  br-10">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <p class="mb-2">
                                                            <span class="custom_info_icon">
                                                    <i class="fas fa-info"></i>
                                                </span>
                                                            <!--<i class="bi bi-info-circle-fill"></i>-->
                                                            Seating should be consecutive for the listing of more than one ticket. Please create separate listing for single tickets.
                                                        </p>
                                                    </div>
                                                    <input  type="hidden" id="no_of_ticket1" name="total_tickets" value="0" />
                                                    <div class="col-12" id="error-ticket-number" style="display:none;color: red;margin-bottom: 10px;font-size: 14px;">
                                                        <span>Please select number of tickets.</span>
                                                    </div>
                                                    <style>
                                                       
                                                    </style>
                                                    <div class="col-sm-3 col-md-3 col-lg-2">
                                                        <div class=" card mb-3">
                                                            <div  id="textcolor1" class="card-body  btn_theme2 ticket-num-card cursor-pointer shadow-sm" data-tickets-val="1" 
                                                                <h5 class="text-light">1</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-md-3 col-lg-2">
                                                        <div class="card mb-3">
                                                            <div  id="textcolor2" class="card-body  btn_theme2 ticket-num-card cursor-pointer shadow-sm" data-tickets-val="2" >
                                                                <h5 class="text-light">2</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-md-3 col-lg-2">
                                                        <div class="card mb-3">
                                                            <div  id="textcolor3" class="card-body btn_theme2 ticket-num-card cursor-pointer shadow-sm" data-tickets-val="3" >
                                                                <h5 class="text-light">3</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-md-3 col-lg-2">
                                                        <div class="card mb-3">
                                                            <div  id="textcolor4" class="card-body btn_theme2 ticket-num-card cursor-pointer shadow-sm" data-tickets-val="4" >
                                                                    <h5 class="text-light">4</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-md-3 col-lg-2">
                                                        <div class="card mb-3">
                                                            <div  id="textcolor5" class="card-body btn_theme2 ticket-num-card cursor-pointer shadow-sm" data-tickets-val="5" >
                                                                <h5 class="text-light">5</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 col-md-3 col-lg-2">
                                                        <div class="card mb-3">
                                                            <div  id="textcolor6" class="card-body btn_theme2 ticket-num-card cursor-pointer shadow-sm" data-tickets-val="6">
                                                                <h5 class="text-light">6+</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" id="ticket-more-6" style="display:none">
                                                        <input  type="text" class="form-control inputstyle" id="total-tickets" placeholder="Total Tickets" name="total_tickets">
                                                        {{-- <small class="text-muted">Total tickets</small> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <style>
                                 .active1 {
                                    /* padding: 5px; */
                                    background-color: #2B2540;
                                    color: white;
                                    }
                                    .active2 {
                                    /* padding: 5px; */
                                    background-color: #2B2540;
                                    color: white;
                                    }
                                    .active3 {
                                    /* padding: 5px; */
                                    background-color: #2B2540;
                                    color: white;
                                    }
                                    .active4,.select-active {
                                    /* padding: 5px; */
                                    background-color: #2B2540;
                                    transition: .3s;
                                    color: white;
                                    }
                                    .active5 {
                                    /* padding: 5px; */
                                    background-color: #2B2540;
                                    color: white;
                                    }
                                    .active6 {
                                    /* padding: 5px; */
                                    background-color: #2B2540;
                                    color: white;
                                    }
                            </style>
                           
                            <div class="col-lg-12">

                                <h4 class="fw-700"> Enter Seating Details<span style="color: red">*</span></h4>
                                <div class="card p-4 mb-3 shadow-sm main-card br-10">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="mb-3">
                                                <span class="custom_info_icon">
                                                    <i class="fas fa-info"></i>
                                                </span>
                                                <!--<i class="bi bi-info-circle-fill "></i>-->
                                                    Provide seating information
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form">
                                                <div class="form-group">
                                                    <label for="row">Seating Area</label>
                                                      <select class="form-select @error('ticket_type') is-invalid @enderror" value="{{ old('seated_area') }}"   autocomplete="seated_area" autofocus name="seated_area">
                                                        <option selected disabled>Please Select Row</option>
                                                        <option value="Seated Tickets">Seated Tickets</option>
                                                        <option value="Standing Tickets">Standing Tickets</option>
                                                        <option value="Free Seating">Free Seating</option>
                                                    </select>
                                                    @error('seated_area')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="section">Category</label>
                                                            <input  type="text" value="{{ old('type_cat') }}" class=" form-control inputstyle @error('type_cat') is-invalid @enderror" placeholder="Type Category" name="type_cat" >
                                                            @error('type_cat')
                                                                <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        
                                                    </div>
                                                   
                                                </div>
                                                <div class="row">
                                                    {{-- <div class="col-md-6">
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
                                                    </div> --}}
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="section">Section</label>
                                                                <input  type="text" value="{{ old('type_sec') }}"  class=" @error('type_sec') is-invalid @enderror form-control inputstyle" placeholder="Type Section" name="type_sec" >
                                                                @error('type_sec')
                                                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            </div>
                                                            
                                                        </div>
                                                </div>

                                               <div class="row">
                                                    {{-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="row">Rows</label>
                                                            <select class="form-select" name="row">
                                                                <option selected disabled>Please Select Row</option>
                                                                @foreach($venue_section_rows as $venue_section_row)
                                                                <option value="{{$venue_section_row->id}}">{{$venue_section_row->rows}}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div> --}}
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="section">Rows</label>
                                                            <input  type="text" value="{{ old('type_row') }}"  class="form-control inputstyle" placeholder="Type Row" name="type_row">

                                                        </div>
                                                    </div>
                                               </div>

                                                <div class="form-group">
                                                    <label for="seats">Seats</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input  type="text" class="form-control inputstyle" value="{{ old('seat_from') }}"   placeholder="From First seat" name="seat_from">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input  type="text" class="form-control inputstyle" placeholder="To Last seat" value="{{ old('seat_to') }}"  name="seat_to">
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($EventListing->tit == "Football" || $EventListing->tit == "Cricket")
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <h5 class="mb-4">FANS SECTION</h5>
                                                            <hr>
                                                            <label for="row" class="mb-2">{{$EventListing->event_name}}</label>
                                                            <select class="form-select" name="fan_section">
                                                                <option selected disabled>Please Select Fans Section</option>
                                                                @php
                                                                $arr = explode(' vs ', $EventListing->event_name);
                                                                @endphp
                                                                @foreach ($arr as $item)
                                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                                @endforeach
                                                                <option value="Dont know">Dont Know</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <div class="row">
                            <div class="col-lg-6">
                                <h4 class="fw-700">Enter Face Value<span style="color: red">*</span></h4>
                                <div class="card mb-3 shadow-sm p-4 main-card br-10">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <p> 
                                            <span class="custom_info_icon">
                                                    <i class="fas fa-info"></i>
                                                </span>
                                            <!--<i class="bi bi-info-circle-fill me-2"></i>-->
                                            Face value is the original price of the ticket
                                            </p>
                                        </div>
                                        <div class="col-md-6">

                                                <div class="form-group">
                                                    <select class="form-select" name = "currency">
                                                        <!--<option selected disabled>Please Select Currency</option>-->
                                                        <option value="$" >$</option>
                                                        {{-- @foreach($currencies as $currency)
                                                        <option value="{{$currency->id}}" >{{$currency->currency_type}}</option>
                                                        @endforeach --}}
                                                    </select>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <label for="" class="mb-3">Price per ticket</label>
                                                    <div class="input-group mb-3">
                                                        {{-- <span class="input-group-text">$</span> --}}
                                                        <input  type="text" value="{{ old('face_price') }}"  class="@error('face_price') is-invalid @enderror form-control inputstyle"
                                                            aria-label="Amount (to the nearest dollar)"
                                                            name="face_price" value="">
                                                            @error('face_price')
                                                            <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        {{-- <span class="input-group-text">.00</span> --}}
                                                    </div>
                                                   
                                                </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <h4 class="fw-700">Set Price<span style="color: red">*</span></h4>
                                <div class="card mb-3 shadow-sm p-4 main-card br-10">
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <p> 
                                            <span class="custom_info_icon">
                                                    <i class="fas fa-info"></i>
                                                </span>
                                            <!--<i class="bi bi-info-circle-fill me-2"></i>-->
                                            Set your price
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-select" aria-label="Default select example" name="currency" required>
                                                    <option value="$" >$</option>
                                                    {{-- @foreach($currencies as $currency)
                                                    <option value="{{$currency->id}}">{{$currency->currency_type}}</option>
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                                <div class="form-group mt-3">
                                                    <label for="" class="mb-4">Price per ticket</label>
                                        <div class="input-group mb-4">
                                            <span class="input-group-text">$</span>
                                            <input type="text" value="{{ old('price') }}"  id="price-field" name="price" style="height:40px" class="form-control @error('price') is-invalid @enderror"
                                                aria-label="Amount (to the nearest dollar)" value = "">
                                            <span class="input-group-text">.00</span>
                                            @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        
                                        {{-- @if($minValue != '' && $maxValue != '')<small >Tickets in this area are currently selling between <strong>{{$ticketCurrency->currency_type}} {{ $minValue }} and
                                            {{$ticketCurrency->currency_type}}
                                                {{ $maxValue }}</strong> per ticket. In order to sell your tickets quickly we
                                            suggest you sell
                                            your tickets at <strong>{{$ticketCurrency->currency_type}} {{ $minValue }}</strong> per ticket</small>@endif --}}
                                    </div>
                                                </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                           </div>
                           
                                <div class="row">
                                    <div class="col-lg-6 answer" >
                                        <h4 class="fw-700">Select Country<span style="color: red">*</span></h4>
                                        <div class="card mb-3 shadow-sm p-4 main-card br-10">
                                            <div class="row">
                                                <div class="col-md-12">
    
                                                    <p> 
                                                    <span class="custom_info_icon">
                                                    <i class="fas fa-info"></i>
                                                </span>
                                                    <!--<i class="bi bi-info-circle-fill me-2"></i>-->
                                                    Select the country where ticket is located and ready to ship.
                                                    </p>
                                                </div>
                                                <div class="col-md-8" >
                                                         <div class="form-group row m-b-10">
                                                            <label class="col-lg-12 text-lg-right col-form-label">Select Country :</label>
                                                                <select name="country"  value="{{ old('country') }}" autocomplete="country" autofocus class="form-control @error('country') is-invalid @enderror" id="country" >
                                                                    <option selected disabled>Select Country</option>
                                                                        <option name="country">Afghanistan</option>
                                                                        <option name="country">Åland Islands</option>
                                                                        <option  name="country" >Albania</option>
                                                                        <option  name="country" >Algeria</option>
                                                                        <option  name="country" >American Samoa</option>
                                                                        <option  name="country" >Andorra</option>
                                                                        <option  name="country" >Angola</option>
                                                                        <option  name="country" >Anguilla</option>
                                                                        <option  name="country" >Antarctica</option>
                                                                        <option  name="country" >Antigua & Barbuda</option>
                                                                        <option  name="country" >Argentina</option>
                                                                        <option  name="country" >Armenia</option>
                                                                        <option  name="country" >Aruba</option>
                                                                        <option  name="country" >Australia</option>
                                                                        <option  name="country" >Austria</option>
                                                                        <option  name="country" >Azerbaijan</option>
                                                                        <option  name="country" >Bahamas</option>
                                                                        <option  name="country" >Bahrain</option>
                                                                        <option  name="country" >Bangladesh</option>
                                                                        <option  name="country" >Barbados</option>
                                                                        <option  name="country" >Belarus</option>
                                                                        <option  name="country" >Belgium</option>
                                                                        <option  name="country" >Belize</option>
                                                                        <option  name="country" >Benin</option>
                                                                        <option  name="country" >Bermuda</option>
                                                                        <option  name="country" >Bhutan</option>
                                                                        <option  name="country" >Bolivia</option>
                                                                        <option  name="country" >Caribbean Netherlands</option>
                                                                        <option  name="country" >Bosnia & Herzegovina</option>
                                                                        <option  name="country" >Botswana</option>
                                                                        <option  name="country" >Bouvet Island</option>
                                                                        <option  name="country" >Brazil</option>
                                                                        <option  name="country" >British Indian Ocean Territory</option>
                                                                        <option  name="country" >Brunei</option>
                                                                        <option  name="country" >Bulgaria</option>
                                                                        <option  name="country" >Burkina Faso</option>
                                                                        <option  name="country" >Burundi</option>
                                                                        <option  name="country" >Cambodia</option>
                                                                        <option  name="country" >Cameroon</option>
                                                                        <option  name="country" >Canad</option>
                                                                        <option  name="country" >Cape Verde</option>
                                                                        <option  name="country" >Cayman Islands</option>
                                                                        <option  name="country" >Central African Republic</option>
                                                                        <option  name="country" >Chad</option>
                                                                        <option  name="country" >Chile</option>
                                                                        <option  name="country" >China</option>
                                                                        <option  name="country" >Christmas Island</option>
                                                                        <option  name="country" >Cocos (Keeling) Islands</option>
                                                                        <option  name="country" >Colombia</option>
                                                                        <option  name="country" >Comoros</option>
                                                                        <option  name="country" >Congo - Brazzaville</option>
                                                                        <option  name="country" >Congo - Kinshasa</option>
                                                                        <option  name="country" >Cook Islands</option>
                                                                        <option  name="country" >Costa Rica</option>
                                                                        <option  name="country" >Côte d’Ivoire</option>
                                                                        <option  name="country" >Croatia</option>
                                                                        <option  name="country" >Cuba</option>
                                                                        <option  name="country" >Curaçao</option>
                                                                        <option  name="country" >Cyprus</option>
                                                                        <option  name="country" >Czechia</option>
                                                                        <option  name="country" >Denmark</option>
                                                                        <option  name="country" >Djibouti</option>
                                                                        <option  name="country" >Dominica</option>
                                                                        <option  name="country" >Dominican Republic</option>
                                                                        <option  name="country" >Ecuador</option>
                                                                        <option  name="country" >Egypt</option>
                                                                        <option  name="country" >El Salvador</option>
                                                                        <option  name="country" >Equatorial Guinea</option>
                                                                        <option  name="country" >Eritrea</option>
                                                                        <option  name="country" >Estonia</option>
                                                                        <option  name="country" >Ethiopia</option>
                                                                        <option  name="country" >Falkland Islands (Islas Malvinas)</option>
                                                                        <option  name="country" >Faroe Islands</option>
                                                                        <option  name="country" >Fiji</option>
                                                                        <option  name="country" >Finland</option>
                                                                        <option  name="country" >France</option>
                                                                        <option  name="country" >French Guiana</option>
                                                                        <option  name="country" >French Polynesia</option>
                                                                        <option  name="country" >French Southern Territories</option>
                                                                        <option  name="country" >Gabon</option>
                                                                        <option  name="country" >Gambia</option>
                                                                        <option  name="country" >Georgia</option>
                                                                        <option  name="country" >Germany</option>
                                                                        <option  name="country" >Ghana</option>
                                                                        <option  name="country" >Gibraltar</option>
                                                                        <option  name="country" >Greece</option>
                                                                        <option  name="country" >Greenland</option>
                                                                        <option  name="country" >Grenada</option>
                                                                        <option  name="country" >Guadeloupe</option>
                                                                        <option  name="country" >Guam</option>
                                                                        <option  name="country" >Guatemala</option>
                                                                        <option  name="country" >Guernsey</option>
                                                                        <option  name="country" >Guinea</option>
                                                                        <option  name="country" >Guinea-Bissau</option>
                                                                        <option  name="country" >Guyana</option>
                                                                        <option  name="country" >Haiti</option>
                                                                        <option  name="country" >Heard & McDonald Island</option>
                                                                        <option  name="country" >Vatican City</option>
                                                                        <option  name="country" >Honduras</option>
                                                                        <option  name="country" >Hong Kong</option>
                                                                        <option  name="country" >Hungary</option>
                                                                        <option  name="country" >Iceland</option>
                                                                        <option  name="country" >India</option>
                                                                        <option  name="country" >Indonesia</option>
                                                                        <option  name="country" >Iran</option>
                                                                        <option  name="country" >Iraq</option>
                                                                        <option  name="country" >Ireland</option>
                                                                        <option  name="country" >Isle of Man</option>
                                                                        <option  name="country" >Israel</option>
                                                                        <option  name="country" >Italy</option>
                                                                        <option  name="country" >Jamaica</option>
                                                                        <option  name="country" >Japan</option>
                                                                        <option  name="country" >Jersey</option>
                                                                        <option  name="country" >Jordan</option>
                                                                        <option  name="country" >Kazakhsta</option>
                                                                        <option  name="country" >Kenya</option>
                                                                        <option  name="country" >Kiribati</option>
                                                                        <option  name="country" >North Korea</option>
                                                                        <option  name="country" >South Korea</option>
                                                                        <option  name="country" >Kosovo</option>
                                                                        <option  name="country" >Kuwait</option>
                                                                        <option  name="country" >Kyrgyzstan</option>
                                                                        <option  name="country" >Laos</option>
                                                                        <option  name="country" >Latvia</option>
                                                                        <option  name="country" >Lebanon</option>
                                                                        <option  name="country" >Lesotho</option>
                                                                        <option  name="country" >Liberia</option>
                                                                        <option  name="country" >Libya</option>
                                                                        <option  name="country" >Liechtenstein</option>
                                                                        <option  name="country" >Lithuania</option>
                                                                        <option  name="country" >Luxembourg</option>
                                                                        <option  name="country" >Macao</option>
                                                                        <option  name="country" >North Macedonia</option>
                                                                        <option  name="country" >Madagascar</option>
                                                                        <option  name="country" >Malawi</option>
                                                                        <option  name="country" >Malaysia</option>
                                                                        <option  name="country" >Maldives</option>
                                                                        <option  name="country" >Mali</option>
                                                                        <option  name="country" >Malta</option>
                                                                        <option  name="country" >Marshall Islands</option>
                                                                        <option  name="country" >Martinique</option>
                                                                        <option  name="country" >Mauritania</option>
                                                                        <option  name="country" >Mauritius</option>
                                                                        <option  name="country" >Mayotte</option>
                                                                        <option  name="country" >Mexico</option>
                                                                        <option  name="country" >Micronesia</option>
                                                                        <option  name="country" >Moldova</option>
                                                                        <option  name="country" >Monaco</option>
                                                                        <option  name="country" >Mongolia</option>
                                                                        <option  name="country" >Montenegro</option>
                                                                        <option  name="country" >Montserrat</option>
                                                                        <option  name="country" >Morocco</option>
                                                                        <option  name="country" >Mozambique</option>
                                                                        <option  name="country" >Myanmar (Burma)</option>
                                                                        <option  name="country" >Namibia</option>
                                                                        <option  name="country" >Nauru</option>
                                                                        <option  name="country" >Nepal</option>
                                                                        <option  name="country" >Netherlands</option>
                                                                        <option  name="country" >Curaçao</option>
                                                                        <option  name="country" >New Caledonia</option>
                                                                        <option  name="country" >New Zealand</option>
                                                                        <option  name="country" >Nicaragua</option>
                                                                        <option  name="country" >Niger</option>
                                                                        <option  name="country" >Nigeria</option>
                                                                        <option  name="country" >Niue</option>
                                                                        <option  name="country" >Norfolk Island</option>
                                                                        <option  name="country" >Northern Mariana Islands</option>
                                                                        <option  name="country" >Norway</option>
                                                                        <option  name="country" >Oman</option>
                                                                        <option  name="country" >Pakistan</option>
                                                                        <option  name="country" >Palau</option>
                                                                        <option  name="country" >Palestine</option>
                                                                        <option  name="country" >Panama</option>
                                                                        <option  name="country" >Papua New Guinea</option>
                                                                        <option  name="country" >Paraguay</option>
                                                                        <option  name="country" >Peru</option>
                                                                        <option  name="country" >Philippines</option>
                                                                        <option  name="country" >Pitcairn Islands</option>
                                                                        <option  name="country" >Poland</option>
                                                                        <option  name="country" >Portugal</option>
                                                                        <option  name="country" >Puerto Rico</option>
                                                                        <option  name="country" >Qatar</option>
                                                                        <option  name="country" >Réunion</option>
                                                                        <option  name="country" >Romania</option>
                                                                        <option  name="country" >Russia</option>
                                                                        <option  name="country" >Rwanda</option>
                                                                        <option  name="country" >St. Barthélemy</option>
                                                                        <option  name="country" >St. Helena</option>
                                                                        <option  name="country" >St. Kitts & Nevis</option>
                                                                        <option  name="country" >St. Lucia</option>
                                                                        <option  name="country" >St. Martin</option>
                                                                        <option  name="country" >St. Pierre & Miquelon</option>
                                                                        <option  name="country" >St. Vincent & Grenadines</option>
                                                                        <option  name="country" >Samoa</option>
                                                                        <option  name="country" >San Marino</option>
                                                                        <option  name="country" >São Tomé & Príncipe</option>
                                                                        <option  name="country" >Saudi Arabia</option>
                                                                        <option  name="country" >Senegal</option>
                                                                        <option  name="country" >Serbia</option>
                                                                        <option  name="country" >Serbia</option>
                                                                        <option  name="country" >Seychelles</option>
                                                                        <option  name="country" >Sierra Leone</option>
                                                                        <option  name="country" >Singapore</option>
                                                                        <option  name="country" >Sint Maarte</option>
                                                                        <option  name="country" >Slovakia</option>
                                                                        <option  name="country" >Slovenia</option>
                                                                        <option  name="country" >Solomon Islands</option>
                                                                        <option  name="country" >Somalia</option>
                                                                        <option  name="country" >South Africa</option>
                                                                        <option  name="country" >South Georgia & South Sandwich Islands</option>
                                                                        <option  name="country" >South Sudan</option>
                                                                        <option  name="country" >Spain</option>
                                                                        <option  name="country" >Sri Lanka</option>
                                                                        <option  name="country" >Sudan</option>
                                                                        <option  name="country" >Suriname</option>
                                                                        <option  name="country" >Svalbard & Jan Mayen</option>
                                                                        <option  name="country" >Eswatini</option>
                                                                        <option  name="country" >Sweden</option>
                                                                        <option  name="country" >Switzerland</option>
                                                                        <option  name="country" >Syria</option>
                                                                        <option  name="country" >Taiwan</option>
                                                                        <option  name="country" >Tajikistan</option>
                                                                        <option  name="country" >Tanzania</option>
                                                                        <option  name="country" >Thailand</option>
                                                                        <option  name="country" >Timor-Leste</option>
                                                                        <option  name="country" >Togo</option>
                                                                        <option  name="country" >Tokelau</option>
                                                                        <option  name="country" >Tonga</option>
                                                                        <option  name="country" >Trinidad & Tobago</option>
                                                                        <option  name="country" >Tunisia</option>
                                                                        <option  name="country" >Turkey</option>
                                                                        <option  name="country" >Turkmenistan</option>
                                                                        <option  name="country" >Turks & Caicos Islands</option>
                                                                        <option  name="country" >Tuvalu</option>
                                                                        <option  name="country" >Uganda</option>
                                                                        <option  name="country" >Ukraine</option>
                                                                        <option  name="country" >United Arab Emirates</option>
                                                                        <option  name="country" >United Kingdom</option>
                                                                        <option  name="country" >United State</option>
                                                                        <option  name="country" >U.S. Outlying Island</option>
                                                                        <option  name="country" >Uruguay</option>
                                                                        <option  name="country" >Uzbekistan</option>
                                                                        <option  name="country" >Vanuatu</option>
                                                                        <option  name="country" >Venezuela</option>
                                                                        <option  name="country" >Vietnam</option>
                                                                        <option  name="country" >British Virgin Islands</option>
                                                                        <option  name="country" >U.S. Virgin Islands</option>
                                                                        <option  name="country" >Wallis & Futuna</option>
                                                                        <option  name="country" >Western Sahara</option>
                                                                        <option  name="country" >Yemen</option>
                                                                        <option  name="country" >Zambia</option>
                                                                    <option  name="country" >Zimbabwe</option>
                                                                     
                                                                </select>
                                                                @error('country')
                                                                <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror  
                                                        </div>
                                                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                      function E_Ticket()
                                        {
                                            if($('.E_Ticket').is(":checked")) 
                                            $(".pTicket").hide();  
                                            if($('.E_Ticket').is(":checked")) 
                                            $(".answer").hide();  
                                            if(!$('.E_Ticket').is(":checked")) 
                                            $(".pTicket").show(); 
                                            if(!$('.E_Ticket').is(":checked")) 
                                            $(".answer").show();  
                                            if(!$('.E_Ticket').is(":checked")) 
                                            $(".doYouHaveATicket").hide(); 
                                            if($('.E_Ticket').is(":checked")) 
                                            $(".doYouHaveATicket").show(); 
                                        }
                                        function MobileTicket()
                                        {
                                            if($('.MobileTicket').is(":checked")) 
                                            $(".answer").hide();  
                                            if($('.MobileTicket').is(":checked")) 
                                            $(".pTicket").hide();
                                            if(!$('.MobileTicket').is(":checked")) 
                                            $(".pTicket").show();
                                            if(!$('.MobileTicket').is(":checked")) 
                                            $(".answer").show();
                                            if(!$('.MobileTicket').is(":checked")) 
                                            $(".mTicket").hide();
                                            if($('.MobileTicket').is(":checked")) 
                                            $(".mTicket").show(); 
                                        }
                                        function valueChanged()
                                        {
                                            if($('.coupon_question').is(":checked")) 
                                            $(".answer").hide();  
                                            else
                                            $(".answer").show();
                                        }
                                    </script>
                                    <div class="col-lg-6 pTicket" >
                                        <h4 class="fw-700">Booking Confirmation PDF For Paper Ticket<span style="color: red">*</span></h4>
                                        <div class="card mb-3 shadow-sm p-4 main-card br-10">
                                            <div class="row">
                                                <div class="col-md-12">
    
                                                    <p> 
                                                    <span class="custom_info_icon">
                                                    <i class="fas fa-info"></i>
                                                </span>
                                                    <!--<i class="bi bi-info-circle-fill me-2"></i>-->
                                                    Please upload the PDF file for Booking Confirmation.
                                                    </p>
                                                </div>
                                                <div class="col-md-12" >
                                                    <div class="">
                                                        <label class="col-lg-12 text-lg-right col-form-label">Booking Confirmation :</label>
                                                        <div class="input-group">
                                                            <div class="pr-2 form-group" style="float: left">
                                                                {{-- <label for="simage"><i class="bi bi-folder-plus"></i></label> --}}
                                                                <input value=""
                                                                    class="@error('simple_pdfForPaper') is-invalid @enderror inputstyle" type="file"
                                                                    name="simple_pdfForPaper" id="simage"
                                                                   >  
                                                                   @error('simple_pdfForPaper')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </div>
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                        <div class="col-lg-6 mTicket" style="display: none">
                                            <h4 class="fw-700">Booking Confirmation PDF For Mobile Ticket<span style="color: red">*</span></h4>
                                            <div class="card mb-3 shadow-sm p-4 main-card br-10">
                                                <div class="row">
                                                    <div class="col-md-12">
        
                                                        <p> 
                                                        <span class="custom_info_icon">
                                                    <i class="fas fa-info"></i>
                                                </span>
                                                        <!--<i class="bi bi-info-circle-fill me-2"></i>-->
                                                        Please upload the PDF file for Booking Confirmation.
                                                        </p>
                                                    </div>
                                                    <div class="col-md-12" >
                                                        <div class="">
                                                            <label class="col-lg-12 text-lg-right col-form-label">Booking Confirmation :</label>
                                                            <div class="input-group">
                                                                <div class="pr-2" style="float: left">
                                                                    {{-- <label for="simage"><i class="bi bi-folder-plus"></i></label> --}}
                                                                    <input value=""
                                                                        class="@error('simple_pdfForMobileTicket') is-invalid @enderror inputstyle" type="file"
                                                                        name="simple_pdfForMobileTicket" id="simage"
                                                                       >  
                                                                </div>
                                                              @error('simple_pdfForMobileTicket')
                                                                  <span class="invalid-feedback" role="alert">
                                                                      <strong>{{ $message }}</strong>
                                                                  </span>
                                                              @enderror
                                                          </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 doYouHaveATicket"  style="display: none">
                                        <h5 style="font-size:18px" class="mb-2">Do you have a Ticket ? <span style="color: red">*</span></h5>
                                        <div class="card mb-3 shadow-sm p-4 main-card br-10">
                                            <div class="row">
                                                <div class="col-md-12">
    
                                                  
                                                    <p >
                                                        <input type="checkbox"  id="yesCheck"  class="yes" name="book_eticket" id="" value="Yes" onClick="ckChange(this)"> YES i have a ticket.
                                                    </p>
                                                    <p onchange="checkBoxValidation()"> 
                                                        <input type="checkbox" id="noCheck" class="no" name="book_eticket" id="" value="No" onClick="ckChange(this)"> No i dont have.
                                                    </p>
                                                </div>
                                                <script>
                                                    function checkBoxValidation()
                                                    {
                                                        if($('#noCheck').is(":checked")) 
                                                        $(".bookingForE-Ticket").show(); 
                                                        else
                                                        $(".bookingForE-Ticket").hide();
                                                    }
                                                </script>
                                                <div class="col-md-12 bookingForE-Ticket" style="display: none">
                                                    <div class="">
                                                        <label class="col-lg-12 text-lg-right col-form-label">Booking Confirmation :</label>
                                                        <div class="input-group">
                                                          <div class="pr-2" style="float: left">
                                                              {{-- <label for="simage"><i class="bi bi-folder-plus"></i></label> --}}
                                                              <input value=""
                                                                  class="@error('simple_pdf') is-invalid @enderror inputstyle" type="file"
                                                                  name="simple_pdf" id="simage"
                                                                 >  
                                                          </div>
                                                          @error('simple_pdf')
                                                              <span class="invalid-feedback" role="alert">
                                                                  <strong>{{ $message }}</strong>
                                                              </span>
                                                          @enderror
                                                          
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <style>
                                   #progress1:checked + #area {
                                    display: block !important;
                                    }
                                </style>
                            {{-- @endif --}}
                            <div class="col-lg-12">
                                <h4 class="fw-700">Select Restrictions on Use<span style="color: red">*</span></h4>
                                <div class="card p-4 main-card mb-3 br-10">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="mb-3">
                                                <span class="custom_info_icon">
                                                    <i class="fas fa-info"></i>
                                                </span>
                                                <!--<i class="bi bi-info-circle-fill me-2"></i>-->
                                               If your ticket has any restrictions that are not listed here, please type them manually in the 'other' field. <a href="">contact us</a>
                                            </p>
                                        </div>
                                    </div>
                                    <style>
                                        .err{
                                            color: red;
                                            font-size: 16px;
                                            display: none;
                                        }
                                        
                                        .hide{
                                            display: none;
                                        }
                                    </style>
                                            {{-- <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="err">
                                                        Select At least 1 Restriction
                                                    </div>
                                                </div>
                                            </div> --}}
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="mb-2"><strong>Restrictions :</strong></label><br>
                                                @error('ticket_restrictions[]')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label class="m-2 @error('ticket_restrictions[]') is-invalid @enderror"><input class="check " type="checkbox" name="ticket_restrictions[]"  value="No Restrictions" id="resCheck"  onClick="ckChange(this)"> No Restrictions</label>
                                                <label class="m-2 @error('ticket_restrictions[]') is-invalid @enderror" id="res1"><input class="check" type="checkbox" name="ticket_restrictions[]" value="Restricted View" > Restricted View</label>
                                                <label class="m-2 @error('ticket_restrictions[]') is-invalid @enderror" id="res2"><input class="check" type="checkbox" name="ticket_restrictions[]" value="Age Limit 14+" > Age Limit 14+</label>
                                                <label class="m-2 @error('ticket_restrictions[]') is-invalid @enderror" id="res3"><input class="check" type="checkbox" name="ticket_restrictions[]" value="Age Limit 18+"  > Age Limit 18+</label>
                                                <label class="m-2 @error('ticket_restrictions[]') is-invalid @enderror" id="res4"><input class="check" type="checkbox" name="ticket_restrictions[]" value="Age Limit 21+" > Age Limit 21+</label>
                                                <label class="m-2"><input type="checkbox" name="" id="myCheck" onclick="myFunction()"> Other</label>
                                               
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="text" name="ticket_restrictions[]"  class="form-control inputstyle hide" placeholder="Type Restriction">
                                                @error('ticket_restrictions[]')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                           
                                        </div>
                                        <script>
                                            function restrictionFunction() {
                                                 // Get the checkbox
                                                 var checkBox = document.getElementById("resCheck");
                                                 // Get the output text
                                                 var text = document.getElementById("res1","res2","res3","res4");

                                                 // If the checkbox is checked, display the output text
                                                 if (checkBox.checked == false){
                                                    text.style.display = "block";
                                                    
                                                 } else {
                                                    text.style.display = "none";
                                                 }
                                                 }
                                            function myFunction() {
                                                 // Get the checkbox
                                                 var checkBox = document.getElementById("myCheck");
                                                 // Get the output text
                                                 var text = document.getElementById("text");

                                                 // If the checkbox is checked, display the output text
                                                 if (checkBox.checked == false){
                                                    text.style.display = "none";
                                                 } else {
                                                     text.style.display = "block";
                                                 }
                                                 }
                                         </script>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="mb-2 mt-2"><strong>Benefits :</strong></label><br>
                                                <label class="m-2"><input type="checkbox" name="ticket_benefits[]" value="Food and Meals"> Food and Meals</label>
                                                <label class="m-2"><input type="checkbox" name="ticket_benefits[]" value="Parking"> Parking</label>
                                                <label class="m-2"><input type="checkbox" name="ticket_benefits[]" value="VIP Section"> VIP Section</label>
                                                <label class="m-2"><input type="checkbox" name="ticket_benefits[]"  value="Lounge Access"> Lounge Access</label>
                                                <label class="m-2"><input type="checkbox" name="ticket_benefits[]" value="Early Entry"> Early Entry</label>
                                                <label class="m-2"><input type="checkbox" name="ticket_benefits[]" value="Meet and Greet"> Meet and Greet</label>
                                                <label class="m-2"><input type="checkbox" name="" id="myCheck2" onclick="myFunction2()"> Other</label>
                                            </div>
                                            <style>
                                                .hide{
                                                    display: none;
                                                }
                                            </style>
                                            <div class="form-group">
                                                <input type="text" id="text2" name="ticket_benefits[]" class="form-control inputstyle hide" placeholder="Type Benefits">
                                            </div>
                                            <script>
                                                function myFunction2() {
                                                        // Get the checkbox
                                                    var checkBox = document.getElementById("myCheck2");
                                                    // Get the output text
                                                    var text = document.getElementById("text2");

                                                    // If the checkbox is checked, display the output text
                                                    if (checkBox.checked == false){
                                                    text.style.display = "none";
                                                    } else {
                                                        text.style.display = "block";
                                                    }
                                                    }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn primary-btn w-100 fw-700" type="submit">Continue</button>
                            </div>
                        </div>
                    </form>
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
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js" integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js" integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll('.select-card').forEach(function(element) {
                element.addEventListener("click", (event) => {
                    document.querySelectorAll('.select-card').forEach((element) => element.classList.remove('select-active'));
                    event.currentTarget.classList.add('select-active');
                    const value = event.currentTarget.attributes['data-ticket'].value;
                    document.getElementById('ticket-type-box').innerHTML = `<strong>TICKET-TYPE : </strong><br>${value}`
                    document.getElementById('ticket-type').value = value;
                });
            });

            document.querySelectorAll('.ticket-num-card').forEach(function(element) {
                element.addEventListener("click", (event) => {
                    document.querySelectorAll('.ticket-num-card').forEach((element) => element.classList.remove('select-active'));
                    event.currentTarget.classList.add('select-active');
                    const value =event.currentTarget.attributes['data-tickets-val'].value;
                    document.getElementById('no_of_ticket1').required = true;
                    document.getElementById('no_of_ticket1').value = value;

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

        $("#reservation-form").submit(function(event){
            if($("input[name='total_tickets']").val() === '0'){
                $("#error-ticket-number").show();
                $('body').animate({
                    scrollTop: $("#error-ticket-number").offset().top
                }, 2000);
                event.preventDefault();
            }
            // else if($("input[type='checkbox']")){
            //     $(".err").show();
            //     $('body').animate({
            //         scrollTop: $(".err").offset().top
            //     }, 2000);
            //     event.preventDefault();
            // }
        });
        $(".ticket-num-card").click(() => {
            $("#error-ticket-number").hide();
        });
    </script>
</body>

</html>
