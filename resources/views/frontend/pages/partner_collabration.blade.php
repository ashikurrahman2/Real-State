@extends('layouts.app')

@section('title', 'Collabration')

@section('content')
  <!-- Partner Details Section -->
  <section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="text-primary">Our Partners</h2>
                <p>Here are the trusted companies we work with.</p>
            </div>
        </div>
        <div class="row g-4">
            <!-- Partner Item -->
            @foreach($partners as $partner)
            <div class="col-md-4 col-sm-6">
                <div class="card border-0 shadow h-100">
                    <img src="{{ asset($partner->partner_logo) }}" class="card-img-top img-fluid p-3" style="height: 150px; object-fit: contain;" alt="{{ $partner->partner_name }}">
                    <div class="card-body text-center">
                        {{-- <h5 class="card-title">{{ $partner->partner_name }}</h5> --}}
                        <p class="card-text">{{ $partner->partner_collaborations }}</p>
                        <a href="#" class="btn btn-primary btn-sm" target="_blank">Visit Website</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>   
    </div>
</section>
@endsection