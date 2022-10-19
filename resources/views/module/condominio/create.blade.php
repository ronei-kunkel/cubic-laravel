<x-layout :title="$titulo">

  <x-module.condominio.menu />

  @php
    $condominio = old() ? (new \App\Models\Condominio)->fill(old()) : null;
  @endphp

  <x-module.condominio.form
    :action="route('condominio.store')"
    :buttonText="$buttonText"
    :method="$method"
    :condominio="$condominio ?? ''"
  />

</x-layout>
