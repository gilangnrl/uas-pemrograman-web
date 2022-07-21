<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $article = Article::with('users', 'categories')->get();

        return view('welcome', ['articles' => $article]);
    }
    public function profile() {
        return view('profile');
    }

    public function kalkulator() {
        return view('kalkulator');
    }
}
