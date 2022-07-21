<?php

namespace App\Http\Controllers\API\Guest;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ArticleController extends Controller
{
    public function index()
    {
        try {
            $data = Article::with('categories', 'users')->orderBy('created_at', 'desc')->get();

            // return Response::json($data);
            return Response::json([
                'success' => false,
                'message' => 'Success Get Data',
                'data' => $data
            ]);
        } catch (\Exception $error) {
            return Response::json([
                'success' => false,
                'message' => 'Success Get Data',
                'error' => $error->getMessage()
            ]);
        }
    }


    public function show($id)
    {
        try {
            $data = Article::where('id', $id)->with('categories')->get();

            return Response::json([
                'success' => false,
                'message' => 'Success Get Data',
                'data' => $data
            ]);
        } catch (\Exception $error) {
            return Response::json([
                'success' => false,
                'message' => 'Success Get Data',
                'error' => $error->getMessage()
            ]);
        }
    }
}
