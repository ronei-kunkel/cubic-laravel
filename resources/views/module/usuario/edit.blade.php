<x-layout :title="$titulo">

  <x-module.usuario.menu />

  @php
    $id = $usuario->id;
    $usuario = old() ? (new \App\Models\Usuario)->fill(old()) : $usuario;
    $usuario->id = $id;
  @endphp

  <x-module.usuario.form
    :action="route('usuario.update', $usuario->id)"
    :usuario="$usuario"
    :buttonText="$buttonText"
    :method="$method"
  />

</x-layout>
