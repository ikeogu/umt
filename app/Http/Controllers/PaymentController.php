<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Payment;
use App\user;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        //dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
        $paid = new Payment();
        
        $paid->reference =  data_get($paymentDetails, 'data.reference');
        $paid->amount = data_get($paymentDetails, 'data.amount');
        $paid->user_id = data_get($paymentDetails, 'data.metadata.user_id');
        $paid->gateway_response = data_get($paymentDetails, 'data.gateway_response');
    
        $paid->customer_email = data_get($paymentDetails, 'data.customer.email');
        $paid->customer_name = data_get($paymentDetails, 'data.metadata.first_name');
        $paid->bank = data_get($paymentDetails, 'data.authorization.bank');
        $paid->customer_code = data_get($paymentDetails, 'data.customer.customer_code');
        $paid->member_dept = data_get($paymentDetails, 'data.metadata.department');
       
        $paid->status =data_get($paymentDetails, 'status');
        $paid->paid_at =data_get($paymentDetails, 'data.paidAt');
        if($paid->save()){
          $user = User::find($paid->user_id);
          $user->status = 1;
          $user->save();
          return redirect(route('home'))->with('success','Transaction Successful');
          
        }
        
    }
    
}
