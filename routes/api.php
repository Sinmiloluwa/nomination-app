<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/nominee/create', [App\Http\Controllers\NomineeController::class, 'store']);
Route::post('/add', [App\Http\Controllers\NominationController::class, 'store']);
// Route::get('/categories', [App\Http\Controllers\NominationController::class, 'create']);
Route::get('/categories', [App\Http\Controllers\NominationController::class, 'getIndividualCategories']);
Route::get('/categories/company', [App\Http\Controllers\NominationController::class, 'getCompanyCategories']);
