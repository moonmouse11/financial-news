<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Models\Articles\Article;

class MainController extends Controller
{
    public function index()
    {
        $articles = Article::all()->where('category_id', '=', 1)->toArray();

        dump($articles);

        return view('index', ['articles' => $articles]);
    }
}