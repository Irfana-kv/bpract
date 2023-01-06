<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
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
    return view('welcome');
});
Route::get('login',[LoginController::class,'login']);
Route::post('login',[LoginController::class,'loginSubmit']);

Route::get('school',[SchoolController::class,'schoolList']);
Route::get('school/create',[SchoolController::class,'schoolCreate']);
Route::post('school/create',[SchoolController::class,'schoolStore']);
Route::get('school/edit/{id}',[SchoolController::class,'schoolEdit']);
Route::post('school/edit/{id?}',[SchoolController::class,'schoolUpdate']);
Route::get('school/view/{id}',[SchoolController::class,'schoolView']);
Route::get('school/delete/{id}',[SchoolController::class,'schoolDelete']);


Route::get('student',[StudentController::class,'studentList']);
Route::get('student/create',[StudentController::class,'studentCreate']);
Route::post('student/create',[StudentController::class,'studentStore']);
Route::get('student/edit/{id}',[StudentController::class,'studentEdit']);
Route::post('student/edit/{id?}',[StudentController::class,'studentUpdate']);
Route::get('student/view/{id}',[StudentController::class,'studentView']);
Route::get('student/delete/{id}',[StudentController::class,'studentDelete']);
