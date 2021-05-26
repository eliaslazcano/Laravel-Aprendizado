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

Route::get('/', function () { echo 'Principal'; });
Route::get('/contato', function () { echo 'Contato'; });
Route::get('/sobre-nos', function () { echo 'Sobre Nós'; });
