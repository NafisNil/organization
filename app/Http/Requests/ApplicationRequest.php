<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
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
            //
            'logo' => 'mimes:jpg,png,svg,jpeg,gif',
            'logo_signature' => 'mimes:jpg,png,svg,jpeg,gif',
            'name_bn' => 'required',
            'name_en' => 'required',
            'father' => 'required',
            'father_designation' => 'required',
            'mother' => 'required',
            'mother_designation' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'mobile' => 'required',
            'birthdate' => 'required',
            'occupation' => 'required',
           
        ];
    }
}
