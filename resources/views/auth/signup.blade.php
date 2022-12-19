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
    @include("auth.partials.header")
    <section class="section-two">
        <div class="container my-4 signup-form card shadow-sm p-4">
            <form action="{{ route("register") }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Register for a new account</h2>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="first_name">
                        @error('first_name')
                        <p style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="last_name">
                        @error('last_name')
                        <p style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @error('email')
                        <p style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="emailrepeat">Re enter email address</label>
                        <input type="email" class="form-control" id="emailrepeat" name="email_confirmation">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="password">Enter New Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                        <p style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="confirmpass">Re-Type Password</label>
                        <input type="password" class="form-control" id="confirmpass" name="password_confirmation">
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="phone">Primary Phone</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Pakistan (+92)</option>
                            <option>Monaco (+337)</option>
                            <option>Mongolia (+973)</option>
                            <option>United Kingdom (+44)</option>
                            <option>Nepal (+977)</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-8">
                        <label for="phone">Phone Number</label>
                        <input type="number" class="form-control" id="phone" name="phone">
                        @error('phone')
                            <p style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <small>Only used to contact you about your order via phone or text message (free of
                            charge)</small>
                        <hr>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Please keep me updated by email about the latest news, great deals, and special offers
                            </label>
                        </div>
                        <small>We will not pass your data onto third parties and you can unsubscribe at any
                            time.</small>
                    </div>

                </div>
                <button class="btn btn-sm primary-btn px-5 my-2">Continue</button>

            </form>
            <small> By signing in or creating an account, you acknowledge and accept our privacy policy</small>
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
