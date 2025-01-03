@extends('layouts.app')

@section('title', 'Contact us')

@section('content')
     <!-- START SECTION CONTACT US -->
     <section class="contact-us">
        <div class="container">
            <div class="property-location mb-5">
                <h3>আমাদের লোকেশন</h3>
                <div class="divider-fade"></div>
                <div id="map-contact" class="contact-map"></div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h3 class="mb-3">যোগাযোগ করুন</h3>
                    <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                        <div id="success" class="successform">
                            <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                        </div>
                        <div id="error" class="errorform">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control input-custom input-full" name="name" placeholder="প্রথম নাম">
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control input-custom input-full" name="lastname" placeholder="শেষ নাম">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-custom input-full" name="email" placeholder="ইমেইল">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8" placeholder="বার্তা লিখুন"></textarea>
                        </div>
                        <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">সাবমিট</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12 bgc">
                    <div class="call-info">
                        <h3>বিস্তারিত যোগাযোগ তথ্য</h3>
                        <p class="mb-5">অনুগ্রহ করে নীচের যোগাযোগের বিশদটি সন্ধান করুন এবং আজ আমাদের সাথে যোগাযোগ করুন!</p>
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
                            </li>
                            <li>
                                <div class="info cll">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <p class="in-p ti">১০:০০ a.m - ১০:00 p.m</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION CONTACT US -->

@endsection