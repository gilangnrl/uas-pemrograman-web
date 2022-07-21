<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $dataArticle = Article::with('users', 'categories')->get();
        return view('admin.article.index', ['articles' => $dataArticle]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.article.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
        ]);

        $input = $request->all();
        $article = new Article();
        $article->title = $input['title'];
        $article->description = $input['description'];
        $article->body = $input['body'];
        $article->author_id = Auth::user()->id;

        $article->save();
        foreach ($input['categories'] as $category) {
            $article -> categories() -> attach($category);
        }
        return redirect(route('article'));
    }

    public function destroy($id) {
        $article = Article::find($id);
        $article->categories()->detach();
        $article->delete();

        return redirect(route('article'));
    }
}
