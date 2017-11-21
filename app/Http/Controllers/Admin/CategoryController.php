<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        return view('admin.products.categories');
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $new = $this->category->create($request->all()->except['photo_path']);
        if($request->hasFile('photo_path'))
        {
            $new->photo_path = $request->file('photo_path')->store('upload/categories/');
            $new->save();
        }
        return redirect()->route('products')->with('message', trans('categories.create',[$new->name]));
    }
}
