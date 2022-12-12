@extends('main')
@section('content')
<h2>Nuevo Producto</h2>
<form action="{{ route('crear-producto') }}" method="POST">
    @csrf
  <div class="form-group">
    <label for="modelo">Modelo</label>
    <input type="text" class="form-control" id="modelo" placeholder="Ingrese Modelo" name="modelo">
  </div>
  <div class="form-group">
    <label for="precio">Precio</label>
    <input type="number" class="form-control" id="precio" placeholder="Ingrese precio" name="precio">
  </div>
  <div class="form-group">
    <label for="stock">Stock</label>
    <input type="number" class="form-control" id="stock" placeholder="Ingrese stock" name="stock">
  </div>
  <div class="form-group">
    <label for="brand">Marca</label>
    <select class="form-control" name="brand" id="brand">
        @foreach ($brands as $b)
            <option value="{{ $b->id }}">{{ $b->name }}</option>
        @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="region">Region</label>
    <select class="form-control" name="region" id="region">
    </select>
  </div>
  <div class="form-group">
    <label for="comuna">Comuna</label>
    <select class="form-control" name="comuna" id="comuna">
    </select>
  </div>
  <div class="form-group">
    <label for="categoria">Categoria</label>
    <select class="form-control" name="categoria" id="categoria">
        @foreach ($categories as $c)
            <option value="{{ $c->id }}">{{ $c->nombre }}</option>
        @endforeach
    </select>
  </div>

  <div id="atributos-contenedor">
  </div>

  <button type="submit" class="btn btn-default">Agregar</button>
</form>
<script>
    $(document).ready(function(){
        $.ajax({
			url: 'https://apis.digital.gob.cl/dpa/regiones',
			dataType: 'jsonp',
			success: function (data) {
                console.log(data);
				var regiones = [];
				$.each(data, function (k, r) {
					var value = r.codigo + '|' + r.nombre;
					regiones.push("<option value='" + value + "'>" + r.nombre + "</option>");
				});
				$("#region").html(regiones);
				// $('#region').selectpicker('refresh');
				// $('#region').selectpicker('val', '09|De la Araucanía');
				// $("#region").trigger("change");
			},
			error: function (jqXHR, textStatus, errorThrown) {
				var resp = jQuery.parseJSON(jqXHR.responseText);
                console.log(resp);
			}
		});

		$("#region").on("change", function (e, sel) {
			$("#comuna").attr('disabled', true);
			$.ajax({
				url: "https://apis.digital.gob.cl/dpa/regiones/" + $(this).val().split('|')[0] + "/comunas",
				dataType: 'jsonp',
				success: function (data) {
					var comunas = [];
					$.each(data, function (k, c) {
						var value = c.codigo + '|' + c.nombre;
						comunas.push("<option value='" + value + "'>" + c.nombre + "</option>");
					});
					$("#comuna").html(comunas);
					$("#comuna").prop("disabled", false);
				},
				error: function (jqXHR, textStatus, errorThrown) {
					var resp = jQuery.parseJSON(jqXHR.responseText);
				}
			});
		});


        $('#categoria').change(function(){
            $html = '';
            console.log($(this).val());
            $.get("/category/"+$(this).val()+"/attributes", function(data, status){
                data.forEach(element => {
                    $html += `
                    <div class="form-group">
                    <label for="stock">${element.name}</label>
                    <input type="text" class="form-control" id="stock" placeholder="Ingrese ${element.name}" name="attr_${element.id}">
                    </div>
                    `;
                });
                console.log($html);
                $('#atributos-contenedor').html($html);
            });
        });
    });
</script>
@endsection

