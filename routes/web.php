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
    return view('home');
});

Route::get('/clientes/novo', [App\Http\Controllers\ClientesController::class, 'create']);
Route::post('/clientes/novo', [App\Http\Controllers\ClientesController::class, 'store'])->name('salvar_cliente');
Route::get('/clientes/ver', [App\Http\Controllers\ClientesController::class, 'show']);
Route::get('/clientes/del{id}',[App\Http\Controllers\ClientesController::class, 'destroy'])->name('excluir_cliente');
Route::get('/clientes/edit{id}',[App\Http\Controllers\ClientesController::class, 'edit'])->name('editar_cliente');
Route::post('/clientes/edit{id}',[App\Http\Controllers\ClientesController::class, 'update'])->name('atualizar_cliente');
Route::get('/clientes/saldo',[App\Http\Controllers\ClientesController::class, 'saldo']);

Route::get('/pagamentos/novo', [App\Http\Controllers\PagamentosController::class, 'create']);
Route::post('/pagamentos/novo', [App\Http\Controllers\PagamentosController::class, 'store'])->name('salvar_pagamento');
Route::get('/pagamentos/ver', [App\Http\Controllers\PagamentosController::class, 'show']);
Route::get('/pagamentos/edit{id}',[App\Http\Controllers\PagamentosController::class, 'edit'])->name('editar_pagamento');
Route::post('/pagamentos/edit{id}',[App\Http\Controllers\PagamentosController::class, 'update'])->name('atualizar_pagamento');
Route::get('/pagamentos/saldo',[App\Http\Controllers\PagamentosController::class, 'saldo']);