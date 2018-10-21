<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacturer;
use App\Product;
use File;
use DB;
class ProductController extends Controller
{
    public function productCreate(){
    	$categories = Category::all();
    	$manufacturers = Manufacturer::all();
    	return view('Admin.product.productCreate',['categories'=>$categories,'manufacturers'=>$manufacturers]);
    }
    public function productStore(Request $request){
    	$this->validate($request,[
    		'productName'=>'required',
    		'productTitle'=>'required',
    		'productPrice'=>'required',
    		'productQuantity'=>'required',
    		'productImage'=>'required|mimes:jpeg,jpg,png|max:4000',
    	]);
    	 // return $request->all();
   
    	$productImage =$request->file('productImage');
    	$imagename =$productImage->getClientOriginalName();
    	$uploadpath ='public/productImage/';
    	$productImage->move($uploadpath,$imagename);
    	$imageUrl=$uploadpath.$imagename;
    	$this->saveProductInfo($request,$imageUrl);
       return redirect('/product/create')->with('message','Product Info save successfully');
   }

   protected function saveProductInfo(Request $request,$imageUrl){
       $product = new Product();
       $product ->productName =$request->productName;
       $product ->productTitle =$request->productTitle;
       $product ->categoryId =$request->categoryId;
       $product ->manufacturerId =$request->manufacturerId;
       $product ->productPrice =$request->productPrice;
       $product ->productQuantity =$request->productQuantity;
       $product ->productShortDescription =$request->productShortDescription;
       $product ->productLongDescription =$request->productLongDescription;
       $product ->productImage =$imageUrl;
       $product ->publicationStatus =$request->publicationStatus;
       $product->save();
   }
   public function productManage(){
   		$products = DB::table('products')
   			->join('categories','products.categoryId','=','categories.id')
   			->join('manufacturers','products.manufacturerId','=','Manufacturers.id')
   			->select('products.*','categories.categoryName','manufacturers.manufacturerName')
   			->get();

   		return view('Admin.product.productManage',['products'=>$products]);
   }
   public function productUnpublished($id){
   		DB::table('products')
   			->where('id',$id)
   			->update(['publicationStatus'=>0]);
   			return redirect('/product/manage')->with('message',' Product Unpublished successfully');
   }
   public function productPublished($id){
   	DB::table('products')
   		->where('id',$id)
   		->update(['publicationStatus'=>1]);
   		return redirect('/product/manage')->with('message','Product published successfully');
   }
    public function viewProduct($id){
       $productById=DB::table('products')
           ->join('categories','products.categoryId','=','categories.id')
           ->join('manufacturers','products.manufacturerId','=','manufacturers.id')
           ->select('products.*','categories.categoryName','manufacturers.manufacturerName')
           ->where('products.id',$id)
           ->first();
  		 return view('Admin.product.productView',['product'=>$productById]);
   }
    public function editProduct($id){
       $categories = Category::where('publicationStatus',1)->get();
       $manufacturers =Manufacturer::where('publicationStatus',1)->get();
       $productById = Product::where('id',$id)->first();
       return view('Admin.product.productEdit',['productById'=>$productById,'categories'=>$categories,'manufacturers'=>$manufacturers]);
   }
   public function updateProduct(Request $request){
    $imageUrl = $this->imageExistStatus($request);
    // return $request->all();
       $product = Product::find($request->productId);
       $product ->productName =$request->productName;
       $product ->productTitle =$request->productTitle;
       $product ->categoryId =$request->categoryId;
       $product ->manufacturerId =$request->manufacturerId;
       $product ->productPrice =$request->productPrice;
       $product ->productQuantity =$request->productQuantity;
       $product ->productShortDescription =$request->productShortDescription;
       $product ->productLongDescription =$request->productLongDescription;
       $product ->productImage =$imageUrl;
       $product->save();
   return redirect('/product/manage')->with('message','Product Update successfully');
  }
   public function imageExistStatus($request){
      $productById = Product::where('id',$request->productId)->first();
      $productImage =$request->file('productImage');
      if($productImage){
          $name =$productImage->getClientOriginalName();
          $uploadPath ='public/productImage/';
          $productImage->move($uploadPath,$name);
          $imageUrl=$uploadPath.$name;
          $oldImageUrl = $productById->productImage;
          unlink($oldImageUrl);
      } else {
        $imageUrl=$productById->productImage;
      }
      return $imageUrl;
  }
  public function deleteProduct($id){
     $deleteProduct = Product::find($id);
      $deleteProduct->delete();
     $deleteimage=$this->deleteimage($id);
    return redirect('/product/manage');
  }
  public function deleteimage($id){
    // $imagename=DB::table('files')->where('id',$id)->first();
    // $file=$productImage->'public/productImage/';
    // $filename =public_path().'public/productImage/'.$file;
    // File::delete($filename);
     $user = Product::findOrFail($id);
    unlink(public_path() . $user->$id->file);
    $user->delete();
  }
}
