<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // Xử lý logic đăng nhập ở đây (nếu cần)

        // Trả về view 'index.blade.php'
        return view('index');
    }

}
