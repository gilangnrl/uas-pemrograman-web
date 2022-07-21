<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('user')->get();
        // dd($products);
        return view('admin.product.index', ['products' => $products]);
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'product_code' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
            'product_stock' => 'required',
            'product_supplier' => 'required',
            'img_url' => 'required',
        ]);

        $product = new Product();
        $input = $request->all();
        $product->product_code = $input['product_code'];
        $product->product_name = $input['product_name'];
        $product->product_description = $input['product_description'];
        $product->product_price = $input['product_price'];
        $product->product_stock = $input['product_stock'];
        $product->product_supplier = $input['product_supplier'];
        $product->img_url = $input['img_url'];
        $product->responsible_person = Auth::user()->id;

        $product->save();

        return redirect(route('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'product_code' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
            'product_stock' => 'required',
            'product_supplier' => 'required',
            'img_url' => 'required',
        ]);

        $product = Product::find($id);
        $input = $request->all();
        $product->product_name = $input['product_name'];
        $product->product_code = $input['product_code'];
        $product->product_description = $input['product_description'];
        $product->product_price = $input['product_price'];
        $product->product_stock = $input['product_stock'];
        $product->product_supplier = $input['product_supplier'];
        $product->img_url = $input['img_url'];
        $product->save();

        return redirect(route('product'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect(route('product'));
    }
}
