<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createGuardianRequest extends FormRequest
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
            'name' => 'required',
            'nickname' => 'required',
            'date_of_birth' => 'required',
            'address' => 'required',
            'number' => 'required',
            'zip_code' => 'required',
            'neighborhood' => 'required',
            'city' => 'required',
            'state' => 'required',
        ];
    }
}
