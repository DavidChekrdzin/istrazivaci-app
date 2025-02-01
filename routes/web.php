<?php

use App\Http\Controllers\ScientistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/scientist', [ScientistController::class,'index'])->name('scientist.index');
