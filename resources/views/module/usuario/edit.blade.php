<x-layout title="{{ $titulo }}">

  <x-usuario.menu />

  <x-usuario.form action="{{ route('usuario.update', $usuario->id) }}" usuario="{!! $usuario ?? '' !!}"/>

</x-layout>