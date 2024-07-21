<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\GeoNamesController;
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

    Route::get('/contact-us', [PagesController::class, 'contactUs'])->name('pages.contact-us');
    Route::post('/contact-us-post', [PagesController::class, 'contactUs'])->name('pages.contacts-us-post');
   // Route::get('/news-letters', [PagesController::class, 'newsLetters'])->name('pages.news-letters');

    
    Route::get('/enter-email', [PagesController::class, 'showEmailForm'])->name('enter.email');
Route::post('/enter-email', [PagesController::class, 'storeEmail'])->name('store.email');

    Route::post('/news-letterss', [PagesController::class, 'newsLetterss'])->name('pages.news-letterss');
    Route::post('/add-property-post', [PagesController::class, 'addPropertyPost'])->name('add-property-post');
    Route::post('/upload-image', [PagesController::class, 'uploadImage'])->name('upload-image');
    Route::post('/delete-file', [PagesController::class, 'deleteFile'])->name('delete-file');
    Route::post('/modif-property-post', [PagesController::class, 'modifPropertyPost'])->name('modif-property-post');
    Route::delete('/delete-image/{id}', [PagesController::class, 'deleteImage'])->name('delete-image');
    Route::get('/get-cities', [PagesController::class, 'getCities'])->name('get-cities');
    Route::post('/get-cities', [PagesController::class, 'getCities'])->name('get-cities');
    Route::post('/change-password', [PagesController::class, 'changePassword'])->name('change-password');
    Route::get('/check-image/{idProperty}', [PagesController::class, 'checkImage']);
    Route::get('/privacy-policy', [PagesController::class, 'privacyPolicy'])->name('pages.privacy-policy');
    Route::post('/privacy-policy', [PagesController::class, 'privacyPolicy'])->name('pages.privacy-policys');








    FacadesAuth::routes();
});



Route::middleware([ 'check.session.variable', 'check.max.execution.time'])->group(function () {

    Route::get('/agent', [PagesController::class, 'agent'])->name('pages.agent');
    Route::post('/agent', [PagesController::class, 'agent'])->name('pages.agent');
    Route::get('/single', [PagesController::class, 'single'])->name('pages.single');
    Route::post('/single', [PagesController::class, 'single'])->name('pages.single');
});


