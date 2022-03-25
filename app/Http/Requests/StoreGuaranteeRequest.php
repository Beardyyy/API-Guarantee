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
        
            'category_id' => 'required|max:100',
            'company_id' => 'required|max:100',
            'user_id' => 'required|max:100',
            'starts' => 'required',
            'ends' => 'required',
            'thumbnail' => 'max:255',
            'description' => 'max:500'
        ];
    }
}
