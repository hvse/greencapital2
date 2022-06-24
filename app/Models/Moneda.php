<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moneda extends Model {
	
	protected $table = 'monedas';
	protected $fillable = [
		'name',
	];

	public function inmuebles()
  {
    return $this->hasMany(App\Models\Inmueble::class, 'departamento_ciudad');
  }
	
}