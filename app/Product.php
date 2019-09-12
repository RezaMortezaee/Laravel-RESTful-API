<?php

namespace App;

use App\Http\Controllers\Product as AppProduct;
use Illuminate\Database\Eloquent\Model;

use App\Seller;
use App\Transaction;
use App\Category;

class Product extends Model
{
    const AVAILABLE_PRODUCT = 'available';
    const UNAVAILABLE_PRODUCT = 'unavailable';

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id'
    ];

    /* Available or NOT */
    public function isAvailable()
    {
        $this->status == Product::AVAILABLE_PRODUCT;
    }

    /* Relations */
    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function categories()
    {
        $this->belongsToMany(Category::class);
    }
}
