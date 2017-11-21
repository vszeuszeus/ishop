<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        return [
            'category_id'=>'integer|required',
            'name'=>'required|string|max:255|unique:categories,name',
            'photo_path'=>'image|file|mimes:jpg,png,jpeg|dimensions:max_width=2000,min_width=100,max_height=2000,min_height=100|max:5120',
            'description'=>'string|max:2000',
            'premodaration'=>'boolean',
            'url'=>'required|string|max:255|unique:categories,url',
            'header_description'=>'string|max:255',
            'keywords'=>'string|max:255',
            'title'=>'string|max:255',
            'h1'=>'string|max:255|unique:categories,h1'
        ];
    }
}
