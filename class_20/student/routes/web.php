<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'welcome']);

Route::get('/about', [StudentController::class, 'about']); 

Route::get('/contact', [StudentController::class, 'contact']);

Route::get('/subjects', [StudentController::class, 'subjects']);


Route::get('/teachers', [TeacherController::class, 'index']);