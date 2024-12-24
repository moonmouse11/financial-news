<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Models\Articles\Article;

class MainController extends Controller
{
    public function index()
    {
        $articles = Article::all()->;

        return view('index', ['articles' => $articles]);
    }
}