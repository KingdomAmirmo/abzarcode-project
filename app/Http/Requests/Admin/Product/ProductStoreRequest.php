<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif',
            'status' => 'required|numeric|in:0,1',
            'development_type' => 'required|numeric|in:0,1',
            'url' => 'required|max:120|min:2|url',
            'product_category_id' => 'required|min:1|regex:/^[0-9]+$/u|exists:product_categories,id',
            'introduction' => 'required|min:6|max:1500',
            'tags_product' => 'required|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
        ];
    }
}
