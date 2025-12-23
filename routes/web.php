<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\ProductController;
use App\Models\Employer;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::view("/", "welcome", ["contact" => [
    "phone" => 100986,
    "name" => "Marwan",
    "email" => "Marwan@gmail.com"
]]);
Route::get("/employers", function () {
    return view("employers", [
        "employers" => Employer::all()
    ]);
});


Route::resource("jobs", JobController::class);

Route::resource("products", ProductController::class);


Route::view("/sign-up", "regiteration.sign-up");
Route::view("/about", "about");