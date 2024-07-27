<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\Auth\AuthenController;
use App\Http\Controllers\AuthenController as ControllersAuthenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PeralatanController;
use App\Http\Controllers\RekapController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/list', function () {
    return view('peralatan.index');
});
Route::get('/tambahalat', function () {
    return view('peralatan.create');
});
Route::get('/editalat', function () {
    return view('peralatan.edit');
});
Route::post('peralatan', [PeralatanController::class, 'store'])->name('peralatan.store');
Route::delete('peralatan/{id}', [PeralatanController::class, 'destroy'])->name('peralatan.destroy');
Route::put('peralatan/{id}', [PeralatanController::class, 'update'])->name('peralatan.update');
Route::get('peralatan/{id}/edit', [PeralatanController::class, 'edit'])->name('peralatan.edit');


Route::get('/rekap', function () {
    return view('rekap.index');
});
Route::get('/viewrekap', function () {
    return view('rekap.view');
});

Route::get('/profil', function () {
    return view('profil.index');
});
Route::get('/editprofil', function () {
    return view('profil.edit');
});
Route::get('/tambahprofil', function () {
    return view('profil.create');
});
Route::post('profil', [AnggotaController::class, 'store'])->name('anggota.store');
Route::delete('profil/{id}', [AnggotaController::class, 'destroy'])->name('anggota.destroy');
Route::put('profil/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
Route::get('profil/{id}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');


// Route::get('/peminjaman', function () {
//     return view('peminjaman.index');
// });
Route::get('nama_peminjam', [AnggotaController::class, 'selectnama'])->name('anggota.selectnama');

Route::get('login', [ControllersAuthenController::class, 'showLoginForm'])->name('login');
Route::post('login', [ControllersAuthenController::class, 'login']);
Route::get('register', [ControllersAuthenController::class, 'showRegisterForm'])->name('register');
Route::post('register', [ControllersAuthenController::class, 'register'])->name('prosesregister');
Route::get('logout', [ControllersAuthenController::class, 'logout'])->name('logout');

Route::get('selectmapala', [PeminjamanController::class, 'mapala'])->name('mapala');
Route::get('selectpeminjam/{id}', [PeminjamanController::class, 'peminjam']);
// Route::get('dashboard', function () {
//     return view('welcome');
// })->middleware('auth');

// Route::get('/peminjaman/create', [PeminjamanController::class, 'create'])->name('peminjaman.create');
// Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
// Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');

Route::get('peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::post('peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::delete('peminjaman/{id}', [PeminjamanController::class, 'destroy'])->name('peminjaman.destroy');