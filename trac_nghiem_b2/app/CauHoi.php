<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CauHoi extends Model
{
    //
    protected $table = "cauhoi";
    protected $fillable = [
        'noidung', 'dapandung','idloaicauhoi','madethi'];
     public function DeThi()
    {
    	return $this->belongsTo('App\DeThi','madethi','id');
    }

     public function LoaiCauHoi()
    {
    	return $this->belongsTo('App\LoaiCauHoi','idloaicauhoi','id');
    }
}
