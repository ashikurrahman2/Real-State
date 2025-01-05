@extends('layouts.app')

@section('title', 'Home')
@section('content')
    <!-- START SECTION INFO -->
    <section _ngcontent-bgi-c3="" class="featured-boxes-area bg-white-1">
        <div _ngcontent-bgi-c3="" class="container">
            <div _ngcontent-bgi-c3="" class="featured-boxes-inner">
                <div _ngcontent-bgi-c3="" class="row m-0">
                    <div _ngcontent-bgi-c3="" class="col-xl-3 col-sm-6 col-lg-6 p-0" data-aos="fade-up" data-aos-delay="150">
                        <div _ngcontent-bgi-c3="" class="single-featured-box">
                            <div _ngcontent-bgi-c3="" class="icon color-fb7756"><img src="{{asset('/')}}frontend/assets/css/colors/icons/green/1.png" width="50" alt=""></div>
                            <a href="#" class="link-class">
                            <h3 class="mt-0" _ngcontent-bgi-c3="#">সম্পত্তি কিনুন</h3>
                            </a>
                            <p _ngcontent-bgi-c3="">সম্পত্তি কেনা একটি মূল্যবান বিনিয়োগ, যা দীর্ঘমেয়াদে নিরাপত্তা এবং আর্থিক বৃদ্ধি প্রদান করতে পারে।</p><a _ngcontent-bgi-c3="" class="read-more-btn" href="single-property-1.html"></a></div>
                    </div>
                    <div _ngcontent-bgi-c3="" class="col-xl-3 col-sm-6 col-lg-6  p-0" data-aos="fade-up" data-aos-delay="250">
                        <div _ngcontent-bgi-c3="" class="single-featured-box">
                            <div _ngcontent-bgi-c3="" class="icon color-facd60"><img src="{{asset('/')}}frontend/assets/css/colors/icons/green/2.png" width="50" alt=""></div>
                            <h3 class="mt-0" _ngcontent-bgi-c3="">সম্পত্তি ভাড়া</h3>
                            <p _ngcontent-bgi-c3="">সম্পত্তি ভাড়া নেওয়া একটি স্বল্পমেয়াদী সমাধান, যা আর্থিকভাবে সহজতর এবং অস্থায়ী সুবিধা প্রদান করে।</p><a _ngcontent-bgi-c3="" class="read-more-btn" href="single-property-1.html">আরও পড়ুন</a></div>
                    </div>
                    {{-- <div _ngcontent-bgi-c3="" class="col-xl-3 col-sm-6 col-lg-6  p-0" data-aos="fade-up" data-aos-delay="350">
                        <div _ngcontent-bgi-c3="" class="single-featured-box">
                            <div _ngcontent-bgi-c3="" class="icon color-1ac0c6"><img src="{{asset('/')}}frontend/assets/css/colors/icons/green/3.png" width="50" alt=""></div>
                            <h3 class="mt-0" _ngcontent-bgi-c3="">Real Estate Kit</h3>
                            <p _ngcontent-bgi-c3="">Lorem ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan.</p><a _ngcontent-bgi-c3="" class="read-more-btn" href="single-property-1.html">Read More</a></div>
                    </div> --}}
                    <div _ngcontent-bgi-c3="" class="col-xl-3 col-sm-6 col-lg-6  p-0" data-aos="fade-up" data-aos-delay="450">
                        <div _ngcontent-bgi-c3="" class="single-featured-box">
                            <div _ngcontent-bgi-c3="" class="icon"><img src="{{asset('/')}}frontend/assets/css/colors/icons/green/4.png" width="65" alt=""></div>
                            <h3 class="mt-0" _ngcontent-bgi-c3="">সম্পত্তি বিক্রি</h3>
                            <p _ngcontent-bgi-c3="">সম্পত্তি বিক্রি একটি গুরুত্বপূর্ণ সিদ্ধান্ত, যা লাভ অর্জন বা নতুন বিনিয়োগের সুযোগ তৈরি করে।
                         </p><a _ngcontent-bgi-c3="" class="read-more-btn" href="single-property-1.html">আরও পড়ুন</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- END SECTION INFO -->

    <!-- START SECTION PROPERTIES FOR SALE -->
    <section class="featured portfolio bg-white-1 rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>সম্পত্তি বিক্রয়ের </span>জন্য</h2>
                <p>আমরা প্রতিটি পদক্ষেপে সম্পূর্ণ পরিষেবা প্রদান করি।</p>
            </div>
            <div class="portfolio col-xl-12">
                <div class="slick-lancers">
                    <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                        <div class="landscapes">
                            <div class="project-single">
                                @foreach ($properties as $property)
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="{{ route('property') }}" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">{{ $property->property_action }}</div>
                                            <img src="{{asset($property->property_image)}}" alt="home-1" class="img-responsive">
                                            {{-- <img src="{{asset('/')}}frontend/assets/images/blog/b-11.jpg" alt="home-1" class="img-responsive"> --}}
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="{{ route('property') }}">{{ $property->property_title }}</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="#">
                                            <i class="fa fa-map-marker"></i><span>{{ $property->property_address }}</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-bed" aria-hidden="true"></i>
                                            <span>{{ $property->property_elements }} বেড</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-bath" aria-hidden="true"></i>
                                            <span>{{ $property->property_bath }} বাথ</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-object-group" aria-hidden="true"></i>
                                            <span>{{ $property->property_sqrt }} স্কয়ার ফিট</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                            <a href="#">৳ {{ $property->property_amount }}</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="fas fa-exchange-alt"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="fas fa-share-alt"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION PROPERTIES FOR SALE -->

    <!-- START SECTION INFO-HELP -->
    <section class="info-help">
        <div class="container">
            <div class="row info-head">
                <div class="col-lg-6 col-md-8 col-xs-8" data-aos="fade-right">
                    <div class="info-text mt-5">
                        <h3>প্রতিদিন বিশেষ অফার।</h3>
                        <p>আমরা আপনাকে আপনার কাছাকাছি সেরা জায়গা এবং অফার খুঁজে পেতে সাহায্য করি। সামনে এগিয়ে যাওয়া সক্রিয় আধিপত্য নিশ্চিত করতে জয়-জয় বেঁচে থাকার কৌশলগুলিকে টেবিলে আনুন।</p>
                        <div class="inf-btn pro">
                            <a href="contact-us.html" class="btn btn-pro btn-secondary btn-lg">শুরু করুন</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-3"></div>
            </div>
        </div>
    </section>
    <!-- END SECTION INFO-HELP -->

    <!-- START SECTION PROPERTIES FOR RENT -->
    <section class="recently portfolio bg-white-1 rec-pro ho-17">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>সম্পত্তি ভাড়ার </span>জন্য</h2>
                <p>আমরা প্রতিটি পদক্ষেপে সম্পূর্ণ পরিষেবা প্রদান করি।</p>
            </div>
            <div class="row portfolio-items">
                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale" data-aos="zoom-in" data-aos-delay="150">
                    @foreach ($rents as $rent)
                    <div class="landscapes listing-item compact thehp-2">
                        <a href="single-property-1.html" class="recent-16" data-aos="fade-up">
                            <div class="recent-img16 img-fluid img-center" style="background-image: url({{asset('/')}}frontend/assets/images/interior/p-1.jpg);"></div>
                            {{-- <div class="recent-img16 img-fluid img-center" style="background-image: url({{asset($rent->)}});"></div> --}}
                            <div class="recent-content"></div>
                            <div class="listing-badges">
                                <span>For Rent</span>
                            </div>
                            <div class="recent-details">
                                <div class="recent-title">hjh</div>
                                <div class="price-details">
                                <div class="recent-price mb-3">৳{{ $rent->rentproperty_price }}</div>
                                <div class="house-details thehp-1"><i class="fa fa-bed mr-1" aria-hidden="true"></i> {{ $rent->bed_rooms }} Bed <span>|</span><i class="fa fa-bath mr-1" aria-hidden="true"></i> {{ $rent->bath_rooms }} Bath <span>|</span><i class="fa fa-object-group mr-1" aria-hidden="true"></i> 720 sq ft</div>
                                </div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END SECTION PROPERTIES FOR RENT -->

    <!-- START SECTION BLOG -->
    <section class="blog-section bg-white rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>সর্বশেষ </span>খবর</h2>
                <p>ভূমি সম্পত্তি থেকে সর্বশেষ খবর.</p>
            </div>
            <div class="news-wrap">
                <div class="row">
                    @foreach($newses as $news)
                    <div class="col-xl-6 col-md-12 col-xs-12" data-aos="fade-right">
                        <div class="news-item news-item-sm">
                            <a href="blog-details.html" class="news-img-link">
                                <div class="news-item-img">
                                    <img class="resp-img" src="{{ asset($news->news_image) }}" alt="blog image">
                                </div>
                            </a>
                            <div class="news-item-text">
                                <a href="blog-details.html">
                                    <h3>{{ $news->news_title }}</h3>
                                </a>
                                <span class="date">{{ $news->created_at->format('M d, Y') }} &nbsp;/&nbsp; By {{ $news->news_via }}</span>
                                <div class="news-item-descr">
                                    <p>{{ $news->news_description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    
    <!-- END SECTION BLOG -->

    <!-- START SECTION AGENTS -->
    <section class="team bg-white-1 rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>আমাদের এজেন্টদের সাথে </span>দেখা করুন</h2>
                <p>আমাদের এজেন্ট আপনাকে সাহায্য করতে এখানে আছে</p>
            </div>
            <div class="row team-all">
                <!--Team Block-->
                <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="150">
                    @foreach ($agents as $agent)
                        
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html">
                                <img src="{{asset($agent->agent_image)}}" alt="" /></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="{{ $agent->agent_face }}" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    {{-- <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li> --}}
                                    {{-- <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li> --}}
                                    <li><a href="{{ $agent->agent_linked }}" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">{{ $agent->agent_name }}</a></h3>
                            <div class="designation">{{ $agent->agent_designation }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Team Block-->
                {{-- <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="250">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img src="{{asset('/')}}frontend/assets/images/team/t-6.jpg" alt="" /></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">Arling Tracy</a></h3>
                            <div class="designation">Real Estate Agent</div>
                        </div>
                    </div>
                </div> --}}
                <!--Team Block-->
                {{-- <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="350">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img src="{{asset('/')}}frontend/assets/images/team/t-7.jpg" alt="" /></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">Mark Web</a></h3>
                            <div class="designation">Real Estate Agent</div>
                        </div>
                    </div>
                </div> --}}
                <!--Team Block-->
                {{-- <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up" data-aos-delay="450">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img src="{{asset('/')}}frontend/assets/images/team/t-8.jpg" alt="" /></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">Katy Grace</a></h3>
                            <div class="designation">Real Estate Agent</div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up" data-aos-delay="550">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img src="{{asset('/')}}frontend/assets/images/team/team-image-2.jpg" alt="" /></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">Chris Melo</a></h3>
                            <div class="designation">Real Estate Agent</div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up" data-aos-delay="650">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="agents-listing-grid.html"><img src="{{asset('/')}}frontend/assets/images/team/team-image-7.jpg" alt="" /></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="agents-listing-grid.html">Nina Thomas</a></h3>
                            <div class="designation">Real Estate Agent</div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- END SECTION AGENTS -->

    <!-- STAR SECTION PARTNERS -->
    {{-- <div class="partners bg-white rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Our </span>Partners</h2>
                <p>The Companies That Represent Us.</p>
            </div>
            <div class="owl-carousel style2">
                <div class="owl-item" data-aos="fade-up"><img src="{{asset('/')}}frontend/assets/images/partners/11.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="{{asset('/')}}frontend/assets/images/partners/12.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="{{asset('/')}}frontend/assets/images/partners/13.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="{{asset('/')}}frontend/assets/images/partners/14.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="{{asset('/')}}frontend/assets/images/partners/15.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="{{asset('/')}}frontend/assets/images/partners/16.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="{{asset('/')}}frontend/assets/images/partners/17.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="{{asset('/')}}frontend/assets/images/partners/11.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="{{asset('/')}}frontend/assets/images/partners/12.jpg" alt=""></div>
                <div class="owl-item" data-aos="fade-up"><img src="{{asset('/')}}frontend/assets/images/partners/13.jpg" alt=""></div>
            </div>
        </div>
    </div> --}}
    <!-- END SECTION PARTNERS -->
    <!-- STAR SECTION PARTNERS -->
<div class="partners bg-white rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>আমাদের </span>পার্টনার</h2>
            <p>যে কোম্পানিগুলো আমাদের প্রতিনিধিত্ব করে।</p>
        </div>
        <div class="row">
            @foreach($partners as $partner)
            <div class="col-md-3 mb-4">
                <div class="partner-item text-center" data-aos="fade-up">
                    <a href="{{ route('colabration') }}">
                    <img src="{{ asset($partner->partner_logo) }}" alt="Partner" class="img-fluid" style="height: 80px; width: 100px; object-fit: contain;">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $partners->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
<!-- END SECTION PARTNERS -->


    <!-- START SECTION TOP LOCATION -->
    {{-- <section class="top-location py-0">
        <h4>POPULAR PLACES</h4>
        <div class="owl-carousel owl-theme" id="tp-carousel">
            <div class="item" data-aos="zoom-in">
                <div class="tp-caption">
                    <h6>New York City</h6>
                    <strong>203 Properties</strong>
                    <p>From:&nbsp; $230,000 - 1,223,456</p>
                </div>
                <img src="{{asset('/')}}frontend/assets/images/blog/b-1.jpg" alt="">
            </div>
            <div class="item" data-aos="zoom-in">
                <div class="tp-caption">
                    <h6>Los Angeles</h6>
                    <strong>321 Properties</strong>
                    <p>From:&nbsp; $230,000 - 1,223,456</p>
                </div>
                <img src="{{asset('/')}}frontend/assets/images/blog/b-2.jpg" alt="">
            </div>
            <div class="item" data-aos="zoom-in">
                <div class="tp-caption">
                    <h6>San Francisco</h6>
                    <strong>196 Properties</strong>
                    <p>From:&nbsp; $230,000 - 1,223,456</p>
                </div>
                <img src="{{asset('/')}}frontend/assets/images/blog/b-3.jpg" alt="">
            </div>
            <div class="item" data-aos="zoom-in">
                <div class="tp-caption">
                    <h6>Miami</h6>
                    <strong>587 Properties</strong>
                    <p>From:&nbsp; $230,000 - 1,223,456</p>
                </div>
                <img src="{{asset('/')}}frontend/assets/images/blog/b-4.jpg" alt="">
            </div>
            <div class="item" data-aos="zoom-in">
                <div class="tp-caption">
                    <h6>Chicago</h6>
                    <strong>467 Properties</strong>
                    <p>From:&nbsp; $230,000 - 1,223,456</p>
                </div>
                <img src="{{asset('/')}}frontend/assets/images/blog/b-5.jpg" alt="">
            </div>
            <div class="item" data-aos="zoom-in">
                <div class="tp-caption">
                    <h6>Los Angeles</h6>
                    <strong>267 Properties</strong>
                    <p>From:&nbsp; $230,000 - 1,223,456</p>
                </div>
                <img src="{{asset('/')}}frontend/assets/images/blog/b-6.jpg" alt="">
            </div>
            <div class="item" data-aos="zoom-in">
                <div class="tp-caption">
                    <h6>San Francisco</h6>
                    <strong>568 Properties</strong>
                    <p>From:&nbsp; $230,000 - 1,223,456</p>
                </div>
                <img src="{{asset('/')}}frontend/assets/images/blog/b-7.jpg" alt="">
            </div>
            <div class="item" data-aos="zoom-in">
                <div class="tp-caption">
                    <h6>Miami</h6>
                    <strong>568 Properties</strong>
                    <p>From:&nbsp; $230,000 - 1,223,456</p>
                </div>
                <img src="{{asset('/')}}frontend/assets/images/blog/b-8.jpg" alt="">
            </div>
        </div>
    </section> --}}
    <!-- END SECTION TOP LOCATION -->

@endsection
