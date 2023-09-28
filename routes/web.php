<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers;
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



// Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
// Route::get('/dashboard', [DashboardController::class, 'index']);


Route::get('/about', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', [App\Http\Controllers\LoginController::class, 'index'])->name('login');

//route login

Route::group(['prefix' => 'user'], function () {
    Route::post('/authenticate', [App\Http\Controllers\LoginController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
});

// Route kategori
Route::group(['prefix' => 'admin'], function () {
    Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('list.kategori');
    Route::get('/kategori/add', [App\Http\Controllers\KategoriController::class, 'add'])->name('add.kategori');
    Route::post('/kategori/post', [App\Http\Controllers\KategoriController::class, 'post'])->name('post.kategori');
    Route::get('/kategori/get', [App\Http\Controllers\KategoriController::class, 'getKategori'])->name('get.kategori');
    Route::get('/kategori/edit/{id}', [App\Http\Controllers\KategoriController::class, 'edit'])->name('edit.kategori');
    Route::patch('/kategori/update/{id}', [App\Http\Controllers\KategoriController::class, 'update'])->name('update.kategori');
    Route::get('/kategori/delete/{id}', [App\Http\Controllers\KategoriController::class, 'delete'])->name('delete.kategori');
});

// Route Event
Route::group(['prefix' => 'admin'], function () {
    Route::get('/event', [App\Http\Controllers\EventController::class, 'index'])->name('list.event');
    Route::get('/event/add', [App\Http\Controllers\EventController::class, 'add'])->name('add.event');
    Route::post('/event/post', [App\Http\Controllers\EventController::class, 'post'])->name('post.event');
    Route::get('/event/get', [App\Http\Controllers\EventController::class, 'getEvent'])->name('get.event');
    Route::get('/event/edit/{id}', [App\Http\Controllers\EventController::class, 'edit'])->name('edit.event');
    Route::patch('/event/update/{id}', [App\Http\Controllers\EventController::class, 'update'])->name('update.event');
    Route::get('/event/delete/{id}', [App\Http\Controllers\EventController::class, 'delete'])->name('delete.event');
    
});

// Route Peserta
Route::group(['prefix' => 'admin'], function () {
    Route::get('/peserta', [App\Http\Controllers\PesertaController::class, 'index'])->name('list.peserta');
    Route::get('/peserta/add', [App\Http\Controllers\PesertaController::class, 'add'])->name('add.peserta');
    Route::post('/peserta/post', [App\Http\Controllers\PesertaController::class, 'post'])->name('post.peserta');
    Route::get('/peserta/get', [App\Http\Controllers\PesertaController::class, 'getPeserta'])->name('get.peserta');
    Route::get('/peserta/edit/{id}', [App\Http\Controllers\PesertaController::class, 'edit'])->name('edit.peserta');
    Route::get('/peserta/view/{id}', [App\Http\Controllers\PesertaController::class, 'view'])->name('view.peserta');
    Route::patch('/peserta/update/{id}', [App\Http\Controllers\PesertaController::class, 'update'])->name('update.peserta');
    Route::get('/peserta/delete/{id}', [App\Http\Controllers\PesertaController::class, 'delete'])->name('delete.peserta');
    
});


// Route Ruang
Route::group(['prefix' => 'admin'], function () {
    Route::get('/ruang', [App\Http\Controllers\RuangController::class, 'index'])->name('list.ruang');
    Route::get('/ruang/add', [App\Http\Controllers\RuangController::class, 'add'])->name('add.ruang');
    Route::post('/ruang/post', [App\Http\Controllers\RuangController::class, 'post'])->name('post.ruang');
    Route::get('/ruang/get', [App\Http\Controllers\RuangController::class, 'getRuang'])->name('get.ruang');
    Route::get('/ruang/edit/{id}', [App\Http\Controllers\RuangController::class, 'edit'])->name('edit.ruang');
    Route::patch('/ruang/update/{id}', [App\Http\Controllers\RuangController::class, 'update'])->name('update.ruang');
    Route::get('/ruang/delete/{id}', [App\Http\Controllers\RuangController::class, 'delete'])->name('delete.ruang');
    
});


// Route presensi
Route::group(['prefix' => 'admin'], function () {
    Route::get('/presensi', [App\Http\Controllers\PresensiController::class, 'index'])->name('list.presensi');
    Route::get('/presensi/add', [App\Http\Controllers\PresensiController::class, 'webCame'])->name('add.presensi');
    Route::post('/presensi/post', [App\Http\Controllers\PresensiController::class, 'post'])->name('post.presensi');
    Route::get('/presensi/get', [App\Http\Controllers\PresensiController::class, 'getPresensi'])->name('get.presensi');
  
    Route::get('/presensi/delete/{id}', [App\Http\Controllers\PresensiController::class, 'delete'])->name('delete.presensi');
    
});
