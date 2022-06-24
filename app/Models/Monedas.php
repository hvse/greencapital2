<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monedas extends Model {
	
	protected $table = 'monedas';
	protected $fillable = [
		'name',
	];

	public function inmuebles()
  {
    return $this->hasMany('App\Models\Inmuebles','departamento_ciudad');
  }
	
}