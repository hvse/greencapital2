@extends('layouts.sitio')

@section('content')
<div class=" font18">
	<div class="w65pc left">
		<div class="height7"></div>
		<div class="color_celeste padd5 font32">MERCADO INMOBILIARIO</div>
		<div class="subrayado"></div>
		<p class="">GREEN CAPITAL posee una cartera de propiedades urbanas y rurales, además provee opciones de participación en nuevos y existentes desarrollos inmobiliarios, negocios de renta comercial, residencial y corporativa.</p>
		<p class="">La empresa facilita informaciones referentes al mercado inmobiliario del país, sus regulaciones y zonificaciones para su mejor inversión comercial, residencial o corporativa.</p>
		<p><a href="./es/inmuebles">PROPIEDADES</a></p>
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
