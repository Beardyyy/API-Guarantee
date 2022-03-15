<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuaranteeRequest extends FormRequest
{



    public function authorize()
    {
        return true;
    }





    public function rules()
    {
        return [
            'category_id' => 'required|max:100|unique:guarantees',
            'company_id' => 'required|max:100|unique:guarantees',
            'user_id' => 'required|max:100|unique:guarantees',
            'starts' => 'required',
            'ends' => 'required',
            'thumbnail' => 'image',
            'description' => 'max:500'
        ];
    }
}
