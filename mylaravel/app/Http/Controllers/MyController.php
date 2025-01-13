<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MyController extends Controller {
    public function index() {
        return view('myview');
    }

    public function myfunction(Request $req) {             // ถูกเรียกเมื่อผู้ใช้กด submit
        $table = $req->input('multiplicationTable');        // รับค่าจากฟอร์ม
        return view('myview', ['table' => $table]);  // ส่งข้อมูลไปแสดงผลใน View
    }
}