<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contacto;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
    public function contactPost(Request $request)
    {
        $this->validate($request, ['nome' => 'required', 'email' => 'required|email', 'telefone' => 'required', 'mensagem' => 'required']);
        Contacto::create($request->all());

        return back()->with('success', 'Thank you for contacting me!');
    }
}
