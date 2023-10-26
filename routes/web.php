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
Route::get('/books/solicitAdaugare', "App\Http\Controllers\AllControllers\SolicitAdaugareController")->name("SolicitAdaugare");
Route::post('/books/solicitAdaugare', "App\Http\Controllers\AllControllers\InregistramSolicitareaController")->name("InregistramSolicitarea");


Route::get('/books', "App\Http\Controllers\AllControllers\ShowBooksController")->name("ShowBooks");
Route::get('/books/create', "App\Http\Controllers\AllControllers\CreateBooksController")->name("CreateBooks")->middleware('admin');
Route::get('/books/{id}', "App\Http\Controllers\AllControllers\ShowBookController")->name("ShowBook");

Route::group(['namespace' => 'App\Http\Controllers\AllControllers',  'middleware'=>'users'], function() {

    Route::post('/books', "StoreController")->name("StoreBooks");
    Route::get('/books/{id}/edit', "EditBookController")->name("EditBook")->middleware('admin');
    Route::patch('/books/{id}', "UpdateBookController")->name("UpdateBook")->middleware('admin');;
    Route::delete('/books/{id}', "DeleteBookController")->name("DeleteBook")->middleware('admin');;
    Route::get('/adaugamReview/{id}', "AddReviewController")->name("AddReview");
    Route::post('/adaugamReview', "StoreReviewController")->name("StoreReview");
});

Route::group(['namespace' => 'App\Http\Controllers\AllControllers',  'middleware'=>'admin'], function() {
    Route::delete('/deleteReview/{id}', "DeleteReviewController")->name("DeleteReview");
    Route::get('/vizualizamCereriAdaugare', "ShowSolicitaAdaugareController")->name("ShowSolicitaAdaugare");
    Route::post('/vizualizamCereriAdaugare', "StoreRequestedBookController")->name("StoreRequestedBook");
    Route::delete('/vizualizamCereriAdaugare/{id}', "DeleteRequestController")->name("DeleteRequest");


});

Route::get('/home', [App\Http\Controllers\HomeController::class, "index"])->name("MainController.main");
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
