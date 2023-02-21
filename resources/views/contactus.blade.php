<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Last Chance Ticket - Contact Us</title>

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
          <h2>Contact Us</h2>
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
            <a href="#">+123 456 789 (0)</a><br>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-envelope"></i>
            <h4>Contact Us via Email</h4>

            For Sales : <a href="#">sales@lastchanceticket.com</a><br>
            For Support : <a href="#">support@lastchanceticket.com</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-map-marker"></i>
            <h4>Visit Our Offices</h4>
            <a href="#">30 N Gould St Ste R Sheridan,<br> WY 82801, United States</a>
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
            <form method="post" action="{{ route('contact-us') }}" id="reservation-form">
                @csrf
          {{-- <form id="reservation-form" name="gs" method="submit" role="search" action="#"> --}}
            <div class="row">
              <div class="col-lg-12">
                <h4>Contact Us</em></h4>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                    <label class="text-dark" for="InputVenue">First Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="fname"
                        placeholder="First Name"
                    />
                  </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label class="text-dark" for="InputDate">Last Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="lname"
                            placeholder="Last Name"
                        />
                </fieldset>
              </div>
              <div class="col-lg-6">
                  <fieldset>
                    <label class="text-dark" for="InputDate">Email Address</label>
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        placeholder="Email Address"
                    />
                  </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                    <label class="text-dark" for="InputLocation">Country</label>
                    <select name="country" class="form-control form-control-lg" id="country" >
                      <option >Select Country</option>
                      <option name="country">Afghanistan +93</option>
                      <option name="country">Åland Islands +358</option>
                      <option  name="country" >Albania +355</option>
                      <option  name="country" >Algeria +213</option>
                      <option  name="country" >American Samoa +1684</option>
                      <option  name="country" >Andorra +376</option>
                      <option  name="country" >Angola +244</option>
                      <option  name="country" >Anguilla +1264</option>
                      <option  name="country" >Antarctica +672</option>
                      <option  name="country" >Antigua & Barbuda +1268</option>
                      <option  name="country" >Argentina +54</option>
                      <option  name="country" >Armenia +374</option>
                      <option  name="country" >Aruba +297</option>
                      <option  name="country" >Australia +61</option>
                      <option  name="country" >Austria +43</option>
                      <option  name="country" >Azerbaijan +994</option>
                      <option  name="country" >Bahamas +1242</option>
                      <option  name="country" >Bahrain +973</option>
                      <option  name="country" >Bangladesh +880</option>
                      <option  name="country" >Barbados +1246</option>
                      <option  name="country" >Belarus +375</option>
                      <option  name="country" >Belgium +32</option>
                      <option  name="country" >Belize +501</option>
                      <option  name="country" >Benin +229</option>
                      <option  name="country" >Bermuda +1441</option>
                      <option  name="country" >Bhutan +975</option>
                      <option  name="country" >Bolivia +591</option>
                      <option  name="country" >Caribbean Netherlands +599</option>
                      <option  name="country" >Bosnia & Herzegovina +387</option>
                      <option  name="country" >Botswana +267</option>
                      <option  name="country" >Bouvet Island +55</option>
                      <option  name="country" >Brazil +55</option>
                      <option  name="country" >British Indian Ocean Territory +246</option>
                      <option  name="country" >Brunei +673</option>
                      <option  name="country" >Bulgaria +359</option>
                      <option  name="country" >Burkina Faso +226</option>
                      <option  name="country" >Burundi +257</option>
                      <option  name="country" >Cambodia +855</option>
                      <option  name="country" >Cameroon +237</option>
                      <option  name="country" >Canada +1</option>
                      <option  name="country" >Cape Verde +238</option>
                      <option  name="country" >Cayman Islands +1345</option>
                      <option  name="country" >Central African Republic +236</option>
                      <option  name="country" >Chad +235</option>
                      <option  name="country" >Chile +56</option>
                      <option  name="country" >China +86</option>
                      <option  name="country" >Christmas Island +61</option>
                      <option  name="country" >Cocos (Keeling) Islands +672</option>
                      <option  name="country" >Colombia +57</option>
                      <option  name="country" >Comoros +269</option>
                      <option  name="country" >Congo - Brazzaville +242</option>
                      <option  name="country" >Congo - Kinshasa +242</option>
                      <option  name="country" >Cook Islands +682</option>
                      <option  name="country" >Costa Rica +506</option>
                      <option  name="country" >Côte d’Ivoire +225</option>
                      <option  name="country" >Croatia +385</option>
                      <option  name="country" >Cuba +53</option>
                      <option  name="country" >Curaçao +599</option>
                      <option  name="country" >Cyprus +357</option>
                      <option  name="country" >Czechia +420</option>
                      <option  name="country" >Denmark +45</option>
                      <option  name="country" >Djibouti +253</option>
                      <option  name="country" >Dominica +1767</option>
                      <option  name="country" >Dominican Republic +1809</option>
                      <option  name="country" >Ecuador +593</option>
                      <option  name="country" >Egypt +20</option>
                      <option  name="country" >El Salvador +503</option>
                      <option  name="country" >Equatorial Guinea +240</option>
                      <option  name="country" >Eritrea +291</option>
                      <option  name="country" >Estonia +372</option>
                      <option  name="country" >Ethiopia +251</option>
                      <option  name="country" >Falkland Islands (Islas Malvinas) +500</option>
                      <option  name="country" >Faroe Islands +298</option>
                      <option  name="country" >Fiji +679</option>
                      <option  name="country" >Finland +358</option>
                      <option  name="country" >France +33</option>
                      <option  name="country" >French Guiana +594</option>
                      <option  name="country" >French Polynesia +689</option>
                      <option  name="country" >French Southern Territories +262</option>
                      <option  name="country" >Gabon +241</option>
                      <option  name="country" >Gambia +220</option>
                      <option  name="country" >Georgia +995</option>
                      <option  name="country" >Germany +49</option>
                      <option  name="country" >Ghana +233</option>
                      <option  name="country" >Gibraltar +350</option>
                      <option  name="country" >Greece +30</option>
                      <option  name="country" >Greenland +299</option>
                      <option  name="country" >Grenada +1473</option>
                      <option  name="country" >Guadeloupe +590</option>
                      <option  name="country" >Guam +1671</option>
                      <option  name="country" >Guatemala +502</option>
                      <option  name="country" >Guernsey +44</option>
                      <option  name="country" >Guinea +224</option>
                      <option  name="country" >Guinea-Bissau +245</option>
                      <option  name="country" >Guyana +592</option>
                      <option  name="country" >Haiti +509</option>
                      <option  name="country" >Heard & McDonald Islands +0</option>
                      <option  name="country" >Vatican City +39</option>
                      <option  name="country" >Honduras +504</option>
                      <option  name="country" >Hong Kong +852</option>
                      <option  name="country" >Hungary +36</option>
                      <option  name="country" >Iceland +354</option>
                      <option  name="country" >India +91</option>
                      <option  name="country" >Indonesia +62</option>
                      <option  name="country" >Iran +98</option>
                      <option  name="country" >Iraq +964</option>
                      <option  name="country" >Ireland +353</option>
                      <option  name="country" >Isle of Man +44</option>
                      <option  name="country" >Israel +972</option>
                      <option  name="country" >Italy +39</option>
                      <option  name="country" >Jamaica +1876</option>
                      <option  name="country" >Japan +81</option>
                      <option  name="country" >Jersey +44</option>
                      <option  name="country" >Jordan +962</option>
                      <option  name="country" >Kazakhstan +7</option>
                      <option  name="country" >Kenya +254</option>
                      <option  name="country" >Kiribati +686</option>
                      <option  name="country" >North Korea +850</option>
                      <option  name="country" >South Korea +82</option>
                      <option  name="country" >Kosovo +381</option>
                      <option  name="country" >Kuwait +965</option>
                      <option  name="country" >Kyrgyzstan +996</option>
                      <option  name="country" >Laos +856</option>
                      <option  name="country" >Latvia +371</option>
                      <option  name="country" >Lebanon +961</option>
                      <option  name="country" >Lesotho +266</option>
                      <option  name="country" >Liberia +231</option>
                      <option  name="country" >Libya +218</option>
                      <option  name="country" >Liechtenstein +423</option>
                      <option  name="country" >Lithuania +370</option>
                      <option  name="country" >Luxembourg +352</option>
                      <option  name="country" >Macao +853</option>
                      <option  name="country" >North Macedonia +389</option>
                      <option  name="country" >Madagascar +261</option>
                      <option  name="country" >Malawi +265</option>
                      <option  name="country" >Malaysia +60</option>
                      <option  name="country" >Maldives +960</option>
                      <option  name="country" >Mali +223</option>
                      <option  name="country" >Malta +356</option>
                      <option  name="country" >Marshall Islands +692</option>
                      <option  name="country" >Martinique +596</option>
                      <option  name="country" >Mauritania +222</option>
                      <option  name="country" >Mauritius +230</option>
                      <option  name="country" >Mayotte +262</option>
                      <option  name="country" >Mexico +52</option>
                      <option  name="country" >Micronesia +691</option>
                      <option  name="country" >Moldova +373</option>
                      <option  name="country" >Monaco +377</option>
                      <option  name="country" >Mongolia +976</option>
                      <option  name="country" >Montenegro +382</option>
                      <option  name="country" >Montserrat +1664</option>
                      <option  name="country" >Morocco +212</option>
                      <option  name="country" >Mozambique +258</option>
                      <option  name="country" >Myanmar (Burma) +95</option>
                      <option  name="country" >Namibia +264</option>
                      <option  name="country" >Nauru +674</option>
                      <option  name="country" >Nepal +977</option>
                      <option  name="country" >Netherlands +31</option>
                      <option  name="country" >Curaçao +599</option>
                      <option  name="country" >New Caledonia +687</option>
                      <option  name="country" >New Zealand +64</option>
                      <option  name="country" >Nicaragua +505</option>
                      <option  name="country" >Niger +227</option>
                      <option  name="country" >Nigeria +234</option>
                      <option  name="country" >Niue +683</option>
                      <option  name="country" >Norfolk Island +672</option>
                      <option  name="country" >Northern Mariana Islands +1670</option>
                      <option  name="country" >Norway +47</option>
                      <option  name="country" >Oman +968</option>
                      <option  name="country" >Pakistan +92</option>
                      <option  name="country" >Palau +680</option>
                      <option  name="country" >Palestine +970</option>
                      <option  name="country" >Panama +507</option>
                      <option  name="country" >Papua New Guinea +675</option>
                      <option  name="country" >Paraguay +595</option>
                      <option  name="country" >Peru +51</option>
                      <option  name="country" >Philippines +63</option>
                      <option  name="country" >Pitcairn Islands +64</option>
                      <option  name="country" >Poland +48</option>
                      <option  name="country" >Portugal +351</option>
                      <option  name="country" >Puerto Rico +1787</option>
                      <option  name="country" >Qatar +974</option>
                      <option  name="country" >Réunion +262</option>
                      <option  name="country" >Romania +40</option>
                      <option  name="country" >Russia +70</option>
                      <option  name="country" >Rwanda +250</option>
                      <option  name="country" >St. Barthélemy +590</option>
                      <option  name="country" >St. Helena +290</option>
                      <option  name="country" >St. Kitts & Nevis +1869</option>
                      <option  name="country" >St. Lucia +1758</option>
                      <option  name="country" >St. Martin +590</option>
                      <option  name="country" >St. Pierre & Miquelon +508</option>
                      <option  name="country" >St. Vincent & Grenadines +1784</option>
                      <option  name="country" >Samoa +684</option>
                      <option  name="country" >San Marino +378</option>
                      <option  name="country" >São Tomé & Príncipe +239</option>
                      <option  name="country" >Saudi Arabia +966</option>
                      <option  name="country" >Senegal +221</option>
                      <option  name="country" >Serbia +381</option>
                      <option  name="country" >Serbia +381</option>
                      <option  name="country" >Seychelles +248</option>
                      <option  name="country" >Sierra Leone +232</option>
                      <option  name="country" >Singapore +65</option>
                      <option  name="country" >Sint Maarten +1</option>
                      <option  name="country" >Slovakia +421</option>
                      <option  name="country" >Slovenia +386</option>
                      <option  name="country" >Solomon Islands +677</option>
                      <option  name="country" >Somalia +252</option>
                      <option  name="country" >South Africa +27</option>
                      <option  name="country" >South Georgia & South Sandwich Islands +500</option>
                      <option  name="country" >South Sudan +211</option>
                      <option  name="country" >Spain +34</option>
                      <option  name="country" >Sri Lanka +94</option>
                      <option  name="country" >Sudan +249</option>
                      <option  name="country" >Suriname +597</option>
                      <option  name="country" >Svalbard & Jan Mayen +47</option>
                      <option  name="country" >Eswatini +268</option>
                      <option  name="country" >Sweden +46</option>
                      <option  name="country" >Switzerland +41</option>
                      <option  name="country" >Syria +963</option>
                      <option  name="country" >Taiwan +886</option>
                      <option  name="country" >Tajikistan +992</option>
                      <option  name="country" >Tanzania +255</option>
                      <option  name="country" >Thailand +66</option>
                      <option  name="country" >Timor-Leste +670</option>
                      <option  name="country" >Togo +228</option>
                      <option  name="country" >Tokelau +690</option>
                      <option  name="country" >Tonga +676</option>
                      <option  name="country" >Trinidad & Tobago +1868</option>
                      <option  name="country" >Tunisia +216</option>
                      <option  name="country" >Turkey +90</option>
                      <option  name="country" >Turkmenistan +7370</option>
                      <option  name="country" >Turks & Caicos Islands +1649</option>
                      <option  name="country" >Tuvalu +688</option>
                      <option  name="country" >Uganda +256</option>
                      <option  name="country" >Ukraine +380</option>
                      <option  name="country" >United Arab Emirates +971</option>
                      <option  name="country" >United Kingdom +44</option>
                      <option  name="country" >United States +1</option>
                      <option  name="country" >U.S. Outlying Islands +1</option>
                      <option  name="country" >Uruguay +598</option>
                      <option  name="country" >Uzbekistan +998</option>
                      <option  name="country" >Vanuatu +678</option>
                      <option  name="country" >Venezuela +58</option>
                      <option  name="country" >Vietnam +84</option>
                      <option  name="country" >British Virgin Islands +1284</option>
                      <option  name="country" >U.S. Virgin Islands +1340</option>
                      <option  name="country" >Wallis & Futuna +681</option>
                      <option  name="country" >Western Sahara +212</option>
                      <option  name="country" >Yemen +967</option>
                      <option  name="country" >Zambia +260</option>
                      <option  name="country" >Zimbabwe +263</option>
                  </select>
                </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                  <label class="text-dark" for="InputLocation">Phone Number</label>
                      <input
                          type="text"
                          class="form-control"
                          name="phone"
                          placeholder="Phone Number"
                      />
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                  <label class="text-dark" for="InputLocation">Purpose</label>
                  <select name="purpose" class="form-control form-control-lg" id="purpose" >
                    <option >Please Select</option>
                    <option name="purpose">Sales</option>
                    <option name="purpose">Support</option>
                </select>
              </fieldset>
          </div>
            <div class="col-lg-12 mb-5">
              <fieldset>
                  <label class="text-dark" for="InputLocation">Message</label>
                  <div class="form-outline">
                    <textarea class="form-control form-control-lg" name="message" id="textAreaExample1" rows="4"></textarea>
                  </div>
              </fieldset>
            </div>
              <div class="col-lg-12">                        
                  <fieldset>
                      <button type="submit" class="main-button">Contact Us Now</button>
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
