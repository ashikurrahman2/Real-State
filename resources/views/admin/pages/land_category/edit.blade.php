<form action="{{route('land.update', $category->id)}}" method="post" id="add-form">
    @csrf
    @method('PUT')
    <div class="modal-body">
        
        <div class="form-group">
            <label for="land_category" class="col-form-label pt-0">Land Category<sup class="text-size-20 top-1">*</sup></label>
              <input type="text" class="form-control" id="land_category" name="land_category" value="{{ $category->land_category }}" required>
              <small id="emailHelp" class="form-text text-muted">This is your land category</small>
          </div>
 
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"> <span class="d-none"> loading ......</span> Update</button>
      </div>
    </div>
  </form>