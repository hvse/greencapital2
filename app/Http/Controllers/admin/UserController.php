<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Http\Requests\SaveUserRequest;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
    return view( "users.index",[
      "users" => User::orderBy('id', 'DESC')->get()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view( "users.create",[
      "user" => new User
    ]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(SaveUserRequest $request)
  {
    User::create($request->validated());
    return redirect()->route("users.index");
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(int $id)
  {
    $user = User::find($id);
    if ($user) {
      return view("users.show",[
        "user" => $user
      ]);
    } else {
      return back()->with( 'message', "El usuario no existe." );
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
    return view("users.edit",[
      "user" => User::find($id)
    ]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $inputs = $request->All();
    
    $requires = [
      "name",
      "lastname",
      "document",
      "email",
      "phone"
    ];

    foreach ($requires as $key) {
      if ( !$request->get($key) ){
        //$return["errors"][] = "Se require el campo ${__($key)}";
        return back()->with( 'message', "Se require el campo ".__($key) );
      }
    }

    //$toUpdate = $request->validated();
    $toSave = [
      "name" => $inputs["name"],
      "lastname" => $inputs["lastname"],
      "document" => $inputs["document"],
      "email" => $inputs["email"],
      "phone" => $inputs["phone"],
      "is_driver" => (int) $inputs["is_driver"],
      "available" => (int) $inputs["available"]
    ];

    if ( empty( $toSave["password"] ) ) {
        unset( $toSave["password"] );
    }else{
        $toSave["password"] = Hash::make($inputs["password"]);
    }

    $me = Auth::user();
    $user = User::find($id);
    if ($user->id != $me->id) {
      $toSave["is_admin"] = (int) $inputs["is_admin"];
    }

    $user->update($toSave);
    return redirect()->route("users.index");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($user)
  {
    $user->delete();
    return redirect()->route("users.index")->with("status",__('row deleted'));
  }
}
