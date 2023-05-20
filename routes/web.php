<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TeamController;


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
Route::get('property/create', [PropertyController::class, 'create']);
Route::get('team', [TeamController::class, 'index']);
Route::get('team/create', [TeamController::class, 'create']);

require __DIR__.'/auth.php';
