<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class articleCategoryController extends Controller
{
    public function index()
    {
        $category = ArticleCategory::query()
            ->withExists([
                'article' => function ($query) {
                    $query->whereNotNull('published_at');
                }
            ])
            ->get();

    }
}
