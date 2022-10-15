<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'book_name'   => ['required', 'min:2', 'max:200'],
            'price'       => ['required', 'min:2', 'max:200'],
            'cover_image' => ['required', 'image', 'mimes:jpg,png,jpeg ,jfif,svg,webp,pjp'],
            'short_desc'  => ['required', 'min:2'],
            'long_desc'   => ['required', 'min:2'],

        ];
    }
}
