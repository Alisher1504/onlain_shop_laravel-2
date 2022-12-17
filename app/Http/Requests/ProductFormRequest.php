<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
            'category_id' => [
                'require',
                'integer'
            ],

            'name' => [
                'require',
                'string'
            ],

            'slug' => [
                'require',
                'string',
                'max:255'
            ],

            'brend' => [
                'require',
                'string',
                'max:255'
            ],

            'small_description' => [
                'require',
                'string',
            ],

            'description' => [
                'require',
                'string',
            ],

            'original_price' => [
                'require',
                'integer',
            ],

            'selling_price' => [
                'require',
                'integer',
            ],

            'quantity' => [
                'require',
                'integer',
            ],

            'trending' => [
                'require',
                'integer',
            ],

            'status' => [
                'require',
                'integer',
            ],

            'meta_title' => [
                'require',
                'string',
                'max:255'
            ],

            'meta_keyword' => [
                'require',
                'string',
            ],

            'meta_description' => [
                'require',
                'string',
            ],

            'image' => [
                'nullable',
                'image|mimes:jpeg,png,jpg'
            ]

        ];
    }
}
