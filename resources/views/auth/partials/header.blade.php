<section class="section-one">
    <div class="bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark ">
                <div class="logo d-flex flex-column text-light p-0 m-0">
                    <a class="navbar-brand" href="{{ route("home") }}">
                        <img src="{{asset("/assets/images/logodark2.jpg")}}" height="45" width="220" alt="">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div
                                class="collapse navbar-collapse"
                                id="navbarSupportedContent"
                            >
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item active">
                                        <a
                                            class="nav-link"
                                            href="{{ route('request.show') }}"
                                            >Request Event</a
                                        >
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">US$</a>
                                    </li>

                                    @auth
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            My Account
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="{{ URL('/dashboard') }}">My Dashboard</a></li>
                                            <li><a class="dropdown-item" href="{{ URL('/dashboard') }}">My Order</a></li>
                                            <li><a class="dropdown-item" href="{{ URL('/dashboard') }}">My Listings</a></li>
                                            <li><a class="dropdown-item" href="{{ URL('/dashboard') }}">Settings</a></li>
                                            <li class="nav-item">
                                                <form
                                                    action="{{ route('logout') }}"
                                                    method="POST"
                                                >
                                                    @csrf
                                                    <button type="submit" class="btn btn-link">Logout</button>
                                                   
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    @endauth @guest
                                    <li class="nav-item">
                                        <a
                                             class="nav-link"
                                            href="{{ route('login') }}"
                                            >Login</a
                                        >
                                    </li>
                                    @endguest
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"
                                            >Help Center</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link btn btn-sm primary-btn px-3"
                                            href="{{ URL('Sell-tickets') }}"
                                            >Sell Tickets</a
                                        >
                                    </li>
                                </ul>
                            </div>
            </nav>
        </div>
    </div>
</section>
