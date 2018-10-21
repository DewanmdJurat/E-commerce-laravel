<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Session;
class LICTWelcomeController extends Controller
{
      public function index(){
        $FrontEndProducts =Product::where('publicationStatus',1)
        ->limit(9)
        ->get();
        return view('FrontEnd.homeContent.homeContents',['FrontEndProducts'=>$FrontEndProducts]);
    }
   
   
    public function productDetailsInfo($id){
        $singleProductDetail=Product::where('id',$id)
        ->first();
        return view('FrontEnd.productDetails.singleProductDetail',['singleProductDetail'=>$singleProductDetail]);
    }
    
     public function categoryFront($id){
        $categoryProducts = Product::where('categoryId',$id)
                                 ->where('publicationStatus',1)
                                 ->get();
        return view('FrontEnd.category.categoryContent',['categoryProducts'=>$categoryProducts]);
    }
}
