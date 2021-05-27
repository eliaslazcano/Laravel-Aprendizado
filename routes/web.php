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

Route::get('/', 'PrincipalController@principal')->name('site.index'); //Nomenclatura: Controller@action
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () { return 'Clientes'; })->name('app.clientes'); //URL: /app/clientes
    Route::get('/fornecedores', function () { return 'Fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function () { return 'Produtos'; })->name('app.produtos');
});

Route::redirect('/formulario', '/contato'); //Redirecionamento via URL
Route::get('/emcontato', function () { //Redirecionamento por nome da rota
    return redirect()->route('site.contato');
});
