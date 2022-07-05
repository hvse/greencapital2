<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model {
	
	protected $table = 'fotos';
	protected $fillable = [
		'inmueble_id',
		'orden',
		'portada',
	];

	public static function inmueblePhoto ( $inmueble_id ) {
		return Foto::where( "inmueble_id", $inmueble_id )->orderBy('orden asc');
	}

	public function inmueble()
  {
    return $this->belongsTo(App\Models\Inmueble::class,'inmueble_id');
  }
	
}