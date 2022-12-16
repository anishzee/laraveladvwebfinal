<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;
use App\Http\Controllers\adminSVcontrol;
//use App\Http\Controllers\svControl;

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

//Route::get('/home', function () {
//    return view('welcome');
//});

Route::get("/",[homeControl::class,"viewhomepage"]);
Route::get("/redirectusers",[homeControl::class,"userspagefunct"]); //to get data from controller (separate page ikut the user type)

Route::get("/newproj",[adminControl::class,"addnewproj"]); //go to newproj page
Route::post("/addproj",[adminControl::class,"writedatatoproject"]); //add data to DB

Route::get("/allproject",[adminControl::class,"viewproj"]); //get data all project
Route::get("/del/{id}",[adminControl::class,"deleteit"]); //delete project 

Route::get("/lectinfo",[adminControl::class,"viewlecturers"]); //go to lectinfo page

Route::get("/svproj",[adminSVcontrol::class,"svviewprojinfo"]); //get data all project
Route::get("upd/{id}",[adminSVcontrol::class,"updateitsv"]); //update the project 
Route::post("/update",[adminSVcontrol::class,"updateprojectsv"]); //update data to DB

Route::get("/updtest",[homeControl::class,"viewupd"]); 

Route::get("/examineeproject",[adminControl::class,"EXviewprojinfo"]); //get data all project for examinee


//Route::get("/projinfo",[svControl::class,"viewprojectinfo"]); //go to projectinfo page
//Route::get("upd/{id}",[svControl::class,"updateit"]); //update the project 
//Route::post("/update",[svControl::class,"updateproject"]); //update data to DB


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
