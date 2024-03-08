<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', [DashboardController::class, 'showDashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/adminDashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::resource('categories', CategoriesController::class);
});
Route::middleware(['auth', 'role:Organizer'])->group(function () {
    Route::get('/organizerDashboard', [OrganizerController::class, 'index'])->name('organizer.dashboard');
    //Event Add
    Route::get('/organizerEvents',[EventsController::class, 'index'])->name('organizer.event');
    Route::post('/organizerEvents/store', [EventsController::class, 'store'])->name('organizer.event.store');
});
// Route::middleware(['auth', 'role:Client'])->group(function () {
//     Route::get('/clientDashboard', [ClientController::class, 'index'])->name('client.dashboard');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
