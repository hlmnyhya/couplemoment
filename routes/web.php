<?php

use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\HistoryBonusController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UndanganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CMS\GalleryController;

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

require __DIR__.'/auth.php';
