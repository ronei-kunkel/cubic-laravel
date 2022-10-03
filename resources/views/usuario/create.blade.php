<x-layout title="{{ $title }}">
  <a class="btn btn-dark mb-2" href="/usuario">Usuarios cadastrados</a>
  <a class="btn btn-dark mb-2" href="/usuario/create">Novo usuário</a>


  <form action="/usuario" method="post">

    @csrf

    <div class="mb-2">
      <label class="form-label" for="senha">Nome Completo</label>
      <input class="form-control" type="text" name="nome" id="nome">
    </div>

    <div class="mb-2">
      <label class="form-label" for="rg">Número de identidade</label>
      <input class="form-control" type="text" name="rg" id="rg">
    </div>

    <div class="mb-2">
      <label class="form-label" for="cpf">CPF</label>
      <input class="form-control" type="text" name="cpf" id="cpf">
    </div>

    <div class="mb-2">
      <label class="form-label" for="email">E-mail</label>
      <input class="form-control" type="email" name="email" id="email">
    </div>

    <div class="mb-2">
      <label class="form-label" for="telefone">Número de telefone</label>
      <input class="form-control" type="tel" name="telefone" id="telefone">
    </div>

    <div class="mb-2">
      <label class="form-label" for="senha">Senha</label>
      <input class="form-control" type="password" name="senha" id="senha">
    </div>

    <div class="mb-2">
      <label class="form-label" for="confirmacaoSenha">Confirmação de senha</label>
      <input class="form-control" type="password" name="confirmacaoSenha" id="confirmacaoSenha">
    </div>

    <div class="mb-2">
      <label class="form-label" for="cep">CEP</label>
      <input class="form-control" type="text" name="cep" id="cep">
    </div>

    <div class="mb-2">
      <label class="form-label" for="estado">Estado</label>
      <input class="form-control" type="text" name="estado" id="estado">
    </div>

    <div class="mb-2">
      <label class="form-label" for="cidade">Cidade</label>
      <input class="form-control" type="text" name="cidade" id="cidade">
    </div>

    <div class="mb-2">
      <label class="form-label" for="bairro">Bairro</label>
      <input class="form-control" type="text" name="bairro" id="bairro">
    </div>

    <div class="mb-2">
      <label class="form-label" for="rua">Rua</label>
      <input class="form-control" type="text" name="rua" id="rua">
    </div>

    <div class="mb-2">
      <label class="form-label" for="numero">Número de endereço</label>
      <input class="form-control" type="text" name="numero" id="numero">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>

  </form>

</x-layout>