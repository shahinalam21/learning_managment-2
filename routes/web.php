<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\LessionController;
use App\Http\Controllers\Admin\CategoriController;



Route::get('/',[HomeController::class, 'UserHome']);
Route::get('/course/{id}',[HomeController::class, 'show']);




Auth::routes(
   
);

Route::get('/home',[HomeController::class, 'index'])->name('home');


Route::get('/course',[CourseController::class,'index']);
Route::get('/course/create',[CourseController::class,'create']);
Route::post('/course/store',[CourseController::class,'store']);
Route::get('/course/show/{id}',[CourseController::class,'show']);
Route::get('/course/edit/{id}',[CourseController::class,'edit']);
Route::post('/course/update/{id}',[CourseController::class,'update']);
Route::get('/course/destroy/{id}',[CourseController::class,'destroy']);

Route::get('/lession',[LessionController::class,'index']);
Route::get('/lession/create',[LessionController::class,'create']);
Route::post('/lession/store',[LessionController::class,'store']);
Route::get('/lession/show/{id}',[LessionController::class,'show']);
Route::get('/lession/edit/{id}',[LessionController::class,'edit']);
Route::post('/lession/update/{id}',[LessionController::class,'update']);
Route::get('/lession/destroy/{id}',[LessionController::class,'destroy']);

Route::get('/categori',[CategoriController::class,'index']);
Route::get('/categori/create',[CategoriController::class,'create']);
Route::post('/categori/store',[CategoriController::class,'store']);
Route::get('/categori/destroy/{id}',[CategoriController::class,'destroy']);


