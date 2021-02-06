<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;



class ContactFormController extends Controller {

    public function index()
    {
        return view('contact');
    }

    public function sendMail(Request $request)
    {
        ContactForm::create($request->all());
        return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent succesfully.']);
    }
}
