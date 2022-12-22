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
    <title>Ticket Location Address</title>
</head>

<body>

    @include("auth.partials.darkheader")
    <section class="section-two">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-8">
                    <h4 class="fw-700">Enter Your Ticket Location Address</h4>
                    <div class="card p-4 mb-3 shadow-sm main-card br-10">
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    <i class="bi bi-info-circle-fill"></i>
                                    Specify the address from which your tickets will be sent.
                                </p>
                            </div>
                            <div class="col-md-8">
                                <form action="">
                                    <div class="form-group mb-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="USA">USA</option>
                                            <option value="UK">UK</option>
                                            <option value="PAKISTAN">Pakistan</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                            <option value="India">India</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="fullname">Full Name</label>
                                        <input type="text" class="form-control" name="fullname" id="fullname">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address1">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" name="address2">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" name="address3">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name="city">
                                    </div>
                                    <div class="form-group mb-3">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select state</option>
                                            <option value="Alabama">Alabama</option>
                                            <option value="Alaska">Alaska</option>
                                            <option value="Florida">Florida</option>
                                            <option value="Jorgia">Jorgia</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3 w-50">
                                        <label for="zip">Zip Code</label>
                                        <input type="number" class="form-control" name="number" id="zip">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="phone">Phone <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" name="number" id="phone">
                                    </div>
                                    <small>We require a phone number in case we need to contact you about
                                        your ticket
                                        sale or account details. We will not use this number for any other
                                        reason.</small>
                                    <a class="btn primary-btn w-100 mt-3"
                                        href="{{URL("Sell-tickets/upload-ticket")}}"><strong>CONTINUE</strong></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm mb-3 type-card main-card br-10">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>{{$tickets->event->title}}</h4>
                            </div>
                            <div class="card-subtitle">
                                <span class="fw-600"><strong>{{$tickets->event->start_date}}
                                    <strong>{{$tickets->event->start_time}}</strong>
                                </strong></span>
                                <br>
                                <span class="text-muted">Singapore National Stadium, Singapore, Singapore</span>
                            </div>
                            <div class="tags d-flex">
                                <span class="ticket-type p-1 rounded-3 me-2"> <strong>Ticket Type: </strong>{{$tickets->ticket_type}}</span>
                                <span class="ticket-type p-1 rounded-3 me-2"><strong>Split Type: </strong>any</span>
                            </div>

                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>Price/Ticket: </strong></span>
                                <span><strong> {{$ticketCurrency->currency_type}} <span class="price">{{$tickets->price}}</span></strong></span>
                            </div>

                            <div class="price-tag d-sm-flex d-block justify-content-between tags">
                                <span> <strong>Number of Tickets: </strong></span>
                                <span><strong> × {{$tickets->quantity}}</strong></span>
                            </div>
                            <div class="tags d-flex mt-1">
                                <span class="ticket-type p-1 rounded-3 me-2"> <strong>Section: </strong>{{$tickets->section}}</span>
                                <span class="ticket-type p-1 rounded-3 me-2"><strong>Row: </strong>{{$tickets->row}}</span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>Website Price: </strong></span>
                                <span><strong> {{$ticketCurrency->currency_type}} <span class="price">{{$price}}</span></strong></span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong> Seller Fees: </strong></span>
                                <span><strong> {{$ticketCurrency->currency_type}} <span class="percentage">{{$percentage}}</span></strong></span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>VAT {{$ticketCurrency->currency_type}}: </strong></span>
                                <span><strong> 1.86</strong></span>
                            </div>
                            <div class="small tags"> VAT amount can change depending on your location.
                                YOU'LL RECEIVE {{$ticketCurrency->currency_type}} <span class="grandTotal">{{$grand_total}}</span></div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>YOU'LL RECEIVE: </strong></span>
                                <span><strong> {{$ticketCurrency->currency_type}} <span class="grandTotal">{{$grand_total}}</span></strong></span>
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
