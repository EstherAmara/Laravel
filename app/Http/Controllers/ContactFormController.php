<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create() {
//        var_dump('hey there');
        return view ('contactform.create');
    }

    public function store() {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

//        dd(request()->all());

        Mail::to('test@test.com')->send(new ContactFormMail());

    }
}
