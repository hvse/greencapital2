@extends('layouts.sitio')

@section('content')
<div class="font18 line_top_bottom2">
	<p>Los recursos naturales con que cuenta Paraguay benefician enormemente convirtiéndolo en una Plataforma de Negocios ideal para la agricultura, ganadería, bienes raíces y así también mantener un buen nivel de vida.</p>
	<p>Actualmente Paraguay tiene la economía más abierta de Latinoamérica, posee el mejor bono demográfico de la región, ocupa el primer puesto en el índice de Clima Económico de Sudamérica, con 7,2 puntos según la Fundación Getúlio Vargas y el Instituto de Estudios Económicos de la Universidad de Múnich, Alemania, todo esto y muchos otros factores convierten a este país en una magnífica Plataforma de Negocios.</p>
	<p>Paraguay es unos de los países de mayor crecimiento en el mundo: El incremento del PIB del 2013 no tiene precedente en la historia del país, que la expansión de la economía cerró en un 13,6%, superior a la registrada en 2010 de 13,1%.</p>

	<div class="font18 color_celeste mapa_paraguay">
		<div class="w35pc left servicios_right">
			<div class="height30"></div>
			<span id="tag1" class="opacity0">Abundancia de Recursos Naturales</span>
			<div class="line_round_right"></div>
			<span id="tag2" class="opacity0">Energía eléctrica limpia y abundante</span>
			<div class="line_round_right"></div>
			<span id="tag3" class="opacity0">Población mayormente joven</span>
			<div class="line_round_right"></div>
			<span id="tag4" class="opacity0">Macroeconomía estable</span>
			<div class="line_round_right"></div>
			<span id="tag5" class="opacity0">Ventajas para inversiones</span>
			<div class="line_round_right"></div>
			<span id="tag6" class="opacity0">Crecimiento económico rápido</span>
			<div class="line_round_right"></div>
		</div>
		<div class="w30pc left">
			<div class="padd20">
				<img id="tagMapa" class="opacity0" src="{{ asset('images/conoce_paraguay/mapa_paraguay.png') }}" />
			</div>
		</div>
		<div class="w35pc left tx_right servicios_left">
			<div class="height30"></div>
			<span id="tag7" class="opacity0">Ausencia de desastres naturales</span>
			<div class="line_round_left"></div>
			<span id="tag8" class="opacity0">Gran productor de soja y carne vacuna</span>
			<div class="line_round_left"></div>
			<span id="tag9" class="opacity0">Localización geográfica estratégica</span>
			<div class="line_round_left"></div>
			<span id="tag10" class="opacity0">Libre navegación de los ríos</span>
			<div class="line_round_left"></div>
			<span id="tag11" class="opacity0">Calidad de vida y seguridad</span>
			<div class="line_round_left"></div>
			<span id="tag12" class="opacity0">Ventajas competitivas para la exportación</span>
			<div class="line_round_left"></div>
		</div>
		<div class="clear"></div>
	</div>

	<div class="height30"></div>

	<b>Leyes que benefician a las inversiones</b>
	<div class="pointer ley_hover padd5" id="btn6090">Ley 60/90 de Inversiones</div>
	<div id="ley6090" class="none">
		<p>
			<span style="font-size: small"><em><strong><span style="font-family: Arial">"Régimen de incentivos para la importación de bienes de capital y exenciones tributarias para la industria" </span></strong></em></span></p>
			<p><strong>Beneficios y exoneraciones impositivas. </strong><br>
			Los proyectos de inversión que sean aprobados pueden gozar, según las características de cada proyecto de inversión, de las siguientes exoneraciones de pago: <br><br>
			• Impuesto al Valor Agregado en la adquisición de bienes de capital importados (así como los bienes de capital producidos en el Paraguay) que se utilicen en la instalación para la producción industrial o agropecuaria. <br>
			• Todos los tributos que graven la constitución, inscripción o registros de sociedades y empresas. <br>
			• Aranceles e impuestos internos sobre las importaciones de bienes de capital, materias primas e insumos a utilizarse en proyectos de inversión para la fabricación de bienes de capital. <br>
			• Tributos y otros gravámenes a las remesas y pagos al exterior en concepto de intereses, comisiones y capital de los mismos cuando la inversión sea financiada desde el extranjero y sea de al menos US$ 5.000.000 (Cinco millones de dólares), en un lapso de 10 años.<br>
			<br><strong>Ámbito de aplicación de los beneficios.</strong><br>
			Las exenciones establecidas en la Ley se aplican, entre otras, a inversiones en: financiamiento, bienes de capital, asistencia técnica especializada, minería, hotelería, arrendamiento de bienes de capital (leasing), prestación de servicios en transporte aéreo de carga y pasajeros, transporte fluvial, transporte terrestre de carga en general, transporte público de pasajeros, salud, radio, televisión, prensa, telefonía fija rural y urbana, telefonía móvil, investigación científica, silos, almacenamiento, y servicios de transmisión de datos.</p>
	</div>
	<div class="height5"></div>
	<div class="pointer ley_hover padd5" id="btn1064_97">Ley 1064/97 de MAQUILA</div>
	<div id="ley1064_97" class="none justify"><p>
			<span style="font-size: small"><em><strong><span style="font-family: Arial">"Régimen de subcontratación para el procesamiento productivo y la exportación"</span></strong></em></span></p>
		<div>Mediante la Maquila los inversores pueden introducir al país bienes, productos o servicios a los efectos de ser ensamblados, reparados, mejorados, trabajados o procesados para su posterior exportación, una vez incorporados el valor agregado o “elemento paraguayo”. <br>
		&nbsp;<br>
		La legislación paraguaya no impone restricciones en cuanto a los tipos de productos o servicios comprendidos en la industria maquiladora. La política nacional de la actividad maquiladora en el Paraguay es regulada y controlada por el Consejo Nacional de la Industria Maquiladora de la Exportación (CNIME). Pueden acogerse a los beneficios otorgados por la ley las personas físicas o jurídicas, nacionales o extranjeras, domiciliadas en el país. (<a href="https://www.maquila.gov.py">www.maquila.gov.py</a>)</div>
		<div><br>
		<strong>Los beneficios mas importantes son:</strong></div>
		<div>• 1% Tributo Único Maquila (sobre el valor agregado nacional o la facturación, el que sea mayor)</div>
		<div>• Suspensión de aranceles e impuestos a la importación de materias primas e insumos, y bienes de capital.</div>
		<div>• Hasta el 10% de la exportación puede ser destinado al mercado interno, a partir del segundo año, previa nacionalización de los insumos que fueron importados con suspensión.</div>
		<div>• Recuperación del IVA a través de Crédito Fiscal</div>
		<div>• Posibilidad de desarrollar Maquila Mixta</div>
		<div><br>
		<strong>Clases de Maquila</strong>
		&nbsp;</div>
		<div>La legislación paraguaya permite las siguientes modalidades de maquila: <br>
		&nbsp;</div>
		<div>• Maquila por Capacidad Ociosa: Esta modalidad está orientada a aquellas empresas en funcionamiento que tienen la posibilidad de implementar procesos productivos de maquila con factores remanentes, sobrantes u ociosos a los que normalmente utiliza; <br>
		&nbsp;</div>
		<div>• Sub-Maquila: Las empresas maquiladoras se encuentran autorizadas a realizar contratos de sub-maquila, cuando los mismos involucren un complemento al proceso productivo de la actividad objeto del programa, para posteriormente reintegrarlo a la maquiladora que contrató originalmente el servicio y que realizará la terminación del producto para su correspondiente exportación. Podrán establecerse empresas dedicadas exclusivamente a operaciones de Sub-maquila. <br>
		&nbsp;</div>
		<div>• Maquila de Servicio Intangible: Modalidad que tiene por objeto otorgar un valor agregado intelectual o de otra naturaleza similar a bienes intangibles importados temporalmente por cualquier medio electrónico. Comprende la importación de bienes tangibles o intangibles para su correspondiente transformación con valor agregado nacional y posterior exportación por medios electrónicos (para bienes tangibles e intangibles) o tangibles (sólo para bienes intangibles). <br>
		&nbsp;</div>
		<div>• Maquila con Programa Albergue o “Shelter”: Modalidad que consiste en la aprobación a favor de una empresa, de un programa que sirva para realizar proyectos de exportación por parte de empresas extranjeras que facilitan la tecnología y el material productivo, sin operar directamente los mismos. Para la realización de este programa, las empresas extranjeras deberán constituir una sucursal en el Paraguay (“Twin Plant”) o formar un consorcio con una empresa paraguaya, en este último caso, no es necesario que tenga domicilio en el Paraguay. <br>
		&nbsp;</div>
	</div>
</div>
<script type="text/javascript">
<!--
	$(function(){
		$("#btn6090").click(function(){
			$("#ley6090").toggle("slow");
		});
		$("#btn1064_97").click(function(){
			$("#ley1064_97").toggle("slow");
		});
	});
//-->
</script>

<script type="text/javascript">
<!--
	var tiempo = 300;
	function animarTag( n ) {
		$("#tag"+n).animate({opacity:'1'}, tiempo, function() {
			// Animation complete.
			if ( n < 12 ) {
				animarTag(n+1);
			}
		});
	}

	$(function(){
		$("#tagMapa").animate({opacity:'1'}, tiempo*24, function() {
			
		});
		animarTag(1);
	});
//-->
</script>
@endsection
