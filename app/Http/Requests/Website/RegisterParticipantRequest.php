<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class RegisterParticipantRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $this->redirect = url()->previous() . '#section-register-now';

        return [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users,email',
            'registration_type' => 'required',
            'age' => 'required_if:registration_type,==,participant|nullable|integer|max:18|min:12'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Por favor, preencha seu nome',
            'phone.required' => 'Por favor, preencha seu whatsapp',
            'email.required' => 'Por favor, preencha seu e-mail',
            'email.unique' => 'E-mail já utilizado',
            'registration_type.required' => 'Por favor, preencha o tipo de inscrição',
            'age.required_if' => 'Por favor, preencha sua idade',
            'age.integer' => 'Por favor, preencha uma idade válida',
            'age.max' => 'A idade máxima permitida para o evento é de 18 anos',
            'age.min' => 'A idade mínima permitida para o evento é de 12 anos',
        ];
    }
}
