@extends('layouts.app')

@section('title', 'Career')

@section('content')

<style>
           body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        .form-container h2 {
            font-weight: bold;
            color: #343a40;
        }
        .form-label {
            font-weight: 500;
            color: #495057;
        }
        .btn-custom {
            background-color: #007bff;
            color: #ffffff;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
</style>
<div class="container py-5">
    <div class="form-container">
        <h2 class="text-center mb-4">ক্যারিয়ার ফর্ম</h2>
        <form action="/submit-career-form" method="POST">
            <!-- রাস্তার ঠিকানা -->
            <div class="mb-3">
                <label for="road_address" class="form-label">রাস্তার ঠিকানা:</label>
                <input type="text" class="form-control" id="road_address" name="road_address" placeholder="রাস্তার ঠিকানা লিখুন" required>
            </div>
            <!-- জেলা -->
            <div class="mb-3">
                <label for="district" class="form-label">জেলা:</label>
                <input type="text" class="form-control" id="district" name="district" placeholder="জেলা লিখুন" required>
            </div>
            <!-- বিভাগ -->
            <div class="mb-3">
                <label for="division" class="form-label">বিভাগ:</label>
                <input type="text" class="form-control" id="division" name="division" placeholder="বিভাগ লিখুন" required>
            </div>
            <!-- আরসসিএস/বিডিএস -->
            <div class="mb-3">
                <label for="rcs_bds" class="form-label">আরসসিএস/বিডিএস:</label>
                <input type="text" class="form-control" id="rcs_bds" name="rcs_bds" placeholder="আরসসিএস/বিডিএস লিখুন">
            </div>
            <!-- মর্জা -->
            <div class="mb-3">
                <label for="morja" class="form-label">মর্জা:</label>
                <input type="text" class="form-control" id="morja" name="morja" placeholder="মর্জা লিখুন">
            </div>
            <!-- জমির ক্যাটাগরি -->
            <div class="mb-3">
                <label for="land_category" class="form-label">জমির ক্যাটাগরি:</label>
                <select id="land_category" name="land_category" class="form-select" required>
                    <option value="">-- একটি ক্যাটাগরি নির্বাচন করুন --</option>
                    @foreach ($lands as $land)   
                    <option value="{{ $land->id }}">{{ $land->land_category }}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- সাবমিট -->
            <div class="text-center">
                <button type="submit" class="btn btn-custom w-100">জমা দিন</button>
            </div>
        </form>
    </div>
</div>

@endsection