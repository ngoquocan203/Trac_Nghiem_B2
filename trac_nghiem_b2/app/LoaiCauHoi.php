<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiCauHoi extends Model
{
    //
    protected $table = "loaicauhoi";
    protected $fillable = [
        'id', 'loaicauhoi',];
    public function CauHoi()
    {
    	return $this->hasMany('App\CauHoi','idloaicauhoi','id');
    }
}
