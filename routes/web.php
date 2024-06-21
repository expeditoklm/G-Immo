<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth as FacadesAuth;


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
use App\Http\Middleware\CheckAndClearSession;

Route::middleware(['check.max.execution.time'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/acceuil', [PagesController::class, 'acceuil'])->name('pages.acceuil');
    Route::post('/acceuil', [PagesController::class, 'acceuil'])->name('pages.acceuil');
    Route::get('/search', [PagesController::class, 'search'])->name('pages.search');
    Route::post('/search', [PagesController::class, 'search'])->name('pages.search');
    Route::get('/searchP', [PagesController::class, 'searchPost'])->name('pages.search-post');
    Route::post('/searchP', [PagesController::class, 'searchPost'])->name('pages.search-post');
    Route::get('/details', [PagesController::class, 'details'])->name('pages.details');
    Route::get('/account', [PagesController::class, 'account'])->name('pages.account');
    Route::get('/not-found', [PagesController::class, 'notFound'])->name('pages.not-found');
    Route::post('/news-letterss', [PagesController::class, 'newsLetterss'])->name('pages.news-letterss');
    Route::post('/add-property-post', [PagesController::class, 'addPropertyPost'])->name('add-property-post');
    Route::post('/upload-image', [PagesController::class, 'uploadImage'])->name('upload-image');
    Route::post('/delete-file', [PagesController::class, 'deleteFile'])->name('delete-file');
    Route::post('/link-images-to-property', [PagesController::class, 'linkImagesToProperty'])->name('link-images-to-property');

    FacadesAuth::routes();
});




Route::middleware(['auth', 'check.max.execution.time'])->group(function () {
    Route::get('/contact-us', [PagesController::class, 'contactUs'])->name('pages.contact-us');
    Route::post('/contact-us-post', [PagesController::class, 'contactUs'])->name('pages.contacts-us-post');
    Route::get('/agent', [PagesController::class, 'agent'])->name('pages.agent');
    Route::post('/agent', [PagesController::class, 'agent'])->name('pages.agent');
    Route::get('/single', [PagesController::class, 'single'])->name('pages.single');
    Route::post('/single', [PagesController::class, 'single'])->name('pages.single');
    Route::get('/dashbord', [PagesController::class, 'dashbord'])->name('admin.dashbord');
    Route::post('/dashbord', [PagesController::class, 'dashbord'])->name('admin.dashbord');
    Route::get('/my-properties', [PagesController::class, 'myProperties'])->name('admin.my-properties');



    Route::get('/profile', [PagesController::class, 'userProfile'])->name('admin.user-profile');
    Route::get('/modif-profile', [PagesController::class, 'modifUserProfile'])->name('admin.modif-user-profile');
    Route::post('/modif-profile', [PagesController::class, 'modifUserProfilePost'])->name('admin.modif-user-profile');
    Route::get('/modif-pswd', [PagesController::class, 'modifPswd'])->name('admin.modif-pswd');
    Route::post('/modif-pswd', [PagesController::class, 'modifPswdPost'])->name('admin.modif-pswd');
    Route::get('/messages', [PagesController::class, 'messages'])->name('admin.messages');
    Route::get('/reviews', [PagesController::class, 'reviews'])->name('admin.reviews');


    Route::get('/modif-property', [PagesController::class, 'modifProperty'])->name('modif-property');
    Route::post('/suppression', [PagesController::class, 'suppression'])->name('suppression');
    Route::post('/save-file-info', [PagesController::class, 'saveFileinfo'])->name('save-file-info');




    // Ajoutez d'autres routes nécessitant une authentification ici
});
Route::middleware(['auth', 'check.session.variable', 'check.max.execution.time'])->group(function () {



    Route::post('/agent', [PagesController::class, 'agent'])->name('pages.agent');
    Route::get('/agent', [PagesController::class, 'agent'])->name('pages.agent');
    Route::post('/single', [PagesController::class, 'single'])->name('pages.single');
    Route::get('/dashbord', [PagesController::class, 'dashbord'])->name('admin.dashbord');
    Route::post('/dashbord', [PagesController::class, 'dashbord'])->name('admin.dashbord');
    Route::get('/my-properties', [PagesController::class, 'myProperties'])->name('admin.my-properties');
    Route::get('/contact-us', [PagesController::class, 'contactUs'])->name('pages.contact-us');
    Route::post('/contact-us-post', [PagesController::class, 'contactUs'])->name('pages.contacts-us-post');

    Route::get('/profile', [PagesController::class, 'userProfile'])->name('admin.user-profile');
    Route::get('/messages', [PagesController::class, 'messages'])->name('admin.messages');
    Route::get('/reviews', [PagesController::class, 'reviews'])->name('admin.reviews');


    Route::post('/save-file-info', [PagesController::class, 'saveFileinfo'])->name('save-file-info');
    Route::post('/delete-file', [PagesController::class, 'deleteFile'])->name('delete-file');
});

Route::middleware(['auth', 'check.and.clear.session', 'check.max.execution.time'])->group(function () {
    Route::get('/add-property', [PagesController::class, 'addProperty'])->name('admin.add-property');
});
