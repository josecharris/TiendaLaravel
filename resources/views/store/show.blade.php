@extends('store.template')

@section('content')
<div class="container text-center">
    <div class="page-header">
        <br>
        <h1><i class="fa fa-shopping-cart"></i>Detalle del producto</h1>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="product-block">
                <img src="{{ $product->image }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-block">
                <div class="product-info panel">
                    <h3> {{ $product->name }} </h3>
                    <hr>
                    <p> {{ $product->description }} </p>
                    <span class="badge badge-success">Precio: ${{ number_format($product->price,2) }}</span>
                    <p>
                        <a class="btn btn-warning" href="{{ route('cart-add', $product->slug) }}"><i class="fa fa-cart-plus"></i> La quiero</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <p>
        <a class="btn btn-primary" href="{{ route('home') }}">
            <i class="fa fa-chevron-circle-left"></i> Regresar
        </a>
    </p>
</div>
@endsection