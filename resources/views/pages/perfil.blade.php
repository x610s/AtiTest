@extends('layouts.app')

@section('contenido')
<div class="container-fluid py-5 bg-dark">
  <div class="row m-auto col-12 d-flex d-flex justify-content-around ">
    @include('components.perfil.perfil')
    @include('components.perfil.formulario')
    @include('components.perfil.permisos')
  </div>
</div>
@endsection