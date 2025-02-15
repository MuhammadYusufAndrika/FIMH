<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\VisimisiController;
use App\Http\Controllers\Controller;
use App\Models\VisiMisi;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\EventController;
use App\Models\Events;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\AspirasiExportController;
use App\Http\Controllers\BeritaacaraController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kepengurusan', function () {
    return view('kepengurusan');
})->name('kepengurusan');

Route::get('/banksoal', function () {
    return view('banksoal');
})->name('banksoal');

// Route untuk menampilkan detail kepengurusan
Route::get('/kepengurusan/{id}', [\App\Http\Controllers\KepengurusanController::class, 'show'])->name('kepengurusan.show');

Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
Route::view('/events', 'events')->name('events');

Route::get('/beritaacara', [BeritaacaraController::class, 'index'])->name('beritaacara');
Route::get('/beritaacara/{id}', [BeritaacaraController::class, 'show'])->name('beritaacara.show');


Route::post('/aspirasi', [AspirasiController::class, 'store'])->name('aspirasi.store');
Route::post('/admin/aspirasi/store', [AspirasiController::class, 'store'])->name('admin.aspirasi.store');
Route::get('/admin/aspirasi/export', [AspirasiController::class, 'export'])->name('admin.aspirasi.export');
Route::get('/export-aspirasi', [AspirasiExportController::class, 'export'])->name('aspirasi.export');
Route::post('/aspirasi/store', [AspirasiController::class, 'store'])->name('aspirasi.store');

// Routes untuk admin tanpa middleware auth
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('tentangkami', TentangkamiController::class);
    Route::resource('visimisi', \App\Http\Controllers\VisimisiController::class);
    Route::resource('events', \App\Http\Controllers\EventController::class);
    Route::resource('kepengurusan', \App\Http\Controllers\KepengurusanController::class);
    Route::resource('/admin/aspirasi', \App\Http\Controllers\AspirasiController::class);
    Route::resource('beritaacara', \App\Http\Controllers\BeritaacaraController::class);
    // Route::post('/aspirasi/store', [AspirasiController::class, 'store'])->name('aspirasi.store');
    // Route::get('/export-aspirasi', [AspirasiExportController::class, 'export'])->name('aspirasi.export');
});

