<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\ProductGroup;
use Illuminate\Support\Facades\Storage;


class CategoryController extends Controller
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index(Request $request)
    {
        $category = Category::first();
        $pagination = ($request->has('pagination')) ? $request->pagination : 10;
        return view('admin.categories.categories',[
            'categories' => Category::all(),
            'category' => $category,
            'groupProducts' => ProductGroup::where('category_id', $category->id)->with('products')
                ->paginate($pagination),
            'pagination' => $pagination
        ]);
    }

    public function show(Category $category, Request $request)
    {
        return view('admin.categories.categories',[
            'categories' => Category::all(),
            'category' => $category,
            'groupProducts' => ProductGroup::where('category_id', $category->id)->with('products')
                ->paginate( ($request->has('pagination')) ? $request->pagination : 10 ),
            'pagination' => $request->pagination
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
            'description' => $request->description,
            'premodaration' => ($request->has('premodaration'))? 1 : 0,
            'url' => str_slug($request->setBaseIfEmpty('url', 'name')),
            'header_description' => $request->setBaseIfEmpty('header_description', 'name'),
            'keywords' => $request->setBaseIfEmpty('keywords', 'name'),
            'title' => $request->setBaseIfEmpty('title', 'name'),
            'h1' => $request->setBaseIfEmpty('h1', 'name'),
            'photo_alt' => $request->setBaseIfEmpty('photo_alt', 'name'),
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
            'category' => $category,
            'categories' => Category::all()->filter(function($item) use ($category){
                return $item->id != $category->id;
            })
        ]);
    }

    public function update(Category $category, CategoryRequest $request)
    {

        $category->name = $request->name;
        $category->category_id = $request->category_id;
        $category->description = $request->description;
        $category->premodaration = ($request->has('premodaration'))? 1 : 0;
        $category->url = str_slug($request->setBaseIfEmpty('url', 'name'));
        $category->header_description = $request->setBaseIfEmpty('header_description', 'name');
        $category->keywords = $request->setBaseIfEmpty('keywords', 'name');
        $category->title = $request->setBaseIfEmpty('title', 'name');
        $category->h1 = $request->setBaseIfEmpty('h1', 'name');
        $category->photo_alt = $request->setBaseIfEmpty('photo_alt', 'name');
        $category->save();

        if($request->hasFile('photo_path'))
        {
            $category->restorePhotoPath($request->file('photo_path'));
        }

        return redirect()->route('category.show', $category)->with('message', trans('categories.update',[$category->name]));
    }

    public function delete(Category $category)
    {

        if(Category::count() > 1)
        {
            $category->deletePhotoPath();
            $category->delete();
            return redirect()->route('products')->with('message', trans('categories.delete'));
        }
        else{
            return redirect()->route('category.show', $category)->with('message', trans('categories.noDelete'));
        }
    }

    public function test()
    {
        return Tag::firstOrCreate(['name' => 'asdasd123']);
    }


}
