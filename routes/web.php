<?php

use Illuminate\Support\Facades\Route;
// import controllers
use App\Http\Controllers\Books\BookController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'home');

// Books Routing
// 'dashboard.books.index'
Route::post('books', [BookController::class, 'index'])->name('books');
Route::resource('books', BookController::class);
Route::view('dashboard', 'dashboard.dashboard')->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');