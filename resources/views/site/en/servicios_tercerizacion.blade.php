@extends('layouts.site')

@section('content')
<div class=" font18">
	<div class="w65pc left">
		<div class="height7"></div>
		<div class="color_celeste padd5 font32">RELOCATION</div>
		<div class="subrayado"></div>
		<div class="height5"></div>
		<p class="">CAPITAL GREEN facilitates the process of arrival and departure from the country with complete relocation services.</p>

		<div class="accordion" id="accordion2">
			<!-- item -->
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle colorGris" data-toggle="collapse" data-parent="#accordion2" href="#migraciones">IMMIGRATION</a>
				</div>
				<div id="migraciones" class="accordion-body collapse ">
					<div class="accordion-inner">
						<p>We provide you all the necessary information to obtain a temporary or permanent visa or residence, and help you with relevant paperwork. We’ll help you with every step of the process.</p>
					</div>
				</div>
			</div>
			<!-- item -->
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle colorGris" data-toggle="collapse" data-parent="#accordion2" href="#hotel">HOTELS</a>
				</div>
				<div id="hotel" class="accordion-body collapse ">
					<div class="accordion-inner ">
						<p>Whether you’re a top-level executive, a tourist, a family or just someone wishing to stay in Paraguay for a short time, you can always ask us to make a convenient hotel reservation that suits your needs. We’ll let you know about the hotel features, room price and location as well as additional services you may need.</p>
					</div>
				</div>
			</div>
			<!-- item -->
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle colorGris" data-toggle="collapse" data-parent="#accordion2" href="#vivienda">HOUSING</a>
				</div>
				<div id="vivienda" class="accordion-body collapse ">
					<div class="accordion-inner">
						<p>We’ll advise you on the top areas to live and we guarantee to sign a lease that complies with Paraguayan legislation and holds your interests paramount.</p>
						<p>We know the real estate market. If you aren’t in Paraguay at the moment, we’ll do the visits for you and send you information, pictures and videos for you to let us know your choice. Once you’ve chosen the house, we can also provide you with convenient moving services.</p>
						<p>Contracting basic services one of the top priorities when settling in a new home. Water, electricity and telephone services are provided by public companies in Paraguay. Other services such as Internet and cellular phones are provided by private companies offering different payment plans. We’ll recommend the best option that suits your needs and make the necessary arrangements.</p>
					</div>
				</div>
			</div>
			<!-- item -->
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle colorGris" data-toggle="collapse" data-parent="#accordion2" href="#educacion">SCHOOLING</a>
				</div>
				<div id="educacion" class="accordion-body collapse ">
					<div class="accordion-inner">
						<p>If you’re bringing your family with you to Paraguay, we can advise you on the best schooling options. We know the importance of the choice of schools/universities when moving house. For that reason, we’ll listen to your priorities are and what kind of schooling you seek for your children.</p>
						<p>We will accompany you to the short-listed schools and help you with all the paperwork and formalities so that your children can start school.</p>
						<p>The methodology is the same with children with special needs.</p>
					</div>
				</div>
			</div>
			<!-- item -->
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle colorGris" data-toggle="collapse" data-parent="#accordion2" href="#seguros">INSURANCE</a>
				</div>
				<div id="seguros" class="accordion-body collapse ">
					<div class="accordion-inner">
						<p>We provide information from different insurance companies operating in Paraguay, whether to obtain health insurance, life, home, car, etc.., and we will arrange for recruitment.</p>
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
						<p>We’ll tell you about national or international banks operating in Paraguay, and we’ll make the necessary arrangements to open a bank account, among other bank-related paperwork.</p>
					</div>
				</div>
			</div>
		</div><!-- CARRUSEL -->
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
