@extends('layouts.sitio')

@section('content')
<div class=" font18">
	<div class="w65pc left">
		<div class="height7"></div>
		<div class="color_celeste padd5 font32">COMMODITIES</div>
		<div class="subrayado"></div>
		<div class="height5"></div>
		<p class="">GREEN CAPITAL es agente de compañías exportadoras, basadas en décadas de experiencia en el campo agroindustrial y otros. Se encarga de facilitar los procesos de negociaciones con el objetivo de que el resultado sea ganar-ganar, ofreciendo productos de alta calidad para atender las necesidades del competitivo mercado global.</p>
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
