<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inmueble extends Model {
	
	protected $table = 'inmuebles';
	protected $fillable = [
		'agente_id',
		'categoria_id',
		'medida_id',
		'moneda_id',
		'operacion_id',
		'area_construida',
		'area_de_servicio',
		'banos',
		'caracteristicas_en',
		'caracteristicas_es',
		'cliente',
		'cochera',
		'codigo',
		'departamento_ciudad',
		'dormitorios',
		'nota_en',
		'nota_es',
		'precio',
		'published',
		'sold',
		'superficie_total',
		'zona'
	];
	
	static public function getAll(){
		$sql =  "SELECT inmuebles.*,
				categorias.name_es categoria_es, categorias.name_en categoria_en,
				users.name, users.phone,
				operaciones.name_es operacion_es, operaciones.name_en operacion_en,
				monedas.name moneda,
				medidas.name medida,
				paraguay.nombre ciudad
				FROM inmuebles LEFT JOIN categorias ON (inmuebles.categoria_id = categorias.id)
				LEFT JOIN users ON (inmuebles.agente_id = users.id)
				LEFT JOIN operaciones ON (inmuebles.operacion_id = operaciones.id)
				LEFT JOIN monedas ON (inmuebles.moneda_id = monedas.id)
				LEFT JOIN medidas ON (inmuebles.medida_id = medidas.id)
				LEFT JOIN paraguay ON (inmuebles.departamento_ciudad = paraguay.id)
				WHERE published = 1";
		return DB::select($sql);
	}

	static public function searchAll() {

		// $search = "";

		// if ( isset($_GET['operacion_id']) && is_numeric($_GET['operacion_id']) && $_GET['operacion_id']) {
		// 	$search .= " AND operacion_id = ".StringHelper::paranoid($_GET['operacion_id']);
		// }

		// if ( isset($_GET['categoria_id']) && is_numeric($_GET['categoria_id']) && $_GET['categoria_id']) {
		// 	$search .= " AND categoria_id = ".StringHelper::paranoid($_GET['categoria_id']);
		// }

		// if ( isset($_GET['departamento_ciudad']) && is_numeric($_GET['departamento_ciudad']) && $_GET['departamento_ciudad']) {
		// 	if ( $_GET['departamento_ciudad'] <= 17 ) {
		// 		$ciudades = Paraguay::find("all",array("conditions" => array("departamento_id = ?",$_GET['departamento_ciudad']) ) );
		// 		foreach( $ciudades as $ciudad ) { $ciudades_id[] = $ciudad->id; }
		// 		$search .= " AND departamento_ciudad in (". implode(",",$ciudades_id) .") OR departamento_ciudad = ".$_GET['departamento_ciudad'];
		// 	}else{
		// 		$search .= " AND departamento_ciudad = ".StringHelper::paranoid($_GET['departamento_ciudad']);
		// 	}
		// }
		
		// // PRECIO
		// if ( isset($_GET['precio_desde']) && is_numeric($_GET['precio_desde']) ) {
		// 	$search .= " AND ( precio BETWEEN ".$_GET['precio_desde']." AND ".$_GET['precio_hasta']." )";
		// }

		// if ( isset($_GET['moneda_id']) && is_numeric($_GET['moneda_id']) && $_GET['moneda_id'] ) {
		// 	$search .= " AND moneda_id = ".$_GET['moneda_id'];
		// }

		// // SUPERFICIE
		// if ( isset($_GET['superficie_desde']) && is_numeric($_GET['superficie_desde']) ) {
		// 	$search .= " AND ( superficie_total BETWEEN ".$_GET['superficie_desde']." AND ".$_GET['superficie_hasta']." )";
		// }

		// if ( isset($_GET['medida_id']) && is_numeric($_GET['medida_id']) && $_GET['medida_id'] ) {
		// 	$search .= " AND medida_id = ".$_GET['medida_id'];
		// }


		// if ( isset($_GET['codigo']) && $_GET['codigo'] ) {
		// 	$search = " AND codigo = '".StringHelper::paranoid($_GET['codigo'])."'";
		// }

		// $sql =  "SELECT inmuebles.*,
		// 		categorias.name_es categoria_es, categorias.name_en categoria_en,
		// 		users.name, users.phone,
		// 		operaciones.name_es operacion_es, operaciones.name_en operacion_en,
		// 		monedas.name moneda,
		// 		medidas.name medida,
		// 		paraguay.nombre ciudad
		// 		FROM inmuebles LEFT JOIN categorias ON (inmuebles.categoria_id = categorias.id)
		// 		LEFT JOIN users ON (inmuebles.agente_id = users.id)
		// 		LEFT JOIN operaciones ON (inmuebles.operacion_id = operaciones.id)
		// 		LEFT JOIN monedas ON (inmuebles.moneda_id = monedas.id)
		// 		LEFT JOIN medidas ON (inmuebles.medida_id = medidas.id)
		// 		LEFT JOIN paraguay ON (inmuebles.departamento_ciudad = paraguay.id)
		// 		WHERE inmuebles.id != 0 ".$search."
		// 		AND inmuebles.published = 1";
		// return self::find_by_sql($sql);
	}

	static public function get($id){
		$sql =  "SELECT inmuebles.*,
				categorias.name_es categoria_es, categorias.name_en categoria_en,
				users.name agente_name, users.phone agente_phone, users.email agente_email,
				operaciones.name_es operacion_es, operaciones.name_en operacion_en,
				monedas.name moneda,
				medidas.name medida,
				paraguay.nombre ciudad
				FROM inmuebles LEFT JOIN categorias ON (inmuebles.categoria_id = categorias.id)
				LEFT JOIN users ON (inmuebles.agente_id = users.id)
				LEFT JOIN operaciones ON (inmuebles.operacion_id = operaciones.id)
				LEFT JOIN monedas ON (inmuebles.moneda_id = monedas.id)
				LEFT JOIN medidas ON (inmuebles.medida_id = medidas.id)
				LEFT JOIN paraguay ON (inmuebles.departamento_ciudad = paraguay.id)
				WHERE inmuebles.id = ".$id."
				AND inmuebles.published = 1";

		$return = DB::select($sql);
		return $return[0];
	}

	public function agente()
  {
    return $this->belongsTo(User::class, 'agente_id');
  }

	public function categoria()
  {
    return $this->belongsTo(Categoria::class, 'categoria_id');
  }

	public function medida()
  {
    return $this->belongsTo(Medida::class, 'medida_id');
  }

	public function moneda()
  {
    return $this->belongsTo(Moneda::class, 'moneda_id');
  }

	public function operacion()
  {
    return $this->belongsTo(Operacion::class, 'operaciones_id');
  }

	public function ciudad()
  {
    return $this->belongsTo(Paraguay::class, 'departamento_ciudad');
  }

	public function fotos()
  {
    return $this->hasMany(Foto::class, 'inmueble_id');
  }

}