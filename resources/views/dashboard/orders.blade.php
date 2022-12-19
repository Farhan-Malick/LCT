<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/styles/dashboard.css">
    <link rel="stylesheet" href="{{ asset('assets/styles/common.css') }}" />
    <!-- <link rel="stylesheet" href="../../assets/styles/common.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="container-fluid px-0 mx-0">
        <!-- header menu starts here  -->
        @include("auth.partials.darkheader")
        <div class="container-md sidebar-con">
            <div class="row">
                <!-- sidebar starts here  -->
                @include("auth.partials.dashboardSidebar")
                <!-- dashboard starts here  -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                        <h1 class="h2">Orders</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="orders-tabs">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active fw-600 " id="nav-current-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-current" type="button" role="tab"
                                        aria-controls="nav-current" aria-selected="true">Current</button>
                                    <button class="nav-link fw-600 " id="nav-past-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-past" type="button" role="tab" aria-controls="nav-past"
                                        aria-selected="false">Past</button>
                                </div>
                            </nav>
                            <div class="tab-content mt-3" id="nav-tabContent">
                                <!-- First  tab starts here  -->
                                <div class="tab-pane fade show active" id="nav-current" role="tabpanel"
                                    aria-labelledby="nav-current-tab">
                                    <div class="card shadow-sm mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title fw-600">All Purchases Here</h5>
                                            <table class="table">
                                                <thead class="thead-light">
                                                  <tr>
                                                    <th>#</th>
                                                    <th >Event Name</th>
                                                    <th >Ticket Name</th>
                                                    <th >Quantity</th>
                                                    <th >Price</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($purchases as $purchase)
                                                  <tr>
                                                    
                                                    <td>{{$purchase->id}}</td>
                                                    <td>{{$purchase->event->title}}</td>
                                                    <td>{{$purchase->ticket->title}}</td>
                                                    <td>{{$purchase->quantity}}</td>
                                                    <td>{{$purchase->price}}</td>
                                                    
                                                  </tr>
                                                  
                                                  @endforeach
                                                </tbody>
                                              </table>
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <!-- <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingOne">
                                                        <button class="accordion-button collapsed fw-700" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                            aria-controls="flush-collapseOne">
                                                            You need an access code to view your order
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                        aria-labelledby="flush-headingOne"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <p>If you do, we already sent your code to the email address
                                                                you used to buy your tickets. Check your inbox.</p>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- second tab starts here  -->
                                <div class="tab-pane fade" id="nav-past" role="tabpanel" aria-labelledby="nav-past-tab">
                                    <div class="card shadow-sm mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title fw-600">Don't see your orders yet? Here's why that might be:</h5>
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingOne">
                                                        <button class="accordion-button collapsed fw-700" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                            aria-controls="flush-collapseOne">
                                                            You need an access code to view your order
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                        aria-labelledby="flush-headingOne"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <p>If you do, we already sent your code to the email address
                                                                you used to buy your tickets. Check your inbox.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="flush-headingTwo">
                                                        <button class="accordion-button collapsed fw-700" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                                            aria-controls="flush-collapseTwo">
                                                            You just bought tickets
                                                        </button>
                                                    </h2>
                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="flush-headingTwo"
                                                        data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <p>For some events, it can take 1 hour for your order to
                                                                show up here.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    @include("auth.partials.footer")
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>