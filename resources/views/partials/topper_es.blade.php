<div class="idiomas">
	<div class="height80"></div>
		<a href="{{ route('inicio') }}" class="colorGrisActive">ES</a> | <a href="{{ route('home') }}" class="colorGris">EN</a>
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
		<li><a href="{{ route('contactos') }}" class="{{ setActive('contactos') }}">CONTACTOS</a></li>
		<!-- <li><a href="./es/porque_paraguay" class="">PARAGUAY</a></li> -->

		<li>
			<a href="javascript:;" class="{{ setActive('porque_paraguay') }}{{ setActive('conoce_paraguay') }}">PARAGUAY</a>
			<ul>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('porque_paraguay') }}" class="{{ setActive('porque_paraguay') }}">RECURSOS<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('conoce_paraguay') }}" class="{{ setActive('conoce_paraguay') }}">DATOS OFICIALES<span class="flecha">▶</span></a></li>
				{{-- <li><a href="./es/noticias" class="">NOTICIAS</a></li> --}}
			</ul>
		</li>
		
		<!-- <li><a href="./es/propiedades" class=""></a></li> -->

		<li>
			<a href="./es/inmuebles" class="">PROPIEDADES</a>
			<ul>
				<li style="border-bottom:1px solid #fff"><a href="./es/inmuebles?categoria_id=1" class="">CASA URBANA<span class="flecha">▶</span></a></li><li style="border-bottom:1px solid #fff"><a href="./es/inmuebles?categoria_id=2" class="">DUPLEX<span class="flecha">▶</span></a></li><li style="border-bottom:1px solid #fff"><a href="./es/inmuebles?categoria_id=3" class="">DEPARTAMENTO<span class="flecha">▶</span></a></li><li style="border-bottom:1px solid #fff"><a href="./es/inmuebles?categoria_id=4" class="">LOTE<span class="flecha">▶</span></a></li><li style="border-bottom:1px solid #fff"><a href="./es/inmuebles?categoria_id=5" class="">ESTANCIA I CHACRA<span class="flecha">▶</span></a></li><li style="border-bottom:1px solid #fff"><a href="./es/inmuebles?categoria_id=6" class="">EDIFICIO <span class="flecha">▶</span></a></li><li style="border-bottom:1px solid #fff"><a href="./es/inmuebles?categoria_id=8" class="">CASA RURAL<span class="flecha">▶</span></a></li><li style="border-bottom:1px solid #fff"><a href="./es/inmuebles?categoria_id=9" class="">OFICINA<span class="flecha">▶</span></a></li>			</ul>
		</li>

		<li>
			<a href="javascript:;" class="
			{{ setActive('servicios_intermediacion') }}
			{{ setActive('servicios_inmobiliarios') }}
			{{ setActive('servicios_comercio_exterior') }}
			{{ setActive('servicios_profesionales') }}
			{{ setActive('servicios_aperturas') }}
			{{ setActive('servicios_tercerizacion') }}
			">SERVICIOS</a>
			<ul>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('servicios_intermediacion') }}" class="{{ setActive('servicios_intermediacion') }}">INVERSIONES<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('servicios_inmobiliarios') }}" class="{{ setActive('servicios_inmobiliarios') }}">MERCADO INMOBILIARIO<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('servicios_comercio_exterior') }}" class="{{ setActive('servicios_comercio_exterior') }}">COMMODITIES<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('servicios_profesionales') }}" class="{{ setActive('servicios_profesionales') }}">CONSULTORIA<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('servicios_aperturas')}}" class="{{ setActive('servicios_aperturas') }}">APERTURAS / NACIONALIZACIÓN DE EMPRESAS<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('servicios_tercerizacion') }}" class="{{ setActive('servicios_tercerizacion') }}">RELOCACIÓN<span class="flecha">▶</span></a></li>
			</ul>
		</li>

		<li>
			<a href="javascript:;" class="{{ setActive('la_empresa') }}{{ setActive('mision') }}">LA EMPRESA</a>
			<ul>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('la_empresa') }}" class="{{ setActive('la_empresa') }}">LA EMPRESA<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('mision') }}" class="{{ setActive('mision') }}">MISIÓN-VISIÓN-VALORES<span class="flecha">▶</span></a></li>				
				<!-- <li style="border-bottom:1px solid #fff"><a href="./es/quienes_somos"  class="" >STAFF<span class="flecha">&#9654;</span></a></li> -->
				<!-- <li><a href="./es/nos_dirigimos_a" class="" >CLIENTES<span class="flecha">&#9654;</span></a></li> -->
			</ul>
		</li>
		<li><a href="{{ route('inicio') }}" class="{{ setActive('inicio') }}">INICIO</a></li>
		<div class="clear"></div>
	</ul>
</div>