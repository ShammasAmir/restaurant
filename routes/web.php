<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get("/",[HomeController::class,"index"]);

Route::get("/redirects",[HomeController::class,"redirects"]);

Route::get("/users",[AdminController::class,"user"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);

Route::get("/foods",[AdminController::class,"food"]);

Route::post("/createfood",[AdminController::class,"createfood"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
