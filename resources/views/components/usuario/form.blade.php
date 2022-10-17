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

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="cep">CEP</label>
    <input
      class="form-control"
      type="text"
      name="cep"
      id="cep"
      value="{{ $usuario->cep ?? '' }}"
    placeholder="xxxxx-xxx"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="estado">Estado</label>
    <input
      class="form-control"
      type="text"
      name="estado"
      id="estado"
      value="{{ $usuario->estado ?? '' }}"
      placeholder="XX"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="cidade">Cidade</label>
    <input
      class="form-control"
      type="text"
      name="cidade"
      id="cidade"
      value="{{ $usuario->cidade ?? '' }}"
      placeholder="Cidade"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="bairro">Bairro</label>
    <input
      class="form-control"
      type="text"
      name="bairro"
      id="bairro"
      value="{{ $usuario->bairro ?? '' }}"
      placeholder="Bairro"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="rua">Rua</label>
    <input
      class="form-control"
      type="text"
      name="rua"
      id="rua"
      value="{{ $usuario->rua ?? '' }}"
      placeholder="Rua"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="numero">Número do endereço</label> 
    <input
      class="form-control"
      type="text"
      name="numero"
      id="numero"
      value="{{ $usuario->numero ?? '' }}"
      placeholder="Número do endereço"
    >
  </div>

  <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>

</form>
