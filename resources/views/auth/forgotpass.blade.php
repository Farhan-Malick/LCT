<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">

    <link rel="stylesheet" href="{{ asset("assets/styles/login.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/styles/common.css") }}">
    <!-- Bootstrap icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>forgot-password</title>
</head>

<body>
    @include("auth.partials.newHeader")
    <section class="section-two">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">Why can't you sign in?</h2>
                </div>
                <div class="col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>I've forgotten my password or checked out as a guest and don't have a
                                        password</strong>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form action="">
                                        <div class="form-group">
                                            <small>Enter your account email and we will send you a password reset. <br>
                                                Please ensure your 'Spam' filters do not block this mail.</small>
                                            <input type="text" class="form-control">
                                        </div>
                                        <button class="btn primary-btn my-3">Proceed with passwrod reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong> I don't know the email I registered with</strong>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <form action="">
                                        <small>Please provide as much information as possible to help us locate your
                                            account</small>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Your Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="name" name="name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email">Email Address<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="email" name="email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="phone">Primary Phone<span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control" id="phone" name="phone">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="event">Event<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="event" name="event">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="payment">Payment Method</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Credit or Debit Card
                                                    </label>
                                                    <div id="myDIV">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-3">
                                                                <label for="creditcard">Last 4 digits of card used <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="number" class="form-control"
                                                                    name="creditcard">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">PayPal</label>
                                                    <div id="paypal">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="paypalemail">PayPal Email Address<span
                                                                        class="text-danger">*</span></label>
                                                                <input type="email" class="form-control"
                                                                    placeholder="paypal@email.com" name="paypalemail">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="order">Order ID</label>
                                                <input type="number" class="form-control" name="order" id="order">
                                            </div>
                                        </div>
                                        <button class="btn primary-btn float-right mb-4 px-5 my-3">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include("auth.partials.footer")
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
