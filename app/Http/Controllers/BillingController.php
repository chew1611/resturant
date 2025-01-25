<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Hak\GatewayMyanmar\Facades\Gateway;
use Hamcrest\Description;
use Laranex\LaravelMyanmarPayments\LaravelMyanmarPaymentsFacade;
use NunoMaduro\Collision\Provider;
use Stripe;
use Session;
use Srmklive\PayPal\Facades\PayPal;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\PayPal as PaypalClient;
use App\Models\kfood;
use App\Models\mmfood;
use App\Models\orders;
use App\Models\adds;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BillingController extends Controller
{
    //

  
//paypal




//stripe

//insert into order of users
public function ordermmfood(Request $request ){

 //  $mmfood=mmfood::find($id);
    $orders=new orders();

    $price=$request->input('price');
    $ototal=$request->input('ototal');
    $totalamt=$price*$ototal;
    
    $orders->uname=Auth::User()->name;
    $orders->add=$request->input('add');
    $orders->home=$request->input('home');
    $orders->ph=$request->input('ph');
    $orders->otitle=$request->input('otitle');

    $orders->price=$request->input('price');//original
    $orders->totalamt=$totalamt;//original
    $orders->ototal=$request->input('ototal');
    $orders->user_id=Auth::User()->id;
  //  $orders->totalprice=$request->input('totalprice');
   // $mmfood->img = $imageName;
$orders->save();

return redirect()->back()->with('status','Foods order Successfully');





}



public function showbill(){
    return view('articles.stripe');
}

    public function storebill(Request $request)
{
    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
    Stripe\Charge::create ([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com." 
    ]);
  
    Session::flash('success', 'Payment successful!');
          
    return back();



}

//paypal

public function createpaypal(){
    return view('articles.paypal');
}

public function processpaypal()
{
    $provider = new PayPalClient;
    $provider->setApiCredentials(config('paypal'));
    $paypalToken = $provider->getAccessToken();
    $response = $provider->createOrder([
        "intent" => "CAPTURE",
        "application_context" => [
            "return_url" => route('success'),
            "cancel_url" => route('cancel'),
        ],
        "purchase_units" => [
            0 => [
                "amount" => [
                    "currency_code" => "USD",
                    "value" => "1000.00"
                ]
            ]
        ]
    ]);
    if (isset($response['id']) && $response['id'] != null) {
        // redirect to approve href
        foreach ($response['links'] as $links) {
            if ($links['rel'] == 'approve') {
                return redirect()->away($links['href']);
            }
        }
        return redirect()
            ->route('createpaypal')
            ->with('error', 'Something went wrong.');
    } else {
        return redirect()
            ->route('createpaypal')
            ->with('error', $response['message'] ?? 'Something went wrong.');
    }




}
/**
 * success transaction.
 *
 * @return \Illuminate\Http\Response
 */
public function success(Request $request)
{
    $provider = new PayPalClient;
    $provider->setApiCredentials(config('paypal'));
    $provider->getAccessToken();
    $response = $provider->capturePaymentOrder($request['token']);
    if (isset($response['status']) && $response['status'] == 'COMPLETED') {
        return redirect()
            ->route('createTransaction')
            ->with('success', 'Transaction complete.');
    } else {
        return redirect()
            ->route('createTransaction')
            ->with('error', $response['message'] ?? 'Something went wrong.');
    }
}
/**
 * cancel transaction.
 *
 * @return \Illuminate\Http\Response
 */
public function cancel(Request $request)
{
    return redirect()
        ->route('createTransaction')
        ->with('error', $response['message'] ?? 'You have canceled the transaction.');
}



public function myanmarfood(Request $request){
       
    $mmfood=new mmfood();
    

   $mmfood->img=$request->input('img1');
    $mmfood->price=$request->input('price1');
    $mmfood->title=$request->input('title1');
   // $mmfood->img = $imageName;



    $mmfood->save();
    return redirect()->back()->with('status','Food Added Successfully');

}
   
public function kfood(Request $request){
       
    $kfood=new kfood();
    

   $kfood->img=$request->input('img');
    $kfood->price=$request->input('price');
    $kfood->title=$request->input('title');
   // $mmfood->img = $imageName;



    $kfood->save();
    return redirect()->back()->with('status','Food Added Successfully');

}
public function orderm(){
    return view('articles.makeorder');
}

public function react(){
    return view('articles.bill');
}
}