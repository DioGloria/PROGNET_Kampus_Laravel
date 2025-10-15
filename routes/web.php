<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/hello', function () {
    return 'Hello Laravel!';
});


Route::get('/hello-controller', [HelloController::class, 'index']);


Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'delete'])->name('mahasiswa.delete');

Route::resource('mahasiswa', MahasiswaController::class);