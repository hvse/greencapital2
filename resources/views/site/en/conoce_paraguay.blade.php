@extends('layouts.site')

@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="shortcut icon" href="{{ asset('favicon.png') }}" />

	<title>{{ config('app.name', 'GreenCapital') }}</title>
	
    <!-- Bootstrap -->
    <link href="{{ asset('./css/site.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('./customScrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" media="screen">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&subset=latin,latin-ext,vietnamese' rel='stylesheet' type='text/css'>
	
</head>

<body>

<div class="baseWidth auto bg_gris_paraguay">

<!-- ini content -->

<div class="padd20">
	<a href="{{ route('home') }}" title="Volver al inicio"><div class="paraguay_banner"> 
		<div style="line-height: 1.2">
			<span id="texto1" style="opacity:0;left:200px" class="font100 fff relative">Learn more about </span>
			<span id="texto2" style="opacity:0;left:200px; font-size:150px" class=" fff relative">PARAGUAY </span>
		</div>
	</div></a>
	<div class="w70pc left">
		<div class="padd20 padding-left0 padding-bottom0">
			<a href="https://www.distance.to/" target="_blank">
				<div class="font39 paraguay_distancia_banner">
					<div class="height12"></div>
					<span class="color_mostaza	opacity0 relative" id="texto_distancia">Distances between countries</span>
				</div>
			</a>
		</div>
		<div class="padd20 padding-left0 padding-bottom0">
			<div class="padd20 bg_mostaza redondeado10">
				<div class="font32">TAXES</div>
				<p>A 10% non-recoverable VAT is charged on all goods and services in Paraguay. It will be included in the price of restaurant menus and added to your hotel bill.</p>
				<p>In the best restaurants is appropriate to tip 10%. In more modest ones you can leave a few thousands Guarani. You can round the taxi fare to give a small tip to the driver. The porters, waiters and maids always expect a small tip of a few thousands Guarani.</p>
				<p>Airport departure tax is $ 18.</p>
			</div>
		</div>
		<div class="padd20 padding-left0 padding-bottom0">
			<div class="fff font22 center">Paraguay possesses unique traditions as a heritage of the fusion between Guarani and Hispanic cultures.</div>
			<div class="height20"></div>
			<img src="{{ asset('/images/conoce_paraguay/tradicion.png') }}">
			<!-- <div class="font45 recomendado">
				<div class="height30"></div>
				<span class="color_mostaza relative opacity0" id="texto_recomendados">RECOMMENDED PLACES</span>
			</div> -->
		</div>
	</div>
	<div class="w30pc left">
		<div class="height20"></div>
		<div class="redondeado10 bg_fff">
			<div class="padd20">
				<div class="">
					<div class="font27 center">
						OFFICIAL DATA
					</div>
					<div id="scrolable">
						<p><b>Official State name</b>: República del Paraguay.</p>
						<p><b>Capital</b>: Asunción</p>
						<p><b>Population</b>: 6.600.000 habitantes.</p>
						<p><b>Language</b>: Spanish and Guarani.</p>
						<p><b>Head of State and President of the Government</b>: Horacio Cartes.</p>
						<p><b>area</b>: Paraguay is spread over an area of approximately 406,000 km ² and neighboring with Argentina, Bolivia and Brazil.</p>
						<p><b>Currency</b>: Guarani (<b>code</b>: PYG, <b>symbol</b>: G.)</p>
						<p><b>Time difference between Paraguay and UTC / GMT (London)</b>: -4 hours.</p>
						<p><b>Prefix for calls from outside Paraguay: +595.</b>: +595.</p>
						<p><b>Voltage</b>: 220 Volts, 50 cycles.</p>
						<p><b>Paraguayan industry is mainly based on agriculture and livestock.</b> The main agricultural products are cotton, sugarcane, corn, soybeans, wheat, snuff, oranges and yerba mate (Ilex paraguariensis). Yerba mate is consumed throughout the country as a cold water infusion (tereré) or hot (mate).</p>
						<p><b>Livestock</b> is very important especially in the Chaco, and in the southern part of the eastern region, with the industrialization of all 0derivatives. <b>The forest industry</b> provides products in the form of lumber, furniture, tannin and petit grain essence, used as a base in the perfume industry. Although there are deposits of oil, natural gas, iron, manganese, bauxite and other minerals, they are not exploited commercially.</p>
						<p>Because of its strategic location in South America and their growing participation in the industrialization of the region, Paraguay has a profile defined that places it in a unique position for its energy resources and low tax rates.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="padd10 center"><a href="{{ route('home') }}" class="colorGris">HOME <img src="{{ asset('images/btn_volver_inicio.png') }}" /></a></div>
	</div>
	<div class="clear"></div>
</div>

<!-- end content -->



</div>

</div>

<!-- Google CDN jQuery with fallback to local -->
<script src="https://code.jquery.com/jquery-1.7.min.js"></script>
<!-- custom scrollbars plugin -->
<script src="{{ asset('/customScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script>
	(function($){
		$(window).load(function(){
			$("#scrolable").mCustomScrollbar({
				scrollButtons:{
					enable:true
				}
			});
		});
	})(jQuery);
</script>

<script>
function animacion() {
	$("#texto1").animate({
		opacity:'1',
		left:'0px'
    }, 1000, function() {
		// Animation complete.
		$("#texto2").animate({
			opacity:'1',
			left:'130px'
		}, 1000, function() {
			// Animation complete.
			$("#texto2").animate({
				opacity:'1',
				left:'130px'
			}, 5000, function() {
				// Animation complete.
				$("#texto2").animate({
					opacity:'0',
					left:'260px'
				}, 1000, function() {
					// Animation complete.
					$("#texto1").animate({
						opacity:'0',
						left:'-160px'
					}, 1000, function() {
						// Animation complete.
						setTimeout("animacion()",1000);
					});
				});
			});
		});
	});

}

function banner_chico1() {
	$("#texto_distancia").css({left:0});
	$("#texto_distancia").animate({
		opacity:'1',
		left:'70px'
	}, 1000, function() {
		// Animation complete.
		$("#texto_distancia").animate({
			opacity:'1',
			left:'70px'
		}, 3000, function() {
			// Animation complete.
			$("#texto_distancia").animate({
				opacity:'0',
				left:'216px'
			}, 1000, function() {
				// Animation complete.
				setTimeout("banner_chico1()",1000);
			});
		});
	});
}

/*function banner_chico2() {
	$("#texto_recomendados").css({left:0});
	$("#texto_recomendados").animate({
			opacity:'1',
			left:'42px'
		}, 1000, function() {
		// Animation complete.
		$("#texto_recomendados").animate({
				opacity:'1',
				left:'42px'
			}, 3000, function() {
			// Animation complete.
			$("#texto_recomendados").animate({
					opacity:'0',
					left:'84px'
				}, 1000, function() {
				// Animation complete.
				setTimeout("banner_chico2()",1000);
			});

		});
	});
}*/

$(document).ready(function(){
	animacion();
	banner_chico1();
	//banner_chico2();
});
</script>

</body>
</html>
@endsection
