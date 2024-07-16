<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController;

Route::get('/', function () {
    return view('welcome');
});




// Route::get('/forms', [FormsController::class, 'index'])->name('forms.index');
// Route::get('/forms/create', [FormsController::class, 'create'])->name('forms.create');
// Route::post('/forms', [FormsController::class, 'store'])->name('forms.store');
// Route::get('/forms/{form}/edit', [FormsController::class, 'edit'])->name('forms.edit');
// Route::put('/forms/{form}', [FormsController::class, 'update'])->name('forms.update');
// Route::delete('/forms/{form}', [FormsController::class, 'destroy'])->name('forms.destroy');



Route::controller(FormsController::class)->group(function () {
    Route::get('/products', 'index')->name('products.index');

    Route::get('/forms', 'index')->name('forms.index');
    Route::get('/forms/create', 'create')->name('forms.create');
    Route::post('/forms', 'store')->name('forms.store');
    Route::get('/forms/{form}/edit', 'edit')->name('forms.edit');
    Route::put('/forms/{form}', 'update')->name('forms.update');
    Route::delete('/forms/{form}', 'destroy')->name('forms.destroy');
});