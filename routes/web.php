<?php

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
    return view('homepage');
})->name('homepage');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/studentfirm', function () {
    return view('studentfirm');
})->name('studentfirm');

Route::get('/cv', function () {
    return view('cv');
})->name('cv');

Route::get('/õpitee', function () {
    return view('õpitee');
})->name('õpitee');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); 

Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');

require __DIR__.'/auth.php';
