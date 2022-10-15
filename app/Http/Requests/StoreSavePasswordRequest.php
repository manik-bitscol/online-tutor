<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSavePasswordRequest extends FormRequest
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
            'institute_name' => ['required', 'min:2', 'max:200'],
            'post_name'      => ['required', 'min:2', 'max:150'],
            'user'           => ['required', 'min:2', 'max:100'],
            'password'       => ['required', 'min:2', 'max:50'],
        ];
    }
}
