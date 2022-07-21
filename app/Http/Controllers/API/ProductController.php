<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    public function index()
    {
        try {
            $data = Product::with('user')->get();

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
            'product_name' => 'required',
            'product_code' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
            'product_stock' => 'required',
            'product_supplier' => 'required',
            'img_url' => 'required',
        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'   => false,
                'messages'  => $validator->errors()
            ]);
        }
        try {
            $input = $request->all();
            $input['responsible_person'] = Auth::user()->id;
            $insertArticle = Product::create($input);

            return Response::json([
                'success'   => true,
                'message'   => 'success create new data',
                'data'      => $insertArticle
            ], 202);
        } catch (\Exception $error) {
            return Response::json([
                'success'   => false,
                'message'   => 'Error whe create new data',
                'error'     => $error->getMessage()
            ], 500);
        }
    }

    public function show(Request $request)
    {
        try {
            $data = Product::with('user')->findOrFail($request->id);
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
            'product_name' => 'required',
            'product_code' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
            'product_stock' => 'required',
            'product_supplier' => 'required',
            'img_url' => 'required',
        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'   => false,
                'messages'  => $validator->errors()
            ]);
        }
        try {
            $product = Product::findOrFail($request->id);
            $input = $request->all();
            $product->update($input);

            return Response::json([
                'success'   => true,
                'message'   => 'success update data',
                'data'      => $product
            ], 200);
        } catch (\Exception $error) {
            return Response::json([
                'success'   => false,
                'message'   => 'Error when update data',
                'error'     => $error->getMessage()
            ], 500);
        }
    }

    public function destroy(Request $request)
    {
        try {
            $article = Product::where('id', $request->id)->first();
            $article->delete();

            return Response::json([
                'success'   => true,
                'message'   => 'success delete data',
                'data'      => $article
            ], 200);
        } catch (\Exception $error) {
            return Response::json([
                'success'   => false,
                'message'   => 'Error when delete data',
                'error'     => $error->getMessage()
            ], 500);
        }
    }
}
