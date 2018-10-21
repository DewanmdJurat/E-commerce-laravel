 @extends('Admin.master')
@section('title')
Category create
@endsection
 @section('mainContent')
  <div class="content-wrapper">
    <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <p class="text-success text-center">{{Session::get('message')}}</p>
                  <h4 class="card-title">Created Category</h4>
                  <form action="{{url('category/save')}}" method="POST">
                    {{csrf_field()}}
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Category Name</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" name="categoryName" id="defaultconfig" type="text" value="{{ old('categoryName') }}" placeholder="Category Name">
                        @if ($errors->has('categoryName'))
                            <span class="help-block">
                                <strong>{{ $errors->first('categoryName') }}</strong>
                            </span>
                        @endif
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Category Description</label>
                    </div>
                    <div class="col-lg-8">
                      <textarea id="summernoteExample" class="form-control"  rows="2" name="categoryDescription"></textarea>
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
                     <button type="submit" class="btn btn-success mr-2">Create Category</button>
                    </div>
                  </div>
                  
                 </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection