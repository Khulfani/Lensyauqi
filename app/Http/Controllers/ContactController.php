<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function show()
    {
        return view('contact');
    }

    public function send()
    {
        $data = request()->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'message' => 'required',

        ]);

        Mail::to('lensyauqi@gmail.com')->send(new ContactUs($data));

        return redirect()->back()->with('message', 'Berhasil kirim pesan');
    }
}
