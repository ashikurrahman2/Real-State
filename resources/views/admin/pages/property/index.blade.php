@extends('layouts.admin')
@section('admin_content')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Property</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <ul class="breadcrumb">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">+ Add New</button>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
      <div class="row">
        <!-- HTML5 Export Buttons table start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header table-card-header">
              <h5>All Property list here</h5>
            </div>
            <div class="card-body">
              <div class="dt-responsive table-responsive">
                <table id="" class="table table-striped table-bordered nowrap table-sm ytable">
                  <thead>
                    <tr>
                      <th>SL</th>
                        <th>Property Title</th>
                        <th>Property Image</th>
                        <th>Property Address</th>
                        <th>Property Bed</th>
                        <th>Property Bath</th>
                        <th>Property Sqrt</th>
                        <th>Property Amount</th>
                        <th>Property Action</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Data populated by DataTables via AJAX -->
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>SL</th>
                        <th>Property Title</th>
                        <th>Property Image</th>
                        <th>Property Address</th>
                        <th>Property Bed</th>
                        <th>Property Bath</th>
                        <th>Property Sqrt</th>
                        <th>Property Amount</th>
                        <th>Property Action</th>
                        <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div><!-- HTML5 Export Buttons end -->

      </div>
      <!-- [ Main Content ] end -->
    </div>
</div>
  <!-- Insert Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">Add New Property</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('property.store')}}" method="post" id="add-form" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                <div class="form-group">
                  <label for="property_title" class="col-form-label pt-0">Property Title<sup class="text-size-20 top-1">*</sup></label>
                    <input type="text" class="form-control" id="property_title" name="property_title" required>
                    <small id="emailHelp" class="form-text text-muted">This is your property</small>
                </div>
          
                <div class="col-md-12">
                  <label for="property_image" class="col-form-label pt-0">Property Image<sup class="text-size-20 top-1">*</sup></label>
                  <input type="file" class="dropify" data-height="200" name="property_image"  required />
                  <small id="imageHelp" class="form-text text-muted">This is your Property image</small>
              </div>

                <div class="form-group">
                    <label for="property_address" class="col-form-label pt-0">Property Address<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="property_address" name="property_address" required>
                      <small id="emailHelp" class="form-text text-muted">This is your Brand</small>
                  </div>

                  <div class="form-group">
                    <label for="property_elements" class="col-form-label pt-0">Property Bed<sup class="text-size-20 top-1">*</sup></label>
                      <input type="number" class="form-control" id="property_elements" name="property_elements" required>
                      <small id="emailHelp" class="form-text text-muted">Must be type number</small>
                  </div>

                  <div class="form-group">
                    <label for="property_bath" class="col-form-label pt-0">Property Bath<sup class="text-size-20 top-1">*</sup></label>
                      <input type="number" class="form-control" id="property_bath" name="property_bath" required>
                      <small id="emailHelp" class="form-text text-muted">Must be type number</small>
                  </div>

                  <div class="form-group">
                    <label for="property_sqrt" class="col-form-label pt-0">Property Sqrt<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="property_sqrt" name="property_sqrt" required>
                      <small id="emailHelp" class="form-text text-muted">This is property sqrt</small>
                  </div>

                  <div class="form-group">
                    <label for="property_amount" class="col-form-label pt-0">Property Amount<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="property_amount" name="property_amount" required>
                      <small id="emailHelp" class="form-text text-muted">This is your Brand</small>
                  </div>

                  <div class="form-group">
                    <label for="property_action" class="col-form-label pt-0">Property Action<sup class="text-size-20 top-1">*</sup></label>
                      <input type="text" class="form-control" id="property_action" name="property_action" required>
                      <small id="emailHelp" class="form-text text-muted">This is your Property</small>
                  </div>

                  
           
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary"> <span class="d-none"> loading ......</span> Submit</button>
                </div>
              </div>
            </form>
        </div>
    </div>
                 

</div>

 <!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit Brand</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <!-- Edit form content will be loaded here -->
          </div>
      </div>
  </div>
</div>
  <!-- Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(function property(){
      var table=$('.ytable').DataTable({
        processing: true,
            serverSide: true,
            ajax: "{{ route('property.index') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'property_title', name: 'property_title' },
                { data: 'property_image', name: 'property_image' },
                { data: 'property_address', name: 'property_address' },
                { data: 'property_elements', name: 'property_elements' },
                { data: 'property_bath', name: 'property_bath' },
                { data: 'property_sqrt', name: 'property_sqrt' },
                { data: 'property_amount', name: 'property_amount' },
                { data: 'property_action', name: 'property_action' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
      });
    });
// For Edit property 
    $('body').on('click', '.edit', function() {
        let id = $(this).data('id');
        $.get("property/" + id + "/edit", function(data) {
            $('.modal-body').html(data);
        });
    });

  //dropify image
 
  </script>
  
@endsection