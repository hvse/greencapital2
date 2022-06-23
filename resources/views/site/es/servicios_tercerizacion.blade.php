@extends('layouts.sitio')

@section('content')
<div class=" font18">
	<div class="w65pc left">
		<div class="height7"></div>
		<div class="color_celeste padd5 font32">RELOCACIÓN</div>
		<div class="subrayado"></div>
		<div class="height5"></div>
		<p class="">GREEN CAPITAL  facilita el proceso de llegada y salida del país con servicios integrales de relocación.</p>

		<div class="accordion" id="accordion2">
			<!-- item -->
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle colorGris" data-toggle="collapse" data-parent="#accordion2" href="#migraciones">MIGRACIONES</a>
				</div>
				<div id="migraciones" class="accordion-body collapse ">
					<div class="accordion-inner">
						<p>Brindamos toda la información necesaria para obtener la visa o residencia, ya sea temporal o permanente, además de realizar los trámites de rigor para la obtención de la misma acompañándole en cada gestión.</p>
					</div>
				</div>
			</div>
			<!-- item -->
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle colorGris" data-toggle="collapse" data-parent="#accordion2" href="#hotel">HOTEL</a>
				</div>
				<div id="hotel" class="accordion-body collapse ">
					<div class="accordion-inner ">
						<p>El alto ejecutivo, turista, familia o cualquier extranjero que requiera de alojamiento temporal en Paraguay, podrá solicitarnos las gestiones necesarias para realizar la reserva del hotel que más le convenga de acuerdo a sus necesidades. Le informaremos a través de una descripción, el costo de las habitaciones, el lugar y la ubicación del hotel de acuerdo a su conveniencia, así como servicios adicionales que pudiere precisar.</p>
					</div>
				</div>
			</div>
			<!-- item -->
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle colorGris" data-toggle="collapse" data-parent="#accordion2" href="#vivienda">VIVIENDA</a>
				</div>
				<div id="vivienda" class="accordion-body collapse ">
					<div class="accordion-inner">
						<p>Asesoramos sobre las mejores zonas donde vivir y garantizamos firmar un contrato de arrendamiento que se ajuste a la legislación paraguaya, pero que defienda los intereses particulares de nuestros clientes.</p>
						<p>Conocemos el mercado inmobiliario. Si Usted no se encuentra en Paraguay, visitaremos las opciones y le enviaremos informaciones, fotos y vídeos de las mismas para que nos indique cuál es su preferencia. Una vez que cuente con la vivienda elegida, también podrá disponer del servicio de mudanza con la compañía que más se adecue a sus necesidades.</p>
						<p>Contratación de servicios (electricidad, agua, teléfono, internet, etc.) La contratación de los servicios básicos es una de las prioridades al momento de instalarse en una nueva vivienda. En Paraguay los servicios de agua, electricidad y teléfono son provistos por empresas públicas. Los demás servicios corresponden a empresas privadas como internet, telefonía móvil, etc, que ofrecen diferentes planes de pago, nosotros le recomendaremos la mejor opción que se adecue a sus necesidades además de realizar los trámites correspondientes.</p>
					</div>
				</div>
			</div>
			<!-- item -->
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle colorGris" data-toggle="collapse" data-parent="#accordion2" href="#educacion">EDUCACIÓN</a>
				</div>
				<div id="educacion" class="accordion-body collapse ">
					<div class="accordion-inner">
						<p>Si usted se traslada a Paraguay con su familia, le asesoraremos sobre la mejor opción educativa. Sabemos de la importancia que tienen los colegios/universidades a la hora de planificar un cambio de residencia. Por eso, escuchamos cuáles son sus prioridades y qué tipo de educación quiere que reciban sus hijos.</p>
						<p>Lo acompañamos a visitar los colegios/universidades seleccionados y le ayudaremos con todos los trámites y gestiones necesarias.</p>
						<p>El proceso es el mismo en el caso de niños con necesidades especiales.</p>
					</div>
				</div>
			</div>
			<!-- item -->
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle colorGris" data-toggle="collapse" data-parent="#accordion2" href="#seguros">SEGUROS</a>
				</div>
				<div id="seguros" class="accordion-body collapse ">
					<div class="accordion-inner">
						<p>Le brindamos información de las diferentes compañías de seguros existentes en Paraguay, ya sea para obtener seguro de salud, de vida, de casa, de auto, etc., además realizaremos las gestiones para la contratación.</p>
					</div>
				</div>
			</div>
			<!-- item -->
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle colorGris" data-toggle="collapse" data-parent="#accordion2" href="#banking">BANKING</a>
				</div>
				<div id="banking" class="accordion-body collapse ">
					<div class="accordion-inner">
						<p>Nos encargaremos de informarle cuales son los bancos existentes en Paraguay, nacionales o internacionales y realizaremos los trámites correspondientes para la apertura de una cuenta bancaria u otra gestión financiera.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="w35pc left center">
		<div class="height30"></div>
		<div class="width200 auto">
			<img src="{{ asset('images/logo_servicios.png') }}" >
			<span class="servicios_volver"></span>
		</div>
		{{-- <!-- <a href="./<?=MOD?>/servicios" class="servicios_volver">SERVICIOS<img src="images/btn_volver.png" ></a> --> --}}
	</div>
	<div class="clear"></div>
</div>
@endsection
