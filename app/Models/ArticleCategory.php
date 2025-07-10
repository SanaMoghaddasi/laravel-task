<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    public function article()
    {
        return $this->hasOne(Article::class, 'product_category_id', 'id');
    }
}
