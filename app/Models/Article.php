<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function articleCategory()
    {
        return $this->belongsTo(ArticleCategory::class , 'article_category_id', 'id');
    }
}
