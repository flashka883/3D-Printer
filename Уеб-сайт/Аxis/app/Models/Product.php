<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductReviews;
use App\Models\ProductImages;
use App\Models\Media;
use App\Models\Size;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'name',
        'quantity',
        'default_image_id',
    ];

    public function images()
    {
        return $this->hasMany(ProductImages::class);
    }

    public function defaultImage()
    {
        return $this->belongsTo(Media::class);
    }

    public function sizes()
    {
        return $this->hasMany(Size::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReviews::class);
    }

    public function reviewsCount()
    {
        return $this->reviews->count();
    }

    public function rating()
    {
        return $this->reviews->avg('rating');
    }

    // public function colors()
    // {
    //     return $this->hasMany('App\Color');
    // }

    public static function getBySlug($slug)
    {
        // dd(Product::where('slug', $slug)->first()->defaultImage);
        return Product::where('slug', $slug)->first();
        // return Product::leftJoin('media', function($join) {
        //     $join->on('products.default_image_id', '=', 'media.id');
        // })
        // // ->whereNull('orders.customer_id')
        // ->first([
        //     'products.id',
        //     'products.slug',
        //     'products.name',
        //     'products.size',
        //     'media.path as default_image',
        //     'products.quantity',
        //     'products.price',
        //     'products.created_at',
        //     'products.updated_at',
        // ]);
    }
}
