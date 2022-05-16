<?php

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
    return redirect()->route('login');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\ProfileController::class, 'index'])->name('home');

    Route::get('basicinfo/{user_id}', [App\Http\Controllers\ProfileController::class, 'basicInfo'])->name('basicInfo');
    Route::get('education/{user_id}', [App\Http\Controllers\ProfileController::class, 'education'])->name('education');
    Route::get('family/{user_id}', [App\Http\Controllers\ProfileController::class, 'family'])->name('family');
    Route::get('training/{user_id}', [App\Http\Controllers\ProfileController::class, 'training'])->name('training');
    Route::get('work/{user_id}', [App\Http\Controllers\ProfileController::class, 'work'])->name('work');
});
