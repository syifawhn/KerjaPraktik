<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;


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



Route::middleware(['auth'])->group(function () {
    //dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');



    //team
    Route::get('team', [TeamController::class, 'index'])->name('team.index');
    Route::get('team/create', [TeamController::class, 'create'])->name('team.create');
    Route::post('sendTeam', [TeamController::class, 'store'])->name('team.store');




    //divisi
    Route::get('divisi', [DivisiController::class, 'index'])->name('divisi.index');
    Route::get('divisi/create', [DivisiController::class, 'create'])->name('divisi.create');
    Route::post('sendDivisi', [DivisiController::class, 'store'])->name('divisi.store');



    //property
    Route::get('property', [PropertyController::class, 'index'])->name('property.index');
    Route::get('property/create', [PropertyController::class, 'create'])->name('property.create');
    Route::post('sendProperty', [PropertyController::class, 'store'])->name('property.store');


    //event
    Route::get('event', [EventController::class, 'index'])->name('event.index');
    Route::get('event/create', [EventController::class, 'create'])->name('event.create');
    Route::post('sendEvent', [EventController::class, 'store'])->name('event.store');
});


require __DIR__ . '/auth.php';
