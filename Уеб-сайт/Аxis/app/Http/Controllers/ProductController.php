<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Redirect;
use App\Models\Product;
use App\Models\ProductReviews;

class ProductController extends Controller
{
    public function getProduct($slug)
    {
        // todo ->get product with colors sizes & media
        $product = Product::getBySlug($slug);

        // if product is not found redirect to home with message
        if (!$product) {
            return redirect()->back();
        }

        // if product is found load the product view
        return view('product', compact('product'));
    }

    public function productList()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

    public function getStripeProducts()
    {
        $stripe = new \Stripe\StripeClient(
            'sk_test_51KKlDMHHNUevTtiFnXZRa0Fez6uAjbGHiqty41xKHVxOkVTzK43cDYeYdZTbOCOqmzhsjERPkWmKMftbKNpvb8rx00dMKtrhYy'
        );

        // $products = $stripe->products->all(['limit' => 3]);
        $products = $stripe->products->all();
    }

    public function purchase(Request $request, Product $product)
    {
        $user = $request->user();

        if (!$user) {
            $response = [
                'status' => 'error',
                'message' => 'You should log in before payment.'
            ];

            return back()->withErrors(['msg' => 'You should log in before payment.']);
        }

        $paymentMethod = $request->input('payment_method');
        // dd($paymentMethod);
        try {
            $user->createOrGetStripeCustomer();
            // $user->updateDefaultPaymentMethod($paymentMethod);
            // $user->charge($product->price * 100, $paymentMethod);   

        } catch (\Exception $exception) {
            // dd($exception->getMessage());
            // dd($exception->getMessage());
            return back()->with('error', $exception->getMessage());
        }

        // $checkoutSession = $request->user()->stripe()->checkout->sessions->retrieve($request->get('session_id'));
        // dd($checkoutSession);
        // Here, complete the order, like, send a notification email
        // $user->notify(new OrderProcessed($product)); 
        return $request->user()->checkout([$product->stripe_id => 1], [
            'success_url' => route('thank.you') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('shop'),
        ]);

        // return back()->with('message', 'Product purchased successfully!');
    }

    // todo admin functions
    // -> update the product
    // -> delete the product along with its colours sizes & media
}
