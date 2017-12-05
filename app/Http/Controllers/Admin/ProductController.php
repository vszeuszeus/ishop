<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Photo;
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

        $descriptions_collect = collect($descriptions)->filter()->count();
        if(!$descriptions_collect)
            return  redirect()->back()->with('message', trans('products.emptyTovar'));

        $product_group = ProductGroup::find($request->productGroup_id);
        foreach($descriptions as $key => $description):
            if(!is_null($description))
            {
                if(isset($drafts[$key])) {
                    $type = 1;
                }elseif($product_group->premodaration){
                    $type = 2;
                }else{
                    $type = 3;
                }
                $product = $this->product->create([
                    'description' => $description,
                    'product_group_id' => $request->productGroup_id,
                    'product_status_id' => 1,
                    'product_type_id' => $type,
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

    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'product' => $product->load('group.category', 'photos')
        ]);
    }

    public function update(Product $product, ProductRequest $request){

        if($request->has('draft') && $request->has('setActive'))
            return redirect()->back()->withInput()->withErrors(trans('validation.draftAndActive'));

        $product->load('photos');
        $countDeletePhoto = count($request->deletePhotos);
        $countPhotos = count($request->photos);
        $countHavePhotos = count($product->photos);
        if( (($countHavePhotos - $countDeletePhoto ) + $countPhotos) > 3)
            return redirect()->back()->withInput()->withErrors(trans('validation.cant_load_more_three_photo_because_have'));

        $product->load('group');
        $product->description = $request->description;

        if($request->has('draft'))
        {
            $product->product_status_id = 1; //neactiven
            $product->product_type_id = 1; //chernovik
        }elseif($request->has('setActive'))
        {
            if($product->group->premodaration){
                return redirect()->back()->withInput()->withErrors(trans('validation.cant_active_premod_group_no_ready'));
            }
            $product->product_status_id = 2; //activen
            $product->product_type_id = 3; //odobren
        }elseif($product->group->premodaration)
        {
            $product->product_status_id = 1; //neactiven
            $product->product_type_id = 2; //na proverke
        }
        else{
            $product->product_status_id = 1; //neactiven
            $product->product_type_id = 3; //odobren
        }

        if(count($request->deletePhotos))
        {
            $photosID = array_keys($request->deletePhotos);
            $photos = Photo::whereIn('id', $photosID)->get();
            foreach($photos as $item)
            {
                $item->deleteByPath();
            }
            Photo::destroy($photosID);
        }

        if(count($request->photos))
        {
            foreach($request->photos as $photo):
                $product->storePhoto($photo);
                $product->photos()->create([
                    'path' => $product->storePhoto($photo)
                ]);
            endforeach;
        }

        $product->save();

        return redirect()->route('productGroup.show', [$product->group])
            ->with('message', trans('products.update', ['value' => $product->id]));
    }

    public function delete(Product $product)
    {
        $photos = $product->photos()->get();
        foreach($photos as $photo){
            $photo->deleteByPath();
            $photo->delete();
        }
        $product_id = $product->id;
        $product->delete();
        return redirect()->back()
            ->with('message', trans('products.delete', ['value' => $product_id]));

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
