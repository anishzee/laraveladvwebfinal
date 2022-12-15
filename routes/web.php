<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;
use App\Http\Controllers\svControl;

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
Route::get("/lectinfo",[adminControl::class,"viewlecturers"]); //go to lectinfo page
Route::get("/del/{id}",[adminControl::class,"deleteit"]); //delete lecturer info

Route::get("/projinfo",[svControl::class,"viewprojectinfo"]); //go to projectinfo page
Route::get("upd/{id}",[svControl::class,"updateit"]); //update the project 
Route::post("/update",[svControl::class,"updateproject"]); //update data to DB


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
