@extends('layouts.app')


@section('contenido')
    <div class="container my-5">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>

                        <div>
                        
                            <a class="btn btn-outline-primary btn-block">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i> Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection