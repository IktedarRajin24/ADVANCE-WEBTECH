<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DeliverymanController;

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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/login', [loginController::class, 'loginsubmitted'])->name('login');
Route::get('/signUp', [SignupController::class, 'signUp'])->name('signUp');
Route::post('/signUp', [SignupController::class, 'signUpSubmitted'])->name('signUp');
Route::get('/logout',[loginController::class,'logout'])->name('logout');


Route::get('/dashboard',[DeliverymanController::class,'dashboard'])->name('dashboard')->middleware('verifyUser');
Route::get('/deliverymanEdit/{id}/{name}',[DeliverymanController::class,'deliverymanEdit'])->name('deliverymanEdit')->middleware('verifyUser');
Route::get('/deliverymanEdit',[DeliverymanController::class,'deliverymanEditSubmitted'])->name('deliverymanEdit')->middleware('verifyUser');



Route::get('/productlist', [ProductController::class, 'productlist'])->name('productlist');
Route::get('/addtocart/{id}',[ProductController::class,'addtocart'])->name('product.addtocart');
Route::get('/emptycart',[ProductController::class,'emptycart'])->name('product.emptycart');
Route::get('/cart',[ProductController::class,'mycart'])->name('product.mycart');



Route::get('/orderDetails',[OrderController::class,'orderDetails'])->name('orderDetails')->middleware('verifyUser');
Route::get('/orderConfirm/{id}',[OrderController::class,'orderConfirm'])->name('orderConfirm')->middleware('verifyUser');



