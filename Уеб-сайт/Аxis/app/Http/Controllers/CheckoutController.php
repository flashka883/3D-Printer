<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        // Enter Your Stripe Secret
        $stripeSecret = ENV('STRIPE_SECRET');
        \Stripe\Stripe::setApiKey($stripeSecret);

        $amount = 200;
        $amount *= 100;
        $amount = (int) $amount;

        $payment_intent = \Stripe\PaymentIntent::create([
            'description' => 'Stripe Test Payment',
            'amount' => $amount,
            'currency' => 'BGN',
            'description' => 'Payment From Codehunger',
            'payment_method_types' => ['card'],
            'shipping' => [
                'address' => [
                    'city' => 'Sliven',
                    'country' => 'BG',
                    'line1' => 'Slivnica',
                    'postal_code' => '8800'
                ],
                'name' => 'Petkan'
            ],
            'receipt_email' => 'daa1998@abv.bg'
        ]);
        $intent = $payment_intent->client_secret;

        return view('checkout.credit-card', compact('intent'));
    }

    public function afterPayment()
    {
        echo 'Payment Has been Received';
    }

    public function thankYouPage(Request $request)
    {
        \Cart::clear();
        \Cart::session($request->user())->clear();

        return view('thank-you-page');
    }
}
