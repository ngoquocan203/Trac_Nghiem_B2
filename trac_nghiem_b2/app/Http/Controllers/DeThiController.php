<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DeThi;

class DeThiController extends Controller
{
    //
    public function getDeThi()
    {
    	$dethi['dethi'] = DeThi::orderBy('id','asc')->paginate(6);
    	return view('backend.dethi.dethi',$dethi);
    }

    public function postThemDeThi(Request $request)
    {
    	$this->validate($request,
        [
            'tendethi'=>'required|min:3|max:20|unique:Dethi,tendethi'
        ],
        [
            'tendethi.required'=>'Bận chưa nhập danh mục cần thêm',
            'tendethi.min'=>'Tên đề thi phải từ 3 kí tự trở lên',
            'tendethi.max'=>'Tên đề thi phải từ 20 kí tự trở xuống',
            'tendethi.unique'=>'Tên đề thi đã tồn tại'
        ]);

    	$dethi = new DeThi;
    	$dethi->tendethi = $request->tendethi;
    	$dethi->save();

    	return redirect('backend/dethi')->with('thongbao','Thêm mới thành công');
    }

    public function getSuaDeThi($id)
    {
    	 $dethi['dethi'] =  DeThi::find($id);

        return view('backend.dethi.sua_dethi',$dethi);
    }

    public function postSuaDeThi(Request $request, $id)
    {
    	$dethi = DeThi::find($id);
        $this->validate($request,
        [
            'name'=>'required|min:3|max:20'
        ],
        [
            'name.required'=>'Bận chưa nhập danh mục cần thêm',
            'name.min'=>'Tên danh mục phải từ 3 kí tự trở lên',
            'name.max'=>'Tên danh mục phải từ 20 kí tự trở xuống',
        ]);
       $dethi->tendethi = $request->name;
       $dethi->save();

       return redirect('backend/dethi');//->with('thongbao2','Sửa thành công');
    }

    public function getXoaDeThi($id)
    {
    	$dethi = Dethi::find($id);
    	$dethi->delete();
    	return redirect('backend/dethi')->with('thongbao1','Xóa thành công !');
    }
}
