@if ( Auth::user()->rol == 9 )
<div style="background:#ddd"  class="padd5 redondeado6">
  Publicado: si <input type="radio" name="published" value="1" {{ $inmueble->published ? "checked" : "" }} > | no <input type="radio" name="published" value="0" {{ !$inmueble->published ? "checked" : "" }}>
</div>
<div class="height10"></div>
@endif

<div style="background:#ddd"  class="padd5 redondeado6">
  Vendido: si <input type="radio" name="sold" value="1" {{ ifEcho($inmueble->sold, "checked") }} > | no <input type="radio" name="sold" value="0" {{ ifEcho(!$inmueble->sold, "checked") }}>
</div>
<div class="height10"></div>
  
<div class="tab-content">
  <div class="tab-pane active" id="spanish">
    <!-- INMUEBLES TABLA ESPANOL-->
    <table class="table table-bordered">
      <tr>
        <td width="10%"><input class="form-control" placeholder="código" value="{{ old('codigo', $inmueble->codigo) }}" required name="codigo" type="text" maxlength="6"></td>
        <td width="20%">
          <select class="form-control" name="operacion_id" required>
            <option value="0">Operación</option>
            @foreach( $operaciones as $op )
            <option value="{{ $op->id }}" {{ ifEcho($op->id == $inmueble->operacion_id, 'selected') }}>
              {{ $op->name_es }}
            </option>
            @endforeach
          </select>
        </td>
        <td width="15%">Dormitorios</td>
        <td width="15%"><input class="form-control" value="{{ old('dormitorios', $inmueble->dormitorios ? $inmueble->dormitorios : 0) }}" name="dormitorios" type="number"></td>
        <td width="70%" rowspan="4">Características<br>
          <textarea name="caracteristicas_es" placeholder="característica" cols="" rows="6" class="form-control" required>{{ old('caracteristicas_es', $inmueble->caracteristicas_es) }}</textarea>
          <br><textarea name="caracteristicas_en" placeholder="feature" cols="" rows="6" class="form-control">{{ old('caracteristicas_en', $inmueble->caracteristicas_en) }}</textarea>
        </td>
      </tr>
      <tr>
        <td>Tipo</td>
        <td>
          <select class="form-control" name="categoria_id">
            <option value="0">Seleccionar</option>
            @foreach( $categorias as $cat )
            <option value="{{ $cat->id }}" {{ $cat->id == $inmueble->categoria_id ? 'selected' : '' }}>
            {{ $cat->name_es }}
            </option>
            @endforeach
          </select>
        </td>
        <td>Baños</td>
        <td><input class="form-control" value="{{ old('banos', $inmueble->banos ? $inmueble->banos : 0) }}" name="banos" type="number"></td>
      </tr>

    <tr>
      <td>Departamento/Ciudad</td>
      <td>
        <select name="departamento_ciudad" class="form-control">
        <option value="0">Paraguay</option>
        <optgroup label="Departamentos">
          @foreach ( $departamentos as $departamento )
            @php
              $selected = $inmueble->departamento_ciudad == $departamento->id ? "selected" : "";
            @endphp
            <option value="{{ $departamento->id }}" {{ $selected }}>{{ $departamento->nombre }}</option>
          @endforeach
        </optgroup>

        @foreach ( $departamentos as $departamento )
            <optgroup label="{{ $departamento->nombre }}">
            @foreach ( \App\Models\Paraguay::where("departamento_id", $departamento->id )->orderBy("nombre")->get() as $ciudad )
              @php
                $selected = $inmueble->departamento_ciudad == $ciudad->id ? "selected" : "";
              @endphp
              <option value="{{ $ciudad->id }}" {{ $selected }}>{{ $ciudad->nombre }}</option>
            @endforeach
            </optgroup>
        @endforeach

        </select>
      </td>
      <td>Área de servicio</td>
      <td><input name="area_de_servicio" type="number" class="form-control" id="area_de_servicio" value="{{ old('area_de_servicio', $inmueble->area_de_servicio ? $inmueble->area_de_servicio : 0) }}" /></td>
    </tr>

    <tr>
      <td>Zona</td>
      <td><input class="form-control" value="{{ $inmueble->zona }}" placeholder="ej.: Villamorra" name="zona" type="text" required></td>
      <td>Cochera</td>
      <td><input class="form-control" value="{{ old('cochera', $inmueble->cochera ? $inmueble->cochera : 0) }}" name="cochera" type="number"></td>
    </tr>
    <tr>
      <td>Superficie total</td>
      <td>
        <input class="form-control" value="{{ old('superficie_total', $inmueble->superficie_total ? $inmueble->superficie_total : 0) }}" name="superficie_total" type="number" required>
        <select name="medida_id" class="form-control">
          @foreach( $medidas as $medida )
          <option value="{{ $medida->id }}" {{ ifEcho($medida->id == $inmueble->medida_id, 'selected') }}>
          {{ $medida->name }}
          </option>
          @endforeach
        </select>

      </td>
      <td>Precio<br/></td>
      <td><input class="form-control numeric" value="{{ old('precio', $inmueble->precio ? $inmueble->precio : 0) }}" name="precio" type="number" />
        <select name="moneda_id" class="form-control">
          @foreach( $monedas as $moneda )
          <option value="{{ $moneda->id }}" {{ ifEcho($moneda->id == $inmueble->moneda_id, 'selected') }}>
            {{ $moneda->name }}
            </option>
          @endforeach
        </select>
      </td>
      <td width="70%" rowspan="3">
        Nota<br>
        <textarea name="nota_es" placeholder="nota en español" cols="" rows="4" class="form-control" required>{{ old('nota_es', $inmueble->nota_es) }}</textarea>
        <br><textarea name="nota_en" placeholder="note in english" cols="" rows="4" class="form-control">{{ old('nota_en', $inmueble->nota_en) }}</textarea>
      </td>
    </tr>
    <tr>
      <td>Área Construida</td>
      <td>
        <div class="container">
          <div class="row">
            <input class="form-control col-10 numeric" value="{{ old('area_construida', $inmueble->area_construida) }}" name="area_construida" type="number" />
            <div class="col-2">
              m<sup>2</sup>
            </div>
          </div>
        </div>
      </td>
      <td colspan="2" rowspan="2">
        @if (actionName() == "agregar" || ( Auth::user()->rol == 9 || $inmueble->agente_id == Auth::user()->id ))
        <span class="label label-important" title="Importante">Cliente:</span> Teléfonos | Dirección | Observaciones<br>
        <textarea name="cliente" cols="" rows="2" class="form-control" required id="cliente">{{ $inmueble->cliente }}</textarea>
        @endif
      </td>
    </tr>
    <tr>
      <td>Contacto</td>
      <td>
        <select class="form-control" name="agente_id" {{ Auth::user()->rol != 9 ? 'readonly' : '' }}?> >
          @foreach( $users as $cat )
            <option {{ ifEcho(Auth::user()->rol != 9 && Auth::user()->id != $cat->id, 'disabled') }} value="{{ $cat->id }}" {{ ifEcho(( actionName() == 'agregar' && Auth::user()->id == $cat->id ) || ( actionName() == "editar" && $cat->id == $inmueble->agente_id ), 'selected') }}>
              {{ $cat->name }}
            </option>
          @endforeach
        </select>
      </td>
    </tr>
    </table>
    

    <h3>FOTOS</h3>
    <!-- IMAGES -->
    <ul id="sortable">
    @php
      /**/
    @endphp
    @foreach( $fotos as $foto )
    <li class="input_image" id="photo{{ $foto->id }}">
      <a href="#myModal" onClick="toDelete({{ $foto->id }})" data-toggle="modal" title="Eliminar esta foto"><span class="icon-trash icon-white"></span></a>
      @php
        $src = "./images/inmuebles/ch/".$foto->id.".jpg";
        $src = is_file($src) ? $src : "";
      @endphp
      <img src="{{ $src }}" width="100" />
      <input type="hidden" name="fotos[]" value="{{ $foto->id }}">
      <input class="input_portada" type="radio" name="portada" value="{{ $foto->id }}" <?if( $foto->id == $inmueble->portada ){echo'checked';} }} title="Imagen para mostrar en la lista de búsquedas" />
    </li>
    @endforeach
    @php
      /**/
    @endphp
    </ul>

    <a class="input_image fff font72 center bold" style="text-decoration:none" title="Agregar Foto" href="javascript:;" id="addPhoto">
      +
    </a>

    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<div class="clear"></div>
