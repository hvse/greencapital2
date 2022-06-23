@extends('layouts.sitio')

@section('content')
<div class=" font18">
	<div class="w65pc left">
		<div class="height7"></div>
		<div class="color_celeste padd5 font32">APERTURAS / NACIONALIZACIÓN DE EMPRESAS</div>
		<div class="subrayado"></div>
		<div class="height5"></div>
		<p class="">Para invertir, trasladar o abrir una empresa en Paraguay, podrá contar con asistencia legal:</p>
		
		<br>
		<p>Asesoramiento Jurídico en General.<br>
		Área Laboral.<br>
		Área Societaria y Empresarial.<br>
		Área Judicial.<br>
		Propiedad Intelectual.<br>
		Derecho Marcario.<br>
		Patentes.
		</p>
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