Route::middleware(['auth', 'check.max.execution.time'])->group(function () {
    
    Route::get('/dashbord', [PagesController::class, 'dashbord'])->name('admin.dashbord');
    Route::post('/dashbord', [PagesController::class, 'dashbord'])->name('admin.dashbord');
    Route::get('/my-properties', [PagesController::class, 'myProperties'])->name('admin.my-properties');
    Route::post('/my-properties-post', [PagesController::class, 'myPropertiesPost'])->name('admin.my-properties-post');
    Route::get('/admin.users', [PagesController::class, 'adminUsers'])->name('admin.users');
    Route::get('/admin.add-user', [PagesController::class, 'adminAddUser'])->name('admin.add-user');
    Route::get('/admin.users-post', [PagesController::class, 'adminUsersPost'])->name('admin.users-post');
    Route::get('/admin.add-type-property', [PagesController::class, 'addTypeProperty'])->name('admin.add-type-property');
    Route::get('/admin.form-type-property', [PagesController::class, 'formTypeProperty'])->name('admin.form-type-property');
    Route::post('/admin.form-type-property-post', [PagesController::class, 'formTypePropertyPost'])->name('admin.form-type-property-post');
    Route::get('/admin.caracteristique-type-property', [PagesController::class, 'caracteristiqueTypeProperty'])->name('admin.caracteristique-type-property');
    Route::get('/admin.form-caracteristique-property', [PagesController::class, 'formCaracteristiqueProperty'])->name('admin.form-caracteristique-property');
    Route::post('/admin.form-caracteristique-property-post', [PagesController::class, 'formCaracteristiquePropertyPost'])->name('admin.form-caracteristique-property-post');
    Route::post('/ajax.users-bloquer', [PagesController::class, 'usersBloquerAjax'])->name('ajax.users-bloquer');
    Route::post('/ajax.users-debloquer', [PagesController::class, 'usersDebloquerAjax'])->name('ajax.users-debloquer');
    Route::get('/ajax.users-activer', [PagesController::class, 'usersActiverAjax'])->name('ajax.users-activer');
    Route::get('/ajax.users-desactiver', [PagesController::class, 'usersDesactiverAjax'])->name('ajax.users-desactiver');
    Route::get('/ajax.users-supprimer', [PagesController::class, 'usersSupprimerAjax'])->name('ajax.users-supprimer');
    Route::get('/ajax.users-restaurer', [PagesController::class, 'usersRestaurerAjax'])->name('ajax.users-restaurer');
    Route::get('/ajax.property-masquer', [PagesController::class, 'propertyMasquerAjax'])->name('ajax.property-masquer');
    Route::get('/ajax.property-demasquer', [PagesController::class, 'propertyDemasquerAjax'])->name('ajax.property-demasquer');
    Route::get('/ajax.property-supprimer', [PagesController::class, 'propertySupprimerAjax'])->name('ajax.property-supprimer');
    Route::get('/ajax.property-mettreAvant', [PagesController::class, 'propertyMettreAvantAjax'])->name('ajax.property-mettreAvant');
    Route::get('/ajax.property-restaurer', [PagesController::class, 'propertyRestaurerAjax'])->name('ajax.property-restaurer');
    Route::get('/ajax.comment-approuver', [PagesController::class, 'commentApprouverAjax'])->name('ajax.comment-approuver');
    Route::get('/ajax.comment-desapprouver', [PagesController::class, 'commentDesapprouverAjax'])->name('ajax.comment-desapprouver');
    Route::get('/ajax.comment-supprimer', [PagesController::class, 'commentSupprimerAjax'])->name('ajax.comment-supprimer');
    Route::get('/ajax.comment-restaurer', [PagesController::class, 'commentRestaurerAjax'])->name('ajax.comment-restaurer');
    
    
    Route::post('/register-user', [PagesController::class, 'registerUser'])->name('user.register');
    Route::get('/modif-user', [PagesController::class, 'modifUser'])->name('user.modif');
    Route::post('/modif-user', [PagesController::class, 'modifUserPost'])->name('user.modif');
    Route::get('/modif-comment', [PagesController::class, 'modifComment'])->name('comment.modif');
    Route::post('/modif-comment', [PagesController::class, 'modifCommentPost'])->name('comment.modif');

    Route::get('/profile', [PagesController::class, 'userProfile'])->name('admin.user-profile');
    Route::get('/modif-profile', [PagesController::class, 'modifUserProfile'])->name('admin.modif-user-profile');
    Route::post('/modif-profile', [PagesController::class, 'modifUserProfilePost'])->name('admin.modif-user-profile');
    Route::get('/modif-pswd', [PagesController::class, 'modifPswd'])->name('admin.modif-pswd');
    Route::post('/modif-pswd', [PagesController::class, 'modifPswdPost'])->name('admin.modif-pswd');
    Route::get('/messages', [PagesController::class, 'messages'])->name('admin.messages');
    Route::get('/reviews', [PagesController::class, 'reviews'])->name('admin.reviews');


    Route::post('/modif-property', [PagesController::class, 'modifProperty'])->name('modif-property');
    Route::post('/suppression', [PagesController::class, 'suppression'])->name('suppression');
    Route::post('/save-file-info', [PagesController::class, 'saveFileinfo'])->name('save-file-info');




    // Ajoutez d'autres routes nécessitant une authentification ici
});
Route::middleware(['auth','check.max.execution.time'])->group(function () {


    Route::get('/dashbord', [PagesController::class, 'dashbord'])->name('admin.dashbord');
    Route::post('/dashbord', [PagesController::class, 'dashbord'])->name('admin.dashbord');
    Route::get('/my-properties', [PagesController::class, 'myProperties'])->name('admin.my-properties');


    Route::get('/profile', [PagesController::class, 'userProfile'])->name('admin.user-profile');
    Route::get('/messages', [PagesController::class, 'messages'])->name('admin.messages');
    Route::get('/reviews', [PagesController::class, 'reviews'])->name('admin.reviews');


    Route::post('/save-file-info', [PagesController::class, 'saveFileinfo'])->name('save-file-info');
    Route::post('/delete-file', [PagesController::class, 'deleteFile'])->name('delete-file');
});

Route::middleware(['auth', 'check.and.clear.session', 'check.max.execution.time'])->group(function () {
    Route::get('/add-property', [PagesController::class, 'addProperty'])->name('admin.add-property');
    Route::post('/add-property', [PagesController::class, 'addProperty'])->name('admin.add-property');
});
