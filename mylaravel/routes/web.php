<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;


Route::get('/login',
    [LoginController::class, 'index']);
Route::get('/register',
    [RegisterController::class, 'index']);
Route::get('/home',
    [HomeController::class, 'index']);
Route::get('/',function () {
    return view('home');});

Route::get('/mycontroller',
[MyController::class, 'index']); // ใช้แสดงฟอร์ม

Route::post('/mycontroller',
[MyController::class, 'myfunction']); // ส่งข้อมูลจากฟอร์ม

Route::get('/hello/{id?}',
function ($val="") {
    return "<h1>Hello world $val</h1>";
});

Route::get('/404', function() {
    abort(404);
});

Route::get('/500', function() {
    abort(500);
});
