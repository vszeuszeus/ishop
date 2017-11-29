<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\ProductGroup;

class ProductController extends Controller
{

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

    public function edit()
    {
        return view('admin.products.edit');
    }
}
