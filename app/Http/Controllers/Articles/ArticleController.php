<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Models\Articles\Article;

class ArticleController extends Controller
{
    public function show(Article $article)
    {
        dd($article);
    }

}