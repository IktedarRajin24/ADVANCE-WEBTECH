<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

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

Route::get('/home', [PagesController::class, 'home']);

Route::get('/products', [PagesController::class, 'products']);

Route::get('/ourTeam', [PagesController::class, 'ourTeam']);

Route::get('/aboutUs', [PagesController::class, 'aboutUs']);

Route::get('/contactUs', [PagesController::class, 'contactUs']);

Route::get('/user/{id}', function($id){
    return "<b>The passed id is ".$id."</b>";
});

Route::get('/studentList', [StudentController::class, 'studentList']);