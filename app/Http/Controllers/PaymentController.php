<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Checkout\Session;


class PaymentController extends Controller
{
    public function index()
    {
        return view('payment');

    }


  public function success()
    {


    if (Auth::check()) {
     $user = User::find(Auth::id());
    $user->is_subscribe= 1;
    $user->save();
return view("success");
    }


    }


    public function checkout(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));


        // $id_user = Auth::user()?->id;

        // $is_subscribe =User::find($id_user);
        // $is_subscribe->update(['is_subscribe' => 1]);


// $is_subscribe->update
        try {
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => 'Laravel Stripe Payment',
                        ],
                        'unit_amount' => 1000,
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => route('success', ),

                'cancel_url' => route('payment.cancel'),
            ]);
            return redirect($session->url, 303);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }






}
