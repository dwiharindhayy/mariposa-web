<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\EnsureUserIsAuthenticated;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Di sini kamu bisa mendaftarkan semua route untuk aplikasi kamu.
| Route ini dimuat oleh RouteServiceProvider di dalam grup yang memiliki
| middleware 'web' secara default.
|--------------------------------------------------------------------------
*/

// Route Autentikasi (Tanpa Middleware)
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login/post', [AuthController::class, 'postLogin']);
Route::get('/register', [AuthController::class, 'getRegister']);
Route::post('/register/post', [AuthController::class, 'postRegister']);

// Route yang Butuh Autentikasi
Route::middleware([EnsureUserIsAuthenticated::class])->group(function () {
     // Admin Routes
    Route::prefix('admin')->group(function () {
        Route::get('/product', [AdminController::class, 'getAllProduct']);
        Route::get('/product/add', [AdminController::class, 'getAddProduct']);
        Route::get('/product/edit/{id}', [AdminController::class, 'getEditProduct']);
        
        Route::post('/product/add/post', [AdminController::class, 'postAddProduct']);
        Route::post('/product/delete/{id}', [AdminController::class, 'deleteProduct']);
        Route::post('/product/edit/{id}/post', [AdminController::class, 'postEditProduct']);
    });

    // Product Routes
    Route::get('/product/all', [ProductController::class, 'getProductAll']);
    Route::get('/product/{id}', [ProductController::class, 'getProductDetail'])->where('id', '[0-9]+');
    Route::get('/product/category/{category}', [ProductController::class, 'getProductByCategory'])->where('category', '[a-zA-Z\-]+');

});
