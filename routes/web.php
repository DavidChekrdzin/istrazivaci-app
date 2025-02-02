<?php

use App\Http\Controllers\ScientistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/scientist', [ScientistController::class,'index'])->name('scientist.index');
Route::get('scientists/create',[ScientistController::class, 'create'])->name('scientists.create');
Route::get('/scientists/{scientist}',[ScientistController::class,'show'])->name('scientists.show');
Route::post('/scientists',[ScientistController::class,'store'])->name('scientists.store');
Route::delete('/scientists/{scientist}',[ScientistController::class,'destroy'])->name('scientists.destroy');
Route::put('/scientists/{scientist}',[ScientistController::class,'update'])->name('scientists.update');
Route::get('/scientists/{scientist}/edit',[ScientistController::class,'edit'])->name('scientists.edit');



