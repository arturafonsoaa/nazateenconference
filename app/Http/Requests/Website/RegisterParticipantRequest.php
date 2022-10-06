<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class RegisterParticipantRequest extends FormRequest
{
    public function __construct()
    {
        $this->redirect = route('website.index') . '#section-register-now';
    }

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users,email',
            'registration_type' => 'required',
            'age' => 'required_if:registration_type,==,participant|nullable|integer|max:18|min:12',
            'church' => 'required',
            'church_description' => 'required_if:church,==,Outra|nullable'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Por favor, preencha seu nome',
            'phone.required' => 'Por favor, preencha seu whatsapp',
            'email.required' => 'Por favor, preencha seu e-mail',
            'email.unique' => 'E-mail já utilizado, por favor, clique no link abaixo para acompanhar sua inscrição.',
            'registration_type.required' => 'Por favor, preencha o tipo de inscrição',
            'age.required_if' => 'Por favor, preencha sua idade',
            'church_description.required_if' => 'Por favor, preencha sua igreja',
            'age.integer' => 'Por favor, preencha uma idade válida',
            'age.max' => 'A idade máxima permitida para o evento é de 18 anos',
            'age.min' => 'A idade mínima permitida para o evento é de 12 anos',
        ];
    }
}
