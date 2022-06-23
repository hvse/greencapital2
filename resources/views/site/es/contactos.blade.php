@extends('layouts.sitio')

@section('content')
<div class="">
	<div class="w60pc left">

    <div class="font24">Paraguay</div>
		<div>23 de Octubre 250</div>
        <div>Villa Morra - Asuncion</div>
		<div><span class="Source_Sans_Pro"><a href="https://wa.me/+595981777739">(+ 595 981) 777 739</a></span></div>

		<div class="padd5"></div>
		<div class="line_round_right w70pc"></div>
		<div class="padd10"></div>
	
		<div class="font24">Argentina</div>
		<div>Tucumán 994, 1er. piso  (esq. C. Pellegrini)<br>
		Ciudad Autónoma de Buenos Aires<br>
		(C1049AAT) - Argentina</div>
		<div><span class="Source_Sans_Pro">(+54 11) 5277-4404</span></div>

		<div class="padd5"></div>
		<div class="line_round_right w70pc"></div>
		<div class="padd10"></div>

		<div class="font24">España</div>
		<div>Avenida de España,<span class="Source_Sans_Pro"> 6</span> </div>
                <div>Madrid</div>
		<div>Código Postal <span class="Source_Sans_Pro">28224 - Pozuelo de Alarcón</span> </div>
		<div><span class="Source_Sans_Pro">(+ 34) 671 042 175</span></div>

		<div class="padd5"></div>
		<div class="line_round_right w70pc"></div>
		<div class="padd10"></div>
			
		<p>Email: <a href="mailto:info@greencapital.com.py" class="colorGris">info@greencapital.com.py</a></p>


	</div>
	<div class="w40pc left">
		<div class="height20"></div>
		<div class="center redondeado10 padd5 w85pc auto color333">FAVOR COMPLETE SUS DATOS</div>
		<form method="post" action="" class="padd20">
			<div class="">Nombre*</div>
			<input type="text" name="Nombres" class="redondeado6 w100pc" required>

			<div>Apellidos*</div>
			<input type="text" name="Apellidos" class="redondeado6 w100pc" required>

			<div>Direccion*</div>
			<input type="text" name="Direccion" class="redondeado6 w50pc" required>

			<div>Ciudad*</div>
			<input type="text" name="Ciudad" class="redondeado6 w50pc" required>

			<div>Codigo Postal*</div>
			<input type="text" name="Codigo_postal" class="redondeado6 w50pc" required>

			<div>País*</div>
			<input type="text" name="Pais" class="redondeado6 w50pc" required>

			<div>Teléfono*</div>
			<input type="text" name="Telefono" class="redondeado6 w50pc" required>

			<div>E-mail*</div>
			<input type="text" name="Email" class="redondeado6 w70pc" required>

			<div>Consulta</div>
			<textarea name="Consulta" rows="" cols="" class="w100pc redondeado6"></textarea>
			<div class="font12">* Campos obligatorios</div>
			<div class="center padd20">
				<input type="image" src="{{ asset('images/btn_submit.png') }}" style="padding:none;border:none;background:none;">
			</div>
			<div class="height30"></div>
			
		</form>
	</div>
	<div class="clear"></div>
</div>
@endsection
