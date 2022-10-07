<form action="{{ $action }}" method="post">

  @csrf

  @isset($usuario)
    @method('PUT')
    @php
        $usuario = json_decode($usuario)
    @endphp
  @endisset

  <div class="mt-4 mb-2">
    <label class="form-label" for="senha">Nome Completo</label>
    <input
      class="form-control"
      type="text"
      name="nome"
      id="nome"
      value="{{ $usuario->nome ?? '' }}"
    >
  </div>

  <div class="mb-2">
    <label class="form-label" for="rg">Número de identidade</label>
    <input
      class="form-control"
      type="text"
      name="rg"
      id="rg"
      value="{{ $usuario->rg ?? '' }}"
    >
  </div>

  <div class="mb-2">
    <label class="form-label" for="cpf">CPF</label>
    <input
      class="form-control"
      type="text"
      name="cpf"
      id="cpf"
      value="{{ $usuario->cpf ?? '' }}"
    >
  </div>

  <div class="mb-2">
    <label class="form-label" for="email">E-mail</label>
    <input
      class="form-control"
      type="email"
      name="email"
      id="email"
      value="{{ $usuario->email ?? '' }}"
    >
  </div>

  <div class="mb-2">
    <label class="form-label" for="telefone">Número de telefone</label>
    <input
      class="form-control"
      type="tel"
      name="telefone"
      id="telefone"
      value="{{ $usuario->telefone ?? '' }}"
    >
  </div>

  <div class="mb-2">
    <label class="form-label" for="senha">Senha</label>
    <input
      class="form-control"
      type="password"
      name="senha"
      id="senha"
      value="{{ $usuario->senha ?? '' }}"
    >
  </div>

  <div class="mb-2">
    <label class="form-label" for="confirmacaoSenha">Confirmação de senha</label>
    <input
      class="form-control"
      type="password"
      name="confirmacaoSenha"
      id="confirmacaoSenha"
      value="{{ $usuario->senha ?? '' }}"
    >
  </div>

  <div class="mb-2">
    <label class="form-label" for="cep">CEP</label>
    <input
      class="form-control"
      type="text"
      name="cep"
      id="cep"
      value="{{ $usuario->senha ?? '' }}"
    >
  </div>

  <div class="mb-2">
    <label class="form-label" for="estado">Estado</label>
    <input
      class="form-control"
      type="text"
      name="estado"
      id="estado"
      value="{{ $usuario->estado ?? '' }}"
    >
  </div>

  <div class="mb-2">
    <label class="form-label" for="cidade">Cidade</label>
    <input
      class="form-control"
      type="text"
      name="cidade"
      id="cidade"
      value="{{ $usuario->cidade ?? '' }}"
    >
  </div>

  <div class="mb-2">
    <label class="form-label" for="bairro">Bairro</label>
    <input
      class="form-control"
      type="text"
      name="bairro"
      id="bairro"
      value="{{ $usuario->bairro ?? '' }}"
    >
  </div>

  <div class="mb-2">
    <label class="form-label" for="rua">Rua</label>
    <input
      class="form-control"
      type="text"
      name="rua"
      id="rua"
      value="{{ $usuario->rua ?? '' }}"
    >
  </div>

  <div class="mb-2">
    <label class="form-label" for="numero">Número de endereço</label>
    <input
      class="form-control"
      type="text"
      name="numero"
      id="numero"
      value="{{ $usuario->numero ?? '' }}"
    >
  </div>

  <button type="submit" class="btn btn-primary">{{ empty($usuario) ? 'Cadastrar' : 'Atualizar' }}</button>

</form>