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

Route::get('/salut','SalutController@salut');
Route::get('/salut/{name}/{age}','SalutController@name');
Route::view('/', 'welcome');

// Route::get('/ville','VilleController@index');//Affiche la liste des villes
// Route::get('/ville/create','VilleController@create')->name('ville.create');//Affichage du formulaire
// Route::post('/ville','VilleController@store');//Ajout dans DB
// Route::get('/ville/{id}/edit','VilleController@edit');//Affichage du formulaire
// Route::put('/ville/{id}','VilleController@update');//Modification dans DB
// Route::delete('/ville/{id}','VilleController@destroy');//Modification dans DB

Route::resource('/ville', 'VilleController');
Route::resource('/domaine', 'DomaineController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
