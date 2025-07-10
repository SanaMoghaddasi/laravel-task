<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public function product()
    {
        return $this->hasOne(Product::class, 'product_category_id', 'id');
    }
}
