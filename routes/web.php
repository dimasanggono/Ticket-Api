<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController;
use Illuminate\Routing\RouteRegistrar;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/event/create', [EventController::class, 'create'])->name('event-create');
Route::get('/event/{id}', [EventController::class, 'show'])->name('event-show');
Route::post('/event/create', [EventController::class, 'store'])->name('event-show');
