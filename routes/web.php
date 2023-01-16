<?php

use App\Http\Controllers\HomeController;
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

Auth::routes();

// Main Admin Routes
Route::middleware(['auth', 'user-access:0'])->group(function () {
    Route::get('/main-admin/home', [HomeController::class, 'mainAdminHome'])->name('home.mainAdmin');
})->name('mainAdmin');

// Department Admin Routes
Route::middleware(['auth', 'user-access:1'])->group(function () {
    Route::get('/department-admin/home', [HomeController::class, 'depAdminHome'])->name('home.depAdmin');
})->name('depAdmin');

// Department Staff Routes
Route::middleware(['auth', 'user-access:2'])->group(function () {
    Route::get('/staff/home', [HomeController::class, 'staffHome'])->name('home.staff');
})->name('depStaff');

// Librarian Routes
Route::middleware(['auth', 'user-access:3'])->group(function () {
    Route::get('/librarian/home', [HomeController::class, 'librarianHome'])->name('home.librarian');
})->name('librarian');

// Route::get('/home', [HomeController::class, 'index'])->name('home');
