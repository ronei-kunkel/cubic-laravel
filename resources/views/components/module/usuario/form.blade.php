<form action="{{ $action }}" method="POST">

  @csrf

  @method($method)

  <div class="mt-4 mb-2 d-flex">
    <label class="form-label col-2" for="nome">Nome completo</label>
    <input
      class="form-control"
      type="text"
      name="nome"
      id="nome"
      value="{{ $usuario->nome ?? '' }}"
      placeholder="Nome completo"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="rg">RG</label>
    <input
      class="form-control"
      type="text"
      name="rg"
      id="rg"
      value="{{ $usuario->rg ?? '' }}"
      placeholder="xx.xxx.xxx-xx"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="cpf">CPF</label>
    <input
      class="form-control"
      type="text"
      name="cpf"
      id="cpf"
      value="{{ $usuario->cpf ?? '' }}"
      placeholder="xxx.xxx.xxx-xx"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="email">Email</label>
    <input
      class="form-control"
      type="email"
      name="email"
      id="email"
      value="{{ $usuario->email ?? '' }}"
      placeholder="email@exemplo.com"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="telefone">Número de celular</label>
    <input
      class="form-control"
      type="tel"
      name="telefone"
      id="telefone"
      value="{{ $usuario->telefone ?? '' }}"
      placeholder="(xx) 9 xxxx-xxxx"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="senha">Senha</label>
    <input
      class="form-control"
      type="password"
      name="senha"
      id="senha"
      value="{{ $usuario->senha ?? '' }}"
      placeholder="Senha"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="confirmacaoSenha">Confirmação de senha</label>
    <input
      class="form-control"
      type="password"
      name="confirmacaoSenha"
      id="confirmacaoSenha"
      value="{{ $usuario->senha ?? '' }}"
      placeholder="Confirmação de senha"
    >
  </div>

  <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>

</form>
