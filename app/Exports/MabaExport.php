<?php

namespace App\Exports;

use App\Models\maba;
use Maatwebsite\Excel\Concerns\FromCollection;

class MabaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return maba::all();
    }
}
