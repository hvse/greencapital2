<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fotos extends Model {
	
	protected $table = 'fotos';
	protected $fillable = [
		'inmueble_id',
		'orden',
		'portada',
	];

	public static function inmueblePhoto ( $inmueble_id ) {
		return Fotos::find( "all", array("conditions" => array( "inmueble_id = ?", $inmueble_id ), 'order' => 'orden asc' ) );
	}

	public function inmueble()
  {
    return $this->belongsTo('App\Models\Inmuebles','inmueble_id');
  }
	
}