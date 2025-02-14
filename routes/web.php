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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
Route::view('/events', 'events')->name('events');

// Routes untuk admin tanpa middleware auth
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('tentangkami', TentangkamiController::class);
    Route::resource('visimisi', \App\Http\Controllers\VisimisiController::class);
    Route::resource('events', \App\Http\Controllers\EventController::class);
});
