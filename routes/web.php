<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;

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
Route::get('/', [MovieController::class,'home'])->name('home');
Route::get('movie/create', [MovieController::class,'create'])->name('movie.create');
Route::post('movie/store', [MovieController::class,'store'])->name('movie.store');
Route::delete('movie/delete/{movie}',[MovieController::class,'delete'])->name('movie.delete');

//create
Route::get('book_form',[BookController::class,'viewForm'])->name('book.create');
Route::post('book_store',[BookController::class,'store'])->name('book.store');
//update
Route::patch('book_update/{book}',[BookController::class,'edit'])->name('book.edit');

//delete
Route::delete('book_delete/{id}',[BookController::class,'deleted'])->name('book.delete');
//Route::<http_method>(url,callback);
