<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authorController;
use App\Http\Controllers\booksController;
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

Route::get('/', [authorController::class, 'index'])->name('home');
Route::get('/books', [booksController::class, 'index'])->name('books');
//CRUD routes
Route::get('/create', function () {
    return view('pages.create_author');
});
Route::get('/createBook', function () {
    return view('pages.create_book');
});

Route::get('/update', function () {
    return view('pages.update_author');
});

Route::get('/delete', function () {
    return view('pages.delete_author');
});
Route::get('/deleteBook', function () {
    return view('pages.delete_book');
});

//CREATE
Route::post('/create', [authorController::class, 'create'])->name('add.author');
Route::post('/createBook', [booksController::class, 'create'])->name('add.book');

//RECORD TO UPDATE
Route::get('/updateRecord/{id}', [authorController::class, 'updateRecord']);

//UPDATE
Route::post('/update/{id}', [authorController::class, 'update']);

//DELETE
Route::get('/delete/{id}', [authorController::class, 'delete']);
Route::get('/deleteBook/{id}', [booksController::class, 'delete']);
