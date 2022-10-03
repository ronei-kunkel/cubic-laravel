<x-layout title="{{ $title }}">
  <a class="btn btn-dark mb-2" href="/usuario">Usuarios cadastrados</a>
  <a class="btn btn-dark mb-2" href="/usuario/create">Novo usuário</a>
  <ul class="list-group">
    @foreach ($usuarios as $usuario)
      <li class="list-group-item">{{ $usuario->nome }}</li>
    @endforeach
  </ul>
</x-layout>