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
    Route::get('team/edit/{team}', [TeamController::class, 'edit'])->name('team.edit');
    Route::patch('team/update/{team}', [TeamController::class, 'update'])->name('team.update');

    //divisi
    Route::get('divisi', [DivisiController::class, 'index'])->name('divisi.index');
    Route::get('divisi/create', [DivisiController::class, 'create'])->name('divisi.create');
    Route::post('sendDivisi', [DivisiController::class, 'store'])->name('divisi.store');
    Route::get('divisi/edit/{divisi}', [DivisiController::class, 'edit'])->name('divisi.edit');
    Route::patch('divisi/update/{divisi}', [DivisiController::class, 'update'])->name('divisi.update');
    Route::get('/delete/{divisi}', [DivisiController::class, 'delete'])->name('divisi.delete');

    //property
    Route::get('property', [PropertyController::class, 'index'])->name('property.index');
    Route::get('property/create', [PropertyController::class, 'create'])->name('property.create');
    Route::get('property/edit/{property}', [PropertyController::class, 'edit'])->name('property.edit');
    Route::get('property/update/{property}', [PropertyController::class, 'update'])->name('property.update');
    Route::post('sendProperty', [PropertyController::class, 'store'])->name('property.store');

    //event
    Route::get('event', [EventController::class, 'index'])->name('event.index');
    Route::get('event/create', [EventController::class, 'create'])->name('event.create');
    Route::get('event/edit/{event}', [eventController::class, 'edit'])->name('event.edit');
    Route::get('event/update/{event}', [eventController::class, 'update'])->name('event.update');
    Route::post('sendEvent', [EventController::class, 'store'])->name('event.store');
});

require __DIR__ . '/auth.php';
