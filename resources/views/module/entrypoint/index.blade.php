<x-layout title="{{ $titulo }}">

  <div class="alert alert-{{ $alertClass }}">
    {{ $mensagemSucesso ?? ''}}
    @empty($mensagemSucesso)
      <br>
    @endempty
  </div>

  <div class="col-6">
    <x-module.condominio.menu />
  </div>
  <div class="col-6">
    <x-module.rua.menu />
  </div>
  <div class="col-6">
    <x-module.construcao.menu />
  </div>
  <div class="col-6">
    <x-module.usuario.menu />
  </div>
  <div class="col-6">
    <x-module.funcao.menu />
  </div>

</x-layout>
