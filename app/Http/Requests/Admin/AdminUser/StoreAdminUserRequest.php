<?php

namespace App\Http\Requests\Admin\AdminUser;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Por favor, preencha o nome.',
            'email.required' => 'Por favor, preencha o e-mail.',
            'email.email' => 'Por favor, digite um e-mail válido.',
        ];
    }
}
