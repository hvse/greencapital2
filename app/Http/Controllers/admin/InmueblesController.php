<?php

namespace App\Http\Controllers\admin;

use App\helpers\UploadHelper;
use App\Models\Inmueble;
use App\Models\Operacion;
// use App\Http\Requests\SaveInmueblesRequest;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SavePropertyRequest;
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
      "departamentos" => Paraguay::where("departamento_id", 0)->orderBy('nombre')->get(),
      "fotos" => [],
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(SavePropertyRequest $request)
  {
    $orden = array();
    $portada = null;
    $orden_portada = array();

    if ( isset($_POST['fotos']) ) {
      foreach( $_POST['fotos'] as $order => $foto_id ) {
        if ( is_numeric($foto_id) ) {
          $foto = Foto::find($foto_id);
          $foto->orden = $order;
          $foto->save();
        }else{
          $orden[] = $order;
          $orden_portada[] = $foto_id;
        }
      }
      unset($_POST['fotos']);
      if ( !is_numeric($_POST['portada']) ) {
        $portada = $_POST['portada'];
        unset($_POST['portada']);
      }
    }

    $inmueble = Inmueble::create($request->validate());
    $inmueble_id = $inmueble->id;

    if ( $_FILES ) {
      $c = 0;
      foreach ( $_FILES['imagen']['name'] as $name ) {
        if ( $name ) {
          $orden_c = $orden[$c] ? $orden[$c] : $c;
          $newPhoto = new Foto(array("inmueble_id" => $inmueble_id, "orden" => $orden_c ));
          $newPhoto->save();
          $id = $newPhoto->id;

          if( $orden_portada[$c] == $portada ) {
            $inmueble->portada = $id;
            $inmueble->save();
          }
          
          if ( empty($portada) ) {
            $inmueble->portada = $id;
            $inmueble->save();
            $portada = $id;
          }

          UploadHelper::cropAndUp( array ( "name" => $id, "width" => 100, "folder" => public_path('images/inmuebles/ch/'), "orden" => $c ) );
          UploadHelper::cropAndUp( array ( "name" => $id, "width" => 500, "folder" => public_path('images/inmuebles/'), "orden" => $c ) );
          $c++;
        }
      }
    }
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $fotos = Foto::where('inmueble_id', $id)->orderBy('orden')->get();
    return view("inmuebles.edit",[
      "inmueble" => Inmueble::find($id),
      "users" => User::all(),
      "operaciones" => Operacion::all(),
      "categorias" => Categoria::all(),
      "medidas" => Medida::all(),
      "monedas" => Moneda::all(),
      "departamentos" => Paraguay::where("departamento_id", 0)->orderBy('nombre')->get(),
      "fotos" => $fotos,
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(SavePropertyRequest $request, $id)
  {
    $inmueble = Inmueble::find($id);

    if ( isset($_POST['fotos']) ) {
      foreach( $_POST['fotos'] as $order => $foto_id ) {
        if ( is_numeric($foto_id) ) {
          $foto = Foto::find($foto_id);
          $foto->orden = $order;
          $foto->save();
        }else{
          $orden[] = $order;
          $orden_portada[] = $foto_id;
        }
      }
      unset($_POST['fotos']);
      if ( !is_numeric($_POST['portada']) ) {
        $portada = $_POST['portada'];
        unset($_POST['portada']);
      }
    }
    if (isset($_POST['portada'])) {
      unset($_POST['portada']);
    }

    $inmueble->update($request->validate());
    //$imageName =  //$inmueble->id.'.'.$request->image->extension();  

    $inmueble_id = $id;

    if ( $_FILES ) {
      $fotos = Foto::where("inmueble_id", $id)->get();
			foreach( $fotos as $foto ) {
				self::deletePhoto($foto->id);
			}
      $c = 0;
      foreach ( $_FILES['imagen']['name'] as $name ) {
        if ( $name ) {
          $orden_c = $orden[$c] ? $orden[$c] : $c;
          $newPhoto = new Foto(array("inmueble_id" => $inmueble_id, "orden" => $orden_c ));
          $newPhoto->save();
          $id = $newPhoto->id;

          if( $orden_portada[$c] == $portada ) {
            $inmueble->portada = $id;
            $inmueble->save();
          }

          if ( empty($portada) ) {
            $inmueble->portada = $id;
            $inmueble->save();
            $portada = $id;
          }


          UploadHelper::cropAndUp( array ( "name" => $id, "width" => 100, "folder" => public_path('images/inmuebles/ch/'), "orden" => $c ) );
          UploadHelper::cropAndUp( array ( "name" => $id, "width" => 500, "folder" => public_path('images/inmuebles/'), "orden" => $c ) );
          $c++;
        }
      }
    }
  
    return redirect()->route("inmuebles.edit", [$inmueble])->with("success", "datos guardados");
  }

  private function deletePhoto( $id ){
    $post = Foto::find($id);
    $post->delete();
    
    $src = public_path("./images/inmuebles/".$id.".jpg");
    if ( is_file($src) ) {
      unlink($src);
    }
  
    $src = public_path("./images/inmuebles/ch/".$id.".jpg");
    if ( is_file($src) ) {
      unlink($src);
    }
  }
}
