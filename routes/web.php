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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/editPeserta', function () {
    return view('editPeserta');
});

Route::get('/dataPeserta', 'PesertaController@index');
Route::get('/addPeserta', 'PesertaController@create');
Route::post('/addNewPeserta', 'PesertaController@store');
Route::get('/editPeserta/{peserta}', 'PesertaController@edit');
Route::patch('/updatePeserta/{peserta}', 'PesertaController@update');
Route::delete('/dataPeserta/{peserta}', 'PesertaController@destroy');

Route::post('/loginValidation', 'AuthController@login');
Route::get('/logout', 'AuthController@logout');
