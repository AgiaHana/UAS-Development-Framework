<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\CatatanController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PeralatanController;
use App\Http\Controllers\RencanaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/dashboard', function () {
    return view('welcome');
});
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

Route::get('login', [AuthenController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthenController::class, 'login']);
Route::get('register', [AuthenController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthenController::class, 'register'])->name('prosesregister');
Route::get('logout', [AuthenController::class, 'logout'])->name('logout');

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

Route::get('/daftar', function () {
    return view('list.index');
});

Route::get('/catatan', function () {
    return view('catatan.index');
});
Route::get('/tambahcatatan', function () {
    return view('catatan.create');
});
Route::post('catatan', [CatatanController::class, 'store'])->name('catatan.store');
Route::delete('catatan/{id}', [CatatanController::class, 'destroy'])->name('catatan.destroy');
Route::put('catatan/{id}', [CatatanController::class, 'update'])->name('catatan.update');
Route::get('catatan/{id}/edit', [CatatanController::class, 'edit'])->name('catatan.edit');

Route::get('/rencana', function () {
    return view('rencana.index');
});
Route::get('/tambahrencana', function () {
    return view('rencana.create');
});
Route::post('rencana', [RencanaController::class, 'store'])->name('rencana.store');
Route::delete('rencana/{id}', [RencanaController::class, 'destroy'])->name('rencana.destroy');
Route::put('rencana/{id}', [RencanaController::class, 'update'])->name('rencana.update');
Route::get('rencana/{id}/edit', [RencanaController::class, 'edit'])->name('rencana.edit');
Route::get('rencana/{id}/show', [RencanaController::class, 'show'])->name('rencana.show');
Route::post('/items/{id}/done', [RencanaController::class, 'markAsDone'])->name('rencana.done');