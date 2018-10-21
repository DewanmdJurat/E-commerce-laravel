<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use Cart;
use Session;
class CartController extends Controller
{
    public function addToCartInfo(Request $request){
    
    	$qty=$request->qty;
    	$productId=$request->productId;
    	$product_info=DB::table('products')
    					->where('id',$productId)
    					->first();
    	$data['qty']=$qty;
    	$data['id']=$product_info->id;
    	$data['name']=$product_info->productName;
    	$data['price']=$product_info->productPrice;
    	$data['options']['image']=$product_info->productImage;
    	Cart::add($data);
    	return redirect('/show/cart');
    }
    public function showCart(){
    	$allCategory =DB::table('categories')
    			->where('publicationStatus',1)
    			->get();
    	$contents =Cart::content();
    			
    		return view('FrontEnd.cart.addToCart',['contents'=>$contents]);
    }
    public function productDelete($rowId){
    	Cart::update($rowId,0);
    	return redirect('/show/cart');
    }
    public function quantityUpdate(Request $request){
    	$qty=$request->qty;
    	$rowId=$request->rowId;
    	Cart::update($rowId,$qty);
    	return redirect('/show/cart');

    }
}
