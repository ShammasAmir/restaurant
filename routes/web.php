<?php

use App\Http\Controllers\ReserveController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get("/",[HomeController::class,"index"]);

Route::get("/redirects",[HomeController::class,"redirects"]);

Route::get("/users",[AdminController::class,"user"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

Route::get("/foods",[AdminController::class,"food"])->name("foods");

Route::post("/createfood",[AdminController::class,"createfood"]);

Route::get("/deletefood/{id}",[AdminController::class,"deletefood"]);

Route::get("/editfood/{id}",[AdminController::class,"editfood"]);

Route::post("/updatefood/{id}",[AdminController::class,"updatefood"]);

Route::post("/reserve",[ReserveController::class,"reserve"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
