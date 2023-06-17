<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;


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
Route::get('/', [HomeController::class, 'index']);
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/about-us', [HomeController::class, 'about']);
Route::get('/contact-us', [HomeController::class, 'contact']);
Route::post('/contact-us/sendWa', [HomeController::class, 'contactPost']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware'=>['auth','cekRole:admin']],function(){
    Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('dashboard-admin');
    Route::get('/manage-post-page', [AdminController::class, 'managepostPage'])->name('managepostPage');
    Route::get('/manage-post-page/add', [AdminController::class, 'KontenAdd'])->name('kontens.add');
    Route::post('/manage-post-form', [AdminController::class, 'storeKonten'])->name('kontens.store');
    Route::get('/manage-post-page/{id}/delete',[AdminController::class, 'KontenDelete']);
    Route::get('/manage-post-page/{id}/edit',[AdminController::class, 'KontenEdit']);
    Route::post('/manage-post-page/{id}/update', [AdminController::class, 'KontenUpdate'])->name('kontens.update');
    Route::get('/our-client', [AdminController::class, 'ourClient'])->name('ourClient');
    Route::post('/our-client-post', [AdminController::class, 'storeourClient'])->name('clients.store');
    Route::get('/setting-home-admin',[AdminController::class, 'settingHome']);
    Route::get('/setting-about-admin',[AdminController::class, 'settingAbout']);
    Route::post('/setting-about-admin/editAbout/{id}/update',[AdminController::class, 'editAbout'])->name('about.post');
    Route::get('/setting-gallery-admin',[AdminController::class, 'settingGallery']);
    Route::post('/setting-gallery-admin/editGallery/{id}/update',[AdminController::class, 'editGallery'])->name('gallery.post');
    Route::get('/setting-contact-us-admin',[AdminController::class, 'settingContact']);
    Route::post('/setting-contact-us-admin/editContact/{id}/update',[AdminController::class, 'editContact'])->name('contact-us.post');
    Route::get('/logout',[AuthController::class, 'logout']);
    
});
