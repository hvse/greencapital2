@extends('layouts.site')

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
		<div>994 Tucumán  1st. floor</div>
		<div>(C1049AAT) -  Argentina <br> Buenos Aires City</div>
		<div><span class="Source_Sans_Pro">(+54 11) 5277 to 4404</span></div>

		<div class="padd5"></div>
		<div class="line_round_right w70pc"></div>
		<div class="padd10"></div>

		<div class="font24">Spain</div>
		<div>Avenida de España,<span class="Source_Sans_Pro"> 6</span><br> Madrid </div>
		<div>Zip code <span class="Source_Sans_Pro">28224 - Pozuelo de Alarcón</span> </div>
		<div><span class="Source_Sans_Pro">(+ 34) 671 042 175</span></div>

		<div class="padd5"></div>
		<div class="line_round_right w70pc"></div>
		<div class="padd10"></div>

		<p>E-mail: <a href="mailto:info@greencapital.com.py" class="colorGris">info@greencapital.com.py</a></p>


	</div>
	<div class="w40pc left">

		<div class="center redondeado10 padd5 color333 w85pc auto">PLEASE COMPLETE YOUR PERSONAL DETAILS</div>
		<form method="post" action="" class="padd20">
			<div class="">Name*</div>
			<input type="text" name="Name" class="redondeado6 w100pc">

			<div>Surname*</div>
			<input type="text" name="Surname" class="redondeado6 w100pc">

			<div>Address*</div>
			<input type="text" name="Address" class="redondeado6 w50pc">

			<div>City*</div>
			<input type="text" name="City" class="redondeado6 w50pc">

			<div>Post Code*</div>
			<input type="text" name="Post_Code" class="redondeado6 w50pc">

			<div>Country*</div>
			<input type="text" name="Country" class="redondeado6 w50pc">

			<div>Telephone*</div>
			<input type="text" name="Telephone" class="redondeado6 w50pc">

			<div>E-mail*</div>
			<input type="text" name="Email" class="redondeado6 w70pc">

			<div>Consult</div>
			<textarea name="Consult" rows="" cols="" class="w100pc redondeado6"></textarea>
			<div class="font12">* Required</div>
			<div class="center padd20">
				<input type="image" src="{{ asset('images/btn_submit_en.png') }}" style="padding:none;border:none;background:none;">
			</div>
			<div class="height30"></div>
			
		</form>
	</div>
	<div class="clear"></div>
</div>
@endsection
