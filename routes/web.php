<?php

use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\CMS\GuestBookController;
use App\Http\Controllers\HistoryBonusController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UndanganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
Route::controller(GuestBookController::class)->group(function() {
    Route::get('/cms/guestbook', [GuestBookController::class, 'index'])->name('guestbook.index');
    Route::get('/cms/guestbook/create', [GuestBookController::class, 'create'])->name('guestbook.create');
    Route::post('/cms/guestbook/store', [GuestBookController::class, 'store'])->name('guestbook.store');
    Route::get('/cms/guestbook/edit/{id}', [GuestBookController::class, 'edit'])->name('guestbook.edit');
    Route::patch('/cms/guestbook/update/{id}', [GuestBookController::class, 'update'])->name('guestbook.update');
    Route::delete('/cms/guestbook/destroy/{id}', [GuestBookController::class, 'destroy'])->name('guestbook.destroy');
    Route::post('/cms/guestbook/import', [GuestBookController::class, 'import'])->name('guestbook.import');
});

require __DIR__.'/auth.php';
