<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
//login
 Route::get('/',[AdminController::class,'dash']);
    Route::get('logina',[AdminController::class,'login']);
    Route::post('logina',[AdminController::class,'cekloginA']);
    Route::get('loginu',[UserController::class,'loginU']);
    Route::post('loginu',[UserController::class,'cekloginU']);
    Route::get('logout',[AdminController::class,'logout']);

    // Buku
    Route::get('dashboard',[AdminController::class,'dash']);
    Route::get('databuku',[AdminController::class,'databukua']);
    Route::get('tambahbuku',[AdminController::class,'tambahbukua']);
    Route::post('tambahbuku',[AdminController::class,'tambahinbukua']);
    Route::get('hapus/{id}',[AdminController::class,'hapusbuku']);
    Route::get('edit/{id}',[AdminController::class,'editbuku']);
    Route::post('edit/{id}',[AdminController::class,'editbukua']);
   /// Kategori Buku
    Route::get('datakategori',[AdminController::class,'datakategoria']);
    Route::get('tambahkategori',[AdminController::class,'tambahkategoria']);
    Route::post('tambahkategori',[AdminController::class,'tambahinkategoria']);
    Route::get('khapus/{id}',[AdminController::class,'hapuskategori']);
    Route::get('kedit/{id}',[AdminController::class,'editkategori']);
    Route::post('kedit/{id}',[AdminController::class,'editkategoria']);
   //Kategori Relasi
    Route::get('datarelasi',[AdminController::class,'datarelasia']);
    Route::get('tambahrelasi',[AdminController::class,'tambahrelasia']);
    Route::post('tambahrelasi',[AdminController::class,'tambahinrelasia']);
    Route::get('rhapus/{id}',[AdminController::class,'hapusrelasi']);
    Route::get('redit/{id}',[AdminController::class,'editrelasi']);
    Route::post('redit/{id}',[AdminController::class,'editrelasia']);

    // Admin
    Route::get('dataadmin',[AdminController::class,'dataadmina']);
    Route::get('tambahadmin',[AdminController::class,'tambahadmina']);
    Route::post('tambahadmin',[AdminController::class,'tambahinadmina']);
    Route::get('ahapus/{id}',[AdminController::class,'hapusadmin']);
    Route::get('aedit/{id}',[AdminController::class,'editadmin']);
    Route::post('aedit/{id}',[AdminController::class,'editadmina']);

    // //siswa
    // Route::get('siswa',[AdminController::class,'datatabel3']);
    // Route::get('snambah',[AdminController::class,'tambahsis']);
    // Route::post('snambah',[AdminController::class,'tambahsiswa']);
    // Route::get('shapus/{id}',[AdminController::class,'hapussiswa']);
    // Route::get('/sedit/{nisn}',[AdminController::class,'editsiswa']);
    // Route::post('/sedit/{nisn}',[AdminController::class,'updatesiswa']);


    Route::get('a', function () {
      return view ('Peminjam.DashUser');
  });
    Route::get('i', function () {
      return view ('acnotif');
  });