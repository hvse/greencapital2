<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operaciones extends Model {
	
	protected $table = 'operaciones';
	protected $fillable = [
		'name_es',
		'name_en',
	];

	public function inmuebles()
  {
    return $this->hasMany('App\Models\Inmuebles','operacion_id');
  }
	
}