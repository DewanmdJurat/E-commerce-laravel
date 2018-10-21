 @extends('Admin.master')
 @section('mainContent')
  <div class="content-wrapper">
    <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Created Category</h4>
                  <form action="{{url('manufacturer/update')}}" method="POST" >
                    {{csrf_field()}}
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Manufacturer Name</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" name="manufacturerName" id="defaultconfig" type="text" value="{{$manufacturer->manufacturerName}}">
                      <input class="form-control" name="manufacturerId" id="defaultconfig" type="hidden" value="{{$manufacturer->id}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Manufacturer Description</label>
                    </div>
                    <div class="col-lg-8">

                      <textarea id="summernoteExample" class="form-control"  rows="2" name="manufacturerDescription">{!!$manufacturer->manufacturerDescription!!}</textarea>
                    </div>
                  </div>
                  <div class="form-group row ">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-8">
                      <button type="submit" class="btn btn-success mr-2">Update</button>
                      
                    </div>
                  </div>
                 </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection