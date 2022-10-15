<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCircularsRequest extends FormRequest
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
            'circular_title'       => ['string', 'required', 'min:5'],
            'application_fee'      => ['string', 'required', 'min:2'],
            'circular_image'       => ['image', 'mimes:jpg,png,jpeg ,jfif,svg,webp,pjp'],
            'exam_date'            => ['required', 'min:4'],
            'exam_time'            => ['required', 'min:4'],
            'circular_location'    => ['string', 'min:5'],
            'circular_description' => ['required', 'min:5'],
        ];
    }
}
