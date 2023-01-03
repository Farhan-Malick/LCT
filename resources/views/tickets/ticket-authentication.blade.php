<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/common.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/sellticket.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>ticket-authentication</title>
</head>

<body>
    @include("auth.partials.darkheader")

    <section class="section-two">
        <div class="container my-4">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h5>New authentication code has been sent to your email.</h5>
                    <h4 class="text-muted">Please enter the code below</h4>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <div class="card p-4 mb-3 shadow-sm main-card br-10">
                        <form action="">
                            <div class="form-group mb-3">
                                <input type="number" class="form-control form-control-lg">
                            </div>
                            <div class="text-center">
                                <a href="" class="btn btn-lg primary-btn">Submit</a>
                            </div>
                            <p class="primary-text text-center mt-3">Resend Code</p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <div class="card p-4 mb-3 shadow-sm main-card br-10">
                        <a class="text-center primary-text">How i contact last chance ticket?</a>
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