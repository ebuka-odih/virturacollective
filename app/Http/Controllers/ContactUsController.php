<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'f_name' => 'required|string',
            'l_name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
        ]);

        $data = new ContactUs();
        $data->f_name = $request->input('f_name');
        $data->l_name = $request->input('l_name');
        $data->phone = $request->input('phone');
        $data->email = $request->input('email');
        $data->save();
        Mail::to('contact@virturacollective.com')->send(new ContactUsMail($data));
        return redirect()->back()->with('success', 'Your details has been sent successfully!');
    }
}
