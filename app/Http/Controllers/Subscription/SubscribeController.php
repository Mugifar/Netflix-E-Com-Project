<?php

namespace App\Http\Controllers\Subscription;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function Subscribe()
    {
        return view('home.subscription');
    }

    public function Sub(Request $request)
    {
        // dd($request->all());
        $userid = Auth::user()->id;
        // dd($user);
        $muji = User::where('id', $userid)->get();

        $payment = $request->payment;
        $role = 2;
        $free = "free";


        if ($payment == 0) {
            // dd($payment);
            foreach ($muji as $item) {
                $item->update(['role' => $role]);
                $item->update(['subscription' => $free]);
            }
            return redirect('/home');
        }
        if ($payment == 1) {
            $amount = 200;
            $orderPrefix = 'ORD';
            $timestamp = now()->format('YmdHis');
            $uniqueId = uniqid();
            $orderId = $orderPrefix . $timestamp . $uniqueId;
            return view('home.razorpay',compact('amount','orderId','userid'));

            }

        if ($payment == 2) {
            $amount = 500;
            $orderPrefix = 'ORD';
            $timestamp = now()->format('YmdHis');
            $uniqueId = uniqid();
            $orderId = $orderPrefix . $timestamp . $uniqueId;
            return view('home.razorpaytwo',compact('amount','orderId','userid'));
        }
        return back();

        }











    // public function Subscription(Request $request)
    // {
    //     // Get the necessary subscription details from the request
    //     $email = $request->input('email');
    //     $plan = $request->input('plan');
    //     // ...

    //     // Store the subscription details in the database or perform any necessary actions
    //     // For example, you can create a new subscription record in the subscriptions table
    //     Subscription::create([
    //         'email' => $email,
    //         'plan' => $plan,
    //         // ...
    //     ]);

    //     // Assuming the subscription is successful, you can redirect the user to the home page
    //     return redirect()->route('home');
    // }
}
