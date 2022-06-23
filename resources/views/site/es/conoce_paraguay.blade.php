@extends('layouts.sitio')

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
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&subset=latin,latin-ext,vietnamese' rel='stylesheet' type='text/css'>
	
</head>

<body>

<div class="baseWidth auto bg_gris_paraguay">

<!-- ini content -->

<div class="padd20">
	<a href="{{ route('inicio')}}" title="Volver al inicio"><div class="paraguay_banner"> 
		<div class="padd30">
			<img id="texto1" src="{{ asset('./images/conoce_paraguay/conoce_mas_sobre-17.png') }}" style="opacity:0;left:200px" class="relative">
		</div>
		<div class="">
			<img id="texto2" src="{{ asset('./images/conoce_paraguay/paraguay-17.png') }}" style="opacity:0" class="relative">
		</div>
	</div></a>
	<div class="w70pc left">
		<div class="padd20 padding-left0 padding-bottom0">
			<a href="http://www.distance.to/" target="_blank">
				<div class="font50 paraguay_distancia_banner">
					<div class="height5"></div>
					<span class="color_mostaza	opacity0 relative" id="texto_distancia">Distancia entre países</span>
				</div>
			</a>
		</div>
		<div class="padd20 padding-left0 padding-bottom0">
			<div class="padd20 bg_mostaza redondeado10">
				<div class="font32">IMPUESTOS</div>
				<p>Un 10% de IVA no recuperable se carga a todos los bienes y servicios en Paraguay. Estará incluido en los precios de los menús de los restaurantes y sumado a su cuenta de hotel.</p>
				<p>En los servicios como por ejemplo restaurantes es apropiado dar una propina del 10%. Puede redondear la tarifa del taxi para dar una pequeña propina al taxista. Los porteros y mozos esperan siempre una pequeña propina de unos pocos miles de guaraníes.</p>
				<p>Tasa de salida del aeropuerto es de $ 18.</p>
			</div>
		</div>
		<div class="padd20 padding-left0 padding-bottom0">
			<div class="fff font22 center">Paraguay posee tradiciones únicas como herencia de la fusión de las culturas hispano guaraní.</div>
			<div class="height20"></div>
			<img src="{{ asset('/images/conoce_paraguay/tradicion.png') }}" />
		</div>
		<!-- <div class="padd20 padding-left0 padding-bottom0">
			<div class="font40 recomendado">
				<div class="height30"></div>
				<span class="color_mostaza relative opacity0" id="texto_recomendados">LUGARES RECOMENDADOS</span>
			</div>
		</div> -->
	</div>
	<div class="w30pc left">
		<div class="height20"></div>
		<div class="redondeado10 bg_fff">
			<div class="padd20">
				<div class="">
					<div class="font27 center">
						DATOS OFICIALES
					</div>
					<div id="scrolable">
						<p><b>Nombre oficial del estado</b>: República del Paraguay.</p>
						<p><b>Capital</b>: Asunción</p>
						<p><b>Población</b>: 6.600.000 habitantes.</p>
						<p><b>Idiomas</b>: español y guaraní.</p>
						<p><b>Jefe de Estado y Presidente del Gobierno</b>: Horacio Cartes.</p>
						<p><b>Área</b>: 406.752 km2; es país limítrofe de Argentina, Bolivia y Brasil.</p>
						<p><b>Moneda de Paraguay</b>: Guaraní paraguayo (<b>código</b>: PYG, <b>símbolo</b>: G.).</p>
						<p><b>Diferencia horaria entre Paraguay y UTC/GMT (Londres)</b>: -4 horas.</p>
						<p><b>El prefijo para llamadas desde el exterior a Paraguay es</b>: +595.</p>
						<p><b>Voltaje en Paraguay</b>: 220 Volts, 50 ciclos.</p>
						<p><b>Las principales industrias del Paraguay</b> están basadas en la <b>agricultura y ganadería</b>. Los principales productos agrícolas son el algodón, caña de azúcar, maíz, soja, trigo, tabaco, naranjas y yerba mate (Ilex Paraguarienses) que es consumida en todo el país como infusión con agua fría (Tereré) o caliente (mate o mate cocido).</p>
						<p><b>La ganadería</b> es muy importante especialmente en el Chaco, y en la parte sur de la región Oriental, con la industrialización de todos sus derivados. <b>La industria forestal</b> brinda productos en forma de maderas aserradas, muebles, tanino y esencia de petit-grain, usada como base en la industria de perfumes. Aunque existen depósitos de petróleo, gas natural, hierro, manganeso, bauxita y otros minerales, no son explotados comercialmente.</p>
						<p>Por su estratégica ubicación en Sudamérica y su creciente participación en la industrialización de la región, Paraguay tiene un perfil definido que lo ubica en una posición inigualable por sus recursos energéticos y el bajo índice impositivo.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="padd10 center"><a href="{{ route('inicio') }}" class="colorGris">INICIO <img src="{{ asset('images/btn_volver_inicio.png') }}" /></a></div>
	</div>
	<div class="clear"></div>
</div>

<!-- end content -->



</div>

<!-- Google CDN jQuery with fallback to local -->
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
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
