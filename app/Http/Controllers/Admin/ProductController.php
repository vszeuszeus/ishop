<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Product;
use App\ProductGroup;

class ProductController extends Controller
{
    protected $product;
    public function __construct(Product $product)
    {
        $this->$product = $product;
    }

    public function show(Product $product){
        return view('admin.products.show', [
            'product' => $product
        ]);
    }

    public function create(ProductGroup $productGroup)
    {
        return view('admin.products.create', [
            'productGroup' => $productGroup->load('category')
        ]);
    }

    public function store(ProductRequest $request){
        $this->product->create([
            'decription' => $request->description
        ]);

        if($request->has('photos')){
            foreach ($request->photos as $photo) {
                $photo->store();
            }
        }

    }

    public function edit()
    {
        return view('admin.products.edit');
    }
}
