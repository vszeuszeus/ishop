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
        $this->product = $product;
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

        $descriptions = $request->descriptions;
        $photos = $request->photos;
        $drafts = $request->drafts;
        print_r($descriptions);
        foreach($descriptions as $key => $description):
            if(!is_null($description))
            {

                $product = $this->product->create([
                    'description' => $description,
                    'product_group_id' => $request->productGroup_id,
                    'product_status_id' => 1,
                    'product_type_id' => (isset($drafts[$key])) ? 1 : 2,
                    'user_id' => $request->user()->id
                ]);
                if( isset($photos[$key] ))
                {
                    foreach($photos[$key] as $photo):
                        $product->photos()->create([
                            'path' => $product->storePhoto($photo)
                        ]);
                    endforeach;
                }
            }
        endforeach;

        return redirect()->route('productGroup.show', [ProductGroup::find($request->productGroup_id)])
            ->with('message', trans('products.create', ['value' => $product->id]));
    }

    public function edit()
    {
        return view('admin.products.edit');
    }

    public function delete()
    {

    }

    public function setActive(Product $product){
        if($product->product_type_id != 3)
            return redirect()->back()->with('message', trans('products.set_active_can_only_ready_type'));
        if($product->product_status_id != 1)
            return redirect()->back()->with('message', trans('products.set_active_can_only_NOACTIVE_status'));
        $product->product_status_id = 2;
        $product->save();
        return redirect()->back()->with('message', trans('products.setActive', ['value' => $product->id]));
    }

    public function setDisActive(Product $product){
        if($product->product_status_id != 2)
            return redirect()->back()->with('message', trans('products.set_NOACTIVE_can_only_active_status'));
        $product->product_status_id = 1;
        $product->save();
        return redirect()->back()->with('message', trans('products.setNoActive', ['value' => $product->id]));
    }

    public function setGood(Product $product){
        $product->product_type_id = 3;
        $product->save();
        return redirect()->back()->with('message', trans('products.setReady', ['value' => $product->id]));
    }

    public function setNoGood(Product $product){
        if($product->product_status_id == 3 || $product->product_status_id == 4)
            return redirect()->back()->with('message', trans('products.set_no_good_can_not_reserv_AND_selled_status'));
        $product->product_type_id = 4;
        $product->product_status_id = 1;
        $product->save();
        return redirect()->back()->with('message', trans('products.setNoReady', ['value' => $product->id]));
    }
}
