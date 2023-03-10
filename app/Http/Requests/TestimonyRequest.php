<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonyRequest extends FormRequest
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
            "testimonypopup-userfullname" => "required|alpha",
            "testimonypopup-email" => "required|email",
            "testimonypopup-city" => "required|string",
            "testimonypopup-text" => "required"
        ];
    }
}
