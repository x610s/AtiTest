@extends('layouts.app')

@section('contenido')
{{-- <div class="row col-12 d-flex justify-content-between"> --}}
       {{-- <div class="col-2" id="opciones">
              @include('components.client.navbar')
       </div> --}}

       <div class="container-fluid" id="client">
              @include('components.client.carpetas')
       </div>
{{--      </div> --}}
@endsection