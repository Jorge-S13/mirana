<header id="header">
    <nav class="navbar navbar-expand-lg padding-small px-lg-4">
        <div class="container-fluid ">

            <div class="main-logo">
                <a href="{{route('home')}}">
                    <img src="{{asset('images/main-logo.png')}}" alt="logo">
                </a>
            </div>

            <button class="navbar-toggler mb-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                <iconify-icon icon="system-uicons:menu-hamburger" class="hamburger-menu"></iconify-icon>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ">
                    <div class="main-menu text-center d-lg-flex align-items-center">
                        <ul class="menu-list list-unstyled d-lg-flex m-0">
                            <li class="menu-item ">
                                <a href="{{route('home')}}"
                                   class="item-anchor"> <b>Home</b> </a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{route('home')}}"
                                   class="item-anchor"> <b>Home</b> </a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{route('home')}}"
                                   class="item-anchor"> <b>Home</b> </a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{route('home')}}"
                                   class="item-anchor"> <b>Home</b> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-wrap d-flex my-4 my-lg-0 ">
                        <a href="#" class="btn btn-linear btn-medium">Log in</a>
                        <a href="#" class="btn btn-outline-linear btn-medium m-0">Sign up</a>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>
