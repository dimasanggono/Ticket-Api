<?php

use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\TicketCategory;
use App\Http\Controllers\Admin\TicketController;
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

Route::get("/event", [EventController::class, 'index']);
Route::get("/event/{id}", [EventController::class, 'show']);
Route::post("/event/create", [EventController::class, 'store']);
Route::put("/event/update/{id}", [EventController::class, 'update']);
Route::delete("/event/delete/{id}", [EventController::class, 'delete']);


Route::get("/ticket-category", [TicketCategory::class, 'index']);
Route::post("/ticket-category/create", [TicketCategory::class, 'Create']);
Route::get("/ticket-category/{id}", [TicketCategory::class, 'show']);
Route::put("/ticket-category/{id}", [TicketCategory::class, 'update']);
Route::delete("/ticket-category/{id}", [TicketCategory::class, 'delete']);


Route::get('/ticket', [TicketController::class, 'index'])->name('ticket');
Route::post('/ticket/create', [TicketController::class, 'create']);
Route::put('/ticket/{id}', [TicketController::class, 'show']);
