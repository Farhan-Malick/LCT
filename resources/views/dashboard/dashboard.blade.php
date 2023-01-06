<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/styles/dashboard.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/styles/common.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title>Last Chance Ticket - Dashboard</title>
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
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Profile</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group">
                <div class="dropdown me-2">
                  <button class="btn btn-sm  btn-outline-secondary dropdown-toggle rounded-pill" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Sell
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="../tickets/selltickets.html">Sell Tickets</a></li>
                    <li><a class="dropdown-item" href="#">My Tickets</a></li>
                    <li><a class="dropdown-item" href="#">My Sales</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <div class="dropdown me-2">
                    <button class="btn btn-sm  btn-outline-secondary dropdown-toggle rounded-pill" type="button"
                      id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      My Tickets
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">Orders</a></li>
                      <li><a class="dropdown-item" href="#">My Listings</a></li>
                      <li><a class="dropdown-item" href="#">My Sales</a></li>
                      <li><a class="dropdown-item" href="#">Payments</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="btn-group">
                <div class="dropdown">
                  <button class="btn btn-sm  btn-outline-secondary dropdown-toggle rounded-pill" type="button"
                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Profile
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">My Hub</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card shadow-sm mb-3">
                <div class="card-header d-md-flex d-block  justify-content-between">
                  <h5 class="card-title fw-600">WHAT'S NEXT</h5>
                  <a href="">View all current and past orders</a>
                </div>
                <div class="card-body">
                  <p class="card-text">You don't have any upcoming events scheduled right now</p>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card shadow-sm mb-3">
                <div class="card-header d-md-flex d-block  justify-content-between">
                  <h5 class="card-title fw-600">LISTINGS</h5>
                  <a href="">View all listings</a>
                </div>
                <div class="card-body">
                  <p class="card-text">You don't have any listings right now</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card shadow-sm mb-3">
                <div class="card-header">
                  <h5 class="card-title fw-600">SALES</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">You don't have any listings right now</p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card shadow-sm mb-3">
                <div class="card-header">
                  <h5 class="card-title fw-600">PAYMENTS</h5>
                </div>
                <div class="card-body">
                  <p class="card-text"><a href="">View payment statuses</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card shadow-sm mb-3">
                <div class="card-header d-md-flex d-block justify-content-between">
                  <h5 class="card-title fw-600"> CONTACT INFO</h5>
                  <span>
                    <a href="">Edit contact </a> |
                    <a href=""> infoEdit address</a> |
                    <a href="">Change password</a>
                  </span>
                </div>
                <div class="card-body">
                  <div class="">

                  </div>
                  <p class="card-text">User informations like name email here</p>
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
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>