<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\Auth\ResetPasswordController;

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
    return view('index');
});


Route::get('/login', [AuthController::class, 'login'])->name("login")->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');

Route::get('/donasi', function () {
    return view('donasi');
});

// Route::get('/login', [AuthController::class, 'login']);
// Route::post('/login', [AuthController::class, 'authenticate']);
// >>>>>>> Stashed changes

Route::get('/home', [AuthController::class, 'home'])->middleware('auth');

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store'])->middleware('guest');
Route::get('/verifikasi', [AuthController::class, 'verifikasi'])->middleware('guest');
Route::post('/verifikasi', [AuthController::class, 'postverifikasi'])->middleware('guest');

Route::get('/validasi', [AuthController::class, 'indexvalidasi'])->middleware('auth');
Route::post('/validasi', [AuthController::class, 'validasi'])->middleware('auth');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login')->middleware('guest');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/profil', function () {
    return view('user.profil');
});

Route::get('/lupapassword', [ResetPasswordController::class, 'indexforgotpass'])->middleware('guest');
Route::post('/lupapassword', [ResetPasswordController::class, 'forgotpass'])->middleware('guest');

Route::get('/resetpassword/{token}', [ResetPasswordController::class, 'indexresetpass'])->name('reset.password.get')->middleware('guest');
Route::post('/resetpassword', [ResetPasswordController::class, 'resetpass'])->middleware('guest');

Route::get('/ubahpassword', [ChangePasswordController::class, 'index'])->middleware('auth');
Route::post('/ubahpassword', [ChangePasswordController::class, 'store'])->middleware('auth');



Route::get('/listprogram', [ProgramController::class, 'index']);

Route::get('/detailprogram', function () {
    return view('user.detailprogram');


});

Route::get('/payment', function () {
    return view('user.payment');


});

Route::get('/hisdon', function () {
    return view('user.historydonasi');


});

Route::get('/hispro', function () {
    return view('user.historyprogram');


});

// Route::get('/listprogram', 'DonasiController@listprogram');
// Route::get('/', 'PagesController@detailprogram');
// Route::get('/', 'PagesController@payment');
// Route::get('/', 'PagesController@hisdon');
// Route::get('/', 'PagesController@hispro');
