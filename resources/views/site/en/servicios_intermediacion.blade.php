@extends('layouts.site')

@section('content')
<div class=" font18">
	<div class="w65pc left">
		<div class="height7"></div>
		<div class="color_celeste padd5 font32">INVESTMENTS</div>
		<div class="subrayado"></div>
		<div class="height5"></div>
		<p class="">GREEN CAPITAL facilitates and accompanies processes for the concretion of investments in Paraguay. It has options of investment projects of high profitability and works in conjunction with business, legal and commercial allies to ensure investments.</p>
		<br>
		<h4>INVESTMENT PROJECTS</h4>
		<p>Real Estate market: purchase, sale and lease initiatives.</p>
		<p>Purchasing of real estate projects (urbanization).</p>
		<p>Sustainable investment consisting of urban projects developed and sold out.</p>
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
