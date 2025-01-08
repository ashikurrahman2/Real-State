@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="fw-bold mb-4">কার্ট ভিউ</h1>
            <p class="text-muted">আপনার জমা দেওয়া সকল তথ্য এখানে দেখা যাবে।</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-hover table-striped align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>শিরোনাম</th>
                            <th>বিবরণ</th>
                            <th>পরিমাণ</th>
                            <th>ঠিকানা</th>
                            <th>জেলা</th>
                            <th>ছবি</th>
                            <th>একক মূল্য (৳)</th>
                            <th>মোট (৳)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $subtotal = 0; @endphp
                        @foreach($sells as $sell)
                            @php
                                $item_total = $sell->qnty * $sell->price; // প্রতিটি আইটেমের মোট মূল্য
                                $subtotal += $item_total; // সাবটোটাল আপডেট
                            @endphp
                            <tr>
                                <td class="fw-bold">{{ $sell->title }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($sell->description, 50) }}</td>
                                <td>{{ $sell->qnty }}</td>
                                <td>{{ $sell->address }}</td>
                                <td>{{ $sell->zilla }}</td>
                                <td>
                                    @if($sell->image)
                                        <img src="{{ asset($sell->image) }}" alt="image" class="img-thumbnail" style="width: 100px; height: auto;">
                                    @else
                                        <span class="text-danger">ছবি নেই</span>
                                    @endif
                                </td>
                                <td>৳ {{ number_format($sell->price, 2) }}</td>
                                <td>৳ {{ number_format($item_total, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Subtotal, Discount, and Checkout Section -->
    <div class="row mt-4">
        <div class="col-md-6 offset-md-6">
            <div class="bg-light p-3 border rounded">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold mb-0">সাবটোটাল:</h5>
                    <h5 class="fw-bold text-success mb-0">৳ {{ number_format($subtotal, 2) }}</h5>
                </div>

                <!-- Discount Section -->
                <form method="POST" action="{{ route('cart.applyDiscount') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="discount_code" class="form-label">ডিস্কাউন্ট কোড:</label>
                        <input type="text" id="discount_code" name="discount_code" class="form-control" placeholder="আপনার ডিস্কাউন্ট কোড লিখুন">
                    </div>
                    <button type="submit" class="btn btn-secondary w-100">ডিস্কাউন্ট প্রয়োগ করুন</button>
                </form>

                <!-- Show Discounted Total -->
                @if(session('discount'))
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <h5 class="fw-bold mb-0">ডিস্কাউন্ট:</h5>
                        <h5 class="fw-bold text-danger mb-0">৳ {{ number_format(session('discount'), 2) }}</h5>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <h5 class="fw-bold mb-0">মোট:</h5>
                        <h5 class="fw-bold text-primary mb-0">৳ {{ number_format($subtotal - session('discount'), 2) }}</h5>
                    </div>
                @endif
            </div>
            <button class="btn btn-primary btn-lg w-100 mt-3 fw-bold">
                <i class="bi bi-cart-check"></i> চেকআউট করুন
            </button>
        </div>
    </div>
</div>
@endsection
