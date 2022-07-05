@extends('layouts.sitio')

@section('content')

@php
switch ( $inmueble->moneda_id ) {
	case '1': // GS
		$precio = number_format($inmueble->precio, 0, ',', '.');
		break;
	case '2': // USD
		$precio = number_format($inmueble->precio, 0, ',', '.');
		break;
}	
@endphp

<div class="font30 color_666 uppercase">
	@php
		$title = array();
		if( $inmueble->codigo )		$title[] = $inmueble->codigo;
		if( $inmueble->operacion_es )	$title[] = $inmueble->operacion_es;
		if( $inmueble->categoria_es )	$title[] = $inmueble->categoria_es;
		if( $inmueble->ciudad )		$title[] = $inmueble->ciudad->nombre;
		if( $inmueble->zona )			$title[] = $inmueble->zona;
	@endphp
	{{ implode(" | ",$title) }}
</div>
<div class="height20"></div>

@if ( is_file(public_path("/images/inmuebles/".$inmueble->portada.".jpg")) )

	<script type="text/javascript" src="/js/jssor.core.js"></script>
	<script type="text/javascript" src="/js/jssor.utils.js"></script>
	<script type="text/javascript" src="/js/jssor.slider.js"></script>
	<script type="text/javascript" src="/js/inmuebles.js"></script>

	<!-- Jssor Slider Begin -->
	<!-- You can move inline styles (except 'top', 'left', 'width' and 'height') to css file or css block. -->
<div style="width:660px; float:left;">
	<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 960px;
		height: 480px; background: #666; overflow: hidden;">

		<!-- Loading Screen -->
		<div u="loading" style="position: absolute; top: 0px; left: 0px;">
			<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
				background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
			</div>
			<div style="position: absolute; display: block; background: url(/images/loading.gif) no-repeat center center;
				top: 0px; left: 0px;width: 100%;height:100%;">
			</div>
		</div>

		<!-- Slides Container -->
		<div u="slides" style="cursor: move; position: absolute; left: 240px; top: 0px; width: 720px; height: 480px; overflow: hidden;">
			@foreach ( $inmueble->fotos as $foto )
				@if ( is_file(public_path("/images/inmuebles/ch/".$foto->id.".jpg")) )
					<div>
						<img u="image" src="/images/inmuebles/{{ $foto->id }}.jpg" />
						<img u="thumb" src="/images/inmuebles/ch/{{ $foto->id }}.jpg" />
					</div>
				@endif
			@endforeach
		</div>
		<!-- Arrow Left -->
		<span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 248px;">
		</span>
		<!-- Arrow Right -->
		<span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
		</span>
		<!-- Arrow Navigator Skin End -->
		
		<!-- Thumbnail Navigator Skin 02 Begin -->
		<div u="thumbnavigator" class="jssort02" style="position: absolute; width: 240px; height: 480px; left:0px; bottom: 0px;">
		
			<div u="slides" style="cursor: move;">
				<div u="prototype" class="p" style="position: absolute; width: 99px; height: 66px; top: 0; left: 0;">
					<div class=w><thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate></div>
					<div class=c>
					</div>
				</div>
			</div>
			<!-- Thumbnail Item Skin End -->
		</div>
	</div>
</div>
	<!-- Jssor Slider End -->
@else
	<div style="width: 660px; height: 334px; background: #ddd url(/images/logo_servicios.png) bottom center no-repeat; background-size:30%; float:left;"></div>
@endif
<div style="width:330px; float:left;">
	<div style="margin-left:5px">
		<table class="table table-bordered">
			<tr height="55">
				<td>Departamento / Ciudad</td>
				<td class="bgGris3 fff">{{ $inmueble->ciudad->nombre }}</td>
				<td>Dormitorios</td>
				<td class="bgGris3 fff">{{ $inmueble->dormitorios }}</td>
			</tr>
			<tr height="55">
				<td>Zona</td>
				<td class="bgGris2 fff">{{ $inmueble->zona }}</td>
				<td>Baños</td>
				<td class="bgGris2 fff">{{ $inmueble->banos }}</td>
			</tr>
			<tr height="55">
				<td>Superficie total</td>
				<td class="bgGris3 fff">{{ number_format($inmueble->superficie_total, 0, ',', '.') }}
					{{ $inmueble->medida->name }}</td>
				<td>Area de servicio</td>
				<td class="bgGris3 fff">{{ $inmueble->area_de_servicio }}</td>
			</tr>
			<tr height="55">
				<td>Area construida</td>
				<td class="bgGris2 fff">{{ number_format($inmueble->area_construida, 0, ',', '.') }}
					m<sup>2</sup></td>
				<td>Cochera</td>
				<td class="bgGris2 fff">{{ $inmueble->cochera }}</td>
			</tr>
			<tr height="55">
				<td></td>
				<td colspan="3" class="bgGris3 fff">{{ $inmueble->moneda->name }} {{ $precio }}</td>
			</tr>
		</table>
		
		
	</div>
</div>
<div class="clear"></div>

<div class="height20"></div>
<div style="width:660px" class="left ">
	<b>Descripciones:</b>
	<div class="bgGris3 redondeado6 padd10 fff">
		{{ str_replace(array("\n"),array("<br>"),$inmueble->caracteristicas_es) }}
	</div>
</div>

<div style="width:330px" class="left">
	<b>Nota:</b>
	<div class=" rounded_right6 padd10 ">
		{{ str_replace(array("\n"),array("<br>"),$inmueble->nota_es) }}
	</div>
	
	{{--
	<div class="redondeado6">
		<div class="padd5">
			<b>Contacto</b> <br>
			Email: <a href="mailto:<?=$inmueble->agente_email?>"  title="<?=$inmueble->agente_name?>"><?=$inmueble->agente_email?></a><br>
			Tel: <?=$inmueble->agente_phone?>
		</div>
	</div>
	--}}
</div>
<div class="clear"></div>

@endsection