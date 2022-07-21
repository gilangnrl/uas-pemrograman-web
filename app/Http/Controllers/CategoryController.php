<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $dataCategory = Category::all();
        return view('admin.category.index', ['categories' => $dataCategory]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
            'category_description' => 'required',
        ]);

        $input = $request->all();
        $category = new Category();
        $category->category_name = $input['category_name'];
        $category->category_description = $input['category_description'];

        $category->save();
        return redirect(route('category'));
    }

    // public function destroy($id)
    // {
    //     $article = Article::find($id);
    //     $article->categories()->detach();
    //     $article->delete();

    //     return redirect(route('article'));
    // }
}
