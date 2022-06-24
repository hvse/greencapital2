<?php
if ( isset($_GET['pdf']) ) {
	/*require('phppdf/fpdf.php');
	//require('phppdf/phpRender.php');

	
	
	//Gz::dd($contents);


	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,$contents);
	$pdf->Output("demo.pdf","D");*/

	//require_once("phppdf/dompdf_config.inc.php");
	function renderPhpToString($file, $vars=null)
	{
		if (is_array($vars) && !empty($vars)) {
			extract($vars);
		}
		ob_start();
		include $file;
		return ob_get_clean();
	}

	//$contents = renderPhpToString( APP_PATH . "/views/templates/" . "inmueble_detalle.php", $this->item->attributes());
	//echo $contents; exit(0);

	require('phppdf/gzPdf.php');

	
	//Gz::d($this->item->attributes());
	$acento_min = array("á","é","í","ó","ú","ñ","ü");
	$acento_max = array("Á","É","Í","Ó","Ú","Ñ","Ü");
	$title = array();
	if( $this->item->codigo )		$title[] = $this->item->codigo;
	if( $this->item->operacion_es )	$title[] = $this->item->operacion_es;
	if( $this->item->categoria_es )	$title[] = $this->item->categoria_es;
	if( $this->item->ciudad )		$title[] = str_replace($acento_min,$acento_max,strtoupper(utf8_encode($this->item->ciudad)));
	if( $this->item->zona )			$title[] = str_replace($acento_min,$acento_max,strtoupper($this->item->zona));
	$title = implode(" | ",$title);

	// Títulos de las columnas
	$cambio = Cotizaciones::find(1);
	switch ( $this->item->moneda_id ) {
		case '1': // GS
			$dolar = $this->item->precio / $cambio->value;
			$dolar = number_format($dolar, 0, ',', '.');
			$guarani = number_format($this->item->precio, 0, ',', '.');
			break;
		case '2': // USD
			$guarani = $this->item->precio * $cambio->value;
			$guarani = number_format($guarani, 0, ',', '.');
			$dolar = number_format($this->item->precio, 0, ',', '.');
			break;
	}
	
	// Creación del objeto de la clase heredada
	$pdf = new PDF();

	$data = array(
		array('Departamento / Ciudad',	$this->item->ciudad,												"Dormitorios",		$this->item->dormitorios),
		array("Zona",					utf8_decode($this->item->zona),													"Baños",			$this->item->banos),
		array("Superficie total",		number_format($this->item->superficie_total, 0, ',', '.')." m2",	"Area de servicio",	$this->item->area_de_servicio),
		array("Area construida",		number_format($this->item->area_construida, 0, ',', '.')." m2",		"Cochera",			$this->item->cochera),
		array("Guaraníes",				"GS ".$guarani		),
		array("Dólares Americanos",		"USD ".$dolar	)
	);
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial','',12);
	$pdf->SetTextColor(76,89,90);
	//$pdf->Cell(-6);
	$pdf->Cell(40,10,utf8_decode($title) );
	if ( is_file("images/inmuebles/".$this->item->portada.".jpg") ) $pdf->Image("images/inmuebles/".$this->item->portada.".jpg",10,40,95,72);
	$fotos = Fotos::inmueblePhoto( $this->item->id );
	$c = 0;
	foreach ( $fotos as $foto ) {
		if ( is_file("images/inmuebles/ch/".$foto->id.".jpg") && $this->item->portada != $foto->id ) {
			$c++;
			file_get_contents(WWW_PATH."./admin/imuebles/foto/".$foto->id);
			$foto_link = "images/inmuebles/pdf/".$foto->id.".jpg";
			if ( $c < 4 ) $pdf->Image($foto_link,10,40 + (($c-1)*23.7) );
		}
	}
	$pdf->Cell(100);
    $pdf->Ln(10);
	$pdf->FancyTable($header,$data);
	//$pdf->WriteHTML(utf8_decode($contents));
	$pdf->Ln(5);
	$pdf->SetFont('','B');
	$pdf->Cell(125,5,"Descripciones:");

	$pdf->Cell(50,5,"Nota:");
	
	$pdf->Ln();
	$pdf->SetFont('','');
	//$pdf->WriteHTML('<table width="100%"><tr><td width="70%">'.utf8_decode(str_replace("•","*",$this->item->caracteristicas_es)).'</td><td widht="30%">'.utf8_decode(str_replace("•","*",$this->item->nota_es)).'</td></tr></table>');
	
	/**/
	$pdf->SetFillColor(189,189,189);
	$pdf->MultiCell(120,5, utf8_decode(str_replace("•","*",$this->item->caracteristicas_es)), 1, 'L', true);
	//$pdf->Ln();
	$pdf->SetLeftMargin(135);
    if ( strlen($this->item->caracteristicas_es) < 2000 ) $pdf->SetY(122);
	$pdf->MultiCell(65,5, utf8_decode(str_replace("•","*",$this->item->nota_es)));
	
	$pdf->Ln();
	$pdf->SetFont('','B');
	$pdf->Cell(125,5,"Contacto:");
	$pdf->SetFont('','');
	$pdf->Ln();
	$pdf->Cell(125,5,"Email: ".User::$curr->email);
	$pdf->Ln();
	$pdf->Cell(125,5,"Tel: ".User::$curr->phone);
	$pdf->SetLeftMargin(0);
	/**/
	if(isset($_GET['debug'])) $pdf->Output();
	else $pdf->Output(str_replace(" | ","_",utf8_decode($title)).".pdf","D");
	exit(0);
}

Template::load("admin.header.php")?>
<ul class="breadcrumb">
  <li><a href="./admin/<?=MOD?>"><?=MOD?></a> <span class="divider">/</span></li>
  <li><a href="./admin/<?=MOD?>/<?=ACC?>"><?=ACC?></a> <span class="divider">/</span></li>
  <li class="active"><?=$this->params['get']['id']?></li>
</ul>
<div class="center padd5">
	<a class="btn btn-success" href="./admin/<?=MOD?>/<?=ACC?>/<?=$this->params['get']['id']?>/?pdf"><span class="icon-download-alt"></span> Descargar PDF</a>
</div>
<?@Template::form()?>
<?Template::load("admin.footer.php")?>