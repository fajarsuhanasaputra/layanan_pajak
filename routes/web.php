<?php

use App\Http\Controllers\UserController;
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

/*
Route bagian landing page 
*/
Route::get('/', function () {
    return view('app', ['title' => 'Layanan Pajak']);
})->name('home');
Route::get('about', function () {
    return view('about', ['title' => 'tentang']);
})->name('about');
Route::get('layanan', function () {
    return view('layanan', ['title' => 'layanan']);
})->name('layanan');
Route::get('contact', function () {
    return view('contact', ['title' => 'contact']);
})->name('contact');

Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('profile/{user_id}', [UserController::class, 'profile'])->name('profile');
Route::put('profile/{user_id}', [UserController::class, 'profile_update'])->name('profile.update');

Route::get('riwayat-pajak/{user_id}', [UserController::class, 'riwayat_pajak'])->name('riwayat');
Route::get('pembayaran', [UserController::class, 'pembayaran'])->name('pembayaran');
Route::post('pembayaran/{user_id}', [UserController::class, 'pembayaran_add'])->name('pembayaran.add');

Route::get('pajak/{pajak_id}', [UserController::class, 'detail_pembayaran'])->name('detail_pembayaran');
Route::get('manajemen-pembayaran', [UserController::class, 'manajemen_pembayaran'])->name('manajemen_pembayaran');
