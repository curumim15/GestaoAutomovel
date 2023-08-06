<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function agenda()
    {
        return view('Agenda');
    }

    /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
    public function agendaPost(Request $request)
    {
        $this->validate($request, ['nome' => 'required', 'email' => 'required|email', 'telefone' => 'required']);
        Agenda::create($request->all());

        return back()->with('success', 'Thank you for contacting me!');
    }
}
