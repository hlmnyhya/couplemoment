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
use App\Http\Controllers\CMS\ThemeController;
use App\Http\Controllers\UserThemeController;

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
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/change-password', [ProfileController::class, 'showChangePasswordForm'])->name('profile.change-password');
    Route::post('/profile/update-password', [ProfileController::class, 'changePassword'])->name('profile.update-password');
})->middleware(['auth', 'verified']);

// Register page
// Route::get('/register-personal', [AdminController::class, 'registerPersonal'])->name('register-personal');
// Route::get('/register-vendor', [AdminController::class, 'registerVendor'])->name('register-vendor');
// Login page
Route::get('/login-page', [AdminController::class, 'loginPage'])->name('login-page');
// Dashboard admin
Route::get('/admin-dashboard', [AdminController::class, 'AdminDashboard'])->middleware(['auth', 'verified'])->name('admin-dashboard');
// My undangan
Route::get('/my-undangan', [UndanganController::class, 'index'])->middleware(['auth', 'verified'])->name('my-undangan');
// Invoice
Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice');
// Affiliate
Route::get('/affiliate', [AffiliateController::class, 'index'])->name('affiliate');
// History bonus
Route::get('/history-bonus', [HistoryBonusController::class, 'index'])->name('history-bonus');

// CMS Route
Route::prefix('cms')->group(function () {
    Route::resource('soundbank', SoundBankController::class)->names([
        'index' => 'soundbank.index',
        'create' => 'soundbank.create',
        'store' => 'soundbank.store',
        'edit' => 'soundbank.edit',
        'update' => 'soundbank.update',
        'destroy' => 'soundbank.destroy',
    ])->middleware(['auth', 'verified']);
    Route::resource('theme', ThemeController::class)->names([
        'index' => 'theme.index',
        'create' => 'theme.create',
        'store' => 'theme.store',
        'edit' => 'theme.edit',
        'update' => 'theme.update',
        'destroy' => 'theme.destroy',
    ])->middleware(['auth', 'verified']);
    Route::get('/assets/search', [AssetsController::class, 'search'])->middleware(['auth', 'verified'])->name('assets.search');
    Route::resource('assets', AssetsController::class)->names([
        'index' => 'assets.index',
        'create' => 'assets.create',
        'store' => 'assets.store',
        'edit' => 'assets.edit',
        'update' => 'assets.update',
        'destroy' => 'assets.destroy',
    ])->middleware(['auth', 'verified']);
    Route::resource('invitation', InvitationController::class)->names([
        'index' => 'invitation.index',
        'store' => 'invitation.store',
        'edit' => 'invitation.edit',
        'update' => 'invitation.update',
        'delete' => 'invitation.delete',
    ]);
})->middleware(['auth', 'verified']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('user_theme', UserThemeController::class);
});

// Tema User
Route::get('/theme/user', [UserThemeController::class, 'index'])->name('theme_user.index');
Route::get('/theme/detail/user', [UserThemeController::class, 'detail'])->name('theme_user.detail');

Route::get('/get-theme/{id}', [InvitationController::class, 'getTheme'])->middleware(['auth', 'verified']);
Route::get('/get-soundbank/{id}', [InvitationController::class, 'getSoundbank'])->middleware(['auth', 'verified']);

Route::controller(GuestBookController::class)->group(function () {
    Route::get('/cms/guestbook', [GuestBookController::class, 'index'])->name('guestbook.index');
    Route::get('/cms/guestbook/create', [GuestBookController::class, 'create'])->name('guestbook.create');
    Route::post('/cms/guestbook/store', [GuestBookController::class, 'store'])->name('guestbook.store');
    Route::get('/cms/guestbook/edit/{id}', [GuestBookController::class, 'edit'])->name('guestbook.edit');
    Route::patch('/cms/guestbook/update/{id}', [GuestBookController::class, 'update'])->name('guestbook.update');
    Route::delete('/cms/guestbook/destroy/{id}', [GuestBookController::class, 'destroy'])->name('guestbook.destroy');
    Route::post('/cms/guestbook/import', [GuestBookController::class, 'import'])->name('guestbook.import');
})->middleware(['auth', 'verified']);

Route::get('/Aldi-&-Rinta', [InvitationController::class, 'test'])->name('Aldi-&-Rinta');
Route::post('/simpan_ucapan', [InvitationController::class, 'simpanUcapan'])->name('simpan_ucapan');

require __DIR__ . '/auth.php';
