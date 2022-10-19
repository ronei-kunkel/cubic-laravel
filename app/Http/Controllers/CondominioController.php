<?php

namespace App\Http\Controllers;

use App\Http\Requests\CondominioFormRequest;
use App\Models\Condominio;

class CondominioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condominios = Condominio::all();

        $mensagemSucesso = session('mensagem.sucesso');
        $alertClass = !is_null($mensagemSucesso) ? 'success' : 'hidden' ;

        return view('module.condominio.index')
            ->with([
                'condominios'       => $condominios,
                'titulo'            => 'Condominios',
                'mensagemSucesso'   => $mensagemSucesso,
                'alertClass'        => $alertClass
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('module.condominio.create')
            ->with([
                'titulo'     => 'Novo condominio',
                'buttonText' => 'Cadastrar',
                'method'     => 'POST'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CondominioFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CondominioFormRequest $request)
    {
        $condominio = Condominio::create($request->validated());

        return redirect()
            ->route('condominio.index')
            ->with([
                'mensagem.sucesso' => 'Condominio '.$condominio->nome.' criado com sucesso'
            ]);
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
     * @param  \App\Models\Condominio       $condominio
     * @return \Illuminate\Http\Response
     */
    public function edit(Condominio $condominio)
    {
        return view('module.condominio.edit')
            ->with([
                'titulo'     => 'Editar informações do condominio',
                'condominio' => json_decode($condominio),
                'buttonText' => 'Atualizar',
                'method'     => 'PUT'
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Condominio       $condominio
     * @param  \App\Http\Requests\CondominioFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(Condominio $condominio, CondominioFormRequest $request)
    {
        $condominio->fill($request->validated());
        $condominio->save();

        return redirect()
            ->route('condominio.index')
            ->with([
                'mensagem.sucesso' => 'Condominio '.$condominio->nome.' atualizado com sucesso'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Condominio       $condominio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condominio $condominio)
    {
        $condominio->delete();

        return redirect()
            ->route('condominio.index')
            ->with([
                'mensagem.sucesso' => 'Condominio '.$condominio->nome.' removido com sucesso'
            ]);
    }
}
