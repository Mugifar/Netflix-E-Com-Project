<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Razorpay\Api\Api;

class PaymentController extends Controller
{
    // public function Payments(Request $request)
    // {
    //     $userId = Session::get('user')['id'];



    //     $orderPrefix = 'PAY';
    //     $timestamp = now()->format('YmdHis');
    //     $uniqueId = uniqid();
    //     $PaymentId = $orderPrefix . $timestamp . $uniqueId;

    //     foreach ($ as $items) {
    //         $payment = new payment();
    //         $payment->user_id = $userId;
    //         $payment->payment_id = $PaymentId;
    //         $payment->subscription_plan = $subscription_plan;

    //         $payment->save();
    //     }
    //     return view('home.razorpay', ['PaymentId' => $PaymentId]);
    // }

    public function PaymentStore(Request $request)
    {
        $input = $request->all();
        $api = new Api("rzp_test_PsIHjSylBwv3Vt", "bprMVH5KRVoyVVDepfrZBfAT");
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if (count($input) && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
            } catch (Exception $e) {
                Session::put('error', $e->getMessage());
                return redirect()->back();
            }
        }
        Session::put('success', 'Payment successful');
        $userid = Auth::user()->id;
        // dd($user);
        $muji = User::where('id', $userid)->get();
        foreach ($muji as $item) {
            $item->update(['role' => 2]);
            $item->update(['subscription' => "basic"]);
        }
        $payment = new Payment();
        $payment->user_id = $userid;
        $payment->payment_id = $request->input('orderid');
        $payment->subscription_plan = "basic";
        $payment->payment_status = true ;
        $payment->save();

        return redirect('/home');

     }

     public function PaymentSuccess(Request $request){

        $input = $request->all();
        $api = new Api("rzp_test_PsIHjSylBwv3Vt", "bprMVH5KRVoyVVDepfrZBfAT");
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if (count($input) && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
            } catch (Exception $e) {
                Session::put('error', $e->getMessage());
                return redirect()->back();
            }
        }
        Session::put('success', 'Payment successful');
        $userid = Auth::user()->id;
        // dd($user);
        $muji = User::where('id', $userid)->get();
        foreach ($muji as $item) {
            $item->update(['role' => 2]);
            $item->update(['subscription' => "premium"]);
        }
        $payment = new Payment();
        $payment->user_id = $userid;
        $payment->payment_id = $request->input('orderid');
        $payment->subscription_plan = "premium";
        $payment->payment_status = true ;
        $payment->save();

        return redirect('/home');
     }


}

    //key id:rzp_test_PsIHjSylBwv3Vt;
    //secret key:bprMVH5KRVoyVVDepfrZBfAT;
