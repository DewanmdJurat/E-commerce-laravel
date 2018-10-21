<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use Session;
class CustomerController extends Controller
{
    //
    public function loginView()
    {
    	return view('FrontEnd.customer.customerLogin');
    }
    public function saveInfo(Request $request)
    {	$this->validate($request,[
    	'customerName'=>'required',
    	'customerEmail'=>'required|unique:customers',
    	'mobileNumber'=>'required',
    	'password'=>'required|min:6',
    	]);
    	$saveInfo=new Customers();
    	$saveInfo->customerName=$request->customerName;
    	$saveInfo->customerEmail=$request->customerEmail;
    	$saveInfo->mobileNumber=$request->mobileNumber;
    	$saveInfo->address=$request->address;
    	$saveInfo->password=bcrypt($request->password);
    	$saveInfo->save();
    	Session::put('customerId',$saveInfo->id);
    	Session::put('customerEmail',$saveInfo->customerEmail);
    	return redirect('/');
    }
    public function signIn(Request $request)
    {
    	$customerEmail=$request->customerEmail;
    	$customerInfo=Customers::where('customerEmail',$customerEmail)->first();
    	if($customerInfo!=NULL){
    		$password=$customerInfo->password;
    		if(password_verify($request->password,$password)){
    			Session::put('customerId',$customerInfo->id);
    			Session::put('customerEmail',$customerInfo->customerEmail);
    			return redirect('/');
    		}
    	}else{
    		return redirect('login/form')->with('message','Wrong E-mail Address');
    	}
    }
}
