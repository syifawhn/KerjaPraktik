<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('dashboard', [DashboardController::class, 'index']);
Route::get('event', [EventController::class, 'index']);
Route::get('event/create', [EventController::class, 'create']);
Route::get('property', [PropertyController::class, 'index']);
Route::get('property/create', [EventController::class, 'create']);
Route::get('team', [TeamController::class, 'index']);
Route::get('team/create', [EventController::class, 'create']);

require __DIR__.'/auth.php';
