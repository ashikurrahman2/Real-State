@extends('layouts.app')
@section('title','Cart View')
@section('content')
<div class="container">
    <h1>সম্পত্তির তালিকা</h1>
    <div class="row">
        @foreach ($sells as $sell)
        <div class="col-md-4">
            <div class="card mb-3">
                @if ($sell->image)
                <img src="{{ asset($sell->image) }}" class="card-img-top" alt="{{ $sell->title }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $sell->title }}</h5>
                    <p class="card-text">{{ $sell->description }}</p>
                    <p class="card-text"><small class="text-muted">{{ $sell->address }}</small></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
