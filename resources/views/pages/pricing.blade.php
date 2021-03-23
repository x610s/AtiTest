@extends('layouts.app')


@section('contenido')
    <div class="container my-5 page-pricing" id="pricing">
        <div class="row justify-content-around mx-auto">
           
           @foreach ($plan as $item)
            <div class="col-3">
                <div class="card page-pricing-card">
                    <i class="fas fa-star-half-alt text-center mt-5"></i>
                    <div class="card-body">
                        <h4 class="card-title"> {{$item->name}}</h4>
                        <p class="card-text">e of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                       
                        @if(!auth()->user()->present()->hasPlan($item->id))
                        <button class="btn btn-outline-primary btn-block"  @click="selectModule({{$item['id']}})" id="boton{{$item->id}}">
                            <i class="fa fa-cart-plus" aria-hidden="true" ></i> Comprar
                        </button> 

                        @else
                        <div class="text-center text-primary">
                             Adquirido
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            @endforeach 

        </div>
    </div>
@endsection