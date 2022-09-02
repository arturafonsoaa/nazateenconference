<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Por favor, digite a nova senha',
            'password_confirmation.required' => 'Por favor, confirme a nova senha',
            'password.confirmed' => 'As senhas não são iguais, por favor digite novamente',
        ];
    }
}
