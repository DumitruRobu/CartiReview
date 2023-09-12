<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/', "App\Http\Controllers\AllControllers\HomePageController")->name("HomePage");
Route::group(['namespace' => 'App\Http\Controllers\AllControllers',  'middleware'=>'users'], function() {

    Route::get('/books', "ShowBooksController")->name("ShowBooks");
    Route::get('/books/create', "CreateBooksController")->name("CreateBooks");
    Route::post('/books', "StoreController")->name("StoreBooks");
    Route::get('/books/{id}', "ShowBookController")->name("ShowBook");
    Route::get('/books/{id}/edit', "EditBookController")->name("EditBook");
    Route::patch('/books/{id}', "UpdateBookController")->name("UpdateBook");
    Route::delete('/books/{id}', "DeleteBookController")->name("DeleteBook");
    Route::get('/adaugamReview/{id}', "AddReviewController")->name("AddReview");
    Route::post('/adaugamReview', "StoreReviewController")->name("StoreReview");
});
Route::get('/home', [App\Http\Controllers\HomeController::class, "index"])->name("MainController.main");

Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
