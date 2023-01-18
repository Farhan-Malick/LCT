<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Last Chance Ticket - Event Request</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('newAssets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/styles/common.css') }}" />
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
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
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  @include("auth.partials.newHeader")
  <!-- ***** Header Area End ***** -->

  <div class="second-page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>LAST CHANCE TICKET</h4>
          <h2>Create Your Event Request</h2>
          <p> Here is the last chance to be the member of world largest marketplace for tickets to live events.
            Prices are set by sellers and may be below or above face value.</p>
          <div class="main-button"><a href="#">Discover More</a></div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info reservation-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-phone"></i>
            <h4>Make a Phone Call</h4>
            <a href="#">+123 456 789 (0)</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-envelope"></i>
            <h4>Contact Us via Email</h4>
            <a href="#">company@email.com</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-map-marker"></i>
            <h4>Visit Our Offices</h4>
            <a href="#">24th Street North Avenue London, UK</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="reservation-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            @if ($message = Session::get('msg'))
            <div class="alert alert-success">
                <center><strong>{{ $message }}</strong></center>
            </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('request.event') }}" id="reservation-form">
                @csrf
          {{-- <form id="reservation-form" name="gs" method="submit" role="search" action="#"> --}}
            <div class="row">
              <div class="col-lg-12">
                <h4>Create Your <em>Event Request</em> Through This <em>Form</em></h4>
              </div>
              <div class="col-lg-6">
                    <fieldset>
                        <label class="text-dark" for="InputEvent">Title</label>
                        <input
                            type="text"
                            class="form-control"
                            name="event"
                            aria-describedby="emailHelp"
                            placeholder="Enter Event Title Here"
                        />
                    </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label class="text-dark" for="InputCategory">Event Category</label>
                        <input
                            type="text"
                            class="form-control"
                            name="event_category"
                            placeholder="Event Category"
                        />
                </fieldset>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                    <label class="text-dark" for="InputVenue">Veunue Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="venue_name"
                        placeholder="Veunue Name"
                    />
                  </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label class="text-dark" for="InputDate">Event Date</label>
                        <input
                            type="date"
                            class="form-control"
                            name="event_date"
                            placeholder="Event Date"
                        />
                </fieldset>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                    <label class="text-dark" for="InputDate">Start Time</label>
                    <input
                        type="time"
                        class="form-control"
                        name="start_time"
                        placeholder="Event Time"
                    />
                  </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label class="text-dark" for="InputTime">End Time</label>
                    <input
                        type="time"
                        class="form-control"
                        name="end_time"
                        placeholder="Event Time"
                    />
                </fieldset>
            </div>
            <div class="col-lg-12">
                <fieldset>
                    <label class="text-dark" for="InputLocation">Location</label>
                        <input
                            type="text"
                            class="form-control"
                            name="location"
                            placeholder="Event Location"
                        />
                </fieldset>
            </div>
              <div class="col-lg-12">                        
                  <fieldset>
                      <button type="submit" class="main-button">Create Your Event Request Now</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

 @include("auth.partials.footer")


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('newAssets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>

  <script src="{{asset('newAssets/assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/wow.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/tabs.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/popup.js')}}"></script>
  <script src="{{asset('newAssets/assets/js/custom.js')}}"></script>

  <script>
    $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active"); 
    });
  </script>

  </body>

</html>
