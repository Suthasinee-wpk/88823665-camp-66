<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Checklogin;
use App\Http\Controllers\ProductController;


Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/user/{id}', [UserController::class, 'edit']);
    Route::put('/user', [UserController::class, 'edit_action']);
    Route::delete('user', [UserController::class, 'delete']);
    Route::get('/product', [ProductController::class, 'index']);
    Route::post('/product', [ProductController::class, 'add_product']);
});

Route::get('/',
    [HomeController::class, 'index'])->middleware([CheckLogin::class]);
Route::get(
    '/login',
    [LoginController::class, 'index']
);
Route::post(
    '/login',
    [LoginController::class, 'login']
);
Route::get(
    '/logout',
    function () {
        session()->forget('user');
        session()->flush();
        return redirect('/login');
    }
);


Route::get('/register',
    [RegisterController::class, 'index']);
Route::get('/home',
    [HomeController::class, 'index']);
Route::get('/',function () {
    return view('home');});
Route::post('/register',
    [RegisterController::class, 'create']);

Route::get('/user/{id?}',
    [UserController::class, 'edit']);
Route::put('/user',
    [UserController::class, 'edit_action']);
Route::delete('/user',
    [UserController::class, 'delete']);

Route::get('/mycontroller',
[MyController::class, 'index']); // ใช้แสดงฟอร์ม

Route::post('/mycontroller',
[MyController::class, 'myfunction']); // ส่งข้อมูลจากฟอร์ม

Route::get('/hello/{id?}',
function ($val="") {
    return "<h1>Hello world $val</h1>";
});

// Route::get('/404', function() {
//     abort(404);
// });

// Route::get('/500', function() {
//     abort(500);
// });
