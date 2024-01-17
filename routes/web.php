<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagsController;
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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{slug}',[PostController::class,'show'])->name('post.show');
Route::get('/posts/{slug}',[PostController::class,'show'])->name('post.show');
Route::get('/categories/{id}',[CategoriesController::class,'index'])->name('categories');
Route::get('/tags/{name}',[TagsController::class,'index'])->name('tags');

Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('web.logout');

Route::prefix('profile')->middleware(['auth', 'verified'])->name('profile.')->group(function () {
    Route::get('/settings', [ProfileController::class,'index'])->name('settings');
    Route::post('/upload-image',[ProfileController::class,'storeImage'])->name('upload-image');
});


