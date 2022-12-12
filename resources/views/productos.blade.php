@extends('main')
@section('content')
<h2>Productos</h2>
<div class="row">
    @foreach ($products as $product)
    <div class="col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">{{$product->marca->name.' - '.$product->modelo}}</div>
            <div class="panel-body">
                <h4>Categoría: {{ $product->category->nombre }}</h4>
                <h4>Stock: {{ $product->stock }}</h4>
                <h3 class="text-danger">Precio: {{ $product->precio }}</h3>
                <ul>
                    @foreach ($product->attributes as $a)
                    <li><b>{{ $a->attribute->name }}:</b> {{$a->value }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endforeach
  </div>
@endsection

