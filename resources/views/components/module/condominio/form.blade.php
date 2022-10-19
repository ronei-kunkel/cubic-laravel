<form action="{{ $action }}" method="POST">

  @csrf

  @method($method)

  <div class="mt-4 mb-2 d-flex">
    <label class="form-label col-2" for="nome">Nome do condominio</label>
    <input
      class="form-control"
      type="text"
      name="nome"
      id="nome"
      value="{{ $condominio->nome ?? '' }}"
      placeholder="Nome do condominio"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="cnpj">CNPJ</label>
    <input
      class="form-control"
      type="text"
      name="cnpj"
      id="cnpj"
      value="{{ $condominio->cnpj ?? '' }}"
      placeholder="xx.xxx.xxx/xxxx-xx"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="cep">CEP</label>
    <input
      class="form-control"
      type="text"
      name="cep"
      id="cep"
      value="{{ $condominio->cep ?? '' }}"
      placeholder="xxxx-xxx"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="estado">Estado</label>
    <input
      class="form-control"
      type="text"
      name="estado"
      id="estado"
      value="{{ $condominio->estado ?? '' }}"
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
      value="{{ $condominio->cidade ?? '' }}"
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
      value="{{ $condominio->bairro ?? '' }}"
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
      value="{{ $condominio->rua ?? '' }}"
      placeholder="Rua"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="numero">Número</label>
    <input
      class="form-control"
      type="text"
      name="numero"
      id="numero"
      value="{{ $condominio->numero ?? '' }}"
      placeholder="Número"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="complemento">Complemento</label>
    <input
      class="form-control"
      type="text"
      name="complemento"
      id="complemento"
      value="{{ $condominio->complemento ?? '' }}"
      placeholder="Complemento"
    >
  </div>

  <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>

</form>
