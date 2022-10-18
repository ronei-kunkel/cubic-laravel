<x-layout title="{{ $titulo }}">

  <x-module.rua.menu />

  <div class="alert alert-{{ $alertClass }}">
    {{ $mensagemSucesso ?? ''}}
    @empty($mensagemSucesso)
      <br>
    @endempty
  </div>

  <ul class="list-group">
    @foreach ($ruas as $rua)

      <li class="list-group-item d-flex justify-content-between align-items-center">

        {{ $rua->nome }}

        <span class="d-flex">
          <x-action.button.edit :href="route('rua.edit', $rua->id)"/>
          <x-action.delete :action="route('rua.destroy', $rua->id)"/>
        </span>

      </li>

    @endforeach
  </ul>
</x-layout>
