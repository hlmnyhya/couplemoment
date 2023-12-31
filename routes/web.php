<?php

use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\CMS\GuestBookController;
use App\Http\Controllers\HistoryBonusController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UndanganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CMS\GalleryController;
use App\Http\Controllers\CMS\SoundBankController;
use App\Http\Controllers\CMS\InvitationController;
use App\Http\Controllers\CMS\AssetsController;
use App\Http\Controllers\CMS\ThemeController;

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

Route::get('/', function () {
    return view('frontend.master');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Login page
Route::get('/login-page', [AdminController::class, 'loginPage'])->name('login-page');
// Dashboard admin
Route::get('/admin-dashboard', [AdminController::class, 'AdminDashboard'])->name('admin-dashboard');
// My undangan
Route::get('/my-undangan', [UndanganController::class, 'index'])->name('my-undangan');
// Invoice
Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice');
// Affiliate
Route::get('/affiliate', [AffiliateController::class, 'index'])->name('affiliate');
// History bonus
Route::get('/history-bonus', [HistoryBonusController::class, 'index'])->name('history-bonus');

// CMS Route
Route::controller(GalleryController::class)->group(function () {
    Route::get('/cms/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/cms/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/cms/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/cms/gallery/show/{id}', [GalleryController::class, 'show'])->name('gallery.show');

    // delete gallery
    Route::get('/gallery/delete/{id}', [GalleryController::class, 'deleteGallery'])->name('gallery.delete');

    // delete photo
    Route::get('/photo/delete/{id}', [GalleryController::class, 'deletePhoto'])->name('photo.delete');

    // delete all gallery
    Route::get('/gallery/delete-all', [GalleryController::class, 'deleteAllGallery'])->name('gallery.delete-all');

});
Route::prefix('cms')->group(function () {
    Route::resource('soundbank', SoundBankController::class)->names([
        'index' => 'soundbank.index',
        'create' => 'soundbank.create',
        'store' => 'soundbank.store',
        'edit' => 'soundbank.edit',
        'update' => 'soundbank.update',
        'destroy' => 'soundbank.destroy',
    ]);

    Route::resource('theme', ThemeController::class)->names([
        'index' => 'theme.index',
        'create' => 'theme.create',
        'store' => 'theme.store',
        'edit' => 'theme.edit',
        'update' => 'theme.update',
        'destroy' => 'theme.destroy',
    ]);
    Route::get('/assets/search', [AssetsController::class, 'search'])->name('assets.search');
    Route::resource('assets', AssetsController::class)->names([
        'index' => 'assets.index',
        'create' => 'assets.create',
        'store' => 'assets.store',
        'edit' => 'assets.edit',
        'update' => 'assets.update',
        'destroy' => 'assets.destroy',
    ]);
});

// CMS Route
Route::prefix('cms')->group(function () {
    Route::resource('invitation', InvitationController::class)->names([
        'index' => 'invitation.index',
        'store' => 'invitation.store',
        'edit' => 'invitation.edit',
        'update' => 'invitation.update',
        'delete' => 'invitation.delete',
    ]);
});
Route::get('/get-theme/{id}', [InvitationController::class, 'getTheme']);
Route::get('/get-soundbank/{id}', [InvitationController::class, 'getSoundbank']);


Route::controller(GuestBookController::class)->group(function () {
    Route::get('/cms/guestbook', [GuestBookController::class, 'index'])->name('guestbook.index');
    Route::get('/cms/guestbook/create', [GuestBookController::class, 'create'])->name('guestbook.create');
    Route::post('/cms/guestbook/store', [GuestBookController::class, 'store'])->name('guestbook.store');
    Route::get('/cms/guestbook/edit/{id}', [GuestBookController::class, 'edit'])->name('guestbook.edit');
    Route::patch('/cms/guestbook/update/{id}', [GuestBookController::class, 'update'])->name('guestbook.update');
    Route::delete('/cms/guestbook/destroy/{id}', [GuestBookController::class, 'destroy'])->name('guestbook.destroy');
    Route::post('/cms/guestbook/import', [GuestBookController::class, 'import'])->name('guestbook.import');
});

Route::get('/cms/test-page', [InvitationController::class, 'test'])->name('test-page');

require __DIR__ . '/auth.php';
