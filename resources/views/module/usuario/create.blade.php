<x-layout title="{{ $titulo }}">

  <x-usuario.menu />

  <x-usuario.form action="{{ route('usuario.store') }}"/>

</x-layout>