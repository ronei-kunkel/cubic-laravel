<x-layout title="{{ $titulo }}">

  <x-module.construcao.menu />

  <div class="alert alert-{{ $alertClass }}">
    {{ $mensagemSucesso ?? ''}}
    @empty($mensagemSucesso)
      <br>
    @endempty
  </div>

  <ul class="list-group">
    @foreach ($construcoes as $construcao)

      <li class="list-group-item d-flex justify-content-between align-items-center">

        {{ $construcao->nome }}

        <span class="d-flex">
          <x-action.button.edit :href="route('construcao.edit', $construcao->id)"/>
          <x-action.delete :action="route('construcao.destroy', $construcao->id)"/>
        </span>

      </li>

    @endforeach
  </ul>
</x-layout>
