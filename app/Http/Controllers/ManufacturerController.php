<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Manufacturer;
use DB;
class ManufacturerController extends Controller
{
	public function manufacturerCreate(){
		return view('Admin.manufacturer.manufacturerCreate');
	} 
	public function manufacturerStore(Request $request){

		$this->validate($request,[
   				'manufacturerName'=>'required',
   				'manufacturerDescription'=>'required',
   			]);
		// return $request->all();
		$manufacturer = new Manufacturer();
		$manufacturer->manufacturerName= $request->manufacturerName;
		$manufacturer->manufacturerDescription= $request->manufacturerDescription;
		$manufacturer->publicationStatus= $request->publicationStatus;
		$manufacturer->save();
		return redirect('manufacturer/create');
	}
	public function manufacturerManage(){
		$manufacturers =Manufacturer::all();
		return view('Admin.manufacturer.manufacturerManage',['manufacturers'=>$manufacturers]);
	}
	 public function manufacturerUnpublished($id){
   		DB::table('manufacturers')
   			->where('id',$id)
   			->update(['publicationStatus'=>0]);
   			return redirect('/manufacturer/manage');
   }
   public function manufacturerPublished($id){
   	DB::table('manufacturers')
   		->where('id',$id)
   		->update(['publicationStatus'=>1]);
   		return redirect('/manufacturer/manage');
   }
    public function manufacturerEdit($id){
   	$manufacturer = Manufacturer::where('id',$id)->first();
   	return view('Admin.manufacturer.manufacturerEdit',['manufacturer'=>$manufacturer]);
   }
   public function manufacturerUpdate(Request $request){
   	// return $request->all();
   	$manufacturer =Manufacturer::find($request->manufacturerId);
   	$manufacturer->manufacturerName =$request->manufacturerName;
   	$manufacturer->manufacturerDescription=$request->manufacturerDescription;
   	$manufacturer->save();
   	return redirect('/manufacturer/manage');
   }
   public function manufacturerDelete($id){
   	$manufacturer = Manufacturer::find($id);
   	$manufacturer->delete();
   	return redirect('/manufacturer/manage');
   }
}
