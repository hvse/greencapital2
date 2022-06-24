<?php

namespace App\Http\Controllers\admin;

use App\Models\Inmuebles;
// use App\Http\Requests\SaveInmueblesRequest;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
      "inmuebles" => Inmuebles::orderBy('id', 'DESC')->get()
    ]);
  }
}