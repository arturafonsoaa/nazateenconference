<?php

namespace App\Http\Requests\Admin\Registration;

use Illuminate\Foundation\Http\FormRequest;

class ApproveRegistrationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'payment_method' => 'required'
        ];
    }
}
