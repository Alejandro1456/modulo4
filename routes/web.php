<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\DentistaController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('pacientes', PacienteController::class);
Route::resource('dentistas', DentistaController::class);
Route::resource('citas', CitaController::class);

Route::controller(DentistaController::class)->group(function(){
    Route::get('dentista.index');
    
    Route::get('dentista-export','export')->name('dentista.export');
});
Route::controller(PacienteController::class)->group(function(){
    Route::get('paciente.index');
    
    Route::get('paciente-export','export')->name('paciente.export');
});