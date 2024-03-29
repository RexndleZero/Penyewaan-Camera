<?php

use App\Http\Controllers\kategori_camera;
use App\Http\Controllers\ProfileController;
use App\Models\penyewaan_camera;
use App\Http\Controllers\penyewaan_camera_controller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/web', function () {
    return view('web_camera');
});
Route::get('/Product', function () {
    return view('profile.Product_Camera.Product');
});
Route::get('/About_us', function () {
    return view('profile.Product_Camera.about_us');
});
Route::get('/meet_dev', function () {
    return view('profile.Product_Camera.meet_developer');
});
Route::get('/kategori', function () {
    return view('profile.Product_Camera.kategori_camera');
});
Route::get('/sewa', [penyewaan_camera_controller::class, 'penyewaan_camera'])->name('sewa');
Route::post('/sewa_add', [penyewaan_camera_controller::class, 'penyewaan_camera_add'])->name('sewa_add');




Route::get('/sidebar', function () {
    return view('profile.Product_Camera.menu_sidebar');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
