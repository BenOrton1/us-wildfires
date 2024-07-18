<?php

use App\Http\Controllers\FireController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FireController::class, 'index'])->name('dashboard');
Route::get('/forest/{forestName}', [FireController::class, 'forestDetails'])->name('forest.detail');