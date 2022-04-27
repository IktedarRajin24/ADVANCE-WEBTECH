<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;

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

Route::get('/products', [PagesController::class, 'products'])->name('products');

Route::get('/ourTeam', [PagesController::class, 'ourTeam'])->name('ourTeam');

Route::get('/aboutUs', [PagesController::class, 'aboutUs'])->name('aboutUs');

Route::get('/contactUs', [PagesController::class, 'contactUs'])->name('contactUs');

Route::get('/user/{id}', function($id){
    return "<b>The passed id is ".$id."</b>";
});

Route::get('/studentList', [StudentController::class, 'studentList'])->name('studentList');
Route::get('/studentEdit/{id}/{name}',[StudentController::class,'studentEdit'])->name('studentEdit');
Route::post('/studentEdit',[StudentController::class,'studentEditSubmitted'])->name('studentEdit');

Route::get('/studentDelete/{id}/{name}',[StudentController::class,'studentDelete'])->name('studentDelete');

Route::get('/studentCreate', [StudentController::class, 'studentCreate'])->name('studentCreate');
Route::post('/studentCreate', [StudentController::class, 'studentCreatesubmitted'])->name('studentCreate');
Route::get('/teacherCreate', [TeacherController::class, 'teacherCreate'])->name('teacherCreate');
Route::post('/teacherCreate', [TeacherController::class, 'teacherCreatesubmitted'])->name('teacherCreate');

Route::get('/teacherList', [TeacherController::class, 'teacherList'])->name('teacherList');
Route::get('/teacherDelete/{id}/{name}',[TeacherController::class,'teacherDelete'])->name('teacherDelete');

Route::get('/login', [StudentController::class, 'login'])->name('login');
Route::post('/login', [StudentController::class, 'loginsubmitted'])->name('login');

Route::get('/contact', [StudentController::class, 'contact'])->name('contact');
Route::post('/contact', [StudentController::class, 'contactsubmitted'])->name('contact');

Route::get('/teacher/courses/{id}',[TeacherController::class,'teacherCourses'])->name('teacher.courses');

Route::get('/courses',[CourseController::class,'courseTeacher'])->name('teacher.courses'); 

Route::get('/login',[LoginController::class,'login'])->name('login');
