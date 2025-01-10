<?php
use \App\Http\Controllers\EntrarController;
use \App\Http\Controllers\VendasController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\VendedoresController;

Route::controller(VendasController::class)->group(function () {

    Route::get('/vendas', 'index')->name('vendas.index');
    Route::get('/vendas/criar', 'create')->name('vendas.create');
    Route::post('/vendas/salvar', 'store')->name('vendas.store');
});

Route::controller(EntrarController::class)->group(function () {

    Route::get('/', 'index')->name('login.index');
    Route::get('/registrar','create')->name('registro.create');
    Route::post('/registrar/salvar','store')->name('registro.store');
 });

Route::controller( VendedoresController::class)->group(function () {

    Route::get('/vendedores/lista', 'index')->name('vendedores.lista');
    Route::get('/vendedores/editar', 'edit')->name('vendedores.edit');
    Route::get('/vendedores/atualizar', 'update')->name('vendedores.update');
    Route::post('/vendedores/delete', 'destroy')->name('vendedores.destroy');
});
