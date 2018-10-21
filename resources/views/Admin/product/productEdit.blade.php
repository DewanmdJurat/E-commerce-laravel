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
                  <h4 class="card-title">Created Manufacturer</h4>
                  <form action="{{url('product/update')}}" method="POST" enctype="multipart/form-data" name="editProduct">
                    {{csrf_field()}}
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Product Name</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" name="productName" id="defaultconfig" type="text" value="{{$productById->productName}}">
                      <input class="form-control" name="productId" id="defaultconfig" type="hidden" value="{{$productById->id}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Product Title</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" name="productTitle" id="defaultconfig" type="text" value="{{$productById->productTitle}}">
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
                      <input class="form-control" name="productPrice" id="defaultconfig" type="number" value="{{$productById->productPrice}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Product Quantity</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" name="productQuantity" id="defaultconfig" type="number" value="{{$productById->productQuantity}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Product Short Description</label>
                    </div>
                    <div class="col-lg-8">

                      <textarea id="" class="form-control"  rows="4" name="productShortDescription">{{$productById->productShortDescription}}</textarea>
                    </div>
                  </div>
                   <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Product Long Description</label>
                    </div>
                    <div class="col-lg-8">

                      <textarea id="summernoteExample" class="form-control"  rows="2" name="productLongDescription">{{$productById->productLongDescription}}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-3">
                      <label class="col-form-label">Product Image</label>
                    </div>
                    <div class="col-lg-8">
                      <input class="form-control" name="productImage" id="defaultconfig" type="file" >
                      <img src="{{asset($productById->productImage)}}" style="width:300px !important; height: 200px; border-radius:unset;">
                    </div>
                  </div>
                  <div class="form-group row ">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-8">
                     <button type="submit" class="btn btn-success mr-2">Update Product</button>
                    </div>
                  </div>
                 </form>
                </div>
              </div>
            </div>
          </div>
        </div>

  <script type="text/javascript">
    
    document.forms['editProduct'].elements['categoryId'].value={{$productById->categoryId}}
    document.forms['editProduct'].elements['manufacturerId'].value={{$productById->manufacturerId}}
  </script>
@endsection