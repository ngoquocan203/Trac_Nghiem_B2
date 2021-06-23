<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DeThi;
use App\LoaiCauHoi;
use App\CauHoi;
use App\User;
class AdminController extends Controller
{
	public function getTrangAdmin()
	{
        return view('backend.index',[
        	'dethi' => DeThi::count(),
          	'loaicauhoi' => LoaiCauHoi::count(),
          	'cauhoi' => CauHoi::count(),
          	'user' => User::count(),
      ]);
	}
}
