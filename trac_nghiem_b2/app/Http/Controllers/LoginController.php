<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
class LoginController extends Controller
{
    //
     public function getLogin(){
        return view('backend.login.login');
    }

    public function postLogin(Request $request){
        
        $arr = ['email' => $request->email, 'password' => $request->password];
        if(Auth::attempt($arr)){   
            if(Auth::user()->level == 1){
                return redirect('backend/dethi');
            }     
            else
            {
                return redirect('/');
            }   
        }
        else
        {
            return back()->with('thongbao','Tài khoản hoặc mật khẩu chưa đúng !');
        }
        }
      
    
}