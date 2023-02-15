<?php

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\PropertieController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('about-us', function () {
    return view('pages.about');
});

Route::get('properties', [App\Http\Controllers\PropertiesController::class, 'index'])->name('properties.index');
Route::get('contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [App\Http\Controllers\ContactController::class, 'sendMessage'])->name('contact.send');

Route::group(['middleware' => 'auth', 'prefix' => 'cpanel'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('categorie', CategorieController::class);
    Route::resource('propertie', PropertieController::class);
});

Auth::routes();

