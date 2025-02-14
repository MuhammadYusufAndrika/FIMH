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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
Route::view('/events', 'events')->name('events');
Route::get('/admin/aspirasi', [AspirasiController::class, 'index'])->name('admin.aspirasi.index');
Route::post('/aspirasi', [AspirasiController::class, 'store'])->name('aspirasi.store');
Route::get('/export-aspirasi', [AspirasiExportController::class, 'export'])->name('aspirasi.export');
Route::post('/admin/aspirasi/store', [AspirasiController::class, 'store'])->name('admin.aspirasi.store');
Route::get('/admin/aspirasi/export', [AspirasiController::class, 'export'])->name('admin.aspirasi.export');



// Routes untuk admin tanpa middleware auth
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('tentangkami', TentangkamiController::class);
    Route::resource('visimisi', \App\Http\Controllers\VisimisiController::class);
    Route::resource('events', \App\Http\Controllers\EventController::class);
    Route::post('/aspirasi/store', [AspirasiController::class, 'store'])->name('aspirasi.store');
});

