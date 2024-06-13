<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForgetPasswordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => ['required' , 'email' , 'exists:clients,email']
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'ایمیل الزامی است',
            'email.email' => 'ایمیل نامعتبر است',
            'email.exists' => 'ایمیل وجود ندارد',
            'password.required' => 'رمز عبور الزامی است',
            'password.min' => 'رمز عبور باید حداقل 8 کاراکتر باشد',
            'password.regex' => 'رمز عبور شما امن نیست',
            'retryPassword.required' => 'تکرار رمز عبور الزامی است',
            'retryPassword.same' => 'تکرار رمز عبور با رمز عبور مطابقت ندارد',
        ];
    }
}
