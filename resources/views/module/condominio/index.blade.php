<x-layout title="{{ $titulo }}">

  <x-module.condominio.menu />

  <div class="alert alert-{{ $alertClass }}">
    {{ $mensagemSucesso ?? ''}}
    @empty($mensagemSucesso)
      <br>
    @endempty
  </div>

  <ul class="list-group">
    @foreach ($condominios as $condominio)

      <li class="list-group-item d-flex justify-content-between align-items-center">

        {{ $condominio->nome }}

        <span class="d-flex">
          <x-action.button.edit :href="route('condominio.edit', $condominio->id)"/>
          <x-action.delete :action="route('condominio.destroy', $condominio->id)"/>
        </span>

      </li>

    @endforeach
  </ul>
</x-layout>
