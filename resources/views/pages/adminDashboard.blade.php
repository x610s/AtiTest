@extends('layouts.app')

@section('contenido')
<div class="row no-gutters ">
     @include('components.admin.navbar')
    <div class="row no-gutters col-12 col-md-10 col-xl-10 col-lg-10 ">
      @include('components.admin.opciones')
    </div>
  
</div>
@endsection