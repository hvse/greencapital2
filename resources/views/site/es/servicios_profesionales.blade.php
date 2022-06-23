@extends('layouts.sitio')

@section('content')
<div class=" font18">
	<div class="w65pc left">
		<div class="height7"></div>
		<div class="color_celeste padd5 font32">CONSULTORIA</div>
		<div class="subrayado"></div>
		<div class="height5"></div>
		<p class="">GREEN CAPITAL cuenta con diferentes servicios profesionales a través de los cuales el cliente obtendrá el asesoramiento correspondiente.</p>
		
		<br>
		<p>La empresa cuenta con aliados profesionales calificados como: Arquitectos, Contadores, Consultores patrimoniales de activos/fijos, Consultores empresariales, Despachantes de Aduanas, Escribanos, Traductores, Tasadores y Abogados.</p>
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
