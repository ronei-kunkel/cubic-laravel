<x-layout :title="$titulo">

  <x-module.condominio.menu />

  @php
    $id = $condominio->id;
    $condominio = old() ? (new \App\Models\Condominio)->fill(old()) : $condominio;
    $condominio->id = $id;
  @endphp

  <x-module.condominio.form
    :action="route('condominio.update', $condominio->id)"
    :condominio="$condominio"
    :buttonText="$buttonText"
    :method="$method"
  />

</x-layout>
