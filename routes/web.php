<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);
    Route::get('locations',[App\Http\Controllers\Admin\DashboardController::class,'location']);
    Route::get('tents',[App\Http\Controllers\Admin\DashboardController::class,'tents']);

    // Route::get('locations/create',[App\Http\Controllers\Admin\DashboardController::class,'create']);
    Route::get('locations/delete', function(){
        return view('livewire.location-delete-component');
    })->name('location-delete');

    Route::get('locations/create', function(){
        return view('livewire.location-add-form-component');
    })->name('location-add');





});