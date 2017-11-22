<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
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
        return view('admin.categories.categories',[
            'categories' => Category::all(),
            'category' => Category::first()
        ]);
    }

    public function show(Category $category)
    {
        return view('admin.categories.categories',[
            'categories' => Category::all(),
            'category' => $category
        ]);
    }

    public function create()
    {
        return view('admin.categories.create',[
            'categories' => Category::all()
        ]);
    }

    public function store(CategoryRequest $request)
    {
        $new = $this->category->create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'photo_path' => 'images/foto-def.jpg',
            'photo_alt' => $request->setBaseIfEmpty('photo_alt','name'),
            'description' => $request->description,
            'premodaration' => ($request->has($request->premodaration))? 1 : 0,
            'url' => $request->setBaseIfEmpty('url','name', true),
            'header_description' => $request->setBaseIfEmpty('header_description','name'),
            'keywords' => $request->setBaseIfEmpty('keywords','name'),
            'title' => $request->setBaseIfEmpty('title','name'),
            'h1' => $request->setBaseIfEmpty('h1','name'),
        ]);

        if($request->hasFile('photo_path'))
        {
            $new->storePhotoPath($request->file('photo_path'));
        }

        return redirect()->route('category.show', $new)->with('message', trans('categories.create',[$new->name]));
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit',[
            'categories' => Category::all(),
            'category' => $category
        ]);
    }

    public function update(Category $category, CategoryRequest $request)
    {
        $category = $this->category->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'photo_alt' => $request->setBaseIfEmpty('photo_alt','name'),
            'description' => $request->description,
            'premodaration' => ($request->has($request->premodaration))? 1 : 0,
            'url' => $request->setBaseIfEmpty('url','name', true),
            'header_description' => $request->setBaseIfEmpty('header_description','name'),
            'keywords' => $request->setBaseIfEmpty('keywords','name'),
            'title' => $request->setBaseIfEmpty('title','name'),
            'h1' => $request->setBaseIfEmpty('h1','name'),
        ]);

        if($request->hasFile('photo_path'))
        {
            $category->restorePhotoPath($request->file('photo_path'));
        }

        return redirect()->route('category.show', $category)->with('message', trans('categories.update',[$category->name]));
    }

}
