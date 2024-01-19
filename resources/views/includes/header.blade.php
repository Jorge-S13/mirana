<header id="header">
    <nav class="navbar navbar-expand-lg padding-small px-lg-4">
        <div class="container-fluid ">

            <div class="main-logo">
                <a href="{{route('home')}}">
                    LinkSpectrix
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
                                <a href="{{route('news')}}"
                                   class="item-anchor"> <b>News</b> </a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{route('blog')}}"
                                   class="item-anchor"> <b>Blog</b> </a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{route('reviews')}}"
                                   class="item-anchor"> <b>Reviews</b> </a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{route('hardware')}}"
                                   class="item-anchor"> <b>Hardware Hub</b> </a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{route('top-picks')}}"
                                   class="item-anchor"> <b>Top Picks</b> </a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{route('affiliate-links')}}"
                                   class="item-anchor"> <b>Affiliate links</b> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-wrap d-flex my-4 my-lg-0 ">
                        @if (auth()->guest())
                            <a href="{{route('login')}}" class="btn btn-linear btn-medium">Log in</a>
                            <a href="{{route('register')}}" class="btn btn-outline-linear btn-medium m-0">Sign up</a>
                        @else
                                <div class="clients-detail">
                                    <a href="{{route("profile.settings")}}"><img src="{{asset('storage/' . auth()->user()->profile_image)}}" alt="profile image"
                                                                                 class="circle-shape max-w-2xl max-h-1px"
                                        style="width: 36px; height: 36px"></a>
                                    <a href="{{route("profile.settings")}}"><span class="clients-name">{{auth()->user()->name}}</span></a>
                                </div>

                        @endif
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>
