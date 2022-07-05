<div class="tab-content">
	
	<div class="tab-pane active" id="agente_1">
		<table class="table table-striped table-hover">
			<tr>
				<th>#</th>
				<th width="100">Image</th>
				<th>Descripción</th>
				<th width="100">Acción</th>
			</tr>
			@php
        $c = 0;
      @endphp
      @foreach($inmuebles as $inmueble )
      @php
        $c ++;
        $img = '/images/inmuebles/ch/'.$inmueble->portada.'.jpg';
        $absolutePath = public_path('/images/inmuebles/ch/'.$inmueble->portada.'.jpg');
        $image = is_file($absolutePath) ? $img : './images/inmuebles/nofound.jpg';
      @endphp
			<tr>
				<td>
					{{ $c }}
					@if ( !$inmueble->published )
            <br><span class="label label-important" title="No publicado"><span class="icon-ban-circle icon-white"></span></span>
          @endif
				</td>
				<td>
					<div class="width100"><img src="{{ $image }}" /></div>
				</td>
				<td>
					<div class="font18 uppercase">
					@php
						$title = array();
						if( $inmueble->codigo )        $title[] = $inmueble->codigo;
						if( $inmueble->operacion )	    $title[] = $inmueble->operacion->name->es;
						if( $inmueble->categoria )	    $title[] = $inmueble->categoria->name_es;
						if( $inmueble->ciudad )		    $title[] = $inmueble->ciudad->nombre;
						if( $inmueble->zona )	        $title[] = $inmueble->zona;
					@endphp
          {{ implode(" | ", $title) }}
					</div>
					<div>
            <strong>Precio:</strong>
            {{ number_format($inmueble['precio'], 0, ',', '.') }} {{ $inmueble->moneda->name }}
          </div>
				<td>
				{{-- <a class="btn btn-success" href="./admin/MOD/editar/:ID?pdf"><span class="icon-download-alt"></span> PDF</a> --}}
					<a href="{{ route('inmuebles.edit', $inmueble) }}" class="btn btn-primary"><span class="icon-edit"></span> Editar</a>
					{{-- <a href="./admin/MOD/eliminar/:ID" class="btn btn-danger"><span class="icon-trash"></span> Eliminar</a> --}}
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	
</div>