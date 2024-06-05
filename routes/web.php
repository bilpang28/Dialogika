<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Management\BlogController as ManagementBlogController;
use App\Http\Controllers\Management\UserController;

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
    Route::get('/blog','index')->name('blog.index');
    Route::get('/blog/{id}','detail')->name('blog.detail');
});

// user access
Route::middleware(['auth'])->group(function () {
    Route::prefix('management')->name('management.')->group(function () {
        Route::controller(ManagementBlogController::class)->group(function () {
            Route::get('/blog', 'index')->name('blog.index');
        });

        Route::controller(UserController::class)->group(function () {
            Route::get('/user', 'index')->name('user.index');
            Route::get('/user/getTableUser', 'getTableUser')->name('user.getTableUser');
            Route::post('/user/store', 'store')->name('user.store');
            Route::delete('/user/destroy', 'destroy')->name('user.destroy');
        });
    });
});

require __DIR__ . '/auth.php';
