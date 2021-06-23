<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHoi;
use App\LoaiCauHoi;
use App\DeThi;
use App\Imports\Import;
use App\Exports\Export;
use Excel;

class CauHoiController extends Controller
{
    //
    public function getCauHoi()
    {
    	$cauhoi['cauhoi'] = CauHoi::orderBy('id','asc')->paginate(10);
    
    	return view('backend.cauhoi.cauhoi',$cauhoi);
    }

    public function getThemCauHoi()
    {
      $dethi['dethi'] = DeThi::all();
      $loaicauhoi['loaicauhoi'] = LoaiCauHoi::all();
      
    	//$cauhoi['cauhoi'] = CauHoi::all();
    	return view('backend.cauhoi.them_cauhoi',$loaicauhoi,$dethi);
    }

    public function postThemCauHoi(Request $request)
    {
    	$cauhoi = new CauHoi;
    	$file = $request->image->getClientOriginalName();
    	$cauhoi->noidung = $file;
    	$cauhoi->dapandung = $request->dapandung;
    	$cauhoi->madethi = $request->madethi;
    	$cauhoi->idloaicauhoi = $request->loaicauhoi;
    	$request->file('image')->move('back/img',$file);
    	$cauhoi->save();
    	return redirect('backend/cauhoi')->with('thongbao','Thêm thành công');;
    }

    public function getSuaCauHoi($id)
    {
      return view('backend.cauhoi.sua_cauhoi', [
          'loaicauhoi' => LoaiCauHoi::all(),
          'dethi' => DeThi::all(),
          'cauhoi' => CauHoi::find($id),
          ]);

    }

    public function postSuaCauHoi(Request $request,$id)
    {
      $cauhoi = CauHoi::find($id);
      $file = $request->image->getClientOriginalName();
      $cauhoi->noidung = $file;
      $cauhoi->dapandung = $request->dapandung;
      $cauhoi->madethi = $request->madethi;
      $cauhoi->idloaicauhoi = $request->loaicauhoi;
      $request->file('image')->move('back/img',$file);
      $cauhoi->save();

       return redirect('backend/cauhoi')->with('thongbao2','Sửa thành công');
    }

    public function getXoaCauHoi($id)
    {
      $dethi = CauHoi::find($id);
      $dethi->delete();
      return redirect('backend/cauhoi')->with('thongbao1','Xóa thành công !');
    }

     public function export_csv(){
        return Excel::download(new Export , 'TestCauHoi.xlsx');
    }

    public function import_csv(Request $request){
        $path = $request->file('file')->getRealPath();
        Excel::import(new Import, $path);
        return back();
    }

}
