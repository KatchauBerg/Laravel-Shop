<?php
use \App\Http\Controllers\EntrarController;
use App\Http\Controllers\VendasController;
use Illuminate\Support\Facades\Route;

Route::controller(VendasController::class)->group(function () {

    Route::get('/vendas', 'index')->name('vendas.index');
    Route::get('/vendas/criar', 'create')->name('vendas.create');
    Route::post('/vendas/salvar', 'store')->name('vendas.store');
});

Route::controller(EntrarController::class)->group(function () {

    Route::get('/login', 'index')->name('login.index');
    Route::get('/registro','create')->name('registro.create');
    Route::post('/registro/salvar','store')->name('registro.store');
 });

