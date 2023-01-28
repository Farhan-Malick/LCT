<!doctype html>
<html lang="en">

<head>
    <!-- placeholder="" Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <title>Ticket Location Address</title>
</head>
<body>
    @include("auth.partials.darkheader")
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
      <div class="reservation-form">
        <div class="container">
           <div class="row">
              <div class="col-lg-8">
                @if ($message = Session::get('msg'))
                        <div class="alert alert-success alert-block">
                            <strong>{{ $message }}</strong>
                        </div>
                @endif
                <form action="{{route('seller.complete_ticket.address.store',$tickets->id)}}" method="post" id="reservation-form">
                    @csrf
                    {{-- 
                 <form id="reservation-form" name="gs" method="submit" role="search" action="#">
                    --}}
                    <div class="row">
                       <div class="col-lg-12">
                          <h4>Enter Your <em>Ticket</em> Location<em> Address</em></h4>
                       </div>
                       <div class="col-lg-6">
                          <fieldset>
                            <label class="text-dark" for="firstname">First Name</label>
                              <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" required>
                          </fieldset>
                       </div>
                       <div class="col-lg-6">
                          <fieldset>
                            <label class="text-dark" for="lastname">Last Name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname"placeholder="Last Name" required>
                          </fieldset>
                       </div>
                       <div class="col-lg-6">
                          <fieldset>
                            <label class="text-dark" for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"placeholder="Email" required>
                          </fieldset>
                       </div>
                       <div class="col-lg-6">
                          <fieldset>
                            <label class="text-dark" for="city">City</label>
                            <input type="text" class="form-control" name="city"placeholder="City" required>
                          </fieldset>
                       </div>
                       <div class="col-lg-6">
                          <fieldset>
                            <label class="text-dark" for="State">State</label>
                            <input type="text" class="form-control" name="state"placeholder="State" required>
                          </fieldset>
                       </div>
                       <div class="col-lg-6">
                          <fieldset>
                            <label class="text-dark" for="zip">Zip Code</label>
                            <input type="number" class="form-control" name="zipcode" id="zip"placeholder="Zip Code" required>
                          </fieldset>
                       </div>
                       <div class="col-lg-6">
                          <fieldset>
                            <label class="text-dark" for="phone">Phone </label>
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
                          </fieldset>
                       </div>
                       <div class="col-lg-6">
                        <fieldset>
                            <label class="text-dark" for="phone">Country </label>
                            <select name="country" class="form-control"aria-label="Default select example" id="country" placeholder="" required>
                                <option >Select Country</option>
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
                            <label class="text-dark" for="address">Address</label>
                            <input type="text" class="form-control" name="address1"placeholder="Address" required>
                        </fieldset>
                     </div>
                     <div class="col-lg-12">
                        <fieldset>
                            <label class="text-dark" for="address">Address 2</label>
                            <input type="text" class="form-control" name="address2"placeholder="Address 2" required>
                        </fieldset>
                     </div>
                     <div class="col-lg-12">
                        <fieldset>
                            <label class="text-dark" for="address">Address 3</label>
                            <input type="text" class="form-control" name="address3"placeholder="Address 3" required>
                        </fieldset>
                     </div>
                       <div class="col-lg-12">
                          <fieldset>
                            <button class="btn primary-btn w-100 mt-3"
                            type="submit"><strong>Submit Form</strong></button>
                          </fieldset>
                       </div>
                    </div>
                 </form>
              </div>
              <div class="col-lg-4 ">
                <div class=" p-4  mb-3  " style="background-color: #f9f9f9">
                    <div class="card-body">
                      <div class="card-title">
                        <h4>{{$tickets->event->event_name}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ( {{$tickets->event->event_date}}  )</h4>
                    </div>
                    <div class="card-subtitle mb-2">
                        <span class="fw-600 mb-2">
                            <strong>Time : </strong>{{$tickets->event->start_time}} - {{$tickets->event->end_time}}</span>
                        <br>
                        <span class="text-muted mb-2"><strong class="text-dark">VENUE : </strong>{{$tickets->event->venue_name}} , {{$tickets->event->location}}  </span>
                    </div>
                        <div class="tags d-flex mb-2">
                            <span class="ticket-type p-1 rounded-3 me-2"> <strong>Ticket Type: </strong>{{$tickets->ticket_type}}</span>
                            <span class="ticket-type p-1 rounded-3 me-2"><strong>Split Type: </strong>any</span>
                        </div>

                        <div class="price-tag d-sm-flex d-block justify-content-between mb-2">
                            <span> <strong>Price/Ticket: </strong></span>
                            <span><strong> {{$ticketCurrency->currency_type}} <span class="price">{{$tickets->price}}</span></strong></span>
                        </div>

                        <div class="price-tag d-sm-flex d-block justify-content-between tags mb-2">
                            <span> <strong>Number of Tickets: </strong></span>
                            <span><strong> × {{$tickets->quantity}}</strong></span>
                        </div>
                        <div class="tags d-flex mt-1">
                          <span class="ticket-type p-1 rounded-3 me-2"> <strong>Section: </strong>{{$tickets->section}}</span>
                          <span class="ticket-type p-1 rounded-3 me-2"><strong>Row: </strong>{{$tickets->row}}</span>
                          <span class="ticket-type p-1 rounded-3 me-2"><strong>Category: </strong>{{$tickets->categories}}</span>
                      </div>
                      <div class="price-tag d-sm-flex d-block justify-content-between mt-1">
                          <span> <strong>Ticket Price: </strong></span>
                          <span><strong> {{$ticketCurrency->currency_type}} <span class="price">{{$price}}</span></strong></span>
                      </div>
                      <div class="price-tag d-sm-flex d-block justify-content-between mt-1">
                          <span> <strong> Seller Fees: </strong></span>
                          <span><strong><span class="percentage">10%</span></strong></span>
                      </div>
                        {{-- <div class="price-tag d-sm-flex mb-2 d-block justify-content-between">
                            <span> <strong>VAT {{$ticketCurrency->currency_type}}: </strong></span>
                            <span><strong> 1.86</strong></span>
                        </div> --}}
                        <div class="small tags mb-4 mt-2" > VAT amount can change depending on your location.
                            YOU'LL RECEIVE {{$ticketCurrency->currency_type}} <span class="grandTotal">{{$grand_total}}</span></div>
                        <div class="price-tag mb-2 d-sm-flex d-block justify-content-between">
                            <span> <strong>YOU'LL RECEIVE: </strong></span>
                            <span><strong> {{$ticketCurrency->currency_type}} <span class="grandTotal">{{$grand_total}}</span></strong></span>
                        </div>
                    </div>
                </div>
            </div>
           </div>
        </div>
     </div>


    <!-- Optional JavaScript; choose one of the two! -->
    @include("auth.partials.footer")
    <script src="{{asset('newAssets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('newAssets/assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/tabs.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/popup.js')}}"></script>
    <script src="{{asset('newAssets/assets/js/custom.js')}}"></script>
</body>

</html>
