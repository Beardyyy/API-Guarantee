<?php

namespace App\Http\Requests;

use App\Models\Company;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCompanyRequest extends FormRequest
{




    public function authorize()
    {
        return true;
    }





    public function rules()
    {
        return [
            'name' => ['required', 'max:255', $this->get('id')],
            'location' => 'required'
        ];
    }
}
