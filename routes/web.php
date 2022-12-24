<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\Controller;
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

// Route::get('/', function () {
//     return view('welcome');
// });

route::view('/', 'auth.login');

//register partner
Route::get('register/partner', [PartnerController ::class, 'createStepOne'])->name('partner.registerOne');
Route::post('register/partner/store', [PartnerController ::class, 'storeStepOne'])->name('partner.one.store');
Route::get('register/partner/two', [PartnerController ::class, 'createStepTwo'])->name('partner.registerTwo');
Route::post('register/partner/store-two', [PartnerController ::class, 'storeStepTwo'])->name('partner.two.store');

//partner
Route::group(['middleware' => ['is_partner']], function() {
    Route::get('partner/home', [PartnerController ::class, 'index'])->name('partner.index');
});

//user
Route::group(['middleware' => ['is_user']], function() {
Route::get('user/home', [Controller ::class, 'index'])->name('user.index');
});

//admin
Route::group(['middleware' => ['is_admin']], function() {
Route::get('admin/home', [Controller ::class, 'indexAdmin'])->name('admin.index');
});

//booking
Route::get('/package', [BookingController ::class, 'index'])->name('booking.package');
Route::get('package/book/{id}', [BookingController ::class, 'book'])->name('booking.book');
Route::post('package/book/store', [BookingController ::class, 'bookStepOne'])->name('booking.store.one');
Route::get('package/booknow', [BookingController ::class, 'bookNow'])->name('booking.bookNow');
Route::post('package/booknow/store', [BookingController ::class, 'bookStepTwo'])->name('booking.bookNow.store');
Route::get('booknow/payment', [BookingController ::class, 'payment'])->name('booking.payment');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
