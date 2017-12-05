<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\ProductGroupRequest;
use App\ManagerPayType;
use App\Product;
use App\ProductGroup;
use Illuminate\Http\Request;
use App\User;
use App\Tag;
use App\Http\Controllers\Controller;

class ProductGroupController extends Controller
{
    protected $productGroup;

    public function __construct(ProductGroup $productGroup)
    {
        $this->productGroup = $productGroup;
    }

    public function show(ProductGroup $productGroup, Request $request)
    {
        $pagination = ($request->has('pagination')) ? $request->pagination : 10;
        $products = Product::where('product_group_id', $productGroup->id)->with('manager', 'type', 'status')->paginate($pagination);
        return view('admin.productGroups.show', [
            'productGroup' => $productGroup->load('category'),
            'products' => $products,
            'pagination' => $pagination
        ]);
    }

    public function create()
    {

        return view('admin.productGroups.create', [
            'categories' => Category::all(),
            'managers' => User::managers()->get(),
            'pay_types' => ManagerPayType::all(),
        ]);
    }

    public function store(ProductGroupRequest $request)
    {

        //save pGroup
        $new = $this->productGroup->create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'photo_path' => 'images/foto-def.jpg',
            'manager_pay' => $request->manager_pay,
            'manager_pay_type_id' => $request->manager_pay_type_id,
            'description' => $request->description,
            'premodaration' => ($request->has('premodaration') ? 1 : 0),
            'url' => str_slug($request->setBaseIfEmpty('url', 'name'), '-'),
            'header_description' => $request->setBaseIfEmpty('header_description', 'name'),
            'keywords' => $request->setBaseIfEmpty('keywords', 'name'),
            'title' => $request->setBaseIfEmpty('title',  'name'),
            'h1' => $request->setBaseIfEmpty('h1',  'name'),
            'photo_alt' => $request->setBaseIfEmpty('photo_alt','name'),
            'active' => ($request->has('active') ? 1 : 0),
            'is_visible_price' => ($request->has('is_visible_price') ? 1 : 0),
            'is_visible_photo' => ($request->has('is_visible_photo') ? 1 : 0),
            'is_visible_description' => ($request->has('is_visible_description') ? 1 : 0),
            'is_visible_tags' => ($request->has('is_visible_tags') ? 1 : 0),
            'is_change_price' => ($request->has('is_change_price') ? 1 : 0),
            'is_change_photo' => ($request->has('is_change_photo') ? 1 : 0),
            'is_change_description' => ($request->has('is_change_description') ? 1 : 0),
            'is_change_tags' => ($request->has('is_change_tags') ? 1 : 0)
        ]);
        //save photo
        if ($request->hasFile('photo_path')) {
            $new->storePhotoPath($request->file('photo_path'));
        }

        //save tags
        $rTags = explode(' ', $request->tags);
        if ($rTags) {
            $tags = [];
            foreach ($rTags as $tag) {
                $theTag = Tag::firstOrCreate(['name' => $tag]);
                $tags[] = $theTag->id;
            }

            $new->tags()->attach($tags);
        }

        //save managers
        $new->managers()->attach($request->managers);

        $new->load('category');

        return redirect()->route('category.show', [$new->category])->with('message', trans('productGroups.create'));

    }

    public function edit(ProductGroup $productGroup){
        return view('admin.productGroups.edit' ,[
            'categories' => Category::all(),
            'managers' => User::managers()->get(),
            'pay_types' => ManagerPayType::all(),
            'productGroup' => $productGroup->load('tags', 'managers', 'category')
        ]);
    }

    public function update(ProductGroup $productGroup, ProductGroupRequest $request)
    {

        $productGroup->name = $request->name;
        $productGroup->category_id = $request->category_id;
        $productGroup->price = $request->price;
        $productGroup->manager_pay = $request->manager_pay;
        $productGroup->manager_pay_type_id = $request->manager_pay_type_id;
        $productGroup->description = $request->description;
        $productGroup->premodaration = ($request->has('premodaration') ? 1 : 0);
        $productGroup->url = str_slug($request->setBaseIfEmpty('url', 'name'));
        $productGroup->header_description = $request->setBaseIfEmpty('header_description', 'name');
        $productGroup->keywords = $request->setBaseIfEmpty('keywords', 'name');
        $productGroup->title = $request->setBaseIfEmpty('title', 'name');
        $productGroup->h1 = $request->setBaseIfEmpty('h1', 'name');
        $productGroup->photo_alt = $request->setBaseIfEmpty('photo_alt', 'name');
        $productGroup->active = ($request->has('photo_alt') ?  : 0);
        $productGroup->is_visible_price = ($request->has('is_visible_price') ? 1 : 0);
        $productGroup->is_visible_photo = ($request->has('is_visible_photo') ? 1 : 0);
        $productGroup->is_visible_description = ($request->has('is_visible_description') ? 1 : 0);
        $productGroup->is_visible_tags = ($request->has('is_visible_tags') ? 1 : 0);
        $productGroup->is_change_price = ($request->has('is_change_price') ? 1 : 0);
        $productGroup->is_change_photo = ($request->has('is_change_photo') ? 1 : 0);
        $productGroup->is_change_description = ($request->has('is_change_description') ? 1 : 0);
        $productGroup->is_change_tags = ($request->has('is_change_tags') ? 1 : 0);
        $productGroup->save();

        //resave photo
        if ($request->hasFile('photo_path')) {
            $productGroup->restorePhotoPath($request->file('photo_path'));
        }

        //save tags
        $rTags = explode(' ', $request->tags);
        if ($rTags) {
            $tags = [];
            foreach ($rTags as $tag) {
                $theTag = Tag::firstOrCreate(['name' => $tag]);
                $tags[] = $theTag->id;
            }
            $productGroup->tags()->sync($tags);
        }

        //save managers
        $productGroup->managers()->sync($request->managers);

        $productGroup->load('category');

        return redirect()->route('category.show', [$productGroup->category])->with('message', trans('productGroups.update'));
    }

    public function delete(ProductGroup $productGroup){

        $productGroup->load('category');
        $category = $productGroup->category;
        $productGroup->deletePhotoPath();
        $productGroup->delete();
        return redirect()->route('category.show', [$category])->with('message', trans('productGroups.delete'));

    }

    public function setActive(ProductGroup $productGroup){

        $productGroup->load('category');
        $productGroup->update(['active' => 1]);
        return redirect()->route('category.show', [$productGroup->category])->with('message', trans('productGroups.setActive'));
    }

    public function disActive(ProductGroup $productGroup){

        $productGroup->load('category');
        $productGroup->update(['active' => 0]);
        return redirect()->route('category.show', [$productGroup->category])->with('message', trans('productGroups.setDisActive'));
    }
}

