<?php

namespace App\Imports;

use App\CauHoi;
use Maatwebsite\Excel\Concerns\ToModel;

class Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CauHoi([
            'noidung' => $row[0],
            'idloaicauhoi' => $row[1],
            'dapandung' => $row[2],
            'madethi' =>$row[3],
        ]);
    }
}
