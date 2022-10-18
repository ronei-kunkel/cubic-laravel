<?php

namespace App\Http\Controllers;

use App\Models\Rua;
use App\Http\Requests\RuaFormRequest;


class RuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruas = Rua::all();

        $mensagemSucesso = session('mensagem.sucesso');
        $alertClass = !is_null($mensagemSucesso) ? 'success' : 'hidden' ;

        return view('module.rua.index')
            ->with([
                'ruas'              => $ruas,
                'titulo'            => 'Ruas',
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
        return view('module.rua.create')
            ->with([
                'titulo'     => 'Nova rua',
                'buttonText' => 'Cadastrar',
                'method'     => 'POST'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\RuaFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RuaFormRequest $request)
    {
        $rua = Rua::create($request->validated());

        return redirect()
            ->route('rua.index')
            ->with([
                'mensagem.sucesso' => 'Rua '.$rua->nome.' adicionada com sucesso'
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
     * @param  \App\Models\Rua           $rua
     * @return \Illuminate\Http\Response
     */
    public function edit(Rua $rua)
    {
        return view('module.rua.edit')
            ->with([
                'titulo'     => 'Editar informações da rua',
                'rua'        => json_decode($rua),
                'buttonText' => 'Atualizar',
                'method'     => 'PUT'
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Rua       $rua
     * @param  \App\Http\Requests\RuaFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Rua $rua, RuaFormRequest $request)
    {
        $rua->fill($request->validated());
        $rua->save();

        return redirect()
            ->route('rua.index')
            ->with([
                'mensagem.sucesso' => 'Rua '.$rua->nome.' atualizada com sucesso'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  \App\Models\Rua       $rua
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rua $rua)
    {
        $rua->delete();

        return redirect()
            ->route('rua.index')
            ->with([
                'mensagem.sucesso' => 'Rua '.$rua->nome.' removida com sucesso'
            ]);
    }
}
