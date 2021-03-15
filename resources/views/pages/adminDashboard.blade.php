@extends('layouts.app')

@section('contenido')
<div class="container-fluid">
    <div class="row">
     @include('components.admin.navbar')
      @include('components.admin.opciones')
    </div>
</div>
@endsection