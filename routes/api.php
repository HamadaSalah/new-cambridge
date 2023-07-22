<?php

use App\Http\Controllers\HomeController;
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
Route::post('/tut', [HomeController::class, 'getTut'])->name('getTut');
Route::post('/getcalenders', [HomeController::class, 'getcalenders'])->name('getcalenders');
Route::get('/getPayments/{id}', [\App\Http\Controllers\Admin\ClassController::class, 'getPayments'])->name('getPayments');
