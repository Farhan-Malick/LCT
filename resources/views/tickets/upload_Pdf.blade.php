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
    <link rel="stylesheet" href="../../assets/styles/payments.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>set-price</title>
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
                                        <i class="bi bi-download"></i>
                                        
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

                <div class="col-lg-4">
                    <div class="card shadow-sm mb-3 type-card main-card br-10">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>Title</h4>
                            </div>
                            <div class="card-subtitle">
                                <span class="fw-600">Start Time<br>End Time</span><br>
                                <span class="text-muted">Singapore National Stadium, Singapore, Singapore</span>
                            </div>
                            <div class="tags d-flex">
                                <span class="ticket-type p-1 rounded-3 me-2"> <strong>Ticket Type: </strong>Ticket type</span>
                                <span class="ticket-type p-1 rounded-3 me-2"><strong>Split Type: </strong>any</span>
                            </div>
                            
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>Price/Ticket: </strong></span>
                                <span><strong> $ 10000</strong></span>
                            </div>
                            
                            <div class="price-tag d-sm-flex d-block justify-content-between tags">
                                <span> <strong>Number of Tickets: </strong></span>
                                <span><strong> × 2(Quantity)</strong></span>
                            </div>
                            <div class="tags d-flex mt-1">
                                <span class="ticket-type p-1 rounded-3 me-2"> <strong>Section: </strong>A</span>
                                <span class="ticket-type p-1 rounded-3 me-2"><strong>Row: </strong>5</span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>Website Price: </strong></span>
                                <span><strong> $10000</strong></span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong> Seller Fees: </strong></span>
                                <span><strong> $ (Percentage)</strong></span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>VAT currency: </strong></span>
                                <span><strong> 1.86</strong></span>
                            </div>
                            <div class="small tags"> VAT amount can change depending on your location.
                                YOU'LL RECEIVE $ (Grand total)</div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>YOU'LL RECEIVE: </strong></span>
                                <span><strong> $ (Grand total)</strong></span>
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