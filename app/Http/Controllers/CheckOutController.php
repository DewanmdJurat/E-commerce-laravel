<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipping;
use App\Customers;
use DB;
use Session;
use Cart;
use App\Order;
use App\Payment;
use App\Details;
class CheckOutController extends Controller
{
    public function index(){
      return view('FrontEnd.userRegister.userRegisterinfo');
    }
    public function customerRegistration(Request $request){

      $customer = new Customers();
      $customer->customerName=$request->customerName;
      $customer->customerEmail=$request->customerEmail;
      $customer->mobileNumber=$request->mobileNumber;
      $customer->address=$request->address;
      $customer->password=bcrypt($request->password);
      $customer->save();
      $customerId =$customer->id;
      Session::put('customerId',$customerId);
      return redirect('/checkout/shipping');

    }
    public function showShippingForm(){
      $customerId =Session::get('customerId');
      $customerById=Customers::where('id',$customerId)->first();
      return view('FrontEnd.checkOut.shipping',['customerById'=>$customerById]);
     }  
     public function saveShippingInfo(Request $request){

      $shipping = new Shipping();
      $shipping->fullName=$request->fullName;
      $shipping->emailAddress=$request->emailAddress;
      $shipping->mobileNumber=$request->mobileNumber;
      $shipping->address = $request->address;
      $shipping->save();
      $shippingId =$shipping->id;
      Session::put('shippingId',$shippingId);
      return redirect('/checkout/payment');
    }

    public function showPaymentForm(){
      return view('FrontEnd.checkOut.paymentContent');
    }
    public function saveOrderInfo(Request $request){
      $paymentType = $request->paymentType;
      if($paymentType=='cashOnDelivery'){
        $order = new Order();
        $order->customerId=Session::get('customerId');
        $order->shippingId=Session::get('shippingId');
        $order->orderTotal=Cart::total();
        $order->save();
        $orderId = $order->id;
        Session::put('orderId',$orderId);
        $payment =new Payment();
        $payment->orderId=Session::get('orderId');
        $payment->paymentType=$paymentType;
        $payment->save();
        $cartProducts=Cart::content();
        $oddata=array();
         foreach ($cartProducts as  $cartProduct) 
         {
            $oddata['orderId']=Session::get('orderId');
            $oddata['productId']=$cartProduct->id;
            $oddata['productName']=$cartProduct->name;
            $oddata['productPrice']=$cartProduct->price;
            $oddata['productQuantity']=$cartProduct->qty;

            DB::table('details')
                ->insert($oddata);

         }

        return redirect('/checkout/my-home');

      }elseif ($paymentType=='bkash') {
        return 'Under construction bkash payment type .please use cash on delevery';
      }elseif ($paymentType=='paypal') {
        return 'Under construction bkash payment type .please use cash on delevery';
      }
    }
  public function customerHome(){
    return view('FrontEnd.customer.customerHome');
  } 
 
 public function customerLogin(Request $request)
    {
   
    $customerEmail=$request->customerEmail;
    $customerInfo=Customers::where('customerEmail',$customerEmail)->first();
    // dd($customerInfo);
    if($customerInfo!=NULL){
      $customerPassword=$customerInfo->password;
      if(password_verify($request->password,$customerPassword)){
        Session::put('customerId',$customerInfo->id);
        return redirect('checkout/shipping');
      }
    }else{
      return redirect('/checkout')->with('message','Wrong E-mail Address');
    }
                
    return redirect('/checkout');
             
    
    }

      public function manageOrder()
    {
      // $orderInfo = Details::all();
      $orderInfo=DB::table('orders')
                     ->join('customers','orders.customerId','=','customers.id')
                     ->select('orders.*','customers.customerName')
                     ->get();

       // $manageOrder=view('Admin.OrderDetail.orderManage')
       //         ->with('orderInfo',$orderInfo);
       // return view('Admin.OrderDetail.orderManage',$manageOrder); 
  return view('Admin.OrderDetails.orderManage',['orderInfo'=>$orderInfo]);
    }
   public function customerLogout()
    {
      Session::flush();
      return redirect('/');
    }
}
