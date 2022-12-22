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
    <title>Last Chance Ticket - login</title>
</head>

<body>
    @include("auth.partials.header")
    <section class="section-two">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-6 offset-md-3">
                    <div class="card p-3 shadow-sm">
                        <h4 class="text-center text-secondary">Existing Customers</h4>
                        <form action="{{ route("login") }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" placeholder="email@example.com" class="form-control" name="email">
                                @error('email')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" placeholder="password" class="form-control" name="password">
                                @error('password')
                                <p style="color: red">{{ $message }}</p>
                                @enderror
                                <small class="float-end primary-text my-2"> <a href="{{ route("password.request") }}">Forgot your Password?</a></small>
                            </div>
                            <button class="btn primary-btn w-100 mb-3" href="../dashboard/dashboard.html" type="submit">Login</button>
                            <a class="btn btn-primary w-100 mb-3" href="{{ url('auth/facebook') }}">Login with
                                facebook</a>
                            <p class="text-center"><a href="{{ route("signup") }}">Don't have an account? Signup</a></p>
                            <small>By signing in or creating an account, you acknowledge and accept our privacy
                                policy</small>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3 my-3">
                    <div class="card p-3 text-center shadow-sm">
                        <p>Have an access code? <span class="primary-text">find you order</span></p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3 my-3">
                    <div class="card p-3 text-center shadow-sm">
                        <h5 class="primary-text">Help signing in</h5>
                        <p>
                            If you can't remember the email you used, checked out as a guest or have forgotten your
                            password, we can help!
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3 my-3">
                    <div class="card p-3 text-center shadow-sm">
                        <h5 class="primary-text">View FAQs</h5>
                        <p>
                            If you don't have an order or listing yet, the answer to your question may be found in our
                            top FAQ's
                        </p>
                    </div>
                </div>
                <div class="col-md-6 offset-md-3 my-3">
                    <div class="card p-3 text-center shadow-sm">
                        <p class="primary-text">how do i contact last chance ticket?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->
    @include("auth.partials.footer")
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset("js/bootstrap.min.js") }}"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
