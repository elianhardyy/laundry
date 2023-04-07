<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\DaftarHargaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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


Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/main', function () {
    return view('main');
});
Route::get('/elements', function () {
    return view('elements');
});
Route::get('/contact', function () {
    return view('contact');
});
//Auth::routes();
//admin
//Route::get('/admin', [DaftarHargaController::class, 'daftar_harga'])->name('daftar_harga')->middleware('role:admin');
Route::middleware('auth')->group(function(){
    //admin
    Route::middleware('role:admin')->group(function(){
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        Route::get('/daftar-harga', [DaftarHargaController::class, 'daftar_harga'])->name('daftar_harga');
        Route::get('/tambah-daftar', [DaftarHargaController::class, 'tambah_daftar'])->name('tambah_daftar');
        Route::get('/tambah-jenis', [AdminController::class, 'tambah_jenis'])->name('tambah_jenis');
        Route::post('/tambahkan', [AdminController::class, 'store'])->name('simpan_jenis');
        Route::get('/customer', [AdminController::class, 'user'])->name('customer');
        Route::post('/simpan_daftar', [DaftarHargaController::class, 'simpan_daftar'])->name('simpan_daftar');
        Route::get('/admin-profile/{id}', [AdminController::class, 'profile'])->name('admin_profile');
        Route::post('/img-profile-post', [AdminController::class, 'profile_image'])->name('profile_image');
        Route::put('/edit-profile-foto', [AdminController::class, 'edit_profile_foto'])->name('edit_profile_foto');
        Route::get('/order', [AdminController::class, 'order'])->name('order');
        Route::get("/pemesanan",[AdminController::class,'pemesanan']);
        Route::get("/profile-admin-edit",[AdminController::class,'edit_profile']);
    });
    //user
    Route::middleware('role:pelanggan')->group(function(){

    });
});


//user
Route::get('/home', [UserController::class, 'index'])->name('home')->middleware('role:pelanggan');
Route::get('/order-laundry', [UserController::class, 'order'])->name('order_user')->middleware('role:pelanggan');
Route::post('/checkout', [UserController::class, 'checkout'])->name('checkout')->middleware('role:pelanggan');

Route::get('/user-profile/{id}', [UserController::class, 'profile'])->name('user_profile')->middleware("role:pelanggan");
Route::post('/user-profile-post', [UserController::class, 'profile_image'])->name('user_profile_post')->middleware('role:pelanggan');
Route::put('/user-profile-edit', [UserController::class, 'edit_profile_foto'])->name('user_profile_edit')->middleware('role:pelanggan');
Route::put('/user-profile', [UserController::class, 'edit_profile'])->name('edit_profile_user')->middleware('role:pelanggan');
//register
Route::get('/register', [RegisterController::class, 'registerView'])->name('register_view')->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
//login
Route::get('/login', [LoginController::class, 'loginView'])->name('login_view')->middleware('guest');
Route::post('/loginme', [LoginController::class, 'login'])->name('login')->middleware('guest');
//logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
//reset
Route::get('/forget-password', [ForgotPasswordController::class, 'email'])->name('forget.password.get');
Route::post('/forget-password', [ForgotPasswordController::class, 'submitEmail'])->name('forget.password.post');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'reset'])->name('reset.password.get');
Route::post('/reset-password', [ForgotPasswordController::class, 'submitReset'])->name('reset.password.post');
Route::get('/reset', function () {
    return view('auth.password.forgetPassword');
});
