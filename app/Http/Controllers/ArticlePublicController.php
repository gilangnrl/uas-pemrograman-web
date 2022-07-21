<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlePublicController extends Controller
{
    public function index()
    {
        $dataArticle = Article::with('users', 'categories')->get();
        return view('pages.public.news.index', ['articles' => $dataArticle]);
    }
}
