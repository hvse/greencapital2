<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operacion extends Model {
	
	protected $table = 'operaciones';
	protected $fillable = [
		'name_es',
		'name_en',
	];

	public function inmuebles()
  {
    return $this->hasMany(App\Models\Inmueble::class, 'operacion_id');
  }
	
}