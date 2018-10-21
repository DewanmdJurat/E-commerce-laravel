 @extends('Admin.master')
@section('title')
  Manufacturer create
@endsection
 @section('mainContent')
  <div class="content-wrapper">
    <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Created Manufacturer</h4>
                  <form action="{{url('manufacturer/save')}}" method="POST">
                    {{csrf_field()}}
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Manufacturer Name</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" name="manufacturerName" id="defaultconfig" type="text" placeholder="Manufacturer Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Manufacturer Description</label>
                    </div>
                    <div class="col-lg-8">

                      <textarea id="summernoteExample" class="form-control"  rows="2" name="manufacturerDescription"></textarea>
                    </div>
                  </div>
                  <div class="form-group row ">
                    <div class="col-lg-3">
                      <label class="col-form-label">Publication Status</label>
                    </div>
                    <div class="col-lg-8">
                      <select class="js-example-basic-single" style="width:100%" name="publicationStatus">
                          <option value="AL">Select publication Status</option>
                          <option value="1">Published</option>
                          <option value="0">Unpublished</option>
                        </select>
                      
                    </div>
                  </div>

                  <div class="form-group row ">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-8">
                     <button type="submit" class="btn btn-success mr-2">Create Manufacturer</button>
                    </div>
                  </div>
                 </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection