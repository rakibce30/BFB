<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController; 
use App\Http\Controllers\Admin\CategoryController; 
use App\Http\Controllers\Admin\PostController; 
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\UserDetailController;
use App\Http\Controllers\FrontEnd\FrontEndController;
use App\Http\Controllers\FrontEnd\CommentController;
 
 

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



// _____________Front End Route_____________
Route::get('/', function () {
    return view('front-end.page.home');
});
Route::get('/', [FrontEndController::class, 'home'])->name('page.home');
Route::get('/about', [FrontEndController::class, 'about'])->name('page.about');
Route::get('/package', [FrontEndController::class, 'package'])->name('page.package');
Route::get('/blogs', [FrontEndController::class, 'blogs'])->name('page.blogs');
Route::get('/category/{item_slug}', [FrontEndController::class, 'archive'])->name('page.category');
Route::get('/blog/{item_slug}', [FrontEndController::class, 'SinglePost'])->name('blog.single');
Route::get('/contact', [FrontEndController::class, 'contact'])->name('page.contact');
Route::resource('comment', CommentController::class);



//----  User Route  ------//

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('page.dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
    Route::resource('users', UsersController::class);
    Route::resource('UserDetail', UserDetailController::class);
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings.index');
    Route::POST('/settings/edit/{id}', [AdminController::class, 'edit'])->name('settings.edit');
});




//----  Super Admin Route  -------//

Route::middleware(['isAdmin',
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::resource('users', UsersController::class); 
});
