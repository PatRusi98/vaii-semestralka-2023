<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\ChampionshipController;
use App\Http\Controllers\Admin\DriversController;
use App\Http\Controllers\Admin\PointSystemController;
use App\Http\Controllers\Admin\TeamsController;
use App\Http\Controllers\Admin\TimeTrialsController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(TeamsController::class)->group(function (){
    Route::get('index', 'index');
    Route::get('pagination-ajax', 'paginationAjax');
});

Route::controller(CarController::class)->group(function (){
    Route::get('index', 'index');
    Route::get('pagination-ajax', 'paginationAjax');
});

Route::controller(PointSystemController::class)->group(function (){
    Route::get('index', 'index');
    Route::get('pagination-ajax', 'paginationAjax');
});

Route::controller(DriversController::class)->group(function (){
    Route::get('index', 'index');
    Route::get('pagination-ajax', 'paginationAjax');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/championships', ChampionshipController::class);
    Route::resource('/time-trials', TimeTrialsController::class);
    Route::resource('/drivers', DriversController::class);
    Route::resource('/teams', TeamsController::class);
    Route::resource('/cars', CarController::class);
    Route::resource('/point-systems', PointSystemController::class);
});

require __DIR__.'/auth.php';
