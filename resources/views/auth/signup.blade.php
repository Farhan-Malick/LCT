
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
    <link rel="stylesheet" href="{{ asset('assets/styles/common.css') }}" />
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/templatemo-woox-travel.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('newAssets/assets/css/animate.css')}}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    
    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
    </style>
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
    @include("auth.partials.newHeader")
    
    <section class="h-100 bg-light">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src="{{asset('assets/images/register.webp')}}"
                      alt="Sample photo" class="img-fluid"
                      style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                  </div>
                  <div class="col-xl-6">
                    <form action="{{ route("register") }}" method="POST">
                        @csrf
                            <div class="card-body p-md-5 text-black">
                            <h3 class="mb-5 text-uppercase"> <i class="fas fa-cubes" style="color: #22b3c1;"></i> LCT registration form</h3>
                                
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                  <input id="first_name" type="text" class="form-control form-control-lg @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name">

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    {{-- <input type="text" class="form-control form-control-lg" id="firstname" value="{{ old('firstname') }}"name="first_name" >
                                    @error('first_name')
                                    <p style="color: red">{{ $message }}</p>
                                    @enderror --}}
                                    <label class="form-label" for="form3Example1m">First name</label>
                                </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                  <input id="last_name" type="text" class="form-control form-control-lg @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">

                                  @error('last_name')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                    <label class="form-label" for="form3Example1n">Last name</label>
                                </div>
                                </div>
                            </div>
            
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                  <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                    <label class="form-label" for="form3Example1m1">Email Address</label>
                                </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                  <input id="emailrepeat" type="email" class="form-control form-control-lg @error('email_confirmation') is-invalid @enderror" name="email_confirmation" value="{{ old('email_confirmation') }}" required autocomplete="email_confirmation">

                                @error('email_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <label class="form-label" for="emailrepeat">Re enter email address</label>
                                   
                                </div>
                                </div>
                            </div>
            
                            <div class="form-outline mb-4">
                              <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                                <label for="password">Enter New Password</label>
                            </div>
                            <div class="form-outline mb-4">
                              <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                                <label for="confirmpass">Re-Type Password</label>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                  <select name="primary_phone" class="form-control form-control-lg" id="primary_phone" >
                                    <option >Select</option>
                                    <option name="primary_phone">Afghanistan +93</option>
                                    <option name="primary_phone">Åland Islands +358</option>
                                    <option  name="primary_phone" >Albania +355</option>
                                    <option  name="primary_phone" >Algeria +213</option>
                                    <option  name="primary_phone" >American Samoa +1684</option>
                                    <option  name="primary_phone" >Andorra +376</option>
                                    <option  name="primary_phone" >Angola +244</option>
                                    <option  name="primary_phone" >Anguilla +1264</option>
                                    <option  name="primary_phone" >Antarctica +672</option>
                                    <option  name="primary_phone" >Antigua & Barbuda +1268</option>
                                    <option  name="primary_phone" >Argentina +54</option>
                                    <option  name="primary_phone" >Armenia +374</option>
                                    <option  name="primary_phone" >Aruba +297</option>
                                    <option  name="primary_phone" >Australia +61</option>
                                    <option  name="primary_phone" >Austria +43</option>
                                    <option  name="primary_phone" >Azerbaijan +994</option>
                                    <option  name="primary_phone" >Bahamas +1242</option>
                                    <option  name="primary_phone" >Bahrain +973</option>
                                    <option  name="primary_phone" >Bangladesh +880</option>
                                    <option  name="primary_phone" >Barbados +1246</option>
                                    <option  name="primary_phone" >Belarus +375</option>
                                    <option  name="primary_phone" >Belgium +32</option>
                                    <option  name="primary_phone" >Belize +501</option>
                                    <option  name="primary_phone" >Benin +229</option>
                                    <option  name="primary_phone" >Bermuda +1441</option>
                                    <option  name="primary_phone" >Bhutan +975</option>
                                    <option  name="primary_phone" >Bolivia +591</option>
                                    <option  name="primary_phone" >Caribbean Netherlands +599</option>
                                    <option  name="primary_phone" >Bosnia & Herzegovina +387</option>
                                    <option  name="primary_phone" >Botswana +267</option>
                                    <option  name="primary_phone" >Bouvet Island +55</option>
                                    <option  name="primary_phone" >Brazil +55</option>
                                    <option  name="primary_phone" >British Indian Ocean Territory +246</option>
                                    <option  name="primary_phone" >Brunei +673</option>
                                    <option  name="primary_phone" >Bulgaria +359</option>
                                    <option  name="primary_phone" >Burkina Faso +226</option>
                                    <option  name="primary_phone" >Burundi +257</option>
                                    <option  name="primary_phone" >Cambodia +855</option>
                                    <option  name="primary_phone" >Cameroon +237</option>
                                    <option  name="primary_phone" >Canada +1</option>
                                    <option  name="primary_phone" >Cape Verde +238</option>
                                    <option  name="primary_phone" >Cayman Islands +1345</option>
                                    <option  name="primary_phone" >Central African Republic +236</option>
                                    <option  name="primary_phone" >Chad +235</option>
                                    <option  name="primary_phone" >Chile +56</option>
                                    <option  name="primary_phone" >China +86</option>
                                    <option  name="primary_phone" >Christmas Island +61</option>
                                    <option  name="primary_phone" >Cocos (Keeling) Islands +672</option>
                                    <option  name="primary_phone" >Colombia +57</option>
                                    <option  name="primary_phone" >Comoros +269</option>
                                    <option  name="primary_phone" >Congo - Brazzaville +242</option>
                                    <option  name="primary_phone" >Congo - Kinshasa +242</option>
                                    <option  name="primary_phone" >Cook Islands +682</option>
                                    <option  name="primary_phone" >Costa Rica +506</option>
                                    <option  name="primary_phone" >Côte d’Ivoire +225</option>
                                    <option  name="primary_phone" >Croatia +385</option>
                                    <option  name="primary_phone" >Cuba +53</option>
                                    <option  name="primary_phone" >Curaçao +599</option>
                                    <option  name="primary_phone" >Cyprus +357</option>
                                    <option  name="primary_phone" >Czechia +420</option>
                                    <option  name="primary_phone" >Denmark +45</option>
                                    <option  name="primary_phone" >Djibouti +253</option>
                                    <option  name="primary_phone" >Dominica +1767</option>
                                    <option  name="primary_phone" >Dominican Republic +1809</option>
                                    <option  name="primary_phone" >Ecuador +593</option>
                                    <option  name="primary_phone" >Egypt +20</option>
                                    <option  name="primary_phone" >El Salvador +503</option>
                                    <option  name="primary_phone" >Equatorial Guinea +240</option>
                                    <option  name="primary_phone" >Eritrea +291</option>
                                    <option  name="primary_phone" >Estonia +372</option>
                                    <option  name="primary_phone" >Ethiopia +251</option>
                                    <option  name="primary_phone" >Falkland Islands (Islas Malvinas) +500</option>
                                    <option  name="primary_phone" >Faroe Islands +298</option>
                                    <option  name="primary_phone" >Fiji +679</option>
                                    <option  name="primary_phone" >Finland +358</option>
                                    <option  name="primary_phone" >France +33</option>
                                    <option  name="primary_phone" >French Guiana +594</option>
                                    <option  name="primary_phone" >French Polynesia +689</option>
                                    <option  name="primary_phone" >French Southern Territories +262</option>
                                    <option  name="primary_phone" >Gabon +241</option>
                                    <option  name="primary_phone" >Gambia +220</option>
                                    <option  name="primary_phone" >Georgia +995</option>
                                    <option  name="primary_phone" >Germany +49</option>
                                    <option  name="primary_phone" >Ghana +233</option>
                                    <option  name="primary_phone" >Gibraltar +350</option>
                                    <option  name="primary_phone" >Greece +30</option>
                                    <option  name="primary_phone" >Greenland +299</option>
                                    <option  name="primary_phone" >Grenada +1473</option>
                                    <option  name="primary_phone" >Guadeloupe +590</option>
                                    <option  name="primary_phone" >Guam +1671</option>
                                    <option  name="primary_phone" >Guatemala +502</option>
                                    <option  name="primary_phone" >Guernsey +44</option>
                                    <option  name="primary_phone" >Guinea +224</option>
                                    <option  name="primary_phone" >Guinea-Bissau +245</option>
                                    <option  name="primary_phone" >Guyana +592</option>
                                    <option  name="primary_phone" >Haiti +509</option>
                                    <option  name="primary_phone" >Heard & McDonald Islands +0</option>
                                    <option  name="primary_phone" >Vatican City +39</option>
                                    <option  name="primary_phone" >Honduras +504</option>
                                    <option  name="primary_phone" >Hong Kong +852</option>
                                    <option  name="primary_phone" >Hungary +36</option>
                                    <option  name="primary_phone" >Iceland +354</option>
                                    <option  name="primary_phone" >India +91</option>
                                    <option  name="primary_phone" >Indonesia +62</option>
                                    <option  name="primary_phone" >Iran +98</option>
                                    <option  name="primary_phone" >Iraq +964</option>
                                    <option  name="primary_phone" >Ireland +353</option>
                                    <option  name="primary_phone" >Isle of Man +44</option>
                                    <option  name="primary_phone" >Israel +972</option>
                                    <option  name="primary_phone" >Italy +39</option>
                                    <option  name="primary_phone" >Jamaica +1876</option>
                                    <option  name="primary_phone" >Japan +81</option>
                                    <option  name="primary_phone" >Jersey +44</option>
                                    <option  name="primary_phone" >Jordan +962</option>
                                    <option  name="primary_phone" >Kazakhstan +7</option>
                                    <option  name="primary_phone" >Kenya +254</option>
                                    <option  name="primary_phone" >Kiribati +686</option>
                                    <option  name="primary_phone" >North Korea +850</option>
                                    <option  name="primary_phone" >South Korea +82</option>
                                    <option  name="primary_phone" >Kosovo +381</option>
                                    <option  name="primary_phone" >Kuwait +965</option>
                                    <option  name="primary_phone" >Kyrgyzstan +996</option>
                                    <option  name="primary_phone" >Laos +856</option>
                                    <option  name="primary_phone" >Latvia +371</option>
                                    <option  name="primary_phone" >Lebanon +961</option>
                                    <option  name="primary_phone" >Lesotho +266</option>
                                    <option  name="primary_phone" >Liberia +231</option>
                                    <option  name="primary_phone" >Libya +218</option>
                                    <option  name="primary_phone" >Liechtenstein +423</option>
                                    <option  name="primary_phone" >Lithuania +370</option>
                                    <option  name="primary_phone" >Luxembourg +352</option>
                                    <option  name="primary_phone" >Macao +853</option>
                                    <option  name="primary_phone" >North Macedonia +389</option>
                                    <option  name="primary_phone" >Madagascar +261</option>
                                    <option  name="primary_phone" >Malawi +265</option>
                                    <option  name="primary_phone" >Malaysia +60</option>
                                    <option  name="primary_phone" >Maldives +960</option>
                                    <option  name="primary_phone" >Mali +223</option>
                                    <option  name="primary_phone" >Malta +356</option>
                                    <option  name="primary_phone" >Marshall Islands +692</option>
                                    <option  name="primary_phone" >Martinique +596</option>
                                    <option  name="primary_phone" >Mauritania +222</option>
                                    <option  name="primary_phone" >Mauritius +230</option>
                                    <option  name="primary_phone" >Mayotte +262</option>
                                    <option  name="primary_phone" >Mexico +52</option>
                                    <option  name="primary_phone" >Micronesia +691</option>
                                    <option  name="primary_phone" >Moldova +373</option>
                                    <option  name="primary_phone" >Monaco +377</option>
                                    <option  name="primary_phone" >Mongolia +976</option>
                                    <option  name="primary_phone" >Montenegro +382</option>
                                    <option  name="primary_phone" >Montserrat +1664</option>
                                    <option  name="primary_phone" >Morocco +212</option>
                                    <option  name="primary_phone" >Mozambique +258</option>
                                    <option  name="primary_phone" >Myanmar (Burma) +95</option>
                                    <option  name="primary_phone" >Namibia +264</option>
                                    <option  name="primary_phone" >Nauru +674</option>
                                    <option  name="primary_phone" >Nepal +977</option>
                                    <option  name="primary_phone" >Netherlands +31</option>
                                    <option  name="primary_phone" >Curaçao +599</option>
                                    <option  name="primary_phone" >New Caledonia +687</option>
                                    <option  name="primary_phone" >New Zealand +64</option>
                                    <option  name="primary_phone" >Nicaragua +505</option>
                                    <option  name="primary_phone" >Niger +227</option>
                                    <option  name="primary_phone" >Nigeria +234</option>
                                    <option  name="primary_phone" >Niue +683</option>
                                    <option  name="primary_phone" >Norfolk Island +672</option>
                                    <option  name="primary_phone" >Northern Mariana Islands +1670</option>
                                    <option  name="primary_phone" >Norway +47</option>
                                    <option  name="primary_phone" >Oman +968</option>
                                    <option  name="primary_phone" >Pakistan +92</option>
                                    <option  name="primary_phone" >Palau +680</option>
                                    <option  name="primary_phone" >Palestine +970</option>
                                    <option  name="primary_phone" >Panama +507</option>
                                    <option  name="primary_phone" >Papua New Guinea +675</option>
                                    <option  name="primary_phone" >Paraguay +595</option>
                                    <option  name="primary_phone" >Peru +51</option>
                                    <option  name="primary_phone" >Philippines +63</option>
                                    <option  name="primary_phone" >Pitcairn Islands +64</option>
                                    <option  name="primary_phone" >Poland +48</option>
                                    <option  name="primary_phone" >Portugal +351</option>
                                    <option  name="primary_phone" >Puerto Rico +1787</option>
                                    <option  name="primary_phone" >Qatar +974</option>
                                    <option  name="primary_phone" >Réunion +262</option>
                                    <option  name="primary_phone" >Romania +40</option>
                                    <option  name="primary_phone" >Russia +70</option>
                                    <option  name="primary_phone" >Rwanda +250</option>
                                    <option  name="primary_phone" >St. Barthélemy +590</option>
                                    <option  name="primary_phone" >St. Helena +290</option>
                                    <option  name="primary_phone" >St. Kitts & Nevis +1869</option>
                                    <option  name="primary_phone" >St. Lucia +1758</option>
                                    <option  name="primary_phone" >St. Martin +590</option>
                                    <option  name="primary_phone" >St. Pierre & Miquelon +508</option>
                                    <option  name="primary_phone" >St. Vincent & Grenadines +1784</option>
                                    <option  name="primary_phone" >Samoa +684</option>
                                    <option  name="primary_phone" >San Marino +378</option>
                                    <option  name="primary_phone" >São Tomé & Príncipe +239</option>
                                    <option  name="primary_phone" >Saudi Arabia +966</option>
                                    <option  name="primary_phone" >Senegal +221</option>
                                    <option  name="primary_phone" >Serbia +381</option>
                                    <option  name="primary_phone" >Serbia +381</option>
                                    <option  name="primary_phone" >Seychelles +248</option>
                                    <option  name="primary_phone" >Sierra Leone +232</option>
                                    <option  name="primary_phone" >Singapore +65</option>
                                    <option  name="primary_phone" >Sint Maarten +1</option>
                                    <option  name="primary_phone" >Slovakia +421</option>
                                    <option  name="primary_phone" >Slovenia +386</option>
                                    <option  name="primary_phone" >Solomon Islands +677</option>
                                    <option  name="primary_phone" >Somalia +252</option>
                                    <option  name="primary_phone" >South Africa +27</option>
                                    <option  name="primary_phone" >South Georgia & South Sandwich Islands +500</option>
                                    <option  name="primary_phone" >South Sudan +211</option>
                                    <option  name="primary_phone" >Spain +34</option>
                                    <option  name="primary_phone" >Sri Lanka +94</option>
                                    <option  name="primary_phone" >Sudan +249</option>
                                    <option  name="primary_phone" >Suriname +597</option>
                                    <option  name="primary_phone" >Svalbard & Jan Mayen +47</option>
                                    <option  name="primary_phone" >Eswatini +268</option>
                                    <option  name="primary_phone" >Sweden +46</option>
                                    <option  name="primary_phone" >Switzerland +41</option>
                                    <option  name="primary_phone" >Syria +963</option>
                                    <option  name="primary_phone" >Taiwan +886</option>
                                    <option  name="primary_phone" >Tajikistan +992</option>
                                    <option  name="primary_phone" >Tanzania +255</option>
                                    <option  name="primary_phone" >Thailand +66</option>
                                    <option  name="primary_phone" >Timor-Leste +670</option>
                                    <option  name="primary_phone" >Togo +228</option>
                                    <option  name="primary_phone" >Tokelau +690</option>
                                    <option  name="primary_phone" >Tonga +676</option>
                                    <option  name="primary_phone" >Trinidad & Tobago +1868</option>
                                    <option  name="primary_phone" >Tunisia +216</option>
                                    <option  name="primary_phone" >Turkey +90</option>
                                    <option  name="primary_phone" >Turkmenistan +7370</option>
                                    <option  name="primary_phone" >Turks & Caicos Islands +1649</option>
                                    <option  name="primary_phone" >Tuvalu +688</option>
                                    <option  name="primary_phone" >Uganda +256</option>
                                    <option  name="primary_phone" >Ukraine +380</option>
                                    <option  name="primary_phone" >United Arab Emirates +971</option>
                                    <option  name="primary_phone" >United Kingdom +44</option>
                                    <option  name="primary_phone" >United States +1</option>
                                    <option  name="primary_phone" >U.S. Outlying Islands +1</option>
                                    <option  name="primary_phone" >Uruguay +598</option>
                                    <option  name="primary_phone" >Uzbekistan +998</option>
                                    <option  name="primary_phone" >Vanuatu +678</option>
                                    <option  name="primary_phone" >Venezuela +58</option>
                                    <option  name="primary_phone" >Vietnam +84</option>
                                    <option  name="primary_phone" >British Virgin Islands +1284</option>
                                    <option  name="primary_phone" >U.S. Virgin Islands +1340</option>
                                    <option  name="primary_phone" >Wallis & Futuna +681</option>
                                    <option  name="primary_phone" >Western Sahara +212</option>
                                    <option  name="primary_phone" >Yemen +967</option>
                                    <option  name="primary_phone" >Zambia +260</option>
                                    <option  name="primary_phone" >Zimbabwe +263</option>
                                </select>
                                 
                                @error('primary_phone')
                                    <p style="color: red">{{ $message }}</p>
                                @enderror
                                <label for="primary_phone" >Primary Phone</label>
                                </div>
                                <div class="col-md-6 mb-4">
                                  <input id="phone" type="number" class="form-control form-control-lg @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                                    @error('phone')
                                        <p style="color: red">{{ $message }}</p>
                                    @enderror
                                    <label for="phone">Phone Number</label>
            
                                </div>
                            </div>
            
                           
            
                            <div class="d-flex justify-content-end pt-3">
                                <a href="{{URL('/signup')}}" type="button" class="btn btn-secondary btn-lg">Reset all</a>
                                <button type="submit" class="btn btn-primary btn-lg ms-2" style="background-color: #22b3c1">Submit form</button>
                            </div>
            
                            </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
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
