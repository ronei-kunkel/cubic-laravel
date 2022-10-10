<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\UsuarioFormRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();

        $mensagemSucesso = session('mensagem.sucesso');
        $alertClass = !is_null($mensagemSucesso) ? 'success' : 'hidden' ;

        return view('module.usuario.index')
            ->with([
                'usuarios'          => $usuarios,
                'titulo'            => 'Usuários',
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
        return view('module.usuario.create')
            ->with([
                'titulo'     => 'Novo usuário',
                'buttonText' => 'Cadastrar',
                'method'     => 'POST'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UsuarioFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioFormRequest $request)
    {
        $usuario = Usuario::create($request->all());

        return redirect()
            ->route('usuario.index')
            ->with([
                'mensagem.sucesso' => 'Usuário '.$usuario->nome.' cadastrado com sucesso'
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
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('module.usuario.edit')
            ->with([
                'titulo'     => 'Editar informações de usuário',
                'usuario'    => json_decode($usuario),
                'buttonText' => 'Atualizar',
                'method'     => 'PUT'
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Models\Usuario       $usuario
     * @param  \App\Http\Requests\UsuarioFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Usuario $usuario, UsuarioFormRequest $request)
    {
        $usuario->fill($request->all());
        $usuario->save();

        return redirect()
            ->route('usuario.index')
            ->with([
                'mensagem.sucesso' => 'Usuario '.$usuario->nome.' atualizado com sucesso'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario       $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect()
            ->route('usuario.index')
            ->with([
                'mensagem.sucesso' => 'Usuário '.$usuario->nome.' removido com sucesso'
            ]);
    }
}
