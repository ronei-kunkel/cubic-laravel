<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConstrucaoFormRequest;
use App\Models\Construcao;

class ConstrucaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $construcoes = Construcao::all();

        $mensagemSucesso = session('mensagem.sucesso');
        $alertClass = !is_null($mensagemSucesso) ? 'success' : 'hidden' ;

        return view('module.construcao.index')
            ->with([
                'construcoes'       => $construcoes,
                'titulo'            => 'Construções',
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
        return view('module.construcao.create')
            ->with([
                'titulo'     => 'Novo construcao',
                'buttonText' => 'Cadastrar',
                'method'     => 'POST'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ConstrucaoFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConstrucaoFormRequest $request)
    {
        $construcao = Construcao::create($request->validated());

        return redirect()
            ->route('construcao.index')
            ->with([
                'mensagem.sucesso' => 'Construção '.$construcao->nome.' criada com sucesso'
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
     * @param  \App\Models\Construcao       $construcao
     * @return \Illuminate\Http\Response
     */
    public function edit(Construcao $construcao)
    {
        return view('module.construcao.edit')
        ->with([
            'titulo'     => 'Editar informações da construção',
            'construcao' => json_decode($construcao),
            'buttonText' => 'Atualizar',
            'method'     => 'PUT'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Construcao                   $construcao
     * @param  \App\Http\Requests\ConstrucaoFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(Construcao $construcao, ConstrucaoFromRequest $request)
    {
        $construcao->fill($request->validated());
        $construcao->save();

        return redirect()
            ->route('construcao.index')
            ->with([
                'mensagem.sucesso' => 'Construção '.$construcao->nome.' atualizada com sucesso'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Construcao       $construcao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Construcao $construcao)
    {
        $construcao->delete();

        return redirect()
            ->route('construcao.index')
            ->with([
                'mensagem.sucesso' => 'Construcao '.$construcao->nome.' removido com sucesso'
            ]);
    }
}
