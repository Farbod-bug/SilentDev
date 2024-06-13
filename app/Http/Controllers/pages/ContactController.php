<?php

namespace App\Http\Controllers\pages;

use App\Models\Contact;
use Illuminate\Http\Request;
use UxWeb\SweetAlert\SweetAlert;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }


    public function store(ContactRequest $request)
    {
        Contact::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        alert()->success('Success', 'درخواست شما با موفقیت ارسال شد');
        return redirect()->route('contact');
    }


    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
