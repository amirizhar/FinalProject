<?php

use App\Http\Controllers\createProject;
use App\Http\Controllers\fetchProject;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\updateProject;

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

Route::get("/",[homeControl::class,"index"]);
Route::get("/redirect",[homeControl::class,"redirectFunct"]);

Route::get("/addProject",[createProject::class,"index"]);
Route::POST("/createProject",[createProject::class,"addProject"]);

Route::get("/showCoordinator",[fetchProject::class,"showCoordinator"]);
Route::get("/showLecturer",[fetchProject::class,"showLecturer"]);

Route::get("updateProject",[updateProject::class,"displayProject"]);
Route::get("upd/{id}",[updateProject::class,"displayProject"]);
Route::get("/edit",[updateProject::class,"update"]);