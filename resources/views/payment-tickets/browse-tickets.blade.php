<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/styles/payments.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/styles/common.css") }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Last Chance Ticket - Buyer</title>
</head>

<body>
@include("auth.partials.darkheader")
    <!-- tabs sections starts here  -->
    <section class="section-two">
        <div class="container-fluid bg-white">
            <div class="row text-center tabs-row">
                <div class="col-md-4 col-lg-4 p-2">
                    <h5 class="tabs-title tabs-active"><i class="bi bi-check-lg me-3"></i>1. Browse Events</h5>
                </div>
                <div class="col-md-4 col-lg-4 p-2">
                    <h5 class="tabs-title "><i class="bi bi-ticket-fill me-3"></i>2. Choose Your Tickets</h5>
                </div>
                <div class="col-md-4 col-lg-4 p-2">
                    <h5 class="tabs-title "><i class="bi bi-pen-fill me-3"></i>3.Confirm Details</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="ticket-img p-4">
                                <img src="/uploads/events/thumbnail/{{$events->thumbnail}}" height="150" width="150" alt="">
                            </div>
                        </div>
                        <div class="col-lg-10 p-4">
                            <div class="ticket-details">
                                <div class="ticket-title">
                                    <h4 class="primary-text fw-700">{{$events->title}}</h4>
                                </div>
                                <div class="ticket-subtitle">
                                    <p class="fw-600 p-0 m-0">Citizens Bank Park, Philadelphia, Pennsylvania, USA</p>
                                </div>
                                <div class="ticket-date">
                                    <span>{{$events->start_time}}<br>
                                        {{$events->start_date}}
                                    </span>
                                </div>
                                <div class="current-date d-flex flex-column">
                                    <span class="text-danger fw-700">Today</span>
                                    <span> (More {{$events->title}} Events)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tickets table start Here  -->
    <section class="section-three">
        
        <div class="container my-5 ticket-table">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table  table-bordered">
                            <thead>
                                <tr>
                                    <!-- <th>Houston Astros at Philadelphia Phillies</th> -->
                                    <!-- <th><i class="bi bi-calendar2-week me-2"></i>Thursday, 03 November 2022</th> -->
                                    <!-- <th><i class="bi bi-clock me-2"></i>20:03</th> -->
                                    <!-- <th><i class="bi bi-building me-2"></i>Citizens Bank Park, Philadelphia,Pennsylvania,USA</th> -->
                                    <th>{{$events->title}}</th>
                                    <th><i class="bi bi-calendar2-week me-2"></i>Date</th>
                                    <th><i class="bi bi-clock me-2"></i>Time</th>
                                    <th><i class="bi bi-building me-2"></i>Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="10" class="p-0">
                                        
                                        <form action="{{route('buyer.ticket.create',$events->id)}}" method="post">
                                            @csrf
                                            <select class="form-select p-3"  name="quantity">
                                                <option selected><i class="bi bi-person-fill me-2"></i>Select quantity
                                                </option>
                                                <option value="1">1 Ticket</option>
                                                <option value="2">2 Tickets</option>
                                                <option value="3">3 Tickets</option>
                                                <option value="4">4 Tickets</option>
                                                <option value="5">5 Tickets</option>
                                                <option value="6">6 Tickets</option>
                                                <option value="7">7 Tickets</option>
                                                <option value="8">8 Tickets</option>
                                                <option value="9">9 Tickets</option>
                                                <option value="10">10 Tickets</option>
                                                <option value="11">11 Tickets</option>
                                                <option value="12">12 Tickets</option>
                                                <option value="13">13 Tickets</option>
                                                <option value="14">14 Tickets</option>
                                            </select>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="submit text-center">
                        <button class="btn success-btn w-100 my-2" href="">CONTINUE</button>
                        <small class="text-center text-success fw-700 my-3">We will find you the best available tickets
                            based on your search criteria.</small>
                    </div>
                
                </div>
            </div>
        </div>
    </form>
    </section>

    @include("auth.partials.footer")
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
