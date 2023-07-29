<?php

use App\Http\Controllers\Backend\AboutUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\WithUsController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Backend\CommunicationController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\ProductController;
use App\Models\Backend\Gallery;

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



Route::post('contact-us', [ContactUsController::class, 'store'])->name('contact.store');





Route::get('log-out', [DashboardController::class, 'logOut'])->name('log_out');


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dash.index');

    // slider Route section
    Route::resource('sliders', SliderController::class);

    // service route section
    Route::resource('services', ServiceController::class);

    // Communication Route Section
    Route::resource('communications', CommunicationController::class);

    // Notice Route Section
    Route::resource('notices', NoticeController::class);

    // About Us Route
    Route::get('about/us', [AboutUsController::class, 'create'])->name('about.create');
    Route::post('about', [AboutUsController::class, 'store'])->name('about.store');

    // Gellary section
    // Route::resource('galleries', GalleryController::class);
    Route::get('gallery-photos', [GalleryController::class, 'index'])->name('gallery-photos.index');
    Route::get('gallery-photos/create', [GalleryController::class, 'create'])->name('gallery-photos.create');
    Route::post('gallery-photos', [GalleryController::class, 'store'])->name('gallery-photos.store');
    Route::get('gallery-photos/{id}/edit', [GalleryController::class, 'edit'])->name('gallery-photos.edit');
    Route::put('gallery-photos/{id}', [GalleryController::class, 'update'])->name('gallery-photos.update');
    Route::delete('gallery-photos/{id}', [GalleryController::class, 'destroy'])->name('gallery-photos.destroy');

    //Product Section
    Route::resource('products', ProductController::class);

    // Setting Section
    Route::get('settings/general', [SettingsController::class, 'general_settings'])->name('settings.general');
    Route::post('settings', [SettingsController::class, 'store'])->name('settings');
});

require __DIR__ . '/auth.php';
