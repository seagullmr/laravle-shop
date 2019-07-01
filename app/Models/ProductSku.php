<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSku extends Model
{
    // 可操作的字段
    protected $fillable = [
        'title', 'description', 'price', 'stock'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
