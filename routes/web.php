<?php
use \App\Http\Controllers\EntrarController;
use \App\Http\Controllers\VendasController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\VendedoresController;
use \App\Http\Controllers\EmailController;


Route::get('/', function () {

    return to_route('vendas.index');
});

Route::resource('/vendas', VendasController::class)->only(['index','create', 'store']);
Route::resource('/vendedores', VendedoresController::class)->only(['index','create','edit','update','store','destroy']);
Route::resource('/mail',EmailController::class)->except(['show']);


Route::get('/email', function () {

    return new \App\Mail\relatorioEmail(
        '1000'
    );
});
