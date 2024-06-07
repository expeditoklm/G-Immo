<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;


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
    return view('welcome');
});
Route::get('/acceuil', [PagesController::class, 'acceuil'])->name('pages.acceuil');
Route::post('/acceuil', [PagesController::class, 'acceuil'])->name('pages.acceuil');
Route::get('/search', [PagesController::class, 'search'])->name('pages.search');
Route::get('/searchP', [PagesController::class, 'searchPost'])->name('pages.search-post');
Route::post('/searchP', [PagesController::class, 'searchPost'])->name('pages.search-post');
Route::get('/details', [PagesController::class, 'details'])->name('pages.details');
Route::post('/single', [PagesController::class, 'single'])->name('pages.single');
Route::get('/contact-us', [PagesController::class, 'contactUs'])->name('pages.contact-us');
Route::get('/account', [PagesController::class, 'account'])->name('pages.account');
Route::get('/agent', [PagesController::class, 'agent'])->name('pages.agent');
Route::get('/dashbord', [PagesController::class, 'dashbord'])->name('admin.dashbord');
Route::get('/my-properties', [PagesController::class, 'myProperties'])->name('admin.my-properties');
Route::get('/add-property', [PagesController::class, 'addProperty'])->name('admin.add-property');

Route::get('/profile', [PagesController::class, 'userProfile'])->name('admin.user-profile');
Route::get('/messages', [PagesController::class, 'messages'])->name('admin.messages');
Route::get('/reviews', [PagesController::class, 'reviews'])->name('admin.reviews');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
