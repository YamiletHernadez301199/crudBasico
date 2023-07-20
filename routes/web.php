<?php

use App\Http\Controllers\Personas;
use Illuminate\Support\Facades\Route;


//Personas es el nombre de mi controlador
Route::get('/',[Personas::class,'index']);
Route::get('/create',[Personas::class,'create']);
Route::post('/store',[Personas::class,'store']);
Route::get('/show/{id}',[Personas::class, 'show'])->name('show');
Route::delete('/destroy/{id}', [Personas::class, 'destroy'])->name('destroy');
Route::get('/edit/{id}', [Personas::class, 'edit'])->name('edit');
Route::put('/update/{id}', [Personas::class, 'update'])->name('update');