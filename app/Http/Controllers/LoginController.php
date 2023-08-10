<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;
use App\Http\Requests\RuleSignup;
use App\Models\UserTb;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {      
        // Trả về view 'login.blade.php'
        return view('login');
    }
    public function home (){
        
    }

    public function checkLogin(Request $request){


        $user = UserTb::where('email','=', $request->input('email'))->first();


        if($user && Hash::check($request->input('password'), $user->password))
        {
            //tạo section
        $request->session()->put('user',$user->email);
            return redirect()->to(".");
        }
        else {
            return back()->withErrors([
                'loi' => 'Thông tin đăng nhập chưa đúng'
            ]);
        }
    }

        //ham dang ky
        public function signup(RuleSignup $request){



            // dd($request -> input());
            // validate input data
             $validated = $request->validate([
                 'name' => 'required',
                 'email' => 'required|email',
                 'password' => 'required|min:8',
             ]);

             UserTb::create([
                "name"=> $request->input('name'),
                "email" => $request->input('email'),
                "password" => Hash::make($request->input('password'))
            ]);
    
    
            // sau khi đăng ký xong, chuyển sang trang login
            return redirect()->to("./login");
         }
         //ham dang test
         public function test(){
            //test lay du lieu user
           // $user = UserTb::all();// lay tat ca du lieu cua UserTb
            $user = UserTb::orderBy('id','desc')->get();
            return view('test',[// them dau , va truyen vao du lieu []
                "user" => $user
            ]);
         }
         
         public function logout(Request $request){
        
        // xóa session
        $request->session()->flush();

        // quay trở về trang chủ
        return redirect()->to("./");


         }
     
}
