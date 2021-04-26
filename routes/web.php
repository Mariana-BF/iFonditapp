<?php

use App\Http\Controllers\HomeController;
use App\Models\Platillo;
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

Route::get('/probando','ProbarController');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user',[HomeController::class,'getUser'])->name('platillos');

Route::get('/platillo/{platillo}/edit', 'PlatilloController@edit')->name('platillos.editar');
Route::get('/platillo/create', 'PlatilloController@create')->name('platillos.agregar');
Route::post('/platillo', 'PlatilloController@store')->name('platillos.guardar');
Route::put('/platillo/{platillo}','PlatilloController@update')->name('platillos.update');


Route::get('/user/comida','PlatilloController@getComida')->name('platillos.comida');
Route::get('/user/bebida','PlatilloController@getbebida')->name('platillos.bebida');
Route::get('/user/postre','PlatilloController@getpostre')->name('platillos.postre');
Route::get('/orden/ordenes','OrdenPlatilloController@getOrden')->name('orden');


Route::put('/orden/{id_platillo}','OrdenController@InsertarenOrden')->name('InsertarOrden');
Route::get('/order/create', 'OrdenController@create')->name('Order.crear');

Route::get('/admin/ordenes','OrdenController@ordenes')->name('admin.ordenes');
Route::get('/admin/nuevaOrden/{id}','OrdenController@cambiarordennueva')->name('admin.ordennueva');
Route::get('/admin/nuevaOrden/{id}/delete','OrdenController@deleteorden')->name('admin.deteleorden');
Route::get('/admin/nuevaOrden/{id}/enproceso','OrdenController@cambiarordenproceso')->name('admin.ordenproceso');

Auth::routes();