<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteRequest;
use App\Http\Requests\EditRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class Profile extends Controller
{
    public function index()
    {
        return view('profile.edit');
    }

    public function deleteIndex()
    {
        return view('profile.delete');
    }


    public function edit(EditRequest $request)
    {
        $id = auth()->guard('clients')->user()->id;
        Client::query()->where('id' , $id)->update([
            'phone' => $request->phone,
            'email' => $request->email
        ]);
        return redirect()->route('profile_index');
    }

    public function delete(DeleteRequest $request)
    {
        $check = $request->check;
        $id = auth()->guard('clients')->user()->id;
        Client::query()->where('id' , $id)->delete();

        return redirect()->route('register');
    }
}
