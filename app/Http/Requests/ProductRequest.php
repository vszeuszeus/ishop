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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->isMethod('patch')) {
            return [
                'description' => 'required|string|max:300',
                'photos' => 'array|max:3',
                'photos.*' => 'image|file|mimes:jpg,png,jpeg|dimensions:max_width=2000,min_width=100,max_height=2000,min_height=100|max:5120',
            ];
        }
        return [
            'productGroup_id' => 'required|integer|exists:product_groups,id',
            'descriptions' => 'array|max:50|min:1',
            'descriptions.*' => 'string|max:300|nullable',
            'photos' => 'array',
            'photos.*' => 'array|max:50',
            'photos.*.*' => 'image|file|mimes:jpg,png,jpeg|dimensions:max_width=2000,min_width=100,max_height=2000,min_height=100|max:5120'
        ];


    }
}
