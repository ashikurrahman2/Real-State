<header id="header-container" class="header head-tr">
    <!-- Header -->
    <div id="header" class="head-tr bottom">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="index.html"><img src="{{asset('/')}}frontend/assets/images/logo-white-1.svg" data-sticky-logo="{{asset('/')}}frontend/assets/images/logo-green.svg" alt=""></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1 head-tr">
                    <ul id="responsive">
                        <li>
                            <a href="/">Home</a>
                           
                            </li>

                            <li>
                                <a href="{{ route('about') }}">About</a>
                               
                                </li>
                            <li><a href="{{ route('propertylist') }}">Property</a>
                                <ul>
                                    <li><a href="{{ route('propertylist') }}">Property List</a></li>
                                    <li><a href="{{ route('property') }}">Property Details</a></li>
                                </ul>
                            </li>
                            {{-- <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="shop-with-sidebar.html">Product Sidebar</a></li>
                                            <li><a href="shop-full-page.html">Product Fullpage</a></li>
                                            <li><a href="shop-single.html">Product Single</a></li>
                                            <li><a href="shop-checkout.html">Checkout Page</a></li>
                                            <li><a href="shop-order.html">Order Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">User Panel</a>
                                        <ul>
                                            <li><a href="dashboard.html">Dashboard</a></li>
                                            <li><a href="user-profile.html">User Profile</a></li>
                                            <li><a href="my-listings.html">My Properties</a></li>
                                            <li><a href="favorited-listings.html">Favorited Properties</a></li>
                                            <li><a href="add-property.html">Add Property</a></li>
                                            <li><a href="payment-method.html">Payment Method</a></li>
                                            <li><a href="invoice.html">Invoice</a></li>
                                            <li><a href="change-password.html">Change Password</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="pricing-table.html">Pricing Tables</a></li>
                                    <li><a href="404.html">Page 404</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                    <li><a href="under-construction.html">Under Construction</a></li>
                                    <li><a href="ui-element.html">UI Elements</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="#">Blog</a>
                                {{-- <ul>
                                    <li><a href="#">Grid Layout</a>
                                        <ul>
                                            <li><a href="blog-full-grid.html">Full Grid</a></li>
                                            <li><a href="blog-grid-sidebar.html">With Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">List Layout</a>
                                        <ul>
                                            <li><a href="blog-full-list.html">Full List</a></li>
                                            <li><a href="blog-list-sidebar.html">With Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul> --}}
                            </li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li class="d-none d-xl-none d-block d-lg-block"><a href="#">Login</a></li>
                            <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a></li>
                            <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="add-property.html" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->

            <!-- Right Side Content / End -->
            <div class="right-side d-none d-none d-lg-none d-xl-flex">
                <!-- Header Widget -->
                <div class="header-widget">
                    <a href="add-property.html" class="button border">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->

            <!-- Right Side Content / End -->
            <div class="header-user-menu user-menu add">
                <div class="header-user-name">
                    <span><img src="{{asset('/')}}frontend/assets/images/testimonials/ts-1.jpg" alt=""></span>Hi, Mary!
                </div>
                <ul>
                    <li><a href="user-profile.html"> Edit profile</a></li>
                    <li><a href="add-property.html"> Add Property</a></li>
                    <li><a href="payment-method.html">  Payments</a></li>
                    <li><a href="change-password.html"> Change Password</a></li>
                    <li><a href="#">Log Out</a></li>
                </ul>
            </div>
            <!-- Right Side Content / End -->

            <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                <!-- Header Widget -->
                <div class="header-widget sign-in">
                    <div class="show-reg-form modal-open"><a href="{{ route('login') }}">Sign In</a></div>
                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->

            <!-- lang-wrap-->
            <div class="header-user-menu user-menu add d-none d-lg-none d-xl-flex">
                <div class="lang-wrap">
                    <div class="show-lang"><span><i class="fas fa-globe-americas"></i><strong>ENG</strong></span><i class="fa fa-caret-down arrlan"></i></div>
                    <ul class="lang-tooltip lang-action no-list-style">
                        <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                        <li><a href="#" data-lantext="Fr">Francais</a></li>
                        <li><a href="#" data-lantext="Es">Espanol</a></li>
                        <li><a href="#" data-lantext="De">Deutsch</a></li>
                    </ul>
                </div>
            </div>
            <!-- lang-wrap end-->

        </div>
    </div>
    <!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- STAR HEADER SEARCH -->
<section id="hero-area" class="parallax-searchs home15 overlay" data-stellar-background-ratio="0.5">
    <div class="hero-main">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-12">
                    <div class="hero-inner">
                        <!-- Welcome Text -->
                        <div class="welcome-text">
                            <h1 class="h1">Find Your Dream
                            <br class="d-md-none">
                            <span class="typed border-bottom"></span>
                        </h1>
                            <p class="mt-4">Our experience ensures that your projects will be done right and with the upmost professionalism.</p>
                        </div>
                        <!--/ End Welcome Text -->
                        <!-- Search Form -->
                        <div class="trip-search">
                            <form class="form">
                                <!-- Form Location -->
                                <div class="form-group location">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-map-marker"></i>Location</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected ">New York</li>
                                            <li data-value="2" class="option">Los Angeles</li>
                                            <li data-value="3" class="option">Chicago</li>
                                            <li data-value="3" class="option">Philadelphia</li>
                                            <li data-value="3" class="option">San Francisco</li>
                                            <li data-value="3" class="option">Miami</li>
                                            <li data-value="3" class="option">Houston</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Location -->
                                <!-- Form Property Type -->
                                <div class="form-group">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Type</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected ">Family House</li>
                                            <li data-value="2" class="option">Apartment</li>
                                            <li data-value="3" class="option">Condo</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Property Type -->
                                <!-- Form Property Status -->
                                <div class="form-group duration">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected ">For Sale</li>
                                            <li data-value="2" class="option">For Rent</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Property Status -->
                                <!-- Form Bedrooms -->
                                <div class="form-group">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i>Any Bedrooms</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">1</li>
                                            <li data-value="2" class="option">2</li>
                                            <li data-value="3" class="option">3</li>
                                            <li data-value="3" class="option">4</li>
                                            <li data-value="3" class="option">5</li>
                                            <li data-value="3" class="option">6</li>
                                            <li data-value="3" class="option">7</li>
                                            <li data-value="3" class="option">8</li>
                                            <li data-value="3" class="option">9</li>
                                            <li data-value="3" class="option">10</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Bedrooms -->
                                <!-- Form Bathrooms -->
                                <div class="form-group">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i>Any Bathrooms</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">1</li>
                                            <li data-value="2" class="option">2</li>
                                            <li data-value="3" class="option">3</li>
                                            <li data-value="3" class="option">4</li>
                                            <li data-value="3" class="option">5</li>
                                            <li data-value="3" class="option">6</li>
                                            <li data-value="3" class="option">7</li>
                                            <li data-value="3" class="option">8</li>
                                            <li data-value="3" class="option">9</li>
                                            <li data-value="3" class="option">10</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Bathrooms -->
                                <!-- Form Button -->
                                <div class="form-group button">
                                    <button type="submit" class="btn">Search</button>
                                </div>
                                <!--/ End Form Button -->
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>