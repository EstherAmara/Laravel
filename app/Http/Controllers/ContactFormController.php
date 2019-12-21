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
        if($data) {
            //this works with the bootstrap in layout
            return redirect('contact')->with('message', 'Thanks for your message, we\'ll be in touch');

            //this also works
//            session()->flash('message', 'Thanks for your message, we\'ll be in touch. Ha ha');
//            return redirect('contact');
        }

        Mail::to('test@test.com')->send(new ContactFormMail());

    }
}
