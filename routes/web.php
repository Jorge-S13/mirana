<?php

use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\TopPicksController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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

Route::get('/', [WelcomeController::class,'index'])->name('home');

Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/{slug}',[PostController::class,'show'])->name('show');
    Route::get('/categories/{slug}',[CategoriesController::class,'posts'])->name('categories');
    Route::get('/tags/{slug}',[TagsController::class,'posts'])->name('tags');
});

Route::prefix('news')->name('news.')->group(function () {
    Route::get('/', [NewsController::class, 'index'])->name('index');
    Route::get('/{slug}',[NewsController::class,'show'])->name('show');
    Route::get('/categories/{slug}',[CategoriesController::class,'news'])->name('categories');
    Route::get('/tags/{slug}',[TagsController::class,'news'])->name('tags');
});

Route::prefix('reviews')->name('reviews.')->group(function () {
    Route::get('/', [ReviewsController::class, 'index'])->name('index');
    Route::get('/{slug}',[ReviewsController::class,'show'])->name('show');
    Route::get('/categories/{slug}',[CategoriesController::class,'reviews'])->name('categories');
    Route::get('/tags/{slug}',[TagsController::class,'reviews'])->name('tags');
});

Route::prefix('hardware')->name('hardware.')->group(function () {
    Route::get('/', [HardwareController::class, 'index'])->name('index');
    Route::get('/{slug}',[HardwareController::class,'show'])->name('show');
    Route::get('/categories/{slug}',[CategoriesController::class,'hardware'])->name('categories');
    Route::get('/tags/{slug}',[TagsController::class,'hardware'])->name('tags');
});

Route::prefix('top-picks')->name('top-picks.')->group(function () {
    Route::get('/', [TopPicksController::class, 'index'])->name('index');
    Route::get('/{slug}',[TopPicksController::class,'show'])->name('show');
    Route::get('/categories/{slug}',[CategoriesController::class,'topPicks'])->name('categories');
    Route::get('/tags/{slug}',[TagsController::class,'topPicks'])->name('tags');
});

Route::prefix('affiliate-links')->name('affiliate-links.')->group(function () {
    Route::get('/', [AffiliateController::class, 'index'])->name('index');
    Route::get('/{slug}',[AffiliateController::class,'show'])->name('show');
    Route::get('/categories/{slug}',[CategoriesController::class,'affiliateLinks'])->name('categories');
    Route::get('/tags/{slug}',[TagsController::class,'affiliateLinks'])->name('tags');
});


Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('web.logout');

Route::prefix('profile')->middleware(['auth', 'verified'])->name('profile.')->group(function () {
    Route::get('/settings', [ProfileController::class,'index'])->name('settings');
    Route::post('/upload-image',[ProfileController::class,'storeImage'])->name('upload-image');
});


