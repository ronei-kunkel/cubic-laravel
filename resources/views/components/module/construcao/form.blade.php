<form action="{{ $action }}" method="POST">

  @csrf

  @method($method)

  <div class="mt-4 mb-2 d-flex">
    <label class="form-label col-2" for="nome">Nome da construção</label>
    <input
    class="form-control"
    type="text"
      name="nome"
      id="nome"
      value="{{ $construcao->nome ?? '' }}"
      placeholder="Nome da construção"
      >
    </div>

    <div class="mb-2 d-flex">
      <label class="form-label col-2" for="tipo">Tipo da construção</label>
      <input
        class="form-control"
        type="text"
        name="tipo"
        id="tipo"
        value="{{ $construcao->tipo ?? '' }}"
        placeholder="Tipo da construção"
      >
    </div>

    <div class="mb-2 d-flex">
      <label class="form-label col-2" for="numero_interno">Número interno</label>
      <input
        class="form-control"
        type="text"
        name="numero_interno"
        id="numero_interno"
        value="{{ $construcao->numero_interno ?? '' }}"
        placeholder="Número"
      >
    </div>

    <div class="mb-2 d-flex">
      <label class="form-label col-2" for="quantidade_andar">Quantidade de andares</label>
      <input
        class="form-control"
        type="text"
        name="quantidade_andar"
        id="quantidade_andar"
        value="{{ $construcao->quantidade_andar ?? '' }}"
        placeholder="Quantidade de andares"
      >
    </div>

    <div class="mb-2 d-flex">
      <label class="form-label col-2" for="condominio_id">(Temp) condominio_id</label>
      <input
        class="form-control"
        type="text"
        name="condominio_id"
        id="condominio_id"
        value="{{ $construcao->condominio_id ?? '' }}"
        placeholder="condominio_id"
      >
    </div>

    <div class="mb-2 d-flex">
      <label class="form-label col-2" for="condominio_id">(Temp) rua_id</label>
      <input
        class="form-control"
        type="text"
        name="rua_id"
        id="rua_id"
        value="{{ $construcao->rua_id ?? '' }}"
        placeholder="rua_id"
      >
    </div>

  <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>

</form>
