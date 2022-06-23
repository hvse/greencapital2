<?php

function singulars(){
  return [
    "transports" => "transport",
    "companies" => "company",
    "boardings" => "boarding",
    "vehicles" => "vehicle",
    "travels" => "travel",
    "reviews" => "review",
    "destinations" => "destination",
    "roles" => "role",
    "units" => "unit",
    "families" => "family",
    "brands" => "brand",
    "products" => "product",
    "users" => "user",
    "branches" => "branch",
    "boxes" => "box",
    "deposits" => "deposit",
    "sessions" => "session",
    "items" => "item",
    "orders" => "order",
    "payments" => "payment",
    "places" => "place",
    "journeys" => "journey"
  ];
}

function cities() {
  return [
    "Asunción",
    "Areguá",
    "Capiatá",
    "Fernando de la Mora",
    "Guarambaré",
    "Itá",
    "Itauguá",
    "Saldívar",
    "Lambaré",
    "Limpio",
    "Luque",
    "Mariano Roque Alonso",
    "Nueva Italia",
    "Ñemby",
    "San Antonio",
    "San Lorenzo",
    "Villa Elisa",
    "Villeta",
    "Ypacaraí",
    "Ypané"
  ];
}

function dateNow() { return date("Y-m-d H:i:s"); }

function validEmail($email){
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function setActive($routeName){
  return request()->routeIs($routeName) ? 'active' : '';
}

function controllerName(){
  return ucfirst(explode(".",request()->route()->getAction()["as"])[0]);
}

function controller_name(){
  return explode(".",request()->route()->getAction()["as"])[0];
}

function controller_name_singular(){
  return array_key_exists(controller_name(),singulars()) ? singulars()[controller_name()] : controller_name() ;
}

function cns(){
  return controller_name_singular();
}

function scn(){
  return controller_name_singular();
}


function actionName(){
  return ucfirst(explode(".",request()->route()->getAction()["as"])[1]);
}

function action_name(){
  return explode(".",request()->route()->getAction()["as"])[1];
}

function priceStr($price,$currency="₲"){
  $currency = $currency ? $currency : "";
  return $currency . " " . number_format($price,0,",",".");
}

function getCities(){
  return [
    "Asunción",
    "Areguá",
    "Capiatá",
    "Fernando de la Mora",
    "Guarambaré",
    "Itá",
    "Itauguá",
    "Saldívar",
    "Lambaré",
    "Limpio",
    "Luque",
    "Mariano Roque Alonso",
    "Nueva Italia",
    "Ñemby",
    "San Antonio",
    "San Lorenzo",
    "Villa Elisa",
    "Villeta",
    "Ypacaraí",
    "Ypané"
  ];
}

function distance($lat1, $lon1, $lat2, $lon2, $unit = 'K') {
 
  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);
 
  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}

function correctFormat($s) {
  return $s; //utf8_encode($s);
}

const DEBUGING = true;


function dObject($a)
{
  if ( DEBUGING ) {
    $dts = debug_backtrace();
    echo "#".$dts[0]['file'].":".$dts[0]['line'];
    echo "\n";
    var_dump($a);
    echo "\n";
  }
}

function d($a)
{
  if ( DEBUGING ) {
    $dts = debug_backtrace();
    echo "#".$dts[0]['file'].":".$dts[0]['line'];
    echo "\n";
    print_r($a);
    echo "\n";
  }
}

function debugObject($a="Aquí...", $r=0, $title="Debuging")
{
  if ( DEBUGING ) {
    echo '<body style="background:#000;color:#f0ad4e">';
    echo "\n\n<h1>".$title."</h1>";
    echo "<pre>";
    $dts = debug_backtrace();
    echo "# Archivo: ".$dts[0]['file'];
    echo "<br># Línea: ".$dts[0]['line'].'<br>';
    var_dump($a);
    echo "</pre>";
    echo "<br>";
    $origen = '';
    echo $origen;
    ($r ==0 ) ? exit : false;
  }
}

function debug($a="Aquí...",$r=0,$title="Debuging")
{
  if ( DEBUGING ) {
    echo '<body style="background:#000;color:#f0ad4e">';
    echo "\n\n<h1>".$title."</h1>";
    echo "\n<pre>";
    //if(is_array($a)) eval('$b = ' . var_export($a, true) . ';');
    //var_dump($b);
    $dts = debug_backtrace();
    echo "<br># Archivo: ".$dts[0]['file'];
    echo "<br># Línea: ".$dts[0]['line']."<br>";
    print_r($a);
    echo "\n<br>";
    echo "\n</pre>\n\n";
    ($r ==0 ) ? exit : false;
  }
}