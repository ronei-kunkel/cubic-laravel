<x-layout :title="$titulo">

  <x-module.rua.menu />

  @php
    $id = $rua->id;
    $rua = old() ? (new \App\Models\Rua)->fill(old()) : $rua;
    $rua->id = $id;
  @endphp

  <x-module.rua.form
    :action="route('rua.update', $rua->id)"
    :rua="$rua"
    :buttonText="$buttonText"
    :method="$method"
  />

</x-layout>
