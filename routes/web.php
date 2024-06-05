<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Management\BlogController as ManagementBlogController;
use App\Http\Controllers\UserController;

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

    Route::controller(ManagementBlogController::class)->group(function () {
        Route::get('/manajemen/blog', 'index')->name('management.blog.index');
    });

});

require __DIR__ . '/auth.php';
