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

Route::get('/', "Website\\PageController@index")->name('inicio');
Route::get('/anime/{slug}', "Website\\PageController@anime")->name('ver');
Route::get('/anime/{slug}/assistir/{episodio}','Website\\PageController@assistir')->name('episodio');
Route::get('/categoria/{slug}','Website\\PageController@categoria')->name('categoria');
Route::get('/usuarios','Website\\PageController@listar');
Route::post('/comentar/{slug}','Website\\PageController@comentar')->name('comentar');
Route::get('/entrar','Website\\UserController@entrar')->name('login');
Route::post('/entrar','Website\\UserController@auth')->name('auth');
Route::get('users','Website\\UserController@eu');
