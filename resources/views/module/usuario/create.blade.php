<x-layout :title="$titulo">

  <x-usuario.menu />

  @php
    $usuario = old() ? (new \App\Models\Usuario)->fill(old()) : null;
  @endphp

  <x-usuario.form
    :action="route('usuario.store')"
    :buttonText="$buttonText"
    :method="$method"
    :usuario="$usuario ?? ''"
  />

</x-layout>
