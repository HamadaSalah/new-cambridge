<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\CalenderEvent;
use App\Models\KG;
use App\Models\Tut;
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


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/media', [HomeController::class, 'media'])->name('media');
Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/reach-us', [HomeController::class, 'reachus'])->name('reachus');
Route::get('/school-ploice', [HomeController::class, 'schoolPolice'])->name('schoolPolice');
Route::get('/tuition-fees', [HomeController::class, 'tuitionFees'])->name('tuitionFees');
Route::get('/apply-now', [HomeController::class, 'applyNow'])->name('applyNow');
Route::get('/primary', [HomeController::class, 'primary'])->name('primary');
Route::get('/KG', [HomeController::class, 'KG'])->name('KG');
Route::get('/MYP', [HomeController::class, 'MYP'])->name('MYP');
Route::get('/IBDP', [HomeController::class, 'IBDP'])->name('IBDP');
Route::get('/CAS', [HomeController::class, 'CAS'])->name('CAS');
Route::get('/calender', [HomeController::class, 'calender'])->name('calender');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/gallery/{id}', [HomeController::class, 'getGallery'])->name('getGallery');
Route::get('/facilities', [HomeController::class, 'facilities'])->name('facilities');
Route::get('/facilities/{id}', [HomeController::class, 'getFacilities'])->name('getFacilities');
Route::post('/emailToUs', [HomeController::class, 'emailToUs'])->name('emailToUs');
Route::get('/polices', [HomeController::class, 'polices'])->name('polices');
Route::get('/unver-cons', [HomeController::class, 'unver_cons'])->name('unver_cons');
Route::get('yell', function(){
    $cal = CalenderEvent::where('type', 'Event')->get();
    foreach($cal as $mycal) {
        $mycal->update([
            'color' => '#FFFF00'
        ]);

    }
});
Route::get('kgss', function(){
        // KG::create([
        //     'sec1_head' => 'Want to know more
        //     about Kindergarten !',
        //     'sec1_p' => 'Students in the Secondary section are being prepared for the International Baccalaureate Diploma Programme. At different points in the upper grades; students will start their journey into the IB with activities in ATL Skills, internal assessments, CAS and TOK.

        //     The IB Programme is known and recognized worldwide as the finest pre-university education available. As a result, students who graduate with IB credentials have the choice to enter Jordanian universities or most universities aboard.',
        //     'sec1_img' => 'assets/images/Website pix/MYP/5Q7C9998.jpg',
        //     'sec2_head' => 'Want to know more about ?',
        //     'sec2_p' => 'Cambridge High School started implementing the IB middle years programme (MYP) in September 2016. It has been announced an authorized MYP world school by the International Baccalaureate Organization in December. 13th. 2018.',
        //     'sec2_img' => 'assets/images/Website pix/MYP/5Q7C8615.jpg',
        //     'sec3_head' => 'Want to know more about !',
        //     'sec3_p' => 'Cambridge High School started',
        //     'sec3_img' => 'assets/images/Website pix/MYP/5Q7C9998.jpg',
        //     'sec4_head' => 'Want to know more about !',
        //     'sec4_p' => 'We try to provide a developmentally appropriate curriculum that enhances the social, emotional, intellectual, aesthetic and physical development of each child while nurturing autonomy, self-esteem and success.

        //     In the Kindergarten and international sections of the upper grades, the English language is focused on throughout the day. At the same time, Arabic is reinforced with daily lessons.

        //     On entering grade one, students are fluent orally in both English and Arabic. Class size is kept to a maximum of 25 with one main teacher and in Kindergarten with an',
        //     'sec4_img' => 'assets/images/Website pix/IBDP/5Q7C3512.jpg',
        // ]);
        opcache_reset();
});