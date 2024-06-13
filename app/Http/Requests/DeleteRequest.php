<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteRequest extends FormRequest
{

    public function rules()
    {
        return [
            'check' => ['required' , 'accepted']
        ];
    }

    public function messages()
    {
        return [
            'check.required' => 'ابتدا این گزینه رو تایید کنید',
            'check.accepted' => 'ابتدا این گزینه رو تایید کنید'
        ];
    }
}
