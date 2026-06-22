<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get("/", [HomeController::class,"index"])->name("index");
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/investment', [HomeController::class,'investment'])->name('investment');
Route::get('/insight', [HomeController::class,'insight'])->name('insight');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/consultation',[HomeController::class,'consultation'])->name('consultation');