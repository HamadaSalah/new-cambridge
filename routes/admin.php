<?php

use App\Http\Controllers\Admin\CalenderController;
use App\Http\Controllers\Admin\CASController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\EventGallController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\FacilCategoryController;
use App\Http\Controllers\Admin\FacilController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\IBDPController;
use App\Http\Controllers\Admin\KGController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MYPController;
use App\Http\Controllers\Admin\PolicesController;
use App\Http\Controllers\Admin\PrimaryController;
use App\Http\Controllers\Admin\ReachUsController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\Admin\WelcomeController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::prefix('admin')->middleware('guest:admin')->name('admin.')->group(function () {
    Route::get('/login', [LoginController::class, 'getLogin'])->name('doLogin');
    Route::post('/login', [LoginController::class, 'doLogin'])->name('login');
});
Route::prefix('admin')->middleware('auth:admin')->name('admin.')->group(function () {
    Route::get('/index', [LoginController::class, 'index'])->name('index');
    Route::resource('/slider', SliderController::class);
    Route::resource('/calender', CalenderController::class);
    Route::resource('/events', EventsController::class);
    Route::resource('/videos', VideosController::class);
    Route::resource('/gallery', GalleryController::class);
    Route::resource('/facil', FacilController::class);
    Route::resource('/welcome', WelcomeController::class);
    Route::resource('/reachus', ReachUsController::class);
    Route::resource('/class', ClassController::class);
    Route::resource('/police', PolicesController::class);
    Route::resource('/eventgallery', EventGallController::class);
    Route::resource('/kg', KGController::class);
    Route::resource('/primary', PrimaryController::class);
    Route::resource('/myp', MYPController::class);
    Route::resource('/cas', CASController::class);
    Route::resource('/ibdp', IBDPController::class);
    Route::resource('/facil_cat', FacilCategoryController::class);
});
