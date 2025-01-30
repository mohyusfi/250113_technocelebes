<?php

use App\Http\Controllers\ArticleController;
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/add-portofolio', 'PortofolioController@create')->name('add-portofolio');

    Route::get('/view-portofolio', 'PortofolioController@index')->name('view-portofolio');

    Route::get('/edit-portofolio/{id}', 'PortofolioController@edit')->name('edit-portofolio');

    Route::get('/view-articles', [ArticleController::class, 'index'])->name('view-articles');

    Route::get('/articles/add', [ArticleController::class, 'create'])->name('add-articles');

    Route::get('/articles/edit/{id}', [ArticleController::class, 'edit'])->name('edit-articles');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/service', 'HomeController@service')->name('service');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/article', 'HomeController@article')->name('article');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
