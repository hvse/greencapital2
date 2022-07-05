<?php
namespace App\helpers;

class UploadHelper{
	static function tresSimple($a, $ab, $b, $bb)
	{
		if($a == "")
		{
			return ceil($ab*$b/$bb);
		}	
		if($ab == "")
		{
			return ceil($a*$bb/$b);
		}	
		if($b == "")
		{
			return ceil($bb*$a/$ab);
		}	
		if($bb == "")
		{
			return ceil($b*$ab/$a);
		}	
	}
	
	/**
	 *	"name" => $id,
	 *	"width" => 500,
	 *	"folder" => "./images/".MOD."/",
	 *	"orden" => $c
	 **/
	static function cropAndUp ( $a ) {
    // dd($a);
		if ( !empty($_FILES['imagen']['tmp_name'][$a["orden"]]) ) {
			$nnombre = $a["name"];
			$image = $_FILES['imagen']['tmp_name'][$a["orden"]];
			$newname = $a["folder"].$nnombre.".jpg";
			$size = getimagesize ($image);	
			$width = $size[0];
			$height = $size[1];
			$nwidth = $a["width"];
			
			if ($width > $height) {
				$newwidth = $nwidth;
				$porcentaje = self::tresSimple($width, 100, $nwidth, '');
				$newheight = self::tresSimple($height, 100, '', $porcentaje);
			} else {
				$newheight = $nwidth;
				$porcentaje = self::tresSimple($height, 100, $nwidth, '');
				$newwidth = self::tresSimple($width, 100, '', $porcentaje);
			}
			
			switch ( $_FILES['imagen']['type'][$a["orden"]] ) {
				case 'image/png':
					$src = imagecreatefrompng("$image");
					break;
				default:
					$src = imagecreatefromjpeg("$image");
					break;
			}

			$im = imagecreatetruecolor($newwidth,$newheight);
			imagefill($im, 0, 0, imagecolorallocate($im, 255, 255, 255));
			imagecopyresampled($im,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
			imagejpeg($im, $newname,100);
			imagedestroy($im);
		}
	}

	static function subirImagen($nnombre, $nwidth, $ndir)
	{
		$on = $nnombre;
		if( is_array( $_FILES['imagen']['name'] ) ){
			for( $i=0; $i<count($_FILES['imagen']['name']); $i++ ) {
				
				if(!empty($_FILES['imagen']['tmp_name'][$i]))
				{
					$sr = $i+1;
					$nnombre = $on."_".$sr;
					$image = $_FILES['imagen']['tmp_name'][$i];
					$newname = $ndir.$nnombre.".jpg";
					$size = getimagesize ($image);	
					$width = $size[0];
					$height = $size[1];
					
					if ($width > $height) {
						$newwidth = $nwidth;
						$porcentaje = self::tresSimple($width, 100, $nwidth, '');
						$newheight = self::tresSimple($height, 100, '', $porcentaje);
					} else {
						$newheight = $nwidth;
						$porcentaje = self::tresSimple($height, 100, $nwidth, '');
						$newwidth = self::tresSimple($width, 100, '', $porcentaje);
					}
					
					$src = imagecreatefromjpeg("$image");
					$im = imagecreatetruecolor($newwidth,$newheight);
					imagecopyresampled($im,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
					imagejpeg($im, $newname,100);
					imagedestroy($im);
				}
			}
			return true;
		}else{
			//Gz::d($_FILES);
			if( $_FILES['imagen']['error'] == 4 ) {
					return false;
			}else{
				$image = $_FILES['imagen']['tmp_name'];
				$newname = $ndir.$nnombre.".jpg";
				$size = getimagesize ($image);	
				$width = $size[0];
				$height = $size[1];
				
				if ($width > $height) {
					$newwidth = $nwidth;
					$porcentaje = self::tresSimple($width, 100, $nwidth, '');
					$newheight = self::tresSimple($height, 100, '', $porcentaje);
				} else {
					$newheight = $nwidth;
					$porcentaje = self::tresSimple($height, 100, $nwidth, '');
					$newwidth = self::tresSimple($width, 100, '', $porcentaje);
				}
				
				$src = imagecreatefromjpeg("$image");
				$im = imagecreatetruecolor($newwidth,$newheight);
				imagecopyresampled($im,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
				imagejpeg($im, $newname,100);
				imagedestroy($im);
				return true;
			}
		}
	}
}