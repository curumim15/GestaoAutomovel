<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use App\Contacto;
use App\Agenda;


class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function agendas()
    {
        return view('agendas');
    }

    public function produtos()
    {
        $produtos= Produto::all();

        return view('produtos')
                ->with('produtos',$produtos);

    }
    public function contacto()
    {
        return view('contacto');
    }
    public function contactPost(Request $request)
    {
        $this->validate($request, ['nome' => 'required', 'email' => 'required|email', 'telefone' => 'required', 'mensagem' => 'required']);
        Contacto::create($request->all());

        return back()->with('success', 'Entraremos em conctato o mais brevemente possivel!');
    }
    public function agendaPost(Request $request)
    {
        $this->validate($request, ['nome' => 'required', 'email' => 'required|email', 'telefone' => 'required']);
        Agenda::create($request->all());

        return back()->with('success', 'Entraremos em conctato o mais brevemente possivel!');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
