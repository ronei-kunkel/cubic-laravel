<x-layout :title="$titulo">

  <x-module.funcao.menu />

  @php
    $id = $funcao->id;
    $funcao = old() ? (new \App\Models\Funcao)->fill(old()) : $funcao;
    $funcao->id = $id;
  @endphp

  <x-module.funcao.form
    :action="route('funcao.update', $funcao->id)"
    :funcao="$funcao"
    :buttonText="$buttonText"
    :method="$method"
  />

</x-layout>
