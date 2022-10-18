<form action="{{ $action }}" method="POST">

  @csrf

  @method($method)

  <div class="mt-4 mb-2 d-flex">
    <label class="form-label col-2" for="nome">Nome da função</label>
    <input
      class="form-control"
      type="text"
      name="nome"
      id="nome"
      value="{{ $funcao->nome ?? '' }}"
      placeholder="Nome da função"
    >
  </div>

  <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>

</form>
