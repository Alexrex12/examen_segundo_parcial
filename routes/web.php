<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPaginas;

Route ::get('/',[ControladorPaginas::class,'fFormulario'])->name('NFormulario');
Route ::get('/consultas',[ControladorPaginas::class,'fConsultas'])->name('NConsultas');

Route::post('/guardarRecuerdos',[ControladorPaginas::class,'procesarRecuerdos'])->name('NProcesar');