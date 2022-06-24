<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medida extends Model {
	
	protected $table = 'medidas';
	protected $fillable = [
		'name',
	];
	
	public function inmuebles()
  {
    return $this->hasMany(App\Models\Inmueble::class, 'departamento_ciudad');
  }

}