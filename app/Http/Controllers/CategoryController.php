<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use DB;

class CategoryController extends Controller
{
   public function categoryCreate(){
   		return view('Admin.category.createCategory');
   }

   public function categoryStore(Request $request){
 
   	$this->validate($request,[
   		'categoryName'=>'required|unique:categories,categoryName',
   		'categoryDescription'=>'required',
   	]);

   	$category=new Category();
   	$category->categoryName =$request->categoryName;
   	$category->categoryDescription =$request->categoryDescription;
   	$category->publicationStatus =$request->publicationStatus;
   	$category->save();
   	return redirect('/create/category')->with('message','Category Created Successfully');
   }
   public function categoryManage(){
   	$categories =Category::all();
   	return view('Admin.category.manageCateogry',['categories'=>$categories]);
   }
   public function categoryUnpublished($id){
   		DB::table('categories')
   			->where('id',$id)
   			->update(['publicationStatus'=>0]);
   			return redirect('/manage/category');
   }
   public function categoryPublished($id){
   	DB::table('categories')
   		->where('id',$id)
   		->update(['publicationStatus'=>1]);
   		return redirect('/manage/category');
   }
   public function categoryEdit($id){
   	$category = Category::where('id',$id)->first();
   	return view('Admin.category.categoryEdit',['category'=>$category]);
   }
   public function categoryUpdate(Request $request){
   	// return $request->all();
      $this->validate($request,[
         'categoryName'=>'required|unique:categories,categoryName,'.$request->categoryId,
         'categoryDescription'=>'required',
      ]);
   	$category =Category::find($request->categoryId);
   	$category->categoryName =$request->categoryName;
   	$category->categoryDescription=$request->categoryDescription;
   	$category->save();
   	return redirect('/manage/category');
   }
   public function categoryDelete($id){
   	$category = Category::find($id);
   	$category->delete();
   	return redirect('/manage/category');
   }
}
