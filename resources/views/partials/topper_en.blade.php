<div class="idiomas">
	<div class="height80"></div>
		<a href="{{ route('inicio') }}" class="colorGris">ES</a> | <a href="{{ route('home') }}" class="colorGrisActive">EN</a>
</div>

<div class="">
	<a href="{{ route('inicio') }}"><img src="{{ asset('/images/logo_small.png') }}" class="left"></a>
	<div class="right w50pc tx_right">
		<div class="right height10 width1 line_top_1"></div>
		<div class="clear height5"></div>
		<div class="right height10 width1 line_top_2"></div>
		<div class="clear height5"></div>
		<div class="right height10 width1 line_top_3"></div>
		<div class="clear height5"></div>
		<div class="right height10 width1 line_top_4"></div>
	</div>
	<div class="clear"></div>
</div>

<div id="" class="nav block">
	<ul>
		<li><a href="{{ route('contacts') }}" class="{{ setActive('contacts') }}">CONTACTS</a></li>
		<!-- <li><a href="./es/porque_paraguay" class="">PARAGUAY</a></li> -->

		<li>
			<a href="javascript:;" class="{{ setActive('resources') }}{{ setActive('official_data') }}">PARAGUAY</a>
			<ul>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('resources') }}" class="{{ setActive('resources') }}">RESOURSES<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('official_data') }}" class="{{ setActive('official_data') }}">OFFICIAL DATA<span class="flecha">▶</span></a></li>
				{{-- <li><a href="./es/noticias" class="">NOTICIAS</a></li> --}}
			</ul>
		</li>
		
		<!-- <li><a href="./es/propiedades" class=""></a></li> -->

		<li>
			<a href="./es/inmuebles" class="">PROPERTIES</a>
			<ul>
				<li style="border-bottom:1px solid #fff"><a href="./es/inmuebles?categoria_id=1" class="">CASA URBANA<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="./es/inmuebles?categoria_id=2" class="">DUPLEX<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="./es/inmuebles?categoria_id=3" class="">DEPARTAMENTO<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="./es/inmuebles?categoria_id=4" class="">LOTE<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="./es/inmuebles?categoria_id=5" class="">ESTANCIA I CHACRA<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="./es/inmuebles?categoria_id=6" class="">EDIFICIO <span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="./es/inmuebles?categoria_id=8" class="">CASA RURAL<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="./es/inmuebles?categoria_id=9" class="">OFICINA<span class="flecha">▶</span></a></li>
			</ul>
		</li>

		<li>
			<a href="javascript:;" class="
			{{ setActive('investments') }}
			{{ setActive('real_state_market') }}
			{{ setActive('commodities') }}
			{{ setActive('consulting') }}
			{{ setActive('start_ups') }}
			{{ setActive('relocation') }}
			">SERVICES</a>
			<ul>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('investments') }}" class="{{ setActive('investments') }}">INVESTMENTS<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('real_state_market') }}" class="{{ setActive('real_state_market') }}">REAL ESTATE MARKET<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('commodities') }}" class="{{ setActive('commodities') }}">COMMODITIES<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('consulting') }}" class="{{ setActive('consulting') }}">CONSULTING<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('start_ups')}}" class="{{ setActive('start_ups') }}">START UPS / NATIONALIZATION OF COMPANIES<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('relocation') }}" class="{{ setActive('relocation') }}">RELOCATION<span class="flecha">▶</span></a></li>
			</ul>
		</li>

		<li>
			<a href="javascript:;" class="{{ setActive('the_company') }}{{ setActive('mission') }}">THE COMPANY</a>
			<ul>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('the_company') }}" class="{{ setActive('the_company') }}">THE COMPANY<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('mission') }}" class="{{ setActive('mission') }}">MISSION-VISION-VALUES<span class="flecha">▶</span></a></li>				
				<!-- <li style="border-bottom:1px solid #fff"><a href="./es/quienes_somos"  class="" >STAFF<span class="flecha">&#9654;</span></a></li> -->
				<!-- <li><a href="./es/nos_dirigimos_a" class="" >CUSTOMERS<span class="flecha">&#9654;</span></a></li> -->
			</ul>
		</li>
		<li><a href="{{ route('inicio') }}" class="{{ setActive('home') }}">HOME PAGE</a></li>
		<div class="clear"></div>
	</ul>
</div>