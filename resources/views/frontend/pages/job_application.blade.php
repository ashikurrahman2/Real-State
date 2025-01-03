@extends('layouts.app')

@section('title', 'Job Application')

@section('content')
  <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header text-center bg-primary">
                    <h4 class="text-white">Professional Job Application Form</h4>
                </div>
                <div class="card-body">
                    <form>
                        <!-- Personal Information -->
                        <h5 class="mb-3">Personal Information</h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="bloodGroup" class="form-label">Blood Group</label>
                                <select class="form-select" id="bloodGroup" required>
                                    <option value="" selected disabled>Select your blood group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="religion" class="form-label">Religion</label>
                                <select class="form-select" id="religion" required>
                                    <option value="" selected disabled>Select your religion</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Hinduism">Hinduism</option>
                                    <option value="Christianity">Christianity</option>
                                    <option value="Buddhism">Buddhism</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <!-- Educational Information -->
                        <h5 class="mb-3">Educational Information</h5>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="highestDegree" class="form-label">Highest Degree</label>
                                <input type="text" class="form-control" id="highestDegree" placeholder="Enter your highest degree" required>
                            </div>
                            <div class="col-md-6">
                                <label for="university" class="form-label">University/Institution</label>
                                <input type="text" class="form-control" id="university" placeholder="Enter your university name" required>
                            </div>
                        </div>

                         <!-- District, Upazila, Thana Dropdowns -->
                         <div class="mb-3">
                            <label for="district" class="form-label">District</label>
                            <select class="form-select" id="district" name="district" required>
                                <option value="">Select District</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="upazila" class="form-label">Upazila</label>
                            <select class="form-select" id="upazila" name="upazila" required>
                                <option value="">Select Upazila</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="thana" class="form-label">Thana</label>
                            <select class="form-select" id="thana" name="thana" required>
                                <option value="">Select Thana</option>
                            </select>
                        </div>

                        <!-- Work Experience -->
                        <h5 class="mb-3">Work Experience</h5>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="previousExperience" class="form-label">Previous Working Experience</label>
                                <textarea class="form-control" id="previousExperience" rows="4" placeholder="Provide details about your previous work experience" required></textarea>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Submit Application</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    // Fetch districts
    $.ajax({
        url: '/districts',
        method: 'GET',
        success: function(data) {
            $('#district').append('<option value="">Select District</option>');
            data.forEach(function(district) {
                $('#district').append('<option value="'+district.id+'">'+district.name+'</option>');
            });
        }
    });

    // Fetch upazilas based on selected district
    $('#district').change(function() {
        var districtId = $(this).val();
        if(districtId) {
            $.ajax({
                url: '/upazilas/' + districtId,
                method: 'GET',
                success: function(data) {
                    $('#upazila').empty().append('<option value="">Select Upazila</option>');
                    data.forEach(function(upazila) {
                        $('#upazila').append('<option value="'+upazila.id+'">'+upazila.name+'</option>');
                    });
                }
            });
        }
    });

    // Fetch thanas based on selected upazila
    $('#upazila').change(function() {
        var upazilaId = $(this).val();
        if(upazilaId) {
            $.ajax({
                url: '/thanas/' + upazilaId,
                method: 'GET',
                success: function(data) {
                    $('#thana').empty().append('<option value="">Select Thana</option>');
                    data.forEach(function(thana) {
                        $('#thana').append('<option value="'+thana.id+'">'+thana.name+'</option>');
                    });
                }
            });
        }
    });
</script>
@endsection





