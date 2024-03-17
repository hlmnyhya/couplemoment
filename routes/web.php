<?php

use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\CMS\GuestBookController;
use App\Http\Controllers\HistoryBonusController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UndanganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CMS\SoundBankController;
use App\Http\Controllers\CMS\InvitationController;
use App\Http\Controllers\CMS\AssetsController;
use App\Http\Controllers\CMS\GalleryController;
use App\Http\Controllers\CMS\ThemeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserThemeController;
use App\Models\Theme;

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
    $themes = Theme::all(); // Mengambil semua data dari tabel tema

    return view('frontend.master', ['themes' => $themes]);
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/change-password', [ProfileController::class, 'showChangePasswordForm'])->name('profile.change-password');
    Route::post('/profile/update-password', [ProfileController::class, 'changePassword'])->name('profile.update-password');
})->middleware(['auth', 'verified']);;
// Login page
Route::get('/login-page', [AdminController::class, 'loginPage'])->name('login-page');
// Dashboard admin
Route::get('/admin-dashboard', [AdminController::class, 'AdminDashboard'])->middleware(['auth', 'verified'])->name('');
// My undangan
Route::get('/my-undangan', [UndanganController::class, 'index'])->middleware(['auth', 'verified'])->name('my-undangan');
// Invoice
Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice');
// Affiliate
Route::get('/affiliate', [AffiliateController::class, 'index'])->name('affiliate');
// History bonus
Route::get('/history-bonus', [HistoryBonusController::class, 'index'])->name('history-bonus');

// CMS Route
Route::prefix('cms')->middleware(['auth', 'verified', 'admin'])->group(function () {
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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/show/{id}', [GalleryController::class, 'show'])->name('gallery.show');

    // delete gallery
    Route::get('/gallery/delete/{id}', [GalleryController::class, 'deleteGallery'])->name('gallery.delete');

    // delete photo
    Route::get('/photo/delete/{id}', [GalleryController::class, 'deletePhoto'])->name('photo.delete');

    // delete all gallery
    Route::get('/gallery/delete-all', [GalleryController::class, 'deleteAllGallery'])->name('gallery.delete-all');

    Route::put('/photos/{id}/update-status', [GalleryController::class, 'updatePhotoStatus'])->name('photo.update-status');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('invitations', InvitationController::class)->names([
        'index' => 'invitation.index',
        'store' => 'invitation.store',
        'edit' => 'invitation.edit',
        'update' => 'invitation.update',
        'destroy' => 'invitation.destroy',
    ]);
});



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/themes', [UserThemeController::class, 'index'])->name('theme_user.index');
    Route::get('/themes/{id}', [UserThemeController::class, 'detail'])->name('theme.detail');
    Route::get('demo/theme/{id}', [UserThemeController::class, 'demo'])->name('demo.theme');
});


Route::get('/get-theme/{id}', [InvitationController::class, 'getTheme'])->middleware(['auth', 'verified']);
Route::get('/get-soundbank/{id}', [InvitationController::class, 'getSoundbank'])->middleware(['auth', 'verified']);

Route::controller(GuestBookController::class)->group(function () {
    Route::get('/guestbook', [GuestBookController::class, 'index'])->name('guestbook.index');
    Route::get('/guestbook/create', [GuestBookController::class, 'create'])->name('guestbook.create');
    Route::post('/guestbook/store', [GuestBookController::class, 'store'])->name('guestbook.store');
    Route::get('/guestbook/edit/{id}', [GuestBookController::class, 'edit'])->name('guestbook.edit');
    Route::patch('/guestbook/update/{id}', [GuestBookController::class, 'update'])->name('guestbook.update');
    Route::delete('/guestbook/destroy/{id}', [GuestBookController::class, 'destroy'])->name('guestbook.destroy');
    Route::post('/guestbook/import', [GuestBookController::class, 'import'])->name('guestbook.import');
})->middleware(['auth', 'verified']);



Route::get('/my-undangan/{title_invitation}', [UndanganController::class, 'show_by_url'])->name('show_invitation_by_url');
Route::get('/invitation/{title_invitation}/{slug}', [UndanganController::class, 'show'])->name('show_invitation');
Route::post('/simpan_ucapan', [UndanganController::class, 'simpanUcapan'])->name('simpan_ucapan');



require __DIR__ . '/auth.php';
