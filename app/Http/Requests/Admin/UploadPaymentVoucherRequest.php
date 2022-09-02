<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UploadPaymentVoucherRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'payment_voucher' => 'required|mimes:jpg,bmp,png,jpeg,gif,pdf|max:1024',
        ];
    }
}
