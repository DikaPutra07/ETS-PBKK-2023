<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\dataPegawaiController;
use App\Http\Controllers\ProfileController;
use App\Models\jenisBarang;
use App\Models\kondisiBarang;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'jenis' => jenisBarang::all()->collect(),
        'kondisi' => kondisiBarang::all()->collect()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::post('/form', [dataPegawaiController::class, 'store'])->middleware(['auth', 'verified'])->name('post-pegawai');
// Route::get('/data-barang', [dataPegawaiController::class, 'getAllData'])->middleware(['auth', 'verified'])->name('pegawai');

Route::post('/form', [barangController::class, 'store'])->middleware(['auth', 'verified'])->name('post-barang');
Route::get('/data-barang', [barangController::class, 'getAllData'])->middleware(['auth', 'verified'])->name('barang');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
