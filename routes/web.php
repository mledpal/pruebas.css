<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PruebasController;
use App\Http\Controllers\YoutubeController;
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
    return view('inicio');
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

Route::controller(YoutubeController::class)->group(function() {
    Route::get('/yt', 'index')->name('yt.index');    
});

Route::controller(PruebasController::class)->group(function() {
    Route::get('/starbucks', 'starbucks')->name('starbucks');
    Route::get('/borderglow' , 'borderglow')->name('borderglow');
    Route::get('/transparentlogin' , 'transparentlogin')->name('transparentlogin');
    Route::get('/menulateral' , 'menulateral')->name('menulateral');
    Route::get('/menumolon' , 'menumolon')->name('menumolon');
    Route::get('/botoneschulos', 'botoneschulos')->name('botoneschulos');
    Route::get('/neonbutton', 'neonbutton')->name('neonbutton');
    Route::get('/olas', 'olas')->name('olas');
    Route::get('/textdistortion', 'textdistortion')->name('textdistortion');
    Route::get('/glowingcheckbox', 'glowingcheckbox')->name('glowingcheckbox');
    Route::get('/contentslider', 'contentslider')->name('contentslider');
    Route::get('/glasseffect', 'glasseffect')->name('glasseffect');
    Route::get('/simpleparalax', 'simpleparalax')->name('simpleparalax');
    Route::get('/showhidepassword', 'showhidepassword')->name('showhidepassword');
    Route::get('/invertedborder', 'invertedborder')->name('invertedborder');
    Route::get('/pagescroll', 'pagescroll')->name('pagescroll');
    Route::get('/tic-tac-toe', 'tictactoe')->name('tictactoe');
    Route::get('/rank-list', 'ranklist')->name('ranklist');
});