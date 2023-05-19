
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
    <title>Set Price</title>
</head>

<body>

    @include("auth.partials.darkheader")
    <section class="section-two">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card p-4 mb-3 shadow-sm main-card br-10">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="row">
                                    <div class="col-lg-12">
                                        {{-- <i class="bi bi-download"></i> --}}
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-lg-9">
                                                <div class="my-ticket my-4  position-relative" style="background-color: #dfdfe0;
                                                border-right: 2px dashed grey;
                                                margin-top: 1.5rem!important;
                                                    margin-bottom: 1.5rem!important;
                                                    position: relative!important;">
                                                    <div class="my_ticket_title p-3">
                                                        <h4 class="fw-700">{{$tickets->event->title}} ({{$tickets->title}})
                                                        </h4>
                                                        <p class="m-0">
                                                            {{$tickets->event->start_time}}<br>{{$tickets->event->start_date}}</p>
                                                        <p>Citizens Bank Park, Philadelphia, Pennsylvania, USA</p>
                                                        <p>Notes:</p>
                                                        <p> <i class="bi bi-hand-thumbs-up-fill me-2 primary-text"></i>Unrestricted view
                                                            (what's this?)</p>
                                                        <span><i class="bi bi-upc"></i></span>
                                                    </div>
                                                    <div class="border-right-top"></div>
                                                    <div class="border-right-bottom"></div>
                                                    <div class="border-left-top"></div>
                                                    <div class="border-left-bottom"></div>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-3 text-center d-flex flex-column ticket-left position-relative justify-content-center">
                                                <h4 class="fw-700">ADMIT 1</h4>
                                                <span>Section</span>
                                                <span class="text-success fw-700">{{$tickets->section}}</span>
                                                <span>Row</span>
                                                <span class="text-success fw-700">{{$tickets->row}}</span>
                                                <div class="border-right-top"></div>
                                                <div class="border-right-bottom"></div>
                                            </div>

                                        </div>
                                        <h4>Upload You Tickets</h4>
                                    </div>

                                       <div class="text-center">
                                        <form action="" enctype ="multipart/form-data" method="post">
                                            @csrf
                                                    <input type="file"  name="file"  multiple=""
                                                     >
                                                <button  type="submit" class=" form-control btn primary-btn" style="width:500px"  >Upload Tickets</button>
                                        </form>
                                       </div>

                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="card p-4 mb-3 shadow-sm main-card br-10">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h4>Don't have Tickets Yet?</h4>
                                <a class="primary-text cursor-pointer"
                                    href="{{URL('Sell-tickets/ticket-authentication')}}">Upload Later</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class=" p-4  mb-3  " style="background-color: #f9f9f9">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>{{$tickets->event->title}}</h4>
                            </div>
                            <div class="card-subtitle">
                                <span class="fw-600 mb-2"><strong>{{$tickets->event->start_date}}
                                    <strong>{{$tickets->event->start_time}}</strong>
                                </strong></span>
                                <br>
                                <span class="text-muted mb-2">Singapore National Stadium, Singapore, Singapore</span>
                            </div>
                            <div class="tags d-flex mb-2">
                                <span class="ticket-type p-1 rounded-3 me-2"> <strong>Ticket Type: </strong>{{$tickets->ticket_type}}</span>
                                <span class="ticket-type p-1 rounded-3 me-2"><strong>Split Type: </strong>any</span>
                            </div>
    
                            <div class="price-tag d-sm-flex d-block justify-content-between mb-2">
                                <span> <strong>Price/Ticket: </strong></span>
                                <span><strong> $ <span class="price">{{$tickets->price}}</span></strong></span>
                            </div>
    
                            <div class="price-tag d-sm-flex d-block justify-content-between tags mb-2">
                                <span> <strong>Number of Tickets: </strong></span>
                                <span><strong> × {{$tickets->quantity}}</strong></span>
                            </div>
                            <div class="tags d-flex mt-1 mb-2">
                                <span class="ticket-type p-1 rounded-3 me-2"> <strong>Section: </strong>{{$tickets->section}}</span>
                                <span class="ticket-type p-1 rounded-3 me-2"><strong>Row: </strong>{{$tickets->row}}</span>
                            </div>
                            <div class="price-tag d-sm-flex mb-2 d-block justify-content-between">
                                <span> <strong>Website Price: </strong></span>
                                <span><strong> $ <span class="price">{{$price}}</span></strong></span>
                            </div>
                            <div class="price-tag d-sm-flex mb-2 d-block justify-content-between">
                                <span> <strong> Seller Fees: </strong></span>
                                <span><strong> $ <span class="percentage">{{$percentage}}</span></strong></span>
                            </div>
                            <div class="price-tag d-sm-flex mb-2 d-block justify-content-between">
                                <span> <strong>VAT $: </strong></span>
                                <span><strong> 1.86</strong></span>
                            </div>
                            <div class="small tags mb-2" > VAT amount can change depending on your location.
                                YOU'LL RECEIVE $ <span class="grandTotal">{{$grand_total}}</span></div>
                            <div class="price-tag mb-2 d-sm-flex d-block justify-content-between">
                                <span> <strong>YOU'LL RECEIVE: </strong></span>
                                <span><strong> $ <span class="grandTotal">{{$grand_total}}</span></strong></span>
                            </div>
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
