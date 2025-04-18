<?php

use App\Http\Controllers\ExpedienteController;
use App\Http\Middleware\RolesMiddleware;
use Illuminate\Support\Facades\Route;

Route::redirect('/','/login');

Auth::routes();

Route::get('/home', [ExpedienteController::class, 'index'])->name('home');

Route::get('/home/show/{expediente}',[ExpedienteController::class,'show'])->name('expediente.mostrar');
Route::post('/home/store/{expediente}',[ExpedienteController::class,'update'])->name('expediente.update');

Route::get('/home/create',[ExpedienteController::class,'create'])->name('expediente.create');
Route::post('/home/create',[ExpedienteController::class,'post']);

Route::get('/home/delete/{expediente}',[ExpedienteController::class,'delete'])->middleware(RolesMiddleware::class)->name('expediente.borrar');