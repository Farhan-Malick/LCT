<header class="header-area header-sticky" style="margin-bottom: 150px">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{URL('/')}}" class="logo">
                        <img src="{{asset('assets/images/logo1.png')}}" style=" margin-top:13px" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li>
                            <a
                            class="nav-link"
                            href="{{ route('request.show') }}"
                            >Request Event</a
                        >
                        </li>
                        @auth
                        <li class="dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                My Account
                            </a>
                            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-dark" href="{{ URL('/dashboard') }}">My Dashboard</a></li>
                                <li><a class="dropdown-item text-dark" href="{{ URL('/dashboard') }}">My Order</a></li>
                                <li><a class="dropdown-item text-dark" href="{{ URL('/dashboard') }}">My Listings</a></li>
                                <li><a class="dropdown-item text-dark" href="{{ URL('/dashboard') }}">Settings</a></li>
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
                            <a class="nav-link" href="{{URL('/contact-us')}}"
                                >Contact us</a
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
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>