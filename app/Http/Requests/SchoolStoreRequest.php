<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchoolStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'    => 'required|max:255',
            'address' => 'required|min:8|max:1000',
            'phone' => 'required|min:10|max:1000',
            'email' => 'required|min:8|max:1000',
            'owner_name' => 'required|min:1|max:255',
            'state' => 'required|min:1|max:1000',
            'district' => 'required|min:1|max:1000',
            'tehsil' => 'required|min:1|max:1000',
            'status' => 'required',
        ];
    }
}
