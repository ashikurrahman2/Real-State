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
                            <a href="/">হোম</a>
                           
                            </li>

                            <li>
                                <a href="{{ route('about') }}">আমাদের সম্পর্কে</a>
                               
                                </li>
                            <li><a href="{{ route('propertylist') }}">সম্পত্তি</a>
                                <ul>
                                    <li><a href="{{ route('propertylist') }}">সম্পত্তি তালিকা</a></li>
                                    <li><a href="{{ route('property') }}">বিস্তারিত সম্পত্তি</a></li>
                                </ul>
                            </li>
                         
                            <li>
                                <a href="#">চাকুরি</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('carrerForm') }}">ক্যারিয়ার</a></li>
                                    <li><a href="{{ route('jobsForm') }}">জব এপ্লিকেশন</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="{{ route('contact') }}">যোগাযোগ</a></li>
                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->
            @auth
            <!-- Right Side Content / End -->
            <div class="right-side d-none d-none d-lg-none d-xl-flex">
                
                <!-- Header Widget -->
                <div class="header-widget">
                    <a href="add-property.html" class="button border">লিস্ট যুক্ত করুন<i class="fas fa-laptop-house ml-2"></i></a>
                </div>
               
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->

            <!-- Right Side Content / End -->
            <div class="header-user-menu user-menu add">
                <div class="header-user-name">
                    <span><img src="{{asset('/')}}frontend/assets/images/testimonials/ts-1.jpg" alt=""></span>{{ Auth::user()->name }}
                </div>
                <ul>
                    <li><a href="{{ route('profile') }}">প্রোফাইল</a></li>
                    <li><a href="add-property.html">সম্পত্তি যোগ করুন</a></li>
                    <li><a href="payment-method.html">পেমেন্ট</a></li>
                    <li><a href="change-password.html">পাসওয়ার্ড চেঞ্জ</a></li>

                        <li>
                                    <a href="{{ route('logout') }}" 
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                       Log Out
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                </ul>
            </div>
            <!-- Right Side Content / End -->
             @else
            <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0" style="display: flex; align-items: center;">
                <!-- Header Widget -->
                <div class="header-widget sign-in" style="white-space: nowrap;">
                    <div class="show-reg-form modal-open" style="margin-right: 5px;"></div>
                    <a href="{{ route('login') }}">সাইন ইন</a>
                </div>
            </div>

            @endauth

                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->

            <!-- lang-wrap-->
            {{-- <div class="header-user-menu user-menu add d-none d-lg-none d-xl-flex">
                <div class="lang-wrap">
                    <div class="show-lang"><span><i class="fas fa-globe-americas"></i><strong>ENG</strong></span><i class="fa fa-caret-down arrlan"></i></div>
                    <ul class="lang-tooltip lang-action no-list-style">
                        <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                        <li><a href="#" data-lantext="Fr">Francais</a></li>
                        <li><a href="#" data-lantext="Es">Espanol</a></li>
                        <li><a href="#" data-lantext="De">Deutsch</a></li>
                    </ul>
                </div>
            </div> --}}
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
                            <h1 class="h1">আপনার সপ্নের 
                            <br class="d-md-none">
                            <span class="typed border-bottom"></span>
                        </h1>
                            <p class="mt-3">আমাদের অভিজ্ঞতা নিশ্চিত করে যে আপনার প্রকল্পগুলি সঠিকভাবে এবং সর্বোচ্চ পেশাদারিত্বের সাথে সম্পন্ন হবে ।</p>
                        </div>
                        <!--/ End Welcome Text -->
                        <!-- Search Form -->
                        <div class="trip-search">
                            <form class="form">
                                <!-- Form Location -->
                                <div class="form-group location">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-map-marker"></i>লোকেশন</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected ">ঢাকা</li>
                                            <li data-value="2" class="option">চট্টগ্রাম</li>
                                            <li data-value="3" class="option">রাজশাহী</li>
                                            <li data-value="3" class="option">খুলনা</li>
                                            <li data-value="3" class="option">বরিশাল</li>
                                            <li data-value="3" class="option">সিলেট</li>
                                            <li data-value="3" class="option">রংপুর</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Location -->
                                <!-- Form Property Type -->
                                <div class="form-group">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>সম্পত্তির ধরন</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected ">পারিবারিক বাড়ি</li>
                                            <li data-value="2" class="option">এপার্ট্মেন্ট</li>
                                            <li data-value="3" class="option">কন্ডো</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Property Type -->
                                <!-- Form Property Status -->
                                <div class="form-group duration">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>সম্পত্তির স্ট্যাটাস</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected ">বিক্রয়ের জন্য</li>
                                            <li data-value="2" class="option">ভাড়ার জন্য</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Property Status -->
                                <!-- Form Bedrooms -->
                                <div class="form-group">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i>যেকোন বেডরুম</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">১</li>
                                            <li data-value="2" class="option">২</li>
                                            <li data-value="3" class="option">৩</li>
                                            <li data-value="3" class="option">৪</li>
                                            <li data-value="3" class="option">৫</li>
                                            <li data-value="3" class="option">৬</li>
                                            <li data-value="3" class="option">৭</li>
                                            <li data-value="3" class="option">৮</li>
                                            <li data-value="3" class="option">৯</li>
                                            <li data-value="3" class="option">১০</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Bedrooms -->
                                <!-- Form Bathrooms -->
                                <div class="form-group">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i>যেকোন বাথরুম</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">১</li>
                                            <li data-value="2" class="option">২</li>
                                            <li data-value="3" class="option">৩</li>
                                            <li data-value="3" class="option">৪</li>
                                            <li data-value="3" class="option">৫</li>
                                            <li data-value="3" class="option">৬</li>
                                            <li data-value="3" class="option">৭</li>
                                            <li data-value="3" class="option">৮</li>
                                            <li data-value="3" class="option">৯</li>
                                            <li data-value="3" class="option">১০</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Bathrooms -->
                                <!-- Form Button -->
                                <div class="form-group button">
                                    <button type="submit" class="btn">সার্চ করুন</button>
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
