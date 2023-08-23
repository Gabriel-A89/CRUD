<?php

use Illuminate\Support\Facades\Route;
//Inclusão de arquivos no php
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ServicoController;
use \App\Http\Controllers\EmpresaController;
use \App\Http\Controllers\ContatoController;
use \App\Http\Controllers\LocalController;
use \App\Http\Controllers\ComentarioController;
use \App\Http\Controllers\CompraController;
use \App\Http\Controllers\AdvogadoController;
use \App\Http\Controllers\FormController;
use \App\Http\Controllers\Form02Controller;
use \App\Http\Controllers\AgendarController;
use \App\Http\Controllers\AgendaController;

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
//Callback
Route::get('/', function () {
    return view('welcome');
});

/*
* Realiza todas as rotas do Site
* Utiliza o metodo apresentado em sala de aula
*
*/

//Rota Home
Route::get('/home',[HomeController::class, 'home']);
//Rota Serviço
Route::get('/servico',[ServicoController::class, 'servico']);
//Rota Empresa
Route::get('/empresa',[EmpresaController::class, 'empresa']);
//Rota Contato
Route::get('/contato',[ContatoController::class, 'contato']);
//Rota Local
Route::get('/local',[LocalController::class, 'local']); 
//Rota Comentario
Route::get('/comentario',[ComentarioController::class, 'comentario']); 
//Rota Form

Route::get('/adicionar',[FormController::class, 'form']);

Route::get('/agendar',[AgendarController::class, 'agendar']);

Route::get('/agenda',[AgendaController::class, 'agenda']);

Route::post('/adicionar',[CompraController::class, 'add']);
Route::get('/editar/{id}',[CompraController::class, 'showData']);
Route::post('/editar',[CompraController::class, 'update']);

//Rota Compra
Route::get('/compra',[CompraController::class, 'show']);
Route::get('/compra/{id}',[CompraController::class, 'delete']);