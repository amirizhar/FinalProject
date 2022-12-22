<?php

use App\Http\Controllers\createProject;
use App\Http\Controllers\fetchProject;
use App\Http\Controllers\fetchUser;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\updateProject;
use App\Http\Controllers\deleteProject;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// ----------------------homeControl--------------------------
Route::get("/RegisterLecturer", [homeControl::class, "register"]);
Route::POST("/addLecturer", [homeControl::class, "addLecturer"]);
Route::get("/", [homeControl::class, "index"]);
Route::get("/redirect", [homeControl::class, "redirectFunct"]);

// ----------------------createProject--------------------------
Route::get("/addProject", [createProject::class, "index"]);
Route::POST("/createProject", [createProject::class, "addProject"]);

// ----------------------fetchProject--------------------------
Route::get("/showCoordinator", [fetchProject::class, "showCoordinator"]);
Route::get("/showLecturer", [fetchProject::class, "showLecturer"]);
Route::get("/displayProject", [fetchProject::class, "displayProject"]);

// ----------------------updateProject--------------------------
Route::get("/updateProject", [updateProject::class, "displayProject"]);
Route::get("/upd/{id}", [updateProject::class, "showProject"]);
Route::POST("edit", [updateProject::class, "update"]);

// ----------------------deleteProject--------------------------
Route::get("delProject/{id}", [deleteProject::class, "deleteProject"]);


// ----------------------homeControl--------------------------
Route::get("/deleteLecturer", [fetchUser::class, "displayDeleteLecturer"]);
Route::get("del/{id}", [fetchUser::class, "deleteLecturer"]);
