
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
    <title>LCT - Last Chance Ticket</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('newAssets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/styles/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/styles/common.css') }}" />
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    
    <!-- Bootstrap icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Last Chance Ticket - login</title>

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
    <div class="" style="">
        @include("auth.partials.darkheader")
    </div>

  <div class="container " >
    <section class="vh-100"style="margin-bottom: 150px" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="{{asset('assets/images/LoginGirl.jpg')}}"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="{{ URL('User-Update/'.Auth::user()->id) }}" method="POST">
                  @csrf
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #22b3c1;"></i>
                    <span class="h1 fw-bold mb-0">Last Chance Ticket</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Edit your account Info</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="first_name" placeholder="" value="{{ $user->first_name }}" class="form-control form-control-lg  @error('first_name') is-invalid @enderror"value="{{ old('first_name') }}" required autocomplete="first_name" name="first_name">
                    <label class="form-label" for="form2Example17">First Name</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" id="last_name" placeholder="" value="{{ $user->last_name }}" class="form-control form-control-lg  @error('last_name') is-invalid @enderror"value="{{ old('last_name') }}" required autocomplete="last_name" name="last_name">
                    <label class="form-label" for="form2Example17">Last Name</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="text" id="phone" placeholder="" value="{{ $user->phone }}" class="form-control form-control-lg  @error('phone') is-invalid @enderror"value="{{ old('phone') }}" required autocomplete="phone" name="phone">
                    <label class="form-label" for="form2Example17">Phone Number</label>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      @if ($message = Session::get('error'))
                      <div class="alert alert-danger">
                          <center><strong>{{ $message }}</strong></center>
                      </div>
                      @endif
                    </div>
                </div>

                  <div class="pt-1 mb-4">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: #22b3c1" type="button">Update Profile</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  </div>
    @include("auth.partials.footer")

    <script src="{{asset('newAssets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('newAssets/assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/tabs.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/popup.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/custom.js')}}"></script>
  
    <script>
      function bannerSwitcher() {
        next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
        if (next.length) next.prop('checked', true);
        else $('.sec-1-input').first().prop('checked', true);
      }
  
      var bannerTimer = setInterval(bannerSwitcher, 5000);
  
      $('nav .controls label').click(function() {
        clearInterval(bannerTimer);
        bannerTimer = setInterval(bannerSwitcher, 5000)
      });
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
