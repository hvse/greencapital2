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


<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#spanish">Español</a></li>
  <li><a href="#english">Inglés</a></li>
</ul>
  
<div class="tab-content">
  <div class="tab-pane active" id="spanish">
    <!-- INMUEBLES TABLA ESPANOL-->
    <table class="table table-bordered">
      <tr>
        <td width="10%"><input class="span12" placeholder="código" value="{{ $inmueble->codigo }}" required name="codigo" type="text" maxlength="6"></td>
        <td width="20%">
          <select class="span12" name="operacion_id" required>
            <option value="0">Operación</option>
            @foreach( $operaciones as $op )
            <option value="{{ $op->id }}" {{ ifEcho($op->id == $inmueble->operacion_id, 'selected') }}>
              {{ $op->name_es }}
            </option>
            @endforeach
          </select>
        </td>
        <td width="15%">Dormitorios</td>
        <td width="15%"><input class="span12" value="{{ $inmueble->dormitorios }}" name="dormitorios" type="number"></td>
        <td width="70%" rowspan="4">Características<br>
          <textarea name="caracteristicas_es" cols="" rows="6" class="span12" required>{{ $inmueble->caracteristicas_es }}</textarea>
        </td>
      </tr>
      <tr>
        <td>Tipo</td>
        <td>
          <select class="span12" name="categoria_id">
            <option value="0">Seleccionar</option>
            @foreach( $categorias as $cat )
            <option value="{{ $cat->id }}" {{ $cat->id == $inmueble->categoria_id ? 'selected' : '' }}>
            {{ $cat->name_es }}
            </option>
            @endforeach
          </select>
        </td>
        <td>Baños</td>
        <td><input class="span12" value="{{ $inmueble->banos }}" name="banos" type="number"></td>
      </tr>

    <tr>
      <td>Departamento/Ciudad</td>
      <td>
        <select name="departamento_ciudad" class="span12">
        <option value="0">Paraguay</option>
        <optgroup label="Departamentos">
          @foreach ( $departamentos as $departamento )
            @php
              $selected = $inmueble->departamento_ciudad == $departamento->id ? "selected" : "";
            @endphp
            <option value="{{ $departamento->id }}" {{ $selected }}>{{ utf8_encode($departamento->nombre) }}</option>
          @endforeach
        </optgroup>

        @foreach ( $departamentos as $departamento )
            <optgroup label="{{ utf8_encode($departamento->nombre) }}">
            @foreach ( \App\Models\Paraguay::find( "all", array( "conditions" => array( "departamento_id=?", $departamento->id ), "order" => "nombre" ) ) as $ciudad )
              @php
                $selected = $inmueble->departamento_ciudad == $ciudad->id ? "selected" : "";
              @endphp
              <option value="{{ $ciudad->id }}" {{ $selected }}>{{ utf8_encode($ciudad->nombre) }}</option>
            @endforeach
            </optgroup>
        @endforeach

        </select>
      </td>
      <td>Área de servicio</td>
      <td><input name="area_de_servicio" type="number" class="span12" id="area_de_servicio" value="{{ $inmueble->area_de_servicio }}" /></td>
    </tr>

    <tr>
      <td>Zona</td>
      <td><input class="span12" value="{{ $inmueble->zona }}" name="zona" type="text" required></td>
      <td>Cochera</td>
      <td><input class="span12" value="{{ $inmueble->cochera }}" name="cochera" type="number"></td>
    </tr>
    <tr>
      <td>Superficie total</td>
      <td>
        <input class="span7" value="{{ $inmueble->superficie_total }}" name="superficie_total" type="number" required>
        <select name="medida_id" class="span4">
          @foreach( $medidas as $medida )
          <option value="{{ $medida->id }}" {{ ifEcho($medida->id == $inmueble->medida_id, 'selected') }}>
          {{ $medida->name }}
          </option>
          @endforeach
        </select>

      </td>
      <td>Precio<br/></td>
      <td><input class="span7 numeric" value="{{ $inmueble->precio }}" name="precio" type="number" />
        <select name="moneda_id" class="span4">
          @foreach( $monedas as $moneda )
          <option value="{{ $moneda->id }}" {{ ifEcho($moneda->id == $inmueble->moneda_id, 'selected') }}>
            {{ $moneda->name }}
            </option>
          @endforeach
        </select>
      </td>
      <td width="70%" rowspan="3">
        Nota<br>
        <textarea name="nota_es" cols="" rows="4" class="span12" required>{{ $inmueble->nota_es }}</textarea>
      </td>
    </tr>
    <tr>
      <td>Área Construida</td>
      <td>
        <input class="span7 numeric" value="{{ $inmueble->area_construida }}" name="area_construida" type="number" />
        m<sup>2</sup></td>
      <td colspan="2" rowspan="2">
        @if (actionName() == "agregar" || ( Auth::user()->rol == 9 || $inmueble->agente_id == Auth::user()->id ))
        <span class="label label-important" title="Importante">Cliente:</span> Teléfonos | Dirección | Observaciones<br>
        <textarea name="cliente" cols="" rows="2" class="span12" required id="cliente">{{ $inmueble->cliente }}</textarea>
        @endif
      </td>
    </tr>
    <tr>
      <td>Contacto</td>
      <td>
        <select class="span12" name="agente_id" {{ Auth::user()->rol != 9 ? 'readonly' : '' }}?> >
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
      <img src="{{ $src }}" />
      <input type="hidden" name="fotos[]" value="{{ $foto->id }}">
      <input class="input_portada" type="radio" name="portada" value="{{ $foto->id }}" <?if( $foto->id == $inmueble->portada ){echo'checked';} }} title="Imagen para mostrar en la lista de búsquedas" />
    </li>
    @endforeach
    @php
      /**/
    @endphp
    </ul>

    <a class="input_image fff font72 center bold" style="text-decoration:none" title="Agregar Foto" href="javascript:;" id="addPhoto">
      <div class="height30"></div>
      +
    </a>

    <div class="clear"></div>
  </div>
  <div class="tab-pane" id="english">
    Características<br><textarea name="caracteristicas_en" cols="" rows="6" class="span12">{{ $inmueble->caracteristicas_en }}</textarea>
    Nota<br><textarea name="nota_en" cols="" rows="4" class="span12">{{ $inmueble->nota_en }}</textarea>
  </div>
</div>

<div class="control-group">
  <div class="form-actions">
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a class="btn" href="./admin/{{ controllerName() }}/">Cancelar</a>
  <a class="btn btn-danger pull-right" href="./admin/{{ controllerName() }}/eliminar/{{ $inmueble->id }}">Eliminar</a>
</div>
</div>