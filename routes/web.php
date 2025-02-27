<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController; 
use App\Http\Controllers\productController; 

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

route::get('/login', [authController::class, 'getLogin']);
route::post('/login/post', [authController::class, 'postLogin']);

route::get('/register', [authController::class, 'getRegister']);

route::get('/product/all', [productController::class, 'getProductAll']);
