<?php

namespace App\Http\Requests;

use App\Services\SetBaseIfEmpty;
use Illuminate\Foundation\Http\FormRequest;
use App\Category;

class CategoryRequest extends FormRequest
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
    public function rules(Category $category)
    {
        var_dump($category);
        return [
            'category_id'=>'integer|required',
            'name'=>'required|string|max:255|unique:categories,name,'.$category->id.',id',
            'photo_path'=>'image|file|mimes:jpg,png,jpeg|dimensions:max_width=2000,min_width=100,max_height=2000,min_height=100|max:5120',
            'description'=>'string|max:2000|nullable',
            'url'=>'string|max:255|unique:categories,url,'.$category->id.',id|nullable',
            'header_description'=>'string|max:255|nullable',
            'keywords'=>'string|max:255|nullable',
            'title'=>'string|max:255|nullable',
            'h1'=>'string|max:255|unique:categories,h1,'.$category->id.',id|nullable',
            'photo_alt'=>'string|max:255|nullable'
        ];
    }


}
