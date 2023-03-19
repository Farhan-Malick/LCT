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
          <h4 class="text-light">LAST CHANCE TICKET</h4>
          <h2>Create Your Event Request</h2>
          {{-- <p> Here is the last chance to be the member of world largest marketplace for tickets to live events.
            Prices are set by sellers and may be below or above face value.</p> --}}
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
            <a href="#">+276 329 3991</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-envelope"></i>
            <h4>Contact Us via Email</h4>
            <a href="#">sales@lastchanceticket.com</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-map-marker"></i>
            <h4>Visit Our Offices</h4>
            <a href="#">30 N Gould St Ste R Sheridan, WY 82801</a>
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
                    <label class="text-dark" for="InputVenue">Venue Name</label>
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
            <div class="col-lg-6">
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
            <div class="col-lg-6">
              <fieldset>
                  <label class="text-dark" for="InputLocation">Country</label>
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
              </fieldset>
          </div>
            
            <div class="col-lg-12">
              <fieldset>
                  <label class="text-dark text-center" for="InputLocation">URL</label>
                      <input
                          type="text"
                          class="form-control"
                          name="url"
                          placeholder="Event URL"
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
