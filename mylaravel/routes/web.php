<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/mycontroller', 
[MyController::class, 'index']); // ใช้แสดงฟอร์ม

Route::post('/mycontroller', 
[MyController::class, 'myfunction']); // ส่งข้อมูลจากฟอร์ม