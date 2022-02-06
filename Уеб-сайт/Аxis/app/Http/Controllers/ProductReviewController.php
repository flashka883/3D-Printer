<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductReviews;
use Illuminate\Support\Facades\Validator;


class ProductReviewController extends Controller
{
    public function postReview(Request $request, $slug)
    {
        // $validated = $request->validate([
        //     'rating' => 'required',
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'message' => 'required',
        // ]);

        $rules = [
            'rating' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->getMessageBag()->toArray()
            ], 400);
        }

        $product = Product::getBySlug($slug);

        if (!$product) {
            return response()->json([
                'status' => 'error',
                'message' => 'The product is missing!'
            ]);
        }

        try {
            ProductReviews::insert([
                'product_id' => $product->id,
                'from' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
                'rating' => $request->rating
            ]);
        } catch (\Exception $ex) {
            return response()->json([
                'status' => 'error',
                'message' => $ex->getMessage()
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'The review was successfully posted.'
        ]);
    }
}