<div class="control-group">
  <div class="form-actions">
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a class="btn" href="./admin/{{ controllerName() }}/">Cancelar</a>
  <a class="btn btn-danger pull-right" href="./admin/{{ controllerName() }}/eliminar/{{ $inmueble->id }}">Eliminar</a>
</div>
</div>

<script>

var to_delete;
var c = 0;
var abc = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","x","y","z"];

function toDelete ( id ) {
	to_delete = id;
	$("#img_to_delete").attr("src",'./images/inmuebles/'+id+'.jpg');
}

function readURL(input) {
  console.log(input)

	var img = $(input).parent().children();
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $(img).attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
  }
}

$(function () {

	$("#btnPhotoDelete").click(function(){
		$.post("./admin/inmuebles/editar/:INMUEBLE_ID",{photo:to_delete},function(){
			$("#photo"+to_delete).remove();
			$('#myModal').modal('hide');
		});
	});

	$("#btnCancelPhotoDelete").click(function(){
		to_delete = "";
		$("#img_to_delete").attr("src",'');
	});

	$('#myTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	})

	$('.numeric').numeric({ decimal : "." , negative : false });

	// SORT IMAGES
	$( "#sortable" ).sortable().disableSelection();


	$("input[type|='file']").change(function(){
		readURL(this);
	});

	$("#addPhoto").click(function(){
		$("#sortable").append('<li class="input_image">'+
			'<input type="hidden" name="fotos[]" value="'+abc[c]+'"><img src="" width="100" />'+
			'<a href="javascript:;" title="Eliminar esta foto" class="to_add"><span class="icon-trash icon-white"></span></a>'+
			'<input name="imagen[]" type="file"/>'+
			'<input class="input_portada" type="radio" value="'+abc[c]+'" name="portada" title="Imagen para mostrar en la lista de búsquedas" />'+
			'</li>');
		c++;
		$("li.input_image a.to_add").click(function(){
			$(this).parent().remove();
		});

		$("input[type|='file']").change(function(){
			readURL(this);
		});
	});
})
</script>