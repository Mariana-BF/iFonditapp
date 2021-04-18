<?php

use App\Http\Controllers\HomeController;
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
//Route::get('/user','PlatilloController@getbebidas')->name('platillos.bebidas');
//Route::get('/user','PlatilloController@index')->name('platillos.index');
Route::get('/user/comida','PlatilloController@getComida')->name('platillos.comida');
Route::get('/user/bebida','PlatilloController@getbebida')->name('platillos.bebida');
Route::get('/user/postre','PlatilloController@getpostre')->name('platillos.postre');

Auth::routes();