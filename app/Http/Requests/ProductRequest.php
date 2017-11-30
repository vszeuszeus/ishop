<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'productGroup_id' => 'required|integer|exists:product_groups,id',
            'type_product_id' => 'required|integer|size:2',
            'description' => 'string|max:500|required',
            'photos' => 'array|max:5',
            'photos.*' => 'image|file|mimes:jpg,png,jpeg|dimensions:max_width=2000,min_width=100,max_height=2000,min_height=100|max:5120',
        ];
    }
}
