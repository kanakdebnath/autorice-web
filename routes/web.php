<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [FrontendController::class, 'index'])->name('front.index');
Route::get('notice', [FrontendController::class, 'notice'])->name('front.notice');
Route::get('gallery', [FrontendController::class, 'gallery'])->name('front.gallery');
Route::get('contact-us', [FrontendController::class, 'contactUs'])->name('contact.us');
Route::get('about-us', [FrontendController::class, 'aboutUs'])->name('about.us');
Route::get('process', [FrontendController::class, 'process'])->name('about.process');
Route::get('infrastructure', [FrontendController::class, 'infrastructure'])->name('about.infrastructure');
Route::get('company-profile', [FrontendController::class, 'companyProfile'])->name('company.profile');

Route::get('log-out', [DashboardController::class, 'logOut'])->name('log_out');


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dash.index');

    // slider Route section
    Route::resource('sliders', SliderController::class);
});

require __DIR__ . '/auth.php';