<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{

    public function rules()
    {
        return [
            'phone' => 'regex:/^09[0-9]{9}$/',
            'email' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'phone.regex' => 'شماره تلفن باید با 09 شروع شده و 11 رقمی باشد',
            'email.required' => 'ایمیل الزامی است',
            'email.email' => 'ایمیل نامعتبر است',
        ];
    }
}
