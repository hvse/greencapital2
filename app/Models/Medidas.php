<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medidas extends Model {
	
	protected $table = 'medidas';
	protected $fillable = [
		'name',
	];
	
	public function inmuebles()
  {
    return $this->hasMany('App\Models\Inmuebles','departamento_ciudad');
  }

}