<?php

namespace App\Http\Controllers;

use Exception;
use PayPing\Payment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(Request $request){
        // save tranaction
        // safe payment

            $res_number=Str::random();
                    $token ='wEXyzpn9Z62k2HDCnM_VOXjSOdMvF7GMWq-z-_8VTOs';
            $args = [
                "amount" =>1000,
                "returnUrl" => route('payment.callback'),
                "clientRefId" => $res_number
            ];

            $payment = new Payment($token);

            try {
                $payment->pay($args);
            } catch (Exception $e) {
                var_dump($e->getMessage());
            }
dd($payment->getPayUrl()) ;
  return redirect( $payment->getPayUrl());
// header('Location: ' . $payment->getPayUrl());



        // save payment
    }
    public function callback(){
        dd(2);
    }
}
