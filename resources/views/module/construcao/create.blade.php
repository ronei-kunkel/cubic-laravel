<x-layout :title="$titulo">

  <x-module.construcao.menu />

  @php
    $construcao = old() ? (new \App\Models\Construcao)->fill(old()) : null;
  @endphp

  <x-module.construcao.form
    :action="route('construcao.store')"
    :buttonText="$buttonText"
    :method="$method"
    :construcao="$construcao ?? ''"
  />

</x-layout>
