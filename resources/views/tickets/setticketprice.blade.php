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
    <title>set-price</title>
</head>

<body>

    @include("auth.partials.darkheader")
    <section class="section-two">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-8">
                    <h4 class="fw-700">Set Your Price</h4>
                    <div class="card p-4 mb-3 shadow-sm main-card br-10">
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    <i class="bi bi-info-circle-fill"></i>
                                    Choose the currency in which you would like to be paid.
                                </p>
                            </div>
                            <div class="col-md-8">
                                <form action="">
                                    <div class="form-group">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected disabled>{{$tickets->currency}}</option>
                                            @foreach($currencies as $currency)
                                            <option value="{{$currency->currency_type}}">{{$currency->currency_type}}</option>
                                            @endforeach
                                            <!-- <option value="AUD" data-digits="2" data-symbol="A$">AU$ -
                                                Australian Dollar</option>
                                            <option value="BHD" data-digits="3" data-symbol="BHD">BHD - Bahraini
                                                Dinar</option>
                                            <option value="BOB" data-digits="2" data-symbol="Bs.">Bs. - Bolivian
                                                Boliviano</option>
                                            <option value="BRL" data-digits="2" data-symbol="R$">R$ - Brazilian
                                                Real</option>
                                            <option value="CAD" data-digits="2" data-symbol="C$">CA$ - Canadian
                                                Dollar</option>
                                            <option value="CHF" data-digits="2" data-symbol="CHF">CHF - Swiss
                                                Franc</option>
                                            <option value="CLP" data-digits="0" data-symbol="CL$">CL$ - Chilean
                                                Peso</option>
                                            <option value="CNY" data-digits="2" data-symbol="¥">CN¥ - Chinese
                                                Yuan Renmibi</option>
                                            <option value="COP" data-digits="0" data-symbol="COL$">COL$ -
                                                Colombian Peso</option>
                                            <option value="CZK" data-digits="0" data-symbol="Kč">Kč - Czech
                                                Republic Koruna</option>
                                            <option value="DKK" data-digits="0" data-symbol="DKK">DKK - Danish
                                                Krone</option>
                                            <option value="DOP" data-digits="2" data-symbol="RD$">RD$ -
                                                Dominican Peso</option>
                                            <option value="EUR" data-digits="2" data-symbol="€">€ - Euro
                                            </option>
                                            <option value="GBP" data-digits="2" data-symbol="£">£ - British
                                                Pound Sterling</option>
                                            <option value="HKD" data-digits="0" data-symbol="HK$">HK$ - Hong
                                                Kong Dollar</option>
                                            <option value="HRK" data-digits="2" data-symbol="HRK">HRK - Croatian
                                                Kuna</option>
                                            <option value="HUF" data-digits="0" data-symbol="Ft">Ft - Hungarian
                                                Forint</option>
                                            <option value="IDR" data-digits="0" data-symbol="Rp.">Rp. -
                                                Indonesian Rupiah</option>
                                            <option value="ILS" data-digits="2" data-symbol="₪">ILS - Israeli
                                                New Shekel</option>
                                            <option value="INR" data-digits="0" data-symbol="Rs.">Rs. - Indian
                                                Rupee</option>
                                            <option value="ISK" data-digits="0" data-symbol="kr.">kr. -
                                                Icelandic Króna</option>
                                            <option value="JPY" data-digits="0" data-symbol="¥">JP¥ - Japanese
                                                Yen</option>
                                            <option value="KRW" data-digits="0" data-symbol="₩">KRW - South
                                                Korean Won</option>
                                            <option value="KWD" data-digits="3" data-symbol="KWD">KWD - Kuwaiti
                                                Dinar</option>
                                            <option value="MUR" data-digits="2" data-symbol="Rs">Rs - Mauritian
                                                Rupee</option>
                                            <option value="MXN" data-digits="2" data-symbol="MX$">MX$ - Mexican
                                                Peso</option>
                                            <option value="MYR" data-digits="0" data-symbol="RM">MYR - Malaysian
                                                Ringgit</option>
                                            <option value="NOK" data-digits="0" data-symbol="NOK">NOK -
                                                Norwegian Krone</option>
                                            <option value="NZD" data-digits="2" data-symbol="NZ$">NZ$ - New
                                                Zealand Dollar</option>
                                            <option value="PEN" data-digits="2" data-symbol="S/.">S/. - Peruvian
                                                Nuevo Sol</option>
                                            <option value="PHP" data-digits="0" data-symbol="PHP">PHP -
                                                Philippine Peso</option>
                                            <option value="PLN" data-digits="2" data-symbol="zł">PLN - Polish
                                                Zloty</option>
                                            <option value="PYG" data-digits="0" data-symbol="Gs.">Gs. -
                                                Paraguayan Guaraní</option>
                                            <option value="QAR" data-digits="2" data-symbol="QAR">QAR - Qatari
                                                Rial</option>
                                            <option value="RON" data-digits="2" data-symbol="lei">lei - Romanian
                                                Leu</option>
                                            <option value="RUB" data-digits="0" data-symbol="RUB">RUB - Russian
                                                Ruble</option>
                                            <option value="SAR" data-digits="2" data-symbol="SAR">SAR - Saudi
                                                Arabian Riyal</option>
                                            <option value="SEK" data-digits="0" data-symbol="Kr">Kr - Swedish
                                                Krona</option>
                                            <option value="SGD" selected="" data-digits="2" data-symbol="S$">S$
                                                - Singapore Dollar</option>
                                            <option value="THB" data-digits="0" data-symbol="฿">THB - Thai Baht
                                            </option>
                                            <option value="TRY" data-digits="2" data-symbol="TL">TL - Turkish
                                                Lira</option>
                                            <option value="TWD" data-digits="0" data-symbol="NT$">NT$ - New
                                                Taiwan Dollar</option>
                                            <option value="UAH" data-digits="2" data-symbol="UAH">UAH -
                                                Ukrainian Hryvnia</option>
                                            <option value="USD" data-digits="2" data-symbol="$">US$ - United
                                                States Dollar</option>
                                            <option value="UYU" data-digits="2" data-symbol="$U">$U - Uruguayan
                                                Peso</option>
                                            <option value="VEF" data-digits="2" data-symbol="Bs.">VEF -
                                                Venezuelan Bolívar</option>
                                            <option value="ZAR" data-digits="0" data-symbol="R">R - South
                                                African Rand</option> -->

                                        </select>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="">Amount per ticket</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">$</span>
                                            <input type="text" class="form-control"
                                                aria-label="Amount (to the nearest dollar)" value = "{{$tickets->price}}">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                        <small>Tickets in this area are currently selling between <strong>{{$tickets->currency}} 242.16 and
                                            {{$tickets->currency}}
                                                620.13</strong> per ticket. In order to sell your tickets quickly we
                                            suggest you sell
                                            your tickets at <strong>{{$tickets->currency}} 242.16</strong> per ticket</small>
                                    </div>
                                    <a class="btn primary-btn w-100"
                                        href="{{route('seller.complete_ticket.show',$tickets->id)}}"><strong>CONTINUE</strong></a>
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
                                <span><strong> {{$tickets->currency}} {{$tickets->price}}</strong></span>
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
                                <span><strong> {{$tickets->currency}} {{$price}}</strong></span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong> Seller Fees: </strong></span>
                                <span><strong> {{$tickets->currency}} {{$percentage}}</strong></span>
                            </div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>VAT {{$tickets->currency}}: </strong></span>
                                <span><strong> 1.86</strong></span>
                            </div>
                            <div class="small tags"> VAT amount can change depending on your location.
                                YOU'LL RECEIVE {{$tickets->currency}} {{$grand_total}}</div>
                            <div class="price-tag d-sm-flex d-block justify-content-between">
                                <span> <strong>YOU'LL RECEIVE: </strong></span>
                                <span><strong> {{$tickets->currency}} {{$grand_total}}</strong></span>
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