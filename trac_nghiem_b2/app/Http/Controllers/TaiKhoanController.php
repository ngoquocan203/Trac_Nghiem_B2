<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class TaiKhoanController extends Controller
{
    //
    public function getTaiKhoan()
    {
    	$user['user'] = User::orderBy('id','asc')->paginate(6);
    	return view('backend.taikhoan.taikhoan',$user);
    }

    public function getSuaTaiKhoan($id)
    {
    	$user['user'] = User::find($id);
      return view('backend.taikhoan.sua_taikhoan',$user);
    }

    public function postSuaTaiKhoan(Request $request,$id)
    {
      
       $this->validate($request,
            [
                'repassword' => 'required|same:password'
            ],
            [  
                'repassword.require' => 'Bạn chưa nhập lại mật khẩu',
                'repassword.same' => 'Mật khẩu nhập lại chưa khớp',
                
            ]);
       $user = User::find($id);
       $user->name = $request->fullname;
       $user->email = $request->email;
       $user->password = bcrypt($request->password);
       $user->level = $request->level;

       $user->save();
       return redirect('backend/taikhoan')->with('thongbao','Sửa thành công');
    }

     public function getXoaTaiKhoan($id)
    {
      //if(Auth::id()==$id){
     //   return redirect()->back()->with('thongbao1','không được xóa chính mình !');
     // }
      $user = User::find($id);
      $user->delete();
      return redirect()->back()->with('thongbao1','Xóa thành công!');
    }
}
