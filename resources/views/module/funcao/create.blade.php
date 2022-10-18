<x-layout :title="$titulo">

  <x-module.funcao.menu />

  @php
    $funcao = old() ? (new \App\Models\Funcao)->fill(old()) : null;
  @endphp

  <x-module.funcao.form
    :action="route('funcao.store')"
    :buttonText="$buttonText"
    :method="$method"
    :funcao="$funcao ?? ''"
  />

</x-layout>
