@extends('layouts.sitio')

@section('content')
<div class="row">
	<div class="col-md-8">
		{{-- <!-- <div class="font20"><?=count($this->items)?> Resultados encontrados</div> --> --}}
		<div class="height10"></div>
    @php
      $c = 0;
      
      if ( isset($_GET['categoria_id']) ) {
			  $inmuebles = \App\Models\Inmueble::searchAll();
      }else{
        $inmuebles = \App\Models\Inmueble::getAll();
      }
    @endphp
		@foreach ( $inmuebles as $i )
      @php
        $c++
      @endphp
			<div class="{{$c%2 ? 'bgGris5' : 'bgf5f5f5' }} padd5 inmuebles_list_box">
				<a href="/MOD/ACC/detalle/$i->id" class="color_gris" title="Click para ver más">
					@php
					  $src="/images/inmuebles/ch/".$i->portada.".jpg";
            
          @endphp
					@if(is_file(public_path($src))) 
					<div class="left width100 height75" style="background:#666 url({{ $src }}) center center no-repeat; background-size:100%;"></div>
					@else
					<div class="left width100 height75" style="background:#666 url('/images/inmuebles/nofound.jpg') top center no-repeat; background-size:100%;"></div>
					@endif
					<div class="left hegiht100" style="width:532px; padding-left:5px;">
						@php
							$title = array();
							if( $i->operacion_es )	$title[] = $i->operacion_es;
							if( $i->categoria_es )	$title[] = $i->categoria_es;
							if( $i->ciudad )		$title[] = str_replace(array("á","é","í","ó","ú"),array("Á","É","Í","Ó","Ú"),strtoupper($i->ciudad));
							if( $i->zona )	$title[] = $i->zona;
							$sold = $i->sold ? '<span style="background-color: deepskyblue;" class="label label-info pull-right">Vendido</span>' : "";
            @endphp
						<div class="font20 uppercase">{{ $sold.implode(" | ",$title) }}</div>
						<div class="height5"></div>
						<div class="right">Ver más</div>
						<div>Código: <b>{{ $i->codigo }}</b> | Superficie Total: <b>{{ number_format($i->superficie_total, 0, ',', '.') }}</b> {{ $i->medida }}</div>
						<div class="height5"></div>
						<span class="right">  {{ $i->moneda }} <b>{{ number_format($i->precio, 0, ',', '.') }}</b></span>
						<div>
            @php
              $datos3 = array();
							if($i->dormitorios) {
								$datos3[] = 'Dormitorios: <b>'.$i->dormitorios.'</b>'; 
							} if($i->banos) { 
								$datos3[] = 'Baños: <b>'.$i->banos.'</b>';
							} if($i->area_de_servicio) {
								'Área de servicios: <b>'.$i->area_de_servicio.'</b>';
							} /*if($i->cochera) {
								$datos3[] = 'Cochera: <b>'.$i->cochera.'</b>';
							}*/ if($datos3){}
            @endphp
            {!! implode(" | ",$datos3) !!}
						</div>
					</div>
					<div class="clear"></div>
				</a>
			</div>
			<div class="height5"></div>
		@endforeach
	</div>

	<!-- BUSCADOR -->
	<div class="col-md-4">
		<div class="height10"></div>
		<div class="bgGris3 redondeado6">
			<div class="padd5">
				<form method="get" action="" class="">
          <div class="container">
            <div class="row">
              <input type="text" name="codigo" placeholder="código" class="col-md-6 form-control" value="{{ request()->get('codigo') }}" />
              <select class="col-md-6 form-control" style="width:152px" name="operacion_id">
                <option value="0">Condición</option>
                @foreach( \App\Models\Operacion::all() as $op )
                <option value="{{ $op->id }}" {{ $op->id == request()->get('operacion_id') ? 'selected' : '' }} >
                  {{ $op->name_es }}
                </option>
                @endforeach
              </select>
            </div>
          </div>

					<select class="col-md-12 form-control" name="categoria_id">
					  <option value="0">Tipo de inmueble</option>
					  @foreach( \App\Models\Categoria::all() as $cat )
					  <option value="{{ $cat->id }}" {{ $cat->id == request()->get('categoria_id') ? 'selected' : '' }} >
						{{ $cat->name_es }}
						</option>
					  @endforeach
					</select>

					<select name="departamento_ciudad" class="col-md-12 form-control">
						<option value="0">Paraguay</option>
						<optgroup label="Departamentos">
							@php
							$departamentos = \App\Models\Paraguay::where("departamento_id", 0)->orderBy("nombre");
              @endphp
							@foreach ( $departamentos as $departamento )
                @php
								$selected = request()->get('departamento_ciudad') == $departamento->id ? "selected" : "";
                @endphp
								<option value="{{ $departamento->id }}" {{ $selected }}>{{ $departamento->nombre }}</option>
							@endforeach
						</optgroup>

						@foreach ( $departamentos as $departamento )
								<optgroup label="{{ $departamento->nombre }}">
								@foreach ( \App\Models\Paraguay::where('departamento_id', $departamento->id )->order("nombre") as $ciudad )
									@php
                    $selected = request()->get('departamento_ciudad') == $ciudad->id ? "selected" : "";
                  @endphp
									<option value="{{ $ciudad->id }}" {{ $selected }}>{{ $ciudad->nombre }}</option>
								@endforeach
								</optgroup>
						@endforeach

					</select>

          @php
            if ( request()->get('precio_hasta') && is_numeric(request()->get('precio_hasta')) ) {
              $precio_hasta = request()->get('precio_hasta');
            }else{
              //$precio_mayor = Inmuebles::find_by_sql("SELECT moneda_id, precio FROM inmuebles ORDER BY precio DESC LIMIT 1");
              $precio_hasta = ""; //$precio_mayor[0]->precio;
            }

            if ( request()->get('precio_desde') && is_numeric(request()->get('precio_desde')) ) {
              $precio_desde = request()->get('precio_desde');
            }else{
              $precio_desde = ""; //0;
            }
          @endphp
					<div class="">
						<div class="fff">Precio:</div>
            <div class="container">
              <div class="row">
                <input type="number" name="precio_desde" placeholder="desde" class="col-md-4 form-control" value="{{ $precio_desde }}" />
                <input type="number" name="precio_hasta" placeholder="hasta" class="col-md-4 form-control" value="{{ $precio_hasta }}" />
                <select name="moneda_id" class="col-md-4 form-control" style="width:104px">
                  <option value="0">Todas</option>
                  @foreach( \App\Models\Moneda::all() as $moneda )
                  <option value="{{ $moneda->id }}" {{ $moneda->id == request()->get('moneda_id') ? 'selected' : '' }} >
                    {{ $moneda->name }}
                  </option>
                  @endforeach
                </select>
              </div>
            </div>
					</div>

          @php
            if ( request()->get('superficie_hasta') && is_numeric(request()->get('superficie_hasta')) ) {
              $superficie_hasta = request()->get('superficie_hasta');
            }else{
              //$superficie = Inmuebles::find_by_sql("SELECT medida_id, superficie_total FROM inmuebles ORDER BY superficie_total DESC LIMIT 1");
              $superficie_hasta = ""; //$superficie[0]->superficie_total;
            }

            if ( request()->get('superficie_desde') && is_numeric(request()->get('superficie_desde')) ) {
              $superficie_desde = request()->get('superficie_desde');
            }else{
              $superficie_desde = ""; //0;
            }
          @endphp
					<div class="">
						<div class="fff">Superficie Total:</div>
            <div class="container">
              <div class="row">
                <input type="number" name="superficie_desde" placeholder="desde" class="col-md-4 form-control" value="{{ $superficie_desde }}" />
                <input type="number" name="superficie_hasta" placeholder="hasta" class="col-md-4 form-control" value="{{ $superficie_hasta }}" />
                <select name="medida_id" class="col-md-4 form-control" style="width:104px">
                  <option value="0">Todas</option>
                  @foreach( \App\Models\Medida::all() as $medida )
                  <option value="{{ $medida->id }}" {{ $medida->id == request()->get('medida_id') ? 'selected' : '' }} >
                    {{ $medida->name }}
                  </option>
                  @endforeach
                </select>
              </div>
            </div>
					</div>

					<div class="center">
						<div class="height15"></div>
						<button class="btn btn-info" type="submit">Buscar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection