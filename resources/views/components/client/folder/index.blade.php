@extends('layouts.app')


@section('contenido')
        <div class="container-fluid bg-dark">
            <div class="container ">

                <div class="justify-content-start row py-5">
               @foreach ($subcarpetas as $subcarpeta)
                <div class="card border m-2" style="width:350px">
                    <div class="card-header">
                     {{$subcarpeta->name}}
                    </div>
                    <div class="card-body justify-content-around row">
                            <a href=" {{route('carpetas.at',$subcarpeta->id_at)}} " class="btn btn-danger col-6"><small>Actualización tributaria</small></a>
                            <a href=" {{route('carpetas.ef',$subcarpeta->id_ef)}} " class="btn btn-success col-5"><small>Estado Financiero</small></a>
                    </div>
                  </div>
              
               @endforeach
             </div>
            </div>
        </div>


@endsection