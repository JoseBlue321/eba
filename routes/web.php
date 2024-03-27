<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EntregaController;
use App\Http\Controllers\DetalleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    /*++++++++++++++++PROFILE++++++++++++++++++++++++++*/
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    /*++++++++++++++++ENTREGAS++++++++++++++++++++++++++*/
    Route::get('entrega',[HomeController::class,'entrega'])->name('entrega');
    Route::get('devolucion',[HomeController::class,'devolucion'])->name('devolucion');
    Route::get('reporte',[HomeController::class,'reporte'])->name('reporte');

    /*++++++++++++++++ENTREGAS++++++++++++++++++++++++++*/
    Route::get('entregas/create',[HomeController::class,'create'])->name('entregas.create');
    Route::post('entregas',[EntregaController::class,'store'])->name('entregas.store');

    /*++++++++++++++++Detalles++++++++++++++++++++++++++*/
    Route::post('detalles',[DetalleController::class,'store'])->name('detalles.store');


});

require __DIR__.'/auth.php';

