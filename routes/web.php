<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController; 
use App\Http\Controllers\productController; 
use App\Http\Controllers\adminController; 

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
route::get('/admin/product', [adminController::class, 'getAllProduct']);
route::get('/admin/product/add', [adminController::class, 'getAddProduct']);
route::get('/admin/product/edit/{id}', [adminController::class, 'getEditProduct']);

route::post('/admin/product/add/post', [adminController::class, 'postAddProduct']);
route::post('/admin/product/delete/{id}', [adminController::class, 'deleteProduct']);
route::post('/admin/product/edit/{id}/post', [adminController::class, 'postEditProduct']);


route::get('/login', [authController::class, 'getLogin']);
route::post('/login/post', [authController::class, 'postLogin']);

route::get('/register', [authController::class, 'getRegister']);

route::get('/product/all', [productController::class, 'getProductAll']);
Route::get('/product/bag', [ProductController::class, 'getProductBag']);
Route::get('/product/bluss', [ProductController::class, 'getProductBluss']);
Route::get('/product/dress', [ProductController::class, 'getProductDress']);
Route::get('/product/heels', [ProductController::class, 'getProductHeels']);
Route::get('/product/make-up', [ProductController::class, 'getProductMakeup']);
Route::get('/product/rok', [ProductController::class, 'getProductRok']);

route::get('/login', [authController::class, 'getLogin']);


route::get('/upload', [productController::class, 'getUpload']);
route::post('/upload/post', [productController::class, 'postUpload']);