  @extends('Admin.master')
@section('title')
  Product create
@endsection
 @section('mainContent')
  <div class="content-wrapper">
    <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create product</h4>
                  <form action="{{url('product/save')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Product Name</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" name="productName" id="defaultconfig" type="text" placeholder="Product Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Product Title</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" name="productTitle" id="defaultconfig" type="text" placeholder="Product Title">
                    </div>
                  </div>
                  <div class="form-group row ">
                    <div class="col-lg-3">
                      <label class="col-form-label">Category Name</label>
                    </div>
                    <div class="col-lg-8">
                      <select class="js-example-basic-single" style="width:100%" name="categoryId">
                          <option value="AL">Select Category</option>
                          @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->categoryName}}</option>
                          @endforeach
                        </select>
                      
                    </div>
                  </div>
                  <div class="form-group row ">
                    <div class="col-lg-3">
                      <label class="col-form-label">Manufacturer Name</label>
                    </div>
                    <div class="col-lg-8">
                      <select class="js-example-basic-single" style="width:100%" name="manufacturerId">
                          <option value="AL">Select Manufacturer</option>
                          @foreach($manufacturers as $manufacturer)
                          <option value="{{$manufacturer->id}}">{{$manufacturer->manufacturerName}}</option>
                         @endforeach
                        </select>
                      
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Product price</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" name="productPrice" id="defaultconfig" type="number" placeholder="Product Price">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Product Quantity</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" name="productQuantity" id="defaultconfig" type="number" placeholder="Product Quantity">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Product Short Description</label>
                    </div>
                    <div class="col-lg-8">

                      <textarea id="" class="form-control"  rows="4" name="productShortDescription"></textarea>
                    </div>
                  </div>
                   <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Product Long Description</label>
                    </div>
                    <div class="col-lg-8">

                      <textarea id="summernoteExample" class="form-control"  rows="2" name="productLongDescription"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Product Image</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" name="productImage" id="defaultconfig" type="file" >
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
                     <button type="submit" class="btn btn-success mr-2">Create Product</button>
                    </div>
                  </div>
                 </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection