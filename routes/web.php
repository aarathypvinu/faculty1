<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BusController;

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

route::get("/",[FacultyController::class,'create']);
route::post("/facultyread",[FacultyController::class,'store']);
route::get("/student",[StudentController::class,'create']);
route::post("/studentread",[StudentController::class,'store']);
route::get("/bus",[BusController::class,'create']);
route::post("/busread",[BusController::class,'store']);
