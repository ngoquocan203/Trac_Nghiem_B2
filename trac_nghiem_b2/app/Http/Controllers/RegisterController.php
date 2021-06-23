<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class RegisterController extends Controller
{
    //
     public function getRegister()
    {
    	return view('fontend/register');
    }

    public function postRegister(Request $request)
    {
    	 // Kiểm tra dữ liệu vào
		//$allRequest  = $request->all();	
		$this->validate($request,
	        [
	           
				'email' => 'required|string|email|max:255|unique:users,email',
				'password' => 'required|min:6',
				'repassword' => 'required|same:password'
	        ],
	        [

				'email.required' => 'Email là trường bắt buộc',
				'email.email' => 'Email không đúng định dạng',
				'email.max' => 'Email không quá 255 ký tự',
				'email.unique' => 'Email đã tồn tại',

				'password.required' => 'Mật khẩu là trường bắt buộc',
				'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',

				'repassword.require' => 'Bạn chưa nhập lại mật khẩu',
				'repassword.same' => 'Mật khẩu nhập lại chưa khớp',
				
	        ]);
		$users = new User;
		
		$users->email = $request->email;
		$users->password = bcrypt($request->password);
		$users->level = 0;
		$users->save();

		return redirect('register')->with('thongbao1','Đăng kí thành công');
	}



	public function getEditAcc()
	{
		$user = Auth::user();
		return view('fontend/editacc',$user);
	}

	public function postEditAcc(Request $request)
	{
		 $this->validate($request,
            [
            	'password' => 'required|min:6',
                'repassword' => 'required|same:password'
            ],
            [  
            	'password.required' => 'Mật khẩu là trường bắt buộc',
				'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',

                'repassword.require' => 'Bạn chưa nhập lại mật khẩu',
                'repassword.same' => 'Mật khẩu nhập lại chưa khớp',
                
            ]);
	    $users = Auth::user();
        $users->name = $request->fullname;  
       	$users->password = bcrypt($request->password);

       $users->save();
       return back()->with('thongbao','Sửa thành công !');
	}
}
