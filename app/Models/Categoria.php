<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {
	
	protected $table = 'categorias';
	protected $fillable = [
		'name_es',
		'name_en',
	];
	
}