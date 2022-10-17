<x-layout title="{{ $titulo }}">

  <x-usuario.menu />

  <div class="alert alert-{{ $alertClass }}">
    {{ $mensagemSucesso ?? ''}}
    @empty($mensagemSucesso)
      <br>
    @endempty
  </div>

  <ul class="list-group">
    @foreach ($usuarios as $usuario)

      <li class="list-group-item d-flex justify-content-between align-items-center">

        {{ $usuario->nome }}

        <span class="d-flex">
          <x-button.edit :href="route('usuario.edit', $usuario->id)"/>
          <x-action.delete :action="route('usuario.destroy', $usuario->id)"/>
        </span>

      </li>

    @endforeach
  </ul>
</x-layout>
