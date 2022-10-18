<form action="{{ $action }}" method="POST">

  @csrf

  @method($method)

  <div class="mt-4 mb-2 d-flex">
    <label class="form-label col-2" for="nome">Nome da rua</label>
    <input
      class="form-control"
      type="text"
      name="nome"
      id="nome"
      value="{{ $rua->nome ?? '' }}"
      placeholder="Nome da rua"
    >
  </div>

  <div class="mb-2 d-flex">
    <label class="form-label col-2" for="condominio_id">(Temp) condominio_id</label>
      <input
        class="form-control"
        type="text"
        name="condominio_id"
        id="condominio_id"
        value="{{ $rua->condominio_id ?? '' }}"
        placeholder="condominio_id"
      >
  </div>
  <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>

</form>
