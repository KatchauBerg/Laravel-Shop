<?php
use \App\Http\Controllers\EntrarController;
use App\Http\Controllers\VendasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/vendas', [VendasController::class, 'index']);
Route::get('/vendas/criar', [VendasController::class, 'create']);
Route::post('/vendas/salvar', [VendasController::class, 'store']);

Route::get('/dashboard', function () {

    echo "rota dashboard";
});

Route::controller(EntrarController::class)->group(function () {

    Route::get('/login', 'index')->name('login.index');
    Route::get('/registro','create')->name('registro.create');
    Route::post('/registro/salvar','store')->name('registro.store');
 });

