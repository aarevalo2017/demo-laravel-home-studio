@extends('main')
@section('content')
<h2>Productos</h2>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attributes as $a)
                <tr>
                    <td>{{$a->id}}</td>
                    <td>{{$a->name}}</td>
                    <td>{{$a->category->nombre}}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection

