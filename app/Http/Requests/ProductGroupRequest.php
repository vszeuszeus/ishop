<?php

namespace App\Http\Requests;

use App\ProductGroup;
use App\Services\SetBaseIfEmpty;
use Illuminate\Foundation\Http\FormRequest;

class ProductGroupRequest extends FormRequest
{
    use SetBaseIfEmpty;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $productGroup = $this->route('productGroup');
        $productGroupId = (is_object($productGroup)) ? $productGroup->id : Null;
        return [
            'category_id'=>'integer|required|exists:categories,id',
            'name'=>'required|string|max:255|unique:product_groups,name,'.$productGroupId.',id',
            'photo_path'=>'image|file|mimes:jpg,png,jpeg|dimensions:max_width=2000,min_width=100,max_height=2000,min_height=100|max:5120',
            'price' => 'required|integer|max:2000000',
            'manager_pay' => 'numeric|required',
            'manager_pay_type_id' => 'required|exists:manager_pay_types,id',
            'description'=>'string|max:2000|min:500|nullable',
            'url'=>'string|max:255|unique:product_groups,url,'.$productGroupId.',id|nullable',
            'header_description'=>'string|max:255|nullable',
            'keywords'=>'string|max:255|nullable',
            'title'=>'string|max:255|nullable',
            'h1'=>'string|max:255|unique:product_groups,h1,'.$productGroupId.',id|nullable',
            'photo_alt'=>'string|max:255|nullable',
            'tags' => 'string|max:100'
        ];
    }
}
