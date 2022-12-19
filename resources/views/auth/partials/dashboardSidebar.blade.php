<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <div class="user-prfile text-center">
            <a href="">
                <i class="bi bi-person-circle"></i>
                <h6>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h6>
              </a>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{URL("/dashboard")}}">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL("/dashboard/orders")}}">
                    <span data-feather="file" class="align-text-bottom"></span>
                    My Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{URL("/dashboard/listings")}}">
                    <span data-feather="shopping-cart" class="align-text-bottom"></span>
                    My Listing
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL("/dashboard/sales")}}">
                    <span data-feather="users" class="align-text-bottom"></span>
                    My Sales
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL("/dashboard/my-payments")}}">
                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                    Payments
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL("/dashboard/settings")}}">
                    <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                    Settings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL("/dashboard/wallet")}}">
                    <span data-feather="layers" class="align-text-bottom"></span>
                    Wallet
                </a>
            </li>
        </ul>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Legal Information
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Customer Support
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    My Messages
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    View FAQs
                </a>
            </li>
        </ul>
    </div>
</nav>


