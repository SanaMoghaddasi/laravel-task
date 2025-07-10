<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class , 'product_category_id', 'id');
}

    public function productImages()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
}

}
