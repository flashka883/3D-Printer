<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ShopController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $product = Product::where('id', 1)->first();

        if (!$user) {
            // todo redirect to login route
            // return redirect()->to('home'); 
            return view('shop', compact('product'));
        }

        $intent = $user->createSetupIntent();

        return view('shop', compact('product', 'intent'));

        // return view('shop', compact('product'));

    }

    public function thankYouPage()
    {
        return view('thankYouPage');
    }
}
