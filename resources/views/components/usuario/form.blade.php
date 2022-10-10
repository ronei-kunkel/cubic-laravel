<form action="{{ $action }}" method="POST">

  @csrf

  @method($method)

  <div class="mt-4 mb-2">
    <input
      class="form-control"
      type="text"
      name="nome"
      id="nome"
      value="{{ $usuario->nome ?? '' }}"
      placeholder="Nome completo"
    >
  </div>

  <div class="mb-2">
    <input
      class="form-control"
      type="text"
      name="rg"
      id="rg"
      value="{{ $usuario->rg ?? '' }}"
      placeholder="RG: xx.xxx.xxx-xx"
    >
  </div>

  <div class="mb-2">
    <input
      class="form-control"
      type="text"
      name="cpf"
      id="cpf"
      value="{{ $usuario->cpf ?? '' }}"
      placeholder="CPF: xxx.xxx.xxx-xx"
    >
  </div>

  <div class="mb-2">
    <input
      class="form-control"
      type="email"
      name="email"
      id="email"
      value="{{ $usuario->email ?? '' }}"
      placeholder="Email: email@exemplo.com"
    >
  </div>

  <div class="mb-2">
    <input
      class="form-control"
      type="tel"
      name="telefone"
      id="telefone"
      value="{{ $usuario->telefone ?? '' }}"
      placeholder="Celular: (xx) 9 xxxx-xxxx"
    >
  </div>

  <div class="mb-2">
    <input
      class="form-control"
      type="password"
      name="senha"
      id="senha"
      value="{{ $usuario->senha ?? '' }}"
      placeholder="Senha"
    >
  </div>

  <div class="mb-2">
    <input
      class="form-control"
      type="password"
      name="confirmacaoSenha"
      id="confirmacaoSenha"
      value="{{ $usuario->senha ?? '' }}"
      placeholder="Confirmação de senha"
    >
  </div>

  <div class="mb-2">
    <input
      class="form-control"
      type="text"
      name="cep"
      id="cep"
      value="{{ $usuario->cep ?? '' }}"
    placeholder="CEP: xxxx-xxx"
    >
  </div>

  <div class="mb-2">
    <input
      class="form-control"
      type="text"
      name="estado"
      id="estado"
      value="{{ $usuario->estado ?? '' }}"
      placeholder="Estado: XX"
    >
  </div>

  <div class="mb-2">
    <input
      class="form-control"
      type="text"
      name="cidade"
      id="cidade"
      value="{{ $usuario->cidade ?? '' }}"
      placeholder="Cidade"
    >
  </div>

  <div class="mb-2">
    <input
      class="form-control"
      type="text"
      name="bairro"
      id="bairro"
      value="{{ $usuario->bairro ?? '' }}"
      placeholder="Bairro"
    >
  </div>

  <div class="mb-2">
    <input
      class="form-control"
      type="text"
      name="rua"
      id="rua"
      value="{{ $usuario->rua ?? '' }}"
      placeholder="Rua"
    >
  </div>

  <div class="mb-2">
    <input
      class="form-control"
      type="text"
      name="numero"
      id="numero"
      value="{{ $usuario->numero ?? '' }}"
      placeholder="Número da rua"
    >
  </div>

  <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>

</form>
