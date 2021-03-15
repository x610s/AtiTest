@extends('layouts.app')

@section('contenido')
<div class="row no-gutters ">
     @include('components.admin.navbar')
    <div class="row no-gutters col-10">
      @include('components.admin.opciones')
      @include('components.admin.panel')
    </div>
  
</div>
@endsection