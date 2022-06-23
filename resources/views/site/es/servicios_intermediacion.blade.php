@extends('layouts.sitio')

@section('content')
<div class=" font18">
	<div class="w65pc left">
		<div class="height7"></div>
		<div class="color_celeste padd5 font32">INVERSIONES</div>
		<div class="subrayado"></div>
		<div class="height5"></div>
		<p class="">GREEN CAPITAL  facilita las inversiones en Paraguay, realizamos las gestiones de búsqueda  de las opciones de inversión de mayor rentabilidad en diversos mercados. Facilitamos la llegada de los capitales y la salida al exterior de sus retornos.</p>
		<p>Acompañamos a su inversión y en conjunto con nuestros aliados comerciales, legales y  proveedores garantizamos que su inversión sea segura a través nuestro.</p>
		<br>
		<h4>PROYECTOS DE INVERSION</h4>
		<p>Mercado Inmobiliario: Compra, Venta, Arrendamientos.</p>
		<p>Loteamientos: Compra de proyectos inmobiliarios (Urbanización).</p>
		<p>Inversión sostenible consistente en recepción de flujos de proyectos urbanos desarrollados y totalmente vendidos.</p>
		<br>
		<!-- <h4>COMPRA-VENTA</h4>
		<p>Productos de consumo masivo.</p>
		<p>Productos industriales.</p> -->
	</div>
	<div class="w35pc left center">
		<div class="width200 auto">
			<img src="{{ asset('images/logo_servicios.png') }}" >
			<span class="servicios_volver"></span>
		</div>
		{{-- <!-- <a href="./<?=MOD?>/servicios" class="servicios_volver">SERVICIOS<img src="images/btn_volver.png" ></a> --> --}}
	</div>
	<div class="clear"></div>
</div>
@endsection
