<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ForgetPasswordRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Mail\forgetPassword;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordController extends Controller
{
    public function index()
    {
        return view('auth.forget_password');
    }

    public function reset_password($link)
    {
        return view('auth.reset_password', compact('link'));
    }



    public function update(ForgetPasswordRequest $request)
    {
        $client = Client::query()->where('email' , $request->email)->firstOrFail();
        $link = bin2hex(random_bytes(8));
        $client->reset_link = $link;
        $client->save();

        // Mail::to(['email' => $client->email])->send(new forgetPassword($link));

        alert()->success('Success', 'لینک بازیابی رمز عبور برای شما ارسال شد');
        return redirect()->back();
        }


        public function store(ResetPasswordRequest $request)
        {
            $client = Client::query()->where('reset_link' , $request->link)->firstOrFail();

            $client->password = Hash::make($request->password);
            $client->reset_link = null;
            $client->save();


            return redirect()->route('login');
        }
}

