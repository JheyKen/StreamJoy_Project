<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\MainController;
use App\Http\Controllers\LoginPageController;


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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/dashboard',[MainController::class, 'connected'])->name('Pages.home');

Route::get('/about',[MainController::class, 'about'])->name('Pages.about');

Route::get('/movielist',[MainController::class, 'index'])->name('Pages.movielist');

Route::get('/movie',[MainController::class, 'review'])->name('Pages.single');

Route::get('/faq',[MainController::class, 'faq'])->name('Pages.help');

Route::get('/pricing',[MainController::class, 'price'])->name('Pages.pricing');

Route::get('/404',[MainController::class, 'notfound'])->name('Pages.404');


// Login Routes

Route::get('/',[LoginPageController::class, 'first'])->name('auth.index');

Route::get('/signin',[LoginPageController::class, 'signin'])->name('auth.signin');

Route::post('/signup',[LoginPageController::class, 'signup'])->name('auth.signup');

Route::post('/Register',[LoginPageController::class, 'registerUser'])->name('auth.register-user');






//Route::get('/',[ProductController::class, 'index'])->name('main.products');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
