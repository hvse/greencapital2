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

		<li>
			<a href="javascript:;" class="{{ setActive('resources') }}{{ setActive('official_data') }}">PARAGUAY</a>
			<ul>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('resources') }}" class="{{ setActive('resources') }}">RESOURSES<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('official_data') }}" class="{{ setActive('official_data') }}">OFFICIAL DATA<span class="flecha">▶</span></a></li>
			</ul>
		</li>
		
		<li>
			<a href="{{ route('estate') }}" class="{{ setActive(['estate', 'property']) }}">PROPERTIES</a>
			<ul>
				@foreach(\App\Models\Categoria::all() as $cat)
				<li style="border-bottom:1px solid #fff"><a href="{{ route('estate') }}?categoria_id={{ $cat->id }}" class="{{ isset($_GET['categoria_id']) && $cat->id == $_GET['categoria_id'] ? 'active' : '' }}">{{ $cat->name_en }}<span class="flecha">▶</span></a></li>	
				@endforeach
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
			<a href="javascript:;" class="{{ setActive(['the_company', 'mission']) }}">THE COMPANY</a>
			<ul>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('the_company') }}" class="{{ setActive('the_company') }}">THE COMPANY<span class="flecha">▶</span></a></li>
				<li style="border-bottom:1px solid #fff"><a href="{{ route('mission') }}" class="{{ setActive('mission') }}">MISSION-VISION-VALUES<span class="flecha">▶</span></a></li>				
			</ul>
		</li>
		<li><a href="{{ route('inicio') }}" class="{{ setActive('home') }}">HOME PAGE</a></li>
		<div class="clear"></div>
	</ul>
</div>