@extends('layouts.site')

@section('content')
<div class="bgGreen ">
	<div class="slider-wrapper theme-default w82pc auto">
		<div id="slider" class="nivoSlider">
			<img src="{{ asset('images/banner/en/home_banner7.png') }}" title="#bann7"/>
			<img src="{{ asset('images/banner/en/home_banner1.png') }}" title="#bann1"/>
			<img src="{{ asset('images/banner/en/home_banner2.png') }}" title="#bann2"/>
			<img src="{{ asset('images/banner/en/home_banner3.png') }}" title="#bann3"/>
			<img src="{{ asset('images/banner/en/home_banner4.png') }}" title="#bann4"/>
			<img src="{{ asset('images/banner/en/home_banner5.png') }}" title="#bann5"/>
			<img src="{{ asset('images/banner/en/home_banner6.png') }}" title="#bann6"/>
		</div>
		<div id="bann1" class="nivo-caption font30 tx_left sombra-texto">
			<div class="height130"></div>
			Paraguay has one of the greenest capitals<br> in the world.
		</div>
		<div id="bann2" class="nivo-caption font30 tx_left sombra-texto">
			It’s been the most economically stable country in Latin<br> America for 60 years.
		</div>
		<div id="bann3" class="nivo-caption font30 tx_left sombra-texto">
			It is the largest net exporter of electricity<br> in the world.
		</div>
		<div id="bann4" class="nivo-caption font30 tx_left sombra-texto">
			<div class="height125"></div>
			It has plenty of fertile land for<br> agriculture and livestock.
		</div>
		<div id="bann5" class="nivo-caption font30 tx_left sombra-texto">
			It has one of the largest fresh water<br> reserves in the world.
		</div>
		<div id="bann6" class="nivo-caption font30 tx_left sombra-texto">
			It is the fifth largest<br> exporter of beef.
		</div>
		<div id="bann7" class="nivo-caption font30 tx_left sombra-texto">
			Invest in Paraguay
		</div>
	</div>
</div>


<div class="center font62 colorGris2 harabarahand">Welcome!</div>

<hr class="margin0" />
<div class="font20 padd30 center">
	<div class="colorGreen">GREEN CAPITAL IS A COMPANY THAT PROVIDES BUSINESS SOLUTIONS IN PARAGUAY.</div>
</div>
<hr class="margin0" />

<div class="height75"></div>

<div class="">
	<div class="w33pc left pie_bann_height" style="background:#d7d7d7;">
		<a href="en/conoce_paraguay">
			<div class="padd10 left">
				<img src="{{ asset('images/bann_pie_paraguay.png') }}" id="mapa_paraguay" class="opacity0" />
			</div>
			<div class="left w70pc center">
				<div class="height3"></div>
				<div class="color_azul_paraguay font26 height22 opacity0" id="tx1">Get to know</div>
				<div class="color_azul_paraguay font46 height46 opacity0" id="tx2">PARAGUAY</div>
				<div class="fff font18 opacity0" id="tx3">the heart of South America</div>
			</div>
			<div class="clear"></div>
		</a>
	</div>
	<div class="left" style="width:334px; border-left:#c7c7c7 1px solid; border-right:#c7c7c7 1px solid; background:#d7d7d7; height:105px;">
		<div class="left w70pc center">
			<div class="height5"></div>
			<div class="font22 center ">TODAY IN ASUNCIÓN</div>
			<div class="center">condicion</div>
			<div><img src="ico"></div>
		</div>
		<div class="left w30pc center">
			<div class="height10"></div>
			<div>Máx<br> <span class="font18">max °C</span></div>
			<div>Mín<br> <span class="font18">min °C</span></div>
		</div>
		<div class="clear"></div>
		<!-- http://www.tiempo.com/widget/ -->
		<!-- <div style="padding-left: 22px; padding-top: 9px;">
			<div id="cont_60070b704c11bcedbf174ecbeda41070">
			  <span id="h_60070b704c11bcedbf174ecbeda41070">El Tiempo en Asunci&oacute;n</span>
			  <script type="text/javascript" src="http://www.tiempo.com/wid_loader/60070b704c11bcedbf174ecbeda41070"></script>
			</div>
		</div> -->
	</div>
	<div class="w33pc left" style="background:#d7d7d7;">
		<a href="https://www.maxicambios.com.py/" target= "_blank"><img src="{{ asset('images/bann_pie_home3_en.png') }}" /></a>
	</div>
	<div class="clear"></div>
</div>

<div class="height35"></div>

<script type="text/javascript" src="{{ asset('nivo_slider/jquery.nivo.slider.js') }}"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		controlNav:false,
		effect:'fade'
		});
});
</script>

<script type="text/javascript">
<!--
	function animar() {
		$("#mapa_paraguay").animate({
			opacity:'1'
		}, 1000, function() {
			// Animation complete.
			$("#tx1").animate({
				opacity:'1'
			}, 1000, function() {
				// Animation complete.
				$("#tx2").animate({
				opacity:'1'
				}, 1000, function() {
					// Animation complete.
					$("#tx3").animate({
						opacity:'1'
					}, 1000, function() {
						// Animation complete.
						$("#tx3").animate({
							opacity:'1'
						}, 3000, function() {
							// Animation complete.
							$("#tx3").animate({
								opacity:'0'
							}, 1000, function() {
								// Animation complete.
								$("#tx2").animate({
									opacity:'0'
								}, 1000, function() {
									// Animation complete.
									$("#tx1").animate({
										opacity:'0'
									}, 1000, function() {
										// Animation complete.
										$("#mapa_paraguay").animate({
											opacity:'0'
										}, 1000, function() {
											// Animation complete.
											setTimeout("animar()",100);
										});
									});
								});
							});
						});
					});
				});
			});
		});
	}

	$(function(){
		animar();
	});
//-->
</script>
@endsection
