<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/styles/sellticket.css">
    <link rel="stylesheet" href="../../assets/styles/common.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Ticket Location Address</title>
</head>
<body>

    @include("auth.partials.darkheader")
    <section class="section-two">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-8">
                    <h4 class="fw-700">Enter Your Ticket Location Address</h4>
                    @if ($message = Session::get('msg'))
                            <div class="alert alert-success alert-block">
                                <strong>{{ $message }}</strong>
                            </div>
					@endif
                    <div class="card p-4 mb-3 shadow-sm main-card br-10">
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    <i class="bi bi-info-circle-fill"></i>
                                    Specify the address from which your tickets will be sent.
                                </p>
                            </div>
                            <div class="col-md-8">
                                <form action="{{route('seller.complete_ticket.address.store',$tickets->id)}}" method="post">
                                    @csrf
                                    <div class="form-group mb-3">
                                        {{-- <select class="form-select" name="country" aria-label="Default select example">
                                            <option value="USA">USA</option>
                                            <option value="UK">UK</option>
                                            <option value="PAKISTAN">Pakistan</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                            <option value="India">India</option>
                                        </select> --}}
                                        <select name="country" class="form-control"aria-label="Default select example" id="country" required>
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
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="firstname">First Name</label>
                                        <input type="text" class="form-control" name="firstname" id="firstname" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control" name="lastname" id="lastname"required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email"required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address1"required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" name="address2"required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" name="address3"required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name="city"required>
                                    </div>
                                    <div class="form-group mb-3">
                                        {{-- <select class="form-select" aria-label="Default select example" name="state">
                                            <option selected>Select state</option>
                                            <option value="Alabama">Alabama</option>
                                            <option value="Alaska">Alaska</option>
                                            <option value="Florida">Florida</option>
                                            <option value="Jorgia">Jorgia</option>
                                        </select> --}}
                                        <input type="text" class="form-control" name="state"required>
                                    </div>
                                    <div class="form-group mb-3 w-50">
                                        <label for="zip">Zip Code</label>
                                        <input type="number" class="form-control" name="zipcode" id="zip"required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="phone">Phone <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" name="phone" id="phone" required>
                                    </div>
                                    <small>We require a phone number in case we need to contact you about
                                        your ticket
                                        sale or account details. We will not use this number for any other
                                        reason.</small>
                                    <button class="btn primary-btn w-100 mt-3"
                                        type="submit"><strong>Done</strong></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm mb-3 type-card main-card br-10">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>{{$tickets->event->title}}</h4>
                            </div>
                            <div class="card-subtitle">
                                <span class="fw-600"><strong>{{$tickets->event->start_date}}
                                    <strong>{{$tickets->event->start_time}}</strong>
                                </strong></span>
                                <br>
                                <span class="text-muted">Singapore National Stadium, Singapore, Singapore</span>
                            </div>
                            <div class="tags d-flex">
                                <span class="ticket-type p-1 rounded-3 me-2"> <strong>Ticket Type: </strong>{{$tickets->ticket_type}}</span>
                                <span class="ticket-type p-1 rounded-3 me-2"><strong>Split Type: </strong>any</span>
                            </div>

                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>Price/Ticket: </strong></span>
                                <span><strong> {{$ticketCurrency->currency_type}} <span class="price">{{$tickets->price}}</span></strong></span>
                            </div>

                            <div class="price-tag d-sm-flex d-block justify-content-between tags">
                                <span> <strong>Number of Tickets: </strong></span>
                                <span><strong> × {{$tickets->quantity}}</strong></span>
                            </div>
                            <div class="tags d-flex mt-1">
                                <span class="ticket-type p-1 rounded-3 me-2"> <strong>Section: </strong>{{$tickets->section}}</span>
                                <span class="ticket-type p-1 rounded-3 me-2"><strong>Row: </strong>{{$tickets->row}}</span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>Website Price: </strong></span>
                                <span><strong> {{$ticketCurrency->currency_type}} <span class="price">{{$price}}</span></strong></span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong> Seller Fees: </strong></span>
                                <span><strong> {{$ticketCurrency->currency_type}} <span class="percentage">{{$percentage}}</span></strong></span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>VAT {{$ticketCurrency->currency_type}}: </strong></span>
                                <span><strong> 1.86</strong></span>
                            </div>
                            <div class="small tags"> VAT amount can change depending on your location.
                                YOU'LL RECEIVE {{$ticketCurrency->currency_type}} <span class="grandTotal">{{$grand_total}}</span></div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>YOU'LL RECEIVE: </strong></span>
                                <span><strong> {{$ticketCurrency->currency_type}} <span class="grandTotal">{{$grand_total}}</span></strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->
    @include("auth.partials.footer")
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
