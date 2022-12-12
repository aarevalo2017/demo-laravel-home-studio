<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/atributos">Atributos</a></li>
      <li><a href="{{ route('nuevo-producto') }}">Agregar Producto</a></li>
      @foreach (\App\Models\Category::all() as $category)
            <li><a href="/category/{{$category->id}}/products">{{ $category->nombre }}</a></li>
        @endforeach
    </ul>
  </div>
</nav>
<div class="container">

    @yield('content')
    
</div>
</body>
</html>