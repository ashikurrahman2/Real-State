<!-- START FOOTER -->
<footer class="first-footer rec-pro">
    <div class="top-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="netabout">
                        @foreach($abouts as $about)
                        <a href="/" class="logo">
                            <img src="{{ asset('/') }}frontend/assets/images/logo-footer.svg" alt="netcom">
                        </a>
                        <p>{{ $about->description }}</p>
                    </div>
                    @endforeach
                    <div class="contactus">
                        {{-- @foreach($settings as $setting) --}}
                        <ul>
                            <li>
                                <div class="info">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p class="in-p">{{ $setting->address }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p class="in-p">+{{ $setting->phone_one }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p class="in-p ti">{{ $setting->main_email }}</p>
                                </div>
                                {{-- @endforeach --}}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="navigation">
                        <h3>নেভিগেশন</h3>
                        <div class="nav-footer">
                            <ul>
                                <li><a href="/">হোম</a></li>
                                <li><a href="{{ route('about') }}">আমাদের সম্পর্কে</a></li>
                                <li><a href="{{ route('propertylist') }}">সম্পত্তির তালিকা</a></li>
                                <li><a href="{{ route('property') }}">বিস্তারিত সম্পত্তি</a></li>
                                <li><a href="#">চাকুরি</a></li>
                                <li><a href="{{ route('contact') }}">যোগাযোগ</a></li>
                                {{-- <li class="no-mgb"><a href="agents-listing-grid.html">Agents Listing</a></li> --}}
                            </ul>
                            {{-- <ul class="nav-right">
                                <li><a href="agent-details.html">Agents Details</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="blog.html">Blog Default</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li class="no-mgb"><a href="contact-us.html">Contact Us</a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget">
                        <h3>Twitter Feeds</h3>
                        <div class="twitter-widget contuct">
                            <div class="twitter-area">
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                        <h4>about 5 days ago</h4>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                        <h4>about 5 days ago</h4>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                        <h4>about 5 days ago</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="newsletters">
                        <h3>নিউজলেটার</h3>
                        <p>সর্বশেষ আপডেট এবং অফার পেতে আমাদের নিউজলেটার জন্য সাইন আপ করুন. আপনার ইনবক্সে খবর পেতে সাবস্ক্রাইব করুন।</p>
                    </div>
                    <form class="bloq-email mailchimp form-inline" method="post">
                        <label for="subscribeEmail" class="error"></label>
                        <div class="email">
                            <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                            <input type="submit" value="Subscribe">
                            <p class="subscription-success"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer rec-pro">
        <div class="container-fluid sd-f">
            <p>2021 © Copyright - All Rights Reserved.</p>
            <ul class="netsocials">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</footer>

<a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
<!-- END FOOTER -->