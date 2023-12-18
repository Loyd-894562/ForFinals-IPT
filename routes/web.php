<?php

use App\Events\UserLog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\TestEnrollmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ProductController;
use Illuminate\Queue\Jobs\Job;

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

// routes/web.php

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::post('/explore', [AuthController::class, 'explore'])->name('explore.post');
Route::get('/explore', [AuthController::class, 'explore'])->name('explore');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification'])->name('verification');

Route::middleware(['auth','verified'])->group (function(){

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [AuthController::class, 'dashboard']);

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/logs', [LogController::class, 'index'])->name('logs.index');
    Route::get('/send-notification', [TestEnrollmentController::class, 'sendTestNotification']) ->name('send-notification');
   
    Route::post('/send-notification', [TestEnrollmentController::class, 'sendTestNotification']) ->name('send-notification');
    Route::get('/dashboard', [TestEnrollmentController::class, 'dashboard' ])->name('dashboard');

});


Route::get('/sendmail', [EmailController::class, 'sendEmail']);

