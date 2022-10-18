<x-layout title="{{ $titulo }}">

  <x-module.funcao.menu />

  <div class="alert alert-{{ $alertClass }}">
    {{ $mensagemSucesso ?? ''}}
    @empty($mensagemSucesso)
      <br>
    @endempty
  </div>

  <ul class="list-group">
    @foreach ($funcoes as $funcao)

      <li class="list-group-item d-flex justify-content-between align-items-center">

        {{ $funcao->nome }}

        <span class="d-flex">
          <x-action.button.edit :href="route('funcao.edit', $funcao->id)"/>
          <x-action.delete :action="route('funcao.destroy', $funcao->id)"/>
        </span>

      </li>

    @endforeach
  </ul>
</x-layout>
