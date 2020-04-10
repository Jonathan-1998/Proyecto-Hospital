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
    return view('welcome');
})->name('inicio');




Route::resource('consulta', 'ConsultaController');
Route::resource('diagnostico', 'DiagnosticoController');
Route::resource('hospital', 'HospitalController');
Route::resource('laboratorio', 'LaboratorioController');
Route::resource('medico', 'MedicoController');
Route::resource('paciente', 'PacienteController');
Route::resource('sala', 'SalaController');
Route::resource('servicio', 'ServicioController');