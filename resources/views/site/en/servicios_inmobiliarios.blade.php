@extends('layouts.site')

@section('content')
<div class=" font18">
	<div class="w65pc left">
		<div class="height7"></div>
		<div class="color_celeste padd5 font32">REAL ESTATE MARKET</div>
		<div class="subrayado"></div>
		<div class="height5"></div>
		<p class="">GREEN CAPITAL has a portfolio of urban and rural properties; additionally, it provides opportunities to participate in new and existing real estate development, businesses of commercial, residential and corporate revenue.</p>
		<br>
		<p>The company provides information concerning the real estate market in the country, its regulations and zoning for best commercial, residential and corporate investment.</p>
		{{-- <p><a href="./<?=MOD?>/inmuebles">PROPERTIES</a></p> --}}
	</div>
	<div class="w35pc left center">
		<div class="width200 auto">
			<img src="{{ asset('images/logo_servicios.png') }}" >
			<span class="servicios_volver"></span>
		</div>
	</div>
	<div class="clear"></div>
</div>
@endsection
