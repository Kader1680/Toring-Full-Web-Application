<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;


class PaymentController extends Controller
{
    public function index()
    {
        return view('payment');
    }
    public function checkout(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));


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
                'success_url' => route('payment.success'),
                if (route('payment.success')) {

                }
                'cancel_url' => route('payment.cancel'),
            ]);
            return redirect($session->url, 303);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }



}
