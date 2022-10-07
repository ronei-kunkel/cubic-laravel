<x-layout title="{{ $titulo }}">
  
  <x-usuario.menu />

    @isset($mensagemSucesso)
      <div class="alert alert-success">
        {{ $mensagemSucesso }}
      </div>
    @endisset

    @empty($mensagemSucesso)
      <div class="alert alert-hidden">
        <br>
      </div>
    @endempty

  <ul class="list-group">
    @foreach ($usuarios as $usuario)
      <li class="list-group-item d-flex justify-content-between align-items-center">

        {{ $usuario->nome }}

        <span class="d-flex">

          <x-button.edit href="{{ route('usuario.edit', $usuario->id) }}"/>

          <form action="{{ route('usuario.destroy', $usuario->id) }}" method="post">
            @csrf
            @method('DELETE')
            <x-button.close/>
          </form>
        </span>
      </li>
    @endforeach
  </ul>
</x-layout>