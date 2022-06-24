<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paraguay extends Model {
	
	protected $table = 'paraguay';
	protected $fillable = [
		'name_es',
		'name_en',
	];

	public function inmuebles()
  {
    return $this->hasMany(App\Models\Inmueble::class, 'departamento_ciudad');
  }

}