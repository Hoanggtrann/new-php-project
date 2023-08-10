<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index()
    {
        // Xử lý logic đăng nhập ở đây (nếu cần)

        // Trả về view 'signup.blade.php'
        return view('signup');
    }

}
