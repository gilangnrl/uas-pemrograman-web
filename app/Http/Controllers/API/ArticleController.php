<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function index()
    {
        try {
            $data = Article::with('categories')->with('users')->orderBy('created_at', 'desc')->get();

            return Response::json([
                'success' => true,
                'message' => 'Data has been get',
                'data' => $data
            ], 200);
        } catch (\Exception $error) {
            return Response::json([
                'success' => false,
                'message' => 'Error when trying to list data',
                'error'  => $error->getMessage()
            ], 500);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'article.title'         => 'required|string|max:255',
            'article.description'   => 'required|string',
            'article.body'          => 'required|string',
            'article.author_id'     => 'nullable|exists:users,id',
            'categories'            => 'nullable',
            'categories.*'          => 'required'
        ]);
        if ($validator->fails()) {
            return Response::json([
                'success'   => false,
                'messages'  => $validator->errors()
            ]);
        }

        try {
            $input = $request->all();
            $input['article']['author_id'] = $request->user('api')->id;
            $insertArticle = Article::create($input['article']);

            foreach ($input['categories'] as $category) {
                $article = Article::find($insertArticle['id']);
                $article->categories()->attach($category['category_id']);
            }

            return Response::json([
                'success'   => true,
                'message'   => 'success create new data',
                'data'      => $insertArticle
            ], 200);
        } catch (\Exception $error) {

            return Response::json([
                'success'   => false,
                'message'   => 'Error when trying to add data',
                'error'     => $error->getMessage()
            ], 500);
        }
    }

    public function show(Request $request)
    {
        try {
            $data = Article::with('categories')->findOrFail($request->id);

            return Response::json([
                'success'   => true,
                'message'   => 'success get data',
                'data'      => $data
            ], 200);
        } catch (\Exception $error) {
            return Response::json([
                'success'   => false,
                'message'   => 'Error when get data',
                'error'     => $error->getMessage()
            ], 500);
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'article.title'         => 'required|string|max:255',
            'article.description'   => 'required|string',
            'article.body'          => 'required|string',
            'article.author_id'     => 'nullable|exists:users,id',
            'categories'            => 'nullable',
            'categories.*'          => 'required'
        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'   => false,
                'messages'  => $validator->errors()
            ]);
        }
        try {
            $article = Article::findOrFail($request->id);
            $input = $request->all();
            $article->update($input['article']);

            if (count($input['categories']) > 0) {
                $article->categories()->detach();
                $article->categories()->attach($input['categories']);
            }

            return Response::json([
                'success'   => true,
                'message'   => 'success update data',
                'data'      => $article
            ], 200);
        } catch (\Exception $error) {
            return Response::json([
                'success'   => false,
                'message'   => 'Error when get data',
                'error'     => $error->getMessage()
            ], 500);
        }
    }

    public function destroy(Request $request)
    {
        try {
            $article = Article::where('id', $request->id)->first();
            $article->categories()->detach();
            $article->delete();

            return Response::json([
                'success'   => true,
                'message'   => 'success delete data',
                'data'      => $article
            ], 200);
        } catch (\Exception $error) {
            return Response::json([
                'success'   => false,
                'message'   => 'Error when deletr data',
                'error'     => $error->getMessage()
            ], 500);
        }
    }
}
