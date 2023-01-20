<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{asset('assets/styles/dashboard.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/styles/common.css') }}" />
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!-- Bootstrap icons CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
</head>

<body>
    <div class="container-fluid px-0 mx-0" style="margin-top: 100px">
        <!-- header menu starts here  -->
        @include("auth.partials.darkheader")
        <div class="container-md sidebar-con">
            <div class="row">
                <!-- sidebar starts here  -->
                @include("auth.partials.dashboardSidebar")
                <!-- dashboard starts here  -->
                <main class="bg-light p-4 col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                        <h1 class="h2">Settings</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="orders-tabs">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                                    <button class="nav-link active fw-600 " id="nav-payments-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-payments" type="button" role="tab"
                                        aria-controls="nav-payments" aria-selected="true">Payments</button>

                                    <button class="nav-link fw-600 " id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">Contact</button>

                                    <button class="nav-link fw-600 " id="nav-addresses-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-addresses" type="button" role="tab"
                                        aria-controls="nav-addresses" aria-selected="false">Addresses</button>

                                    <button class="nav-link fw-600 " id="nav-License-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-License" type="button" role="tab"
                                        aria-controls="nav-License" aria-selected="false">License</button>

                                    <button class="nav-link fw-600 " id="nav-security-center-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-security-center" type="button" role="tab"
                                        aria-controls="nav-security-center" aria-selected="false">Security Center</button>
                                </div>
                            </nav>
                            <div class="tab-content mt-3" id="nav-tabContent">
                                <!-- First  tab starts here  -->
                                <div class="tab-pane fade show active" id="nav-payments" role="tabpanel"
                                    aria-labelledby="nav-payments-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card mb-3 shadow-sm">
                                                <div class="card-body">
                                                   <h6>Payment options for buying tickets</h6>
                                                   <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus me-2"></i>Add new payment option</a>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add new payment option</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <label for="payment-type">Payment Type</label>
                                                    <div class="form-group">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                            <label class="form-check-label" for="inlineRadio1">Credit or debit card</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">Paypal</label>
                                                          </div>
                                                    </div>
                                                    <div class="row g-3">
                                                        <label for="">Card Info</label>
                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control" placeholder="111 111 111" aria-label="111 111 111">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option>---</option>
                                                                <option selected value="1">01</option>
                                                                <option value="2">02</option>
                                                                <option value="3">03</option>
                                                                <option value="4">04</option>
                                                                <option value="5">05</option>
                                                                <option value="6">06</option>
                                                              </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option selected value="2022">2022</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                                <option value="2025">2025</option>
                                                              </select>
                                                        </div>
                                                        <div class="col-lg-12 add-address">
                                                            <p >Add New Address</p>
                                                           <label for="">Select Country</label>
                                                           <select class="form-select" aria-label="Default select example">
                                                            <option selected value="Pakistan">Pakistan</option>
                                                            <option value="India">India</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="USA">USA</option>
                                                          </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input class="form-control" type="text" placeholder="First Name">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input class="form-control" type="text" placeholder="Surname">
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="form-control" type="text" placeholder="Address">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input class="form-control" type="text" placeholder="City">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input class="form-control" type="text" placeholder="State or Province">
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input class="form-control" type="number" placeholder="Post Code">
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    <p class="user_name p-0 m-0">Mubashir Yusuf</p>
                                                                    <p class="address p-0 m-0"> sadasdsad, dsadasd, sdasadas, LAHORE, CO, 22222, USA</p>
                                                                </label>
                                                              </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn warning-btn"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn primary-btn">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card mb-3 shadow-sm">
                                                <div class="card-body">
                                                   <h6>Payment options for selling tickets</h6>
                                                   <div class="alert alert-primary" role="alert">
                                                   <p><i class="bi bi-info-circle-fill me-2"></i>
                                                    The payment method change will be applied to both existing and new listings. <br>
                                                    Note: This change doesn't apply to "In Progress" payments for already sold tickets.</p>
                                                    </div>
                                                    <a href="{{URL("Sell-tickets/ticket-authentication")}}" ><i class="bi bi-plus me-2"></i>Add new payment option</a>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card mb-3 shadow-sm">
                                                <div class="card-body">
                                                   <h6>Taxpayer Identification Info</h6>
                                                   <div class="alert alert-primary" role="alert">
                                                   <p class="m-0"><i class="bi bi-info-circle-fill me-2"></i>
                                                        If you are an individual seller, please provide SSN (Social security number). </p>
                                                    <p class="m-0">If you operate a business, provide an EIN (Employer identification number).</p>
                                                    <p class="m-0">If you are an international user, please leave the SSN or EIN field blank.</p>
                                                    </div>
                                                    <form action="" >
                                                         <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                            <label class="form-check-label" for="inlineRadio1">SSN</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                            <label class="form-check-label" for="inlineRadio2">EIN</label>
                                                          </div>
                                                          <div class="row">
                                                            <label class="mb-2">e.g. 000-00-0000</label>
                                                            <div class="col-2 mb-3">
                                                                <input type="number" class="form-control" maxlength="3">
                                                            </div>
                                                            <div class="col-2 mb-3">
                                                                <input type="number" class="form-control" maxlength="2">
                                                            </div>
                                                            <div class="col-2 mb-3">
                                                                <input type="number" class="form-control" maxlength="5">
                                                            </div>
                                                            <label class="mb-3">Address</label>
                                                            <div class="col-lg-12">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                    <label class="form-check-label" for="inlineRadio1">United States</label>
                                                                  </div>
                                                                  <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                    <label class="form-check-label" for="inlineRadio2">International</label>
                                                                  </div>
                                                            </div>
                                                            <div class="col-lg-12 mb-3">
                                                              <label for="">Select Country</label>
                                                               <select class="form-select" aria-label="Default select example">
                                                                <option selected value="Pakistan">Pakistan</option>
                                                                <option value="India">India</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="USA">USA</option>
                                                              </select>
                                                            </div>
                                                            <div class="col-lg-6 mb-3">
                                                                <input class="form-control" type="text" placeholder="First Name">
                                                            </div>
                                                            <div class="col-lg-6 mb-3">
                                                                <input class="form-control" type="text" placeholder="Surname">
                                                            </div>
                                                            <div class="col-lg-12 mb-3">
                                                                <input class="form-control" type="text" placeholder="Address">
                                                            </div>
                                                            <div class="col-lg-6 mb-3">
                                                                <input class="form-control" type="text" placeholder="City">
                                                            </div>
                                                            <div class="col-lg-6 mb-3">
                                                                <input class="form-control" type="text" placeholder="State or Province">
                                                            </div>
                                                            <div class="col-lg-12 mb-3">
                                                                <input class="form-control" type="number" placeholder="Post Code">
                                                            </div>
                                                          </div>
                                                    </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- second tab starts here  -->
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">
                                    <h2>Contact</h2>
                                </div>
                                <!-- Third tab starts here  -->
                                <div class="tab-pane fade" id="nav-addresses" role="tabpanel"
                                    aria-labelledby="nav-addresses-tab">
                                    <h2>Addresses</h2>
                                </div>

                                <!-- Fourth tab starts here  -->
                                <div class="tab-pane fade" id="nav-License" role="tabpanel"
                                    aria-labelledby="nav-License-tab">
                                    <div class="card shadow-sm mb-3">
                                        <h5>Broker license</h5>
                                        <div class="card-body">
                                            <a href="#"  data-bs-toggle="modal" data-bs-target="#BrokerModal"><i class="bi bi-plus me-2"></i>Add new payment option</a>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="BrokerModal" tabindex="-1" aria-labelledby="brokerModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="brokerModalLabel">Broker license</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <div class="row g-3">   
                                                        <div class="col-lg-6">
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option selected value="Pakistan">Pakistan</option>
                                                                <option value="India">India</option>
                                                                <option value="Japan">Japan</option>
                                                                <option value="USA">USA</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" placeholder="State" class="form-control">
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input type="text" placeholder="Broker license number" class="form-control">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn warning-btn" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn primary-btn">Save</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Fifth tab starts here  -->
                                <div class="tab-pane fade" id="nav-security-center" role="tabpanel"
                                    aria-labelledby="nav-security-center-tab">
                                    <div class="card shadow-sm mb-3">
                                        <div class="card-body">
                                            <p><strong>Stronger security for your payment and personal details on viagogo with '2-Step Verification'</strong></p>
                                            <p>If you haven't already verified your email address you'll need to do this first. Once you've verified your address, come back here to continue setting up 2-Step Verification</p>
                                            <button class="btn btn-sm primary-btn px-5">Verify email address</button>
                                            <p>After you have verified your email address, return to Security Centre in My Account to continue setting up '2-Step Verification'</p>
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
    {{-- <script src="../../js/bootstrap.bundle.min.js"></script> --}}
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>