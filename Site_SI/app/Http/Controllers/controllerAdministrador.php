<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use App\docentes;

use App\egressos;

use App\noticias;

use App\informacoes;



class controllerAdministrador extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {

        $this->noticia();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function noticia() {
        //
        $noticia = noticias::all();

        return view('admin/viewEdit/noticia',compact('noticia'));
    }

    public function informacao(){
        //
        $informacao = informacoes::all();

        return view('admin/viewEdit/informacao',compact('informacao'));
    }

    public function tgsi(){
        //
        $tg = tgsi::all();

        return view('admin/viewEdit/noticia',compact('tg'));
    }


    public function egressos(){
        //
        $egresso = egressos::all();

        return view('admin/viewEdit/noticia',compact('egresso'));
    }

    public function docentes(){
        //
        $docente = docentes::all();

        return view('admin/viewEdit/noticia',compact('docente'));
    }


    public function Pesquisa (){

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

    public function logout(){
        auth::logout();
        return redirect('/administrador');
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

