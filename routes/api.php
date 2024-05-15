<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\Examcontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post("/register",[RegisterController::class,'register']);
Route::post("/login",[loginController::class,'login']);
Route::post("/logout",[RegisterController::class,'logout']);
Route::post("/createExam",[ExamController::class, 'createExam']);
Route::get("/readExam/{examid}",[ExamController::class, 'readExam']);