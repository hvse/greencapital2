<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [App\Http\Controllers\SiteEnController::class, 'index'])->name('inicio');
Route::get('/', function() { return view('site.es.inicio'); });
Route::get('/es/', function() { return view('site.es.inicio'); })->name('inicio');
Route::get('/es/la_empresa', function() { return view('site.es.la_empresa'); })->name('la_empresa');
Route::get('/es/mision', function() { return view('site.es.mision'); })->name('mision');
Route::get('/es/servicios_intermediacion', function() { return view('site.es.servicios_intermediacion'); })->name('servicios_intermediacion');
Route::get('/es/servicios_inmobiliarios', function() { return view('site.es.servicios_inmobiliarios'); })->name('servicios_inmobiliarios');
Route::get('/es/servicios_comercio_exterior', function() { return view('site.es.servicios_comercio_exterior'); })->name('servicios_comercio_exterior');
Route::get('/es/servicios_profesionales', function() { return view('site.es.servicios_profesionales'); })->name('servicios_profesionales');
Route::get('/es/servicios_tercerizacion', function() { return view('site.es.servicios_tercerizacion'); })->name('servicios_tercerizacion');
Route::get('/es/servicios_aperturas', function() { return view('site.es.servicios_aperturas'); })->name('servicios_aperturas');
Route::get('/es/porque_paraguay', function() { return view('site.es.porque_paraguay'); })->name('porque_paraguay');
Route::get('/es/conoce_paraguay', function() { return view('site.es.conoce_paraguay'); })->name('conoce_paraguay');
Route::get('/es/contactos', function() { return view('site.es.contactos'); })->name('contactos');
Route::get('/es/privacidad', function() { return view('site.es.privacidad'); })->name('privacidad');
Route::get('/es/inmuebles', function() { return view('site.es.inmuebles'); })->name('inmuebles');
// en
Route::get('/en/', function() { return view('site.en.home'); })->name('home');
Route::get('/en/the_company', function() { return view('site.en.la_empresa'); })->name('the_company');
Route::get('/en/mission', function() { return view('site.en.mision'); })->name('mission');
Route::get('/en/investments', function() { return view('site.en.servicios_intermediacion'); })->name('investments');
Route::get('/en/real_state_market', function() { return view('site.en.servicios_inmobiliarios'); })->name('real_state_market');
Route::get('/en/commodities', function() { return view('site.en.servicios_comercio_exterior'); })->name('commodities');
Route::get('/en/consulting', function() { return view('site.en.servicios_profesionales'); })->name('consulting');
Route::get('/en/relocation', function() { return view('site.en.servicios_tercerizacion'); })->name('relocation');
Route::get('/en/start_ups', function() { return view('site.en.servicios_aperturas'); })->name('start_ups');
Route::get('/en/resources', function() { return view('site.en.porque_paraguay'); })->name('resources');
Route::get('/en/official_data', function() { return view('site.en.conoce_paraguay'); })->name('official_data');
Route::get('/en/contacts', function() { return view('site.en.contactos'); })->name('contacts');
Route::get('/en/privacy', function() { return view('site.en.privacy'); })->name('privacy');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
  Route::resources([
    'users' => \App\Http\Controllers\admin\UserController::class,
    'inmuebles' => \App\Http\Controllers\admin\InmueblesController::class,
  ]);
  Route::redirect('/', route('users.index'));
  Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);
});
