<x-layout :title="$titulo">

  <x-module.rua.menu />

  @php
    $rua = old() ? (new \App\Models\Rua)->fill(old()) : null;
  @endphp

  <x-module.rua.form
    :action="route('rua.store')"
    :buttonText="$buttonText"
    :method="$method"
    :rua="$rua ?? ''"
  />

</x-layout>
