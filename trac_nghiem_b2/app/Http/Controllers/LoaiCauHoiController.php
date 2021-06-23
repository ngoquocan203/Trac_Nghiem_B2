<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiCauHoi;

class LoaiCauHoiController extends Controller
{
    //
    public function getLoaiCauHoi()
    {
    	$loaicauhoi['loaicauhoi'] = LoaiCauHoi::all();
    	return view('backend.loaicauhoi.loaicauhoi',$loaicauhoi);
    }

    public function postThemLoaiCauHoi(Request $request)
    {
    	$loaicauhoi = new LoaiCauHoi;
    	$loaicauhoi->loaicauhoi = $request->loaicauhoi;
    	$loaicauhoi->save();

    	return redirect('backend/loaicauhoi')->with('thongbao','Thêm mới thành công');
    }

    public function getSuaLoaiCauHoi($id)
    {
    	$loaicauhoi['loaicauhoi'] = LoaiCauHoi::find($id);
    	return view('backend.loaicauhoi.sua_loaicauhoi',$loaicauhoi);
    }

    public function postSuaLoaiCauHoi(Request $request, $id)
    {
    	$loaicauhoi = LoaiCauHoi::find($id);
    	$loaicauhoi->loaicauhoi = $request->name;
    	$loaicauhoi->save();
    	return redirect('backend/loaicauhoi');
    }

    public function getXoaLoaiCauHoi($id)
    {
    	$loaicauhoi = LoaiCauHoi::find($id);
    	$loaicauhoi->delete();
    	return redirect('backend/loaicauhoi');
    }
}
