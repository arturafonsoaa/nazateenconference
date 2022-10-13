<?php

namespace App\Http\Requests\Admin\Registration;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class CheckinRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $this->redirect = route('admin.registration.index', ['name' => $this->original_name]);

        return [
            'name' => 'required',
            'phone' => 'required',
            'church' => 'required',
            'email' => 'required|email'
        ];
    }

    protected function failedValidation(Validator $validator): void
    {
        notify()->error('Por favor, preencha o formulário de checkin corretamente', 'Erro');
        parent::failedValidation($validator);
    }

    public function messages()
    {
        return [
            'name.required' => 'Por favor, preencha o nome completo.',
            'phone.required' => 'Por favor, preencha o whatsapp.',
            'church.required' => 'Por favor, preencha a igreja.',
            'email.required' => 'Por favor, preencha o e-mail.',
            'email.email' => 'Por favor, digite um e-mail válido.'
        ];
    }
}
