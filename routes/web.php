<?php

use App\Http\Controllers\ScienceProjectController;
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

Route::get('/scienceprojects', [ScienceProjectController::class,'index'])->name('scienceprojects.index');
Route::get('scienceprojects/create',[ScienceProjectController::class, 'create'])->name('scienceprojects.create');
Route::get('/scienceprojects/{scienceProject}',[ScienceProjectController::class,'show'])->name('scienceprojects.show');
Route::post('/scienceprojects',[ScienceProjectController::class,'store'])->name('scienceprojects.store');
Route::delete('/scienceprojects/{scienceProject}',[ScienceProjectController::class,'destroy'])->name('scienceprojects.destroy');
Route::put('/scienceprojects/{scienceProject}',[ScienceProjectController::class,'update'])->name('scienceprojects.update');
Route::get('/scienceprojects/{scienceProject}/edit',[ScienceProjectController::class,'edit'])->name('scienceprojects.edit');



