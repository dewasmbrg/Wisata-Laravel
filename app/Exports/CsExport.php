<?php

namespace App\Exports;

use App\Models\Cs;
use Maatwebsite\Excel\Concerns\FromCollection;

class CsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Cs::all();  
    }
}
