<x-layout :title="$titulo">

  <x-module.construcao.menu />

  @php
    $id = $construcao->id;
    $construcao = old() ? (new \App\Models\Construcao)->fill(old()) : $construcao;
    $construcao->id = $id;
  @endphp

  <x-module.construcao.form
    :action="route('construcao.update', $construcao->id)"
    :construcao="$construcao"
    :buttonText="$buttonText"
    :method="$method"
  />

</x-layout>
