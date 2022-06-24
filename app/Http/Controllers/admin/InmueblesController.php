<?php

namespace App\Http\Controllers\admin;

use App\Models\Inmueble;
use App\Models\Operacion;
// use App\Http\Requests\SaveInmueblesRequest;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Medida;
use App\Models\Moneda;
use App\Models\Paraguay;
use App\Models\Foto;
use App\Models\User;
use \Illuminate\Http\Response;

class InmueblesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view( "inmuebles.index",[
      "inmuebles" => Inmueble::orderBy('id', 'DESC')->get()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view( "inmuebles.create",[
      "inmueble" => new Inmueble,
      "users" => User::all(),
      "operaciones" => Operacion::all(),
      "categorias" => Categoria::all(),
      "medidas" => Medida::all(),
      "monedas" => Moneda::all(),
      "departamentos" => Paraguay::orderBy('nombre'),
      "fotos" => [],
      // "departamentos" => Paraguay::find("all", array("conditions"=>array("departamento_id=0"), "order" => "nombre" )),
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Inmueble::create($request->validated());
    return redirect()->route("inmuebles.index");
  }
}