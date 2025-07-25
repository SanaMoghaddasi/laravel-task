<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {

        $article = Article::query()
            ->whereNotNull('published_at')
            ->with('articleCategory')
            ->get();
    }
}
