<?php

namespace App\Http\Controllers;

use App\Models\Funcao;
use App\Http\Requests\FuncaoFormRequest;

class FuncaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $funcoes = Funcao::all();

        $mensagemSucesso = session('mensagem.sucesso');
        $alertClass = !is_null($mensagemSucesso) ? 'success' : 'hidden' ;

        return view('module.funcao.index')
            ->with([
                'funcoes'           => $funcoes,
                'titulo'            => 'Funções',
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
        return view('module.funcao.create')
            ->with([
                'titulo'     => 'Nova função',
                'buttonText' => 'Cadastrar',
                'method'     => 'POST'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\FuncaoFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FuncaoFormRequest $request)
    {
        $funcao = Funcao::create($request->validated());

        return redirect()
            ->route('funcao.index')
            ->with([
                'mensagem.sucesso' => 'Função '.$funcao->nome.' adicionada com sucesso'
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
     * @param  \App\Models\Funcao $funcao
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcao $funcao)
    {
        return view('module.funcao.edit')
            ->with([
                'titulo'     => 'Editar informações da função',
                'funcao'     => json_decode($funcao),
                'buttonText' => 'Atualizar',
                'method'     => 'PUT'
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Funcao       $funcao
     * @param  \App\Http\Requests\FuncaoFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Funcao $funcao, FuncaoFormRequest $request)
    {
        $funcao->fill($request->validated());
        $funcao->save();

        return redirect()
            ->route('funcao.index')
            ->with([
                'mensagem.sucesso' => 'Função '.$funcao->nome.' atualizada com sucesso'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Funcao       $funcao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcao $funcao)
    {
        $funcao->delete();

        return redirect()
            ->route('funcao.index')
            ->with([
                'mensagem.sucesso' => 'Função '.$funcao->nome.' removida com sucesso'
            ]);
    }
}
