<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ViewController;

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

//En  base a Modelo Vista Controlador.



//Ruta del formulario en método post para obtener la información del mismo y almacenarla

Route::post('/upload','FileController@uploadFile');

//Ruta que obtiene la funcion del controlador que pinta la vista

Route::get('/lista','ViewController@getListView');

//Ruta básica carga la página de formulario o HOME

Route::get('/{msg?}','ViewController@getFormView')->name('home');

//Ruta que descarga la información de la lista.

Route::get('/descargar/{filename}','FileController@downloadFile');