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
Route::get('/')->name('home');
Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews');
Route::get('/hardware', [HardwareController::class, 'index'])->name('hardware');
Route::get('/top-picks', [TopPicksController::class, 'index'])->name('top-picks');
Route::get('/affiliate-links', [AffiliateController::class, 'index'])->name('affiliate-links');

Route::get('/posts/{slug}',[PostController::class,'show'])->name('post.show');
Route::get('/categories/{id}',[CategoriesController::class,'index'])->name('categories');
Route::get('/tags/{name}',[TagsController::class,'index'])->name('tags');

Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('web.logout');

Route::prefix('profile')->middleware(['auth', 'verified'])->name('profile.')->group(function () {
    Route::get('/settings', [ProfileController::class,'index'])->name('settings');
    Route::post('/upload-image',[ProfileController::class,'storeImage'])->name('upload-image');
});


