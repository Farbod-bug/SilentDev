<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'link' => ['required' , 'exists:clients,reset_link'],
            'password' => [
                'required',
                'min:8',
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/' // must contain a special character
            ],
            'retryPassword' => ['required' , 'same:password']
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'رمز عبور الزامی است',
            'password.min' => 'رمز عبور باید حداقل 8 کاراکتر باشد',
            'password.regex' => 'رمز عبور شما امن نیست',
            'retryPassword.required' => 'تکرار رمز عبور الزامی است',
            'retryPassword.same' => 'تکرار رمز عبور با رمز عبور مطابقت ندارد',
            'link.required' => 'لینک اجباری است',
            'link.exists' => 'لینک اشتباه است',
        ];
    }
}
