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
      @foreach($inmuebles as $_item )
      @php
        $c ++;
        $img = './images/inmuebles/ch/'.$_item['portada'].'.jpg';
        $image = is_file($img) ? $img : './images/inmuebles/nofound.jpg';
      @endphp
			<tr>
				<td>
					{{ $c }}
					@if ( !$_item->published )
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
						if( $_item->codigo )        $title[] = $_item->codigo;
						if( $_item->operacion )	    $title[] = $_item->operacion->name->es;
						if( $_item->categoria )	    $title[] = $_item->categoria->name_es;
						if( $_item->ciudad )		    $title[] = $_item->ciudad->nombre;
						if( $_item->zona )	        $title[] = $_item->zona;
					@endphp
          {{ implode(" | ", $title) }}
					</div>
					<div>
            <strong>Precio:</strong>
            {{ number_format($_item['precio'], 0, ',', '.') }} {{ $_item->moneda->name }}
          </div>
				<td>
				<a class="btn btn-success" href="./admin/MOD/editar/:ID?pdf"><span class="icon-download-alt"></span> PDF</a>
					<a href="./admin/MOD/editar/:ID" class="btn btn-primary"><span class="icon-edit"></span> Editar</a>
					<a href="./admin/MOD/eliminar/:ID" class="btn btn-danger"><span class="icon-trash"></span> Eliminar</a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
	
</div>