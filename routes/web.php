<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Management\BlogController as ManagementBlogController;
use App\Http\Controllers\Management\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Management\ArticlesController as ManagementArticlesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('blog.index');
});

// guest access
Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'index')->name('blog.index');
    Route::get('/blog/{id}', 'detail')->name('blog.detail');
});

// user access
Route::middleware(['auth'])->group(function () {
    Route::prefix('management')->name('management.')->group(function () {
        Route::controller(ManagementBlogController::class)->group(function () {
            Route::get('/blog', 'index')->name('blog.index');
            Route::get('/blog/create', 'create')->name('blog.create');
            Route::get('/blog/edit', 'edit')->name('blog.edit');
            Route::post('/blog/store', 'store')->name('blog.store');
        });

        Route::controller(UserController::class)->group(function () {
            Route::get('/user', 'index')->name('user.index');
            Route::get('/user/getTableUser', 'getTableUser')->name('user.getTableUser');
            Route::post('/user/store', 'store')->name('user.store');
            Route::post('/user/update', 'update')->name('user.update');
            Route::delete('/user/destroy', 'destroy')->name('user.destroy');
        });

    });

    Route::prefix('profile')->name('profile.')->group(function () {
        Route::controller(ProfileController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/update', 'update')->name('update');
        });
    });
});

require __DIR__ . '/auth.php';
