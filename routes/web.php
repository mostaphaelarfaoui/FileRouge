<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/demande', function () {
    return view('DemandeDocument');
});
Route::get('/permis', function () {
    return view('PermisConstruire');
});
Route::get('/suivi', function () {
    return view('SuiviCommande');
});
Route::get('/livraison', function () {
    return view('adressLivraison');
});
Route::get('/home', 'HomeController@index');