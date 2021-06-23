<?php

namespace App\Exports;

use App\CauHoi;
use Maatwebsite\Excel\Concerns\FromCollection;

class Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CauHoi::all();
    }
}
