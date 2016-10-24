<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use App\docentes;

use App\egressos;

use App\noticias;

use App\informacoes;

use App\tgsis;


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

        $this->noticias();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function noticias() {
        //Listar noticias
        $dados = noticias::all();
        $dataType = 'noticia';
        return view('admin/viewEdit/lista',compact('dados','dataType'));
    }

    public function informacoes(){
        //Listar Informações
        $dados = informacoes::all();
        $dataType = 'informacao';
        return view('admin/viewEdit/lista',compact('dados', 'dataType'));
    }

    public function tgsi(){
        //Listar TGSI
        $dados = tgsis::all();
        $dataType = 'tgsi';
        return view('admin/viewEdit/lista',compact('dados', 'dataType'));
    }


    public function egressos(){
        //Listar Egressos
        $dados = egressos::all();
        $dataType = 'egresso';
        return view('admin/viewEdit/lista',compact('dados', 'dataType'));
    }

    public function docentes(){
        //Listar Docentes
        $dados = docentes::all();
        $dataType = 'docentes';
        return view('admin/viewEdit/lista',compact('dados', 'dataType'));
    }

    public function adicionarNoticias(Request $request) {
        //Adicionar noticias
        $titulo = $request->input('titulo');
        return view('admin/viewEdit/noticia', compact('titulo'));
    }

    public function adicionarInformacoes(){
        //Adicionar Informações
        $dataType = 'informacao';
        return view('admin/viewEdit/editar',compact('dados', 'dataType'));
    }

    public function adicionarTgsi(){
        //Adicionar TGSI
        $dataType = 'tgsi';
        return view('admin/viewEdit/editar',compact('dados', 'dataType'));
    }


    public function adicionarEgressos(){
        //Adicionar Egressos
        $dataType = 'egresso';
        return view('admin/viewEdit/editar',compact('dados', 'dataType'));
    }

    public function adicionarDocentes(){
        //Adicionar Docentes
        $dataType = 'docentes';
        return view('admin/viewEdit/editar',compact('dados', 'dataType'));
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

