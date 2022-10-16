<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authorController;
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
//CRUD routes
Route::get('/create', function () {
    return view('pages.create_author');
});

Route::get('/update', function () {
    return view('pages.update_author');
});

Route::get('/delete', function () {
    return view('pages.delete_author');
});

//CREATE
Route::post('/create', [authorController::class, 'create'])->name('add.author');
