<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeThi extends Model
{
    //
    protected $table = "dethi";
    protected $fillable = [
        'id', 'tendethi',];
    public function CauHoi()
    {
    	return $this->hasMany('App\CauHoi','madethi','id');
    }
}
