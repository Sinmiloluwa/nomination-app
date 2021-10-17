<?php

use Illuminate\Support\Facades\URL;
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
    return view('nominee.create');
});

Route::get('/nominee/accept', [App\Http\Controllers\NomineeController::class, 'create'])->name('nominee.accept');
Route::post('/nominee/create', [App\Http\Controllers\NomineeController::class, 'store'])->name('nominee.store');
Route::get('/nomination/create', [App\Http\Controllers\NominationController::class, 'create'])->name('nomination.create');
Route::post('/nomination/add', [App\Http\Controllers\NominationController::class, 'store'])->name('nomination.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
