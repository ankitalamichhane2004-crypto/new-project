<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $datas = Product::get();
        return view('admin.Product.index', compact('datas'));
    }

    public function create()
    {
        return view('admin.Product.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $data['image'] = $path;
        }

        Product::create($data);

        return redirect()->route('product.index');
    }

    public function show(Product $product)
    {
        return view('admin.Product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.Product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {

            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }

            $path = $request->file('image')->store('images', 'public');
            $data['image'] = $path;
        }

        $product->update($data);

        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('product.index');
    }
}
?>