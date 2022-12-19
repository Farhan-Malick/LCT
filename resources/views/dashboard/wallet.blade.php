<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/styles/dashboard.css">
    <link rel="stylesheet" href="{{ asset('assets/styles/common.css') }}" />
    <!-- <link rel="stylesheet" href="../../assets/styles/common.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="container-fluid px-0 mx-0">
        <!-- header menu starts here  -->
        @include("auth.partials.darkheader")
        <div class="container-md sidebar-con">
            <div class="row">
                <!-- sidebar starts here  -->
                @include("auth.partials.dashboardSidebar")
                <!-- dashboard starts here  -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                        <h1 class="h2">Wallet</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3 shadow-sm">
                                <h6>Add a code</h6>
                                <form>
                                    <div class="mb-3">
                                        <input type="text" class="form-control w-50" name="add"
                                            placeholder="Add a code">
                                    </div>
                                    <button type="submit" class="btn primary-btn px-4">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    @include("auth.partials.footer")
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../../js/bootstrap.bundle.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>