<?php

use App\Http\Controllers\CartController;
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

Route::get("/reservations",[AdminController::class,"reservation"])->name("reservations");

Route::get("/deletereservation/{id}",[AdminController::class,"deletereservation"]);

Route::get("/chefs",[AdminController::class,"chef"])->name("chefs");

Route::post("/createchef",[AdminController::class,"createchef"]);

Route::get("/deletechef/{id}",[AdminController::class,"deletechef"]);

Route::get("/editchef/{id}",[AdminController::class,"editchef"]);

Route::post("/updatechef/{id}",[AdminController::class,"updatechef"]);

Route::post("/addtocart/{id}",[HomeController::class,"addtocart"]);

Route::get("/showcart/{id}",[HomeController::class,"showcart"]);

Route::get("/deletecartitem/{id}",[HomeController::class,"deletecartitem"]);

Route::post("/confirmorder",[HomeController::class,"confirmorder"]);

Route::get("/orders",[AdminController::class,"order"])->name("orders");

Route::get("/deleteorder/{id}",[AdminController::class,"deleteorder"]);

Route::get("/search",[AdminController::class,"search"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
