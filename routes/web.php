<?php

use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\HistoryBonusController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UndanganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
Route::prefix('cms')->group(function () {
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

require __DIR__ . '/auth.php';
