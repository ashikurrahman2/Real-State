@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>About Our Company</h1>
            <h2><a href="/">Home </a> &nbsp;/&nbsp; About Us</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION ABOUT -->
<section class="about-us fh">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 who-1">
                <div>
                    <h2 class="text-left mb-4">About <span>{{ $about->title }}</span></h2>
                </div>
                <div class="pftext">
                    <p>{{ $about->description }}</p>
                </div>
                <div class="box bg-2">
                    <a href="about.html" class="text-center button button--moema button--text-thick button--text-upper button--size-s">read More</a>
                    <img src="{{ asset($about->signature) }}" class="ml-5" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="wprt-image-video w50">
                    <img alt="image" src="{{asset($about->photo)}}">
                    {{-- <a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=2xHQqYRcrx4"> --}}
                        <i class="fa fa-play"></i>
                    </a>
                    <div class="iq-waves">
                        <div class="waves wave-1"></div>
                        <div class="waves wave-2"></div>
                        <div class="waves wave-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION ABOUT -->
@endsection