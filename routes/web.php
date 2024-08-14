<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\QouteController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// Admin routes
Route::get('/admin',[UserController::class,'index'])->name('admin');
Route::get('/admin/login',function(){
    return view('admin.login');
})->name('loginPage');

Route::post('/admin/index',[UserController::class,'login'])->name('login');
Route::get('/admin/logout',[UserController::class,'logout'])->name('logout');

Route::resource('/blog',BlogController::class);
// Client routes
Route::get('/', function () {
    return view('index');
})->name('welcome');
Route::get('/about',function () {
    return view('about');
})->name('aboutPage');
Route::get('/service', function () {
    return view('service');
})->name('servicePage');
Route::get('/terms-conditions',function () {
    return view('terms');
})->name('termsPage');
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacyPage');
Route::get('/contact', function () {
    return view('contact');
})->name('contactPage');

Route::resource('/estimatecomplete',QouteController::class);
