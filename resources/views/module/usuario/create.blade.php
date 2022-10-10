<x-layout :title="$titulo">

  <x-usuario.menu />

  <x-usuario.form
    :action="route('usuario.store')"
    :buttonText="$buttonText"
    :method="$method"
  />

</x-layout>
